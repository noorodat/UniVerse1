<div class="modal fade" id="exampleModal1{{$student->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-center">
    <div class="modal-content">
        <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Delete student</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <div class="row">
                <div class="col-xl-12">
                    <h2 class="text-center">Are you sure you want to make <span class="text-decoration-underline">{{$student->name}}</span> an instructor</h2>
                </div>
            </div>
            
        </div>
        <div class="modal-footer justify-content-center">
            <button type="button" class="btn btn-danger light" data-bs-dismiss="modal">Close</button>
            <form method="POST" action="{{ route('makeInstructor', $student->id) }}">
                @csrf
                <input type="hidden" name="user_id" value="{{ $student->id }}">
                <button class="btn btn-primary" type="submit">
                    Make instructor
                </button>
            </form>
        </div>
    </div>
    </div>
</div>	