@extends('admin-layouts.master')


@section('content')

@section('title', 'Add-Course')


{{-- {{dd($instructors)}} --}}

<div class="content-body">
    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-12">
                <div class="card">
                    <div class="card-header">
                        <h5 class="mb-0">Add course</h5>
                    </div>
					{{-- Show success message --}}
                    <div class="card-body">
                        <form action="{{ route('add-dash-course') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-xl-3 col-lg-4">
                                    <label class="form-label text-primary">Photo<span class="required">*</span></label>
									<div class="avatar-upload">
										<div class="avatar-preview">
											<div id="imagePreview"
												style="background-image: url({{ asset('assets/images/course/defaultCuorseImage.png') }});">
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
                                                <label for="name" class="form-label text-primary">Title<span
                                                        class="required">*</span></label>
                                                <input id="name" class="form-control" type="text" name="title"
                                                    :value="old('name')" required autofocus autocomplete="name"
                                                    placeholder="Course title" />
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label text-primary">Department<span
                                                        class="required">*</span></label>
                                                    <select name="department" class="form-control" id="department">
                                                        <option value="" disabled selected>Select a departmnet</option>
                                                        @foreach ($departments as $department)
                                                            <option value="{{$department->id}}">{{$department->title}}</option>
                                                        @endforeach
                                                    </select>
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label text-primary">instructor<span
                                                        class="required">*</span></label>
                                                    <select name="instructor" class="form-control" id="department">
                                                        <option value="" disabled selected>Assign to an instructor</option>
                                                        @foreach ($instructors as $instructor)
                                                            <option value="{{$instructor->id}}">{{$instructor->user->name}}</option>
                                                        @endforeach
                                                    </select>
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
        imagePreview.style.backgroundImage = `url({{ asset('assets/images/student/defaultCourseImage.png') }})`;
        const imageUpload = document.getElementById('imageUpload');
        imageUpload.value = ''; // Clear the file input value
    }

    // Add an event listener to the remove button
    const removeImageButton = document.querySelector('.remove-img');
    removeImageButton.addEventListener('click', restoreDefaultImage);
</script>

@endsection
