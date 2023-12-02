<?php

use Illuminate\Http\Request;
use Illuminate\Validation\Rules;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;

function uploadFile(Request $request, $inputName, $path, $type)
{
    if ($request->hasFile($inputName)) {

        $file = $request->{$inputName};
        $ext = $file->getClientOriginalExtension();
        $fileName = $type . '_' . uniqid() . '.' . $ext;
        $file->move(public_path($path), $fileName);

        if($type == 'video') {
            $duration = getVideoDuration(public_path($path . "/" . $fileName));
            return [
                'videoName' => $path . "/" . $fileName,
                'duration' => $duration
            ];
        }

        return $path . "/" . $fileName;
    }
}

function updateFile(Request $request, $inputName, $path, $oldPath = null, $type)
{
    if ($request->hasFile($inputName)) {
        deleteFile($oldPath);
        $file = $request->{$inputName};
        $ext = $file->getClientOriginalExtension();
        $fileName = $type . '_' . uniqid() . '.' . $ext;
        $file->move(public_path($path), $fileName);

        if($type == 'video') {
            $duration = getVideoDuration(public_path($path . "/" . $fileName));
            return [
                'videoName' => $path . "/" . $fileName,
                'duration' => $duration
            ];
        }

        return $path . "/" . $fileName;
    }
}

function deleteFile(string $path)
{
    if($path !== 'images/defaultUserImage.png' && $path !== 'uploads/videos/preview.mp4') {
        if (File::exists(public_path($path))) {
            File::delete(public_path($path));
        }
    }
}

function getVideoDuration($videoPath)
{
    $getID3 = new \getID3;
    $file = $getID3->analyze($videoPath);

    if (isset($file['playtime_seconds'])) {
        $playtime_seconds = $file['playtime_seconds'];

        // Format the duration as "00:00"
        $formattedDuration = gmdate('i:s', $playtime_seconds);
        
        return $formattedDuration;
    } else {
        return 'N/A';
    }
}

function uploadUserImage(Request $request)
{

    if(isset(Auth::user()->id)) {
        $userID = Auth::user()->id;
        $user = User::find($userID);
    }

    if (isset($user)) {
        $imageName = $user->image;
    } else {
        $imageName = 'defaultUserImage.png';
    }

    if (isset($user)) {
        $oldImageName = $user->image;

        if ($oldImageName !== 'defaultUserImage.png' && file_exists(public_path('images/' . $oldImageName))) {
            unlink(public_path('images/' . $oldImageName));
        }
    }

    if ($request->hasFile('image')) {
        $image = $request->file('image');
        $imageName = time() . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('images'), $imageName);
    }
    return $imageName;
}

function validateAddStudentInputs(Request $request)
{
    $request->validate([
        'name' => ['required', 'string', 'max:255'],
        'email' => [
            'required',
            'string',
            'email',
            'max:255',
            'unique:' . User::class,
            function ($attribute, $value, $fail) {
                // Define the allowed domain ending
                $allowedDomainEnding = 'edu.jo';

                // Extract the email domain and check if it ends with 'edu.jo'
                $emailDomain = strtolower(substr(strrchr($value, "@"), 1));
                if (!str_ends_with($emailDomain, $allowedDomainEnding)) {
                    $fail('Registration is limited to university students in Jordan');
                }
            },
        ],
        'password' => ['required', 'confirmed', Rules\Password::defaults()],
        'major' => 'required',
        'phone' => 'required|regex:/^\d{10}$/',
    ]);
}

