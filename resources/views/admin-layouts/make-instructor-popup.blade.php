@php
    use App\Models\User;
    use App\Models\InstructorRequest;
    $data = $student ?? $request;
    if($data instanceof User) {
        $thingToMake = 'Student';
        $name = $data->name;
    } else if($data instanceof InstructorRequest){
        $thingToMake = 'Request';
        $name = $data->user->name;
    }
@endphp

<div class="modal fade" id="exampleModal1{{$data instanceof User ? $data->id : $data->user->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-center">
    <div class="modal-content">
        <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Make Instructor</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <div class="row">
                <div class="col-xl-12">
                    <h2 class="text-center">Are you sure you want to make <span class="text-decoration-underline">{{$name}}</span> an instructor</h2>
                </div>
            </div>
            
        </div>
        <div class="modal-footer justify-content-center">
            <button type="button" class="btn btn-danger light" data-bs-dismiss="modal">Close</button>
            <form method="POST" action="{{$data instanceof User ? route('makeInstructor', $data->id) : route('accept-instructor-request', ['userID' => $data->user->id, 'reqID' => $data->id])}}">
                @csrf
                <button class="btn btn-primary" type="submit">
                    Make instructor
                </button>
            </form>
        </div>
    </div>
    </div>
</div>	