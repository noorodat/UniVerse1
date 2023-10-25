<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Srmklive\PayPal\Services\PayPal as PayPalClient;
use App\Models\Course;
use App\Models\User;
use App\Models\CourseStudent;
use App\Models\Instructor;

class PaymentController extends Controller
{
    public function buyCourse(Request $request)
    {

        session()->flash('course_id', $request->input('courseID'));
        session()->flash('instructor_id', $request->input('instructorID'));
        session()->flash('student_id', $request->input('studentID'));


        $provider = new PayPalClient;
        $provider->setApiCredentials(config('paypal'));
        $paypalToken = $provider->getAccessToken();

        $response = $provider->createOrder([
            "intent" => "CAPTURE",
            "application_context" => [
                "return_url" => route('paypal_success'),
                "cancel_url" => route('paypal_cancel')
            ],
            "purchase_units" => [
                [
                    "amount" => [
                        "currency_code" => "USD",
                        "value" => $request->coursePrice,
                    ]
                ]
            ]
        ]);

        if (isset($response['id']) && $response['id'] != null) {
            foreach ($response['links'] as $link) {
                if ($link['rel'] === 'approve') {
                    return redirect()->away($link['href']);
                }
            }
        } else {
            return redirect()->route('paypal_cancel');
        }
    }

    public function success(Request $request)
    {
        $provider = new PayPalClient;
        $provider->setApiCredentials(config('paypal'));
        $paypalToken = $provider->getAccessToken();
        $response = $provider->capturePaymentOrder($request->token);


        if (isset($response['status']) && $response['status'] == 'COMPLETED') {
            // buy the course if the paymnet is successful
            try {
                $student_id = session('student_id');
                $course_id = session('course_id');
                $instructor_id = session('instructor_id');

                if (CourseStudent::where('course_id', $course_id)->where('student_id', $student_id)->exists()) {
                    return redirect()->back()->with('error', 'You already have this course.');
                }
                CourseStudent::create([
                    'course_id' => $course_id,
                    'student_id' => $student_id,
                    'instructor_id' => $instructor_id,
                ]);

                $instructor = Instructor::findOrFail($instructor_id);
                $course = Course::findOrFail($course_id);
                $instructor->earnings += $course->price;
                $instructor->save();
                return redirect()->route('go-success');
            } catch (\Exception $e) {
                return redirect()->back();
            }
        } else {
            return redirect()->route('go-failure');
        }
    }

    public function cancel()
    {
        return "Payment is cancelled!";
    }
}

// try {

//     if (CourseStudent::where('course_id', $request->input('courseID'))->where('student_id', $request->input('studentID'))->exists()) {
//         return redirect()->back()->with('error', 'You already have this course.');
//     }
//     CourseStudent::create([
//         'course_id' => $request->input('courseID'),
//         'student_id' => $request->input('studentID'),
//         'instructor_id' => $request->input('instructorID'),
//     ]);

//     $instructor = Instructor::findOrFail($request->input('instructorID'));
//     $course = Course::findOrFail($request->input('courseID'));
//     $instructor->earnings += $course->price;
//     $instructor->save();
//     return redirect()->back();
// } catch (\Exception $e) {
//     return redirect()->back();
// }