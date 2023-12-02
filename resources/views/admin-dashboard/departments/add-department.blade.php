@extends('admin-layouts.master')


@section('content')

@section('title', 'Add-department')


<div class="content-body">
    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-12">
                <div class="card">
                    <div class="card-header">
                        <h5 class="mb-0">Add Department</h5>
                    </div>
					{{-- Show success message --}}
                    <div class="card-body">
                        <form action="{{ route('department.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="row justify-content-center">
                                <div class="col-xl-6 col-lg-6">
                                    <div class="mb-3">
                                        <label for="icon" class="form-label text-primary">Icon &lt;i&gt;tag&lt;/i&gt;<span
                                                class="required">*</span></label>
                                        <input id="icon" class="form-control @error('icon') is-invalid @enderror" type="text" name="icon"
                                            required placeholder="Icon" />
                                        @error('icon')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-xl-12 col-lg-12">
                                    <div class="row justify-content-center">
                                        <div class="col-xl-6 col-sm-6">
                                            <div class="mb-3">
                                                <label for="title" class="form-label text-primary">Title<span
                                                        class="required">*</span></label>
                                                <input id="title" class="form-control @error('title') is-invalid @enderror" type="text" name="title"
                                                    required placeholder="Title" />
                                                @error('title')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                                @enderror
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label text-primary">Description<span
                                                        class="required">*</span></label>
                                                <div class="d-flex">
                                                    <textarea name="description" class="form-control @error('description') is-invalid @enderror"
                                                        id="exampleFormControlTextarea1" rows="6"></textarea>
                                                    @error('description')
                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                        <div class="sumbitBtn d-flex justify-content-center">
                                            <input type='submit' class="form-control d-none" id="save">
                                            <label for="save" class="dlab-upload mb-0 btn btn-primary btn-sm">Save</label>
                                        </div>
                                    </div>
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
        imagePreview.style.backgroundImage = `url({{ asset('images/defaultDepartmentImage.png') }})`;
        const imageUpload = document.getElementById('imageUpload');
        imageUpload.value = ''; // Clear the file input value
    }

    // Add an event listener to the remove button
    const removeImageButton = document.querySelector('.remove-img');
    removeImageButton.addEventListener('click', restoreDefaultImage);
</script>

@endsection
