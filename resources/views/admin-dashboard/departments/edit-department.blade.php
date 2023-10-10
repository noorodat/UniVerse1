@extends('admin-layouts.master')


@section('content')

@section('title', 'Edit-department')


<div class="content-body">
    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-12">
                <div class="card">
                    <div class="card-header">
                        <h5 class="mb-0">Edit Department</h5>
                    </div>
					{{-- Show success message --}}
                    <div class="card-body">
                        <form action="{{ route('department.update', $department) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PATCH')
                            <div class="row justify-content-center">
                                <div class="col-xl-6 col-lg-6">
                                    <div class="mb-3">
                                        
                                        <label for="icon" class="form-label text-primary">Icon &lt;i&gt;tag&lt;/i&gt;<span
                                                class="required">*</span></label>
                                                
                                            <div class="icon d-flex gap-2 align-items-center">
                                                <input value="{{$department->image}} " id="icon" class="form-control @error('icon') is-invalid @enderror" type="text" name="icon"
                                                required placeholder="Icon" />
                                                <i class="{{$department->image}} fs-3"></i>
                                            </div>
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
                                                <input value="{{$department->title}}" id="title" class="form-control @error('title') is-invalid @enderror" type="text" name="title"
                                                    required placeholder="Title" />
                                                @error('title')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                                @enderror
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label text-primary">Description<span
                                                        class="required">*</span></label>
                                                <div class="d-flex">
                                                    <textarea  name="description" class="form-control @error('description') is-invalid @enderror"
                                                        id="exampleFormControlTextarea1" rows="6">{{$department->description}}</textarea>
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


@endsection
