	<div class="modal fade" id="exampleModal{{$student->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-dialog-center">
		<div class="modal-content">
			<div class="modal-header">
			<h5 class="modal-title" id="exampleModalLabel">Delete student</h5>
			<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			</div>
			<div class="modal-body">
				<div class="row">
					<div class="col-xl-12">
						<h2 class="text-center">Are you sure you want to delete <span class="text-decoration-underline">{{$student->name}}</span></h2>
					</div>
				</div>
				
			</div>
			<div class="modal-footer justify-content-center">
				<button type="button" class="btn btn-danger light" data-bs-dismiss="modal">Close</button>
				<form method="POST" action="{{ route('student.destroy', $student->id) }}">
					@csrf
					@method('DELETE')
					<input type="hidden" name="user_id" value="{{ $student->id }}">
					<button class="btn btn-primary" type="submit">
						Delete
					</button>
				</form>
			</div>
		</div>
		</div>
	</div>	