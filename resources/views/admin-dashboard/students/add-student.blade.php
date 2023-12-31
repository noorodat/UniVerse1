@extends('admin-layouts.master')


@section('content')

@section('title', 'Add-Student')


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
                        <form action="{{ route('student.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-xl-3 col-lg-4">
                                    <label class="form-label text-primary">Photo<span class="required">*</span></label>
									<div class="avatar-upload">
										<div class="avatar-preview">
											<div id="imagePreview"
												style="background-image: url({{ asset('assets/images/student/defaultUserImage.png') }});">
											</div>
										</div>
										<div class="change-btn mt-2 mb-lg-0 mb-3">
											<input type='file' class="form-control d-none" id="imageUpload" name="image">
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
                                                        class="required">*</span></label>
                                                <input id="name" class="form-control" type="text" name="name"
                                                    :value="old('name')" required autofocus autocomplete="name"
                                                    placeholder="Full name" />
                                                <x-input-error :messages="$errors->get('name')" class="mt-2" />
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label text-primary">Major<span
                                                        class="required">*</span></label>
                                                <div class="d-flex">
                                                    <input id="major" class="form-control" type="text"
                                                        name="major" placeholder="Major" />
                                                    <x-input-error :messages="$errors->get('major')" class="mt-2" />
                                                    <input id="phone" class="form-control" type="tel"
                                                        name="phone" placeholder="Phone" />
                                                    <x-input-error :messages="$errors->get('phone')" class="mt-2" />
                                                </div>
                                            </div>
                                            <div class="mb-3">
                                                <label for="email" class="form-label text-primary">Email<span
                                                        class="required">*</span></label>
                                                <input id="email" class="form-control" type="email" name="email"
                                                    :value="old('email')" required autocomplete="username"
                                                    placeholder="Email" />
                                                <x-input-error :messages="$errors->get('email')" class="mt-2" />
                                            </div>
                                            <div class="mb-3">
                                                <label for="password" class="form-label text-primary">Password<span
                                                        class="required">*</span></label>
                                                <input id="password" class="form-control" type="password"
                                                    name="password" required autocomplete="new-password"
                                                    placeholder="Password" />
                                                <x-input-error :messages="$errors->get('password')" class="mt-2" />
                                            </div>
                                            <div class="mb-3">
                                                <label for="password" class="form-label text-primary">Password<span
                                                        class="required">*</span></label>
                                                <input id="password_confirmation" class="form-control" type="password"
                                                    name="password_confirmation" required autocomplete="new-password"
                                                    placeholder="Confirm password" />
                                                <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
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

            reader.onload = function(e) {
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
        imagePreview.style.backgroundImage = `url({{ asset('assets/images/student/defaultUserImage.png') }})`;
        const imageUpload = document.getElementById('imageUpload');
        imageUpload.value = ''; // Clear the file input value
    }

    // Add an event listener to the remove button
    const removeImageButton = document.querySelector('.remove-img');
    removeImageButton.addEventListener('click', restoreDefaultImage);
</script>

@endsection
