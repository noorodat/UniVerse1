@extends('admin-layouts.master')


@section('content')

@section('title', 'Edit-Student')


<div class="content-body">
    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-12">
                <div class="card">
                    <div class="card-header">
                        <h5 class="mb-0">Student Details</h5>
                    </div>
					{{-- Show success message --}}
                    <div class="card-body">
                        <form action="{{ route('student.update', $student) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PATCH')
                            <div class="row">
                                <div class="col-xl-3 col-lg-4">
                                    <label class="form-label text-primary">Photo<span class="">*</span></label>
									<div class="avatar-upload">
										<div class="avatar-preview">
											<div id="imagePreview"
												style="background-image: url({{ asset($student->image) }});">
											</div>
										</div>
										<div class="change-btn mt-2 mb-lg-0 mb-3">
                                            <input type="hidden" value="{{$student->id}}" name="userID"> 
                                            {{-- @php
                                                use App\Models\User;
                                                $user = User::find($student->id);
                                                $imageName = $user->image;
                                                dd($imageName);
                                            @endphp --}}
											<input value="{{$student->image}}" type='file' class="form-control d-none" id="imageUpload" name="image">
											<label for="imageUpload" class="dlab-upload mb-0 btn btn-primary btn-sm">Choose File</label>
											<a href="javascript:void(0)" class="btn btn-danger light remove-img ms-2 btn-sm">Remove</a>
										</div>
									</div>
                                </div>
                                <div class="col-xl-9 col-lg-8">
                                    <div class="row">
                                        <div class="col-xl-6 col-sm-6">
                                            <div class="mb-3">
                                                <label for="name" class="form-label text-primary">Name<span
                                                        class=""></span></label>
                                                <input value="{{$student->name}}" id="name" class="form-control" type="text" name="name"
                                                    :value="old('name')"  autofocus autocomplete="name"
                                                    placeholder="Full name"/>
                                                <span style="color: red"><x-input-error :messages="$errors->get('name')" class="mt-2" /></span>
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label text-primary">Major<span
                                                        class=""></span></label>
                                                <div class="d-flex">
                                                    <input value="{{$student->major}}" id="major" class="form-control" type="text"
                                                        name="major" placeholder="Major" />
                                                    <span style="color: red"><x-input-error :messages="$errors->get('major')" class="mt-2" /></span>
                                                    <input value="{{$student->phone}}" id="phone" class="form-control" type="tel"
                                                        name="phone" placeholder="Phone" />
                                                    <span style="color: red"><x-input-error :messages="$errors->get('phone')" class="mt-2" /></span>
                                                </div>
                                            </div>
                                            <div class="mb-3">
                                                <label for="email" class="form-label text-primary">Email<span
                                                        class=""></span></label>
                                                <input value="{{$student->email}}" id="email" class="form-control" type="email" name="email"
                                                    :value="old('email')"  autocomplete="username"
                                                    placeholder="Email" />
                                                <span style="color: red"><x-input-error :messages="$errors->get('email')" class="mt-2" /></span>
                                            </div>
                                            <div class="mb-3">
                                                <label for="password" class="form-label text-primary">New Password (optional)<span
                                                        class=""></span></label>
                                                <input id="password" class="form-control" type="password"
                                                    name="password"  autocomplete="new-password"
                                                    placeholder="Password" />
                                                <span style="color: red"><x-input-error :messages="$errors->get('password')" class="mt-2" /></span>
                                            </div>
                                            <div class="mb-3">
                                                <label for="password_confirmation" class="form-label text-primary">Confirm password<span
                                                        class=""></span></label>
                                                <input id="password_confirmation" class="form-control" type="password"
                                                    name="password_confirmation"  autocomplete="new-password"
                                                    placeholder="Confirm password" />
                                                <span style="color: red"><x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" /></span>
                                            </div>
                                        </div>
                                    </div>
                                    <input type='submit' class="form-control d-none" id="save">
                                    <label for="save" class="dlab-upload mb-0 btn btn-primary btn-sm">Save</label>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!--**********************************
            Content body end
        ***********************************-->

<div class="footer out-footer style-2">
    <div class="copyright">
        <p>Copyright © Designed &amp; Developed by <a href="https://dexignlab.com/" target="_blank">DexignLab</a> 2023
        </p>
    </div>
</div>


<!--**********************************
            Footer end
        ***********************************-->
</div>

<script>
    // Function to handle file input change
    function handleImageUpload() {
        const imagePreview = document.getElementById('imagePreview');
        const imageUpload = document.getElementById('imageUpload');

        // Check if a file is selected
        if (imageUpload.files && imageUpload.files[0]) {
            const reader = new FileReader();

            reader.onload = function (e) {
                // Set the background image of the preview div
                imagePreview.style.backgroundImage = `url(${e.target.result})`;
            };

            // Read the selected file as a data URL
            reader.readAsDataURL(imageUpload.files[0]);
        }
    }

    // Add an event listener to the file input
    const imageUploadInput = document.getElementById('imageUpload');
    imageUploadInput.addEventListener('change', handleImageUpload);

    // Function to restore the default image and clear the file input value
    function restoreDefaultImage() {
        const imagePreview = document.getElementById('imagePreview');
        imagePreview.style.backgroundImage = `url(${defaultUserImageUrl})`;
        const imageUpload = document.getElementById('imageUpload');
        imageUpload.value = ''; // Clear the file input value
    }

    // Add an event listener to the remove button
    const removeImageButton = document.querySelector('.remove-img');

    // Function to handle the AJAX request
    function updateImageToDefault() {
        const csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');
        
        // Make an AJAX request to update the image to defaultUserImage.png
        fetch('/api/update-image', {
            method: 'POST', // You can use POST or any appropriate HTTP method
            headers: {
                'Content-Type': 'application/json', // Set the content type to JSON
                'X-CSRF-TOKEN': csrfToken, // Include the CSRF token here
            },
            body: JSON.stringify({
                userId: {{$student->id}}, // Replace with the actual user ID
                defaultImage: 'defaultUserImage.png', // Replace with the default image name
            }),
        })
        .then((response) => {
            if (response.ok) {
                // Image updated successfully, you can handle the success here
                console.log('Image updated successfully.');
            } else {
                // Handle errors here
                console.error('Failed to update image.');
            }
        })
        .catch((error) => {
            console.error('Error:', error);
        });
    }

    // Event listener for the remove button click
    removeImageButton.addEventListener('click', function () {
        restoreDefaultImage();
        updateImageToDefault();
    });

    // Your asset URL from Blade template
    const defaultUserImageUrl = "{{ asset('assets/images/student/defaultUserImage.png') }}";
</script>

@endsection
