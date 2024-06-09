<form method="post">
    @csrf
    <label for="">Name</label>
    <input type="text" id="name" value="{{ $student->name }}" class="form-control mb-2">
    <label for="">Gender</label>
    <select id="gender" value="{{ $student->gender }}" class="form-select mb-2">
        @if ($student->gender == 'Male')
            <option value="Male" selected>Male</oçption>
            <option value="Female">Female</option>
        @else
            <option value="Female" selected>Female</option>
            <option value="Male">Male</oçption>
        @endif
    </select>
    <label for="">Class</label>
    <input type="text" id="class" value="{{ $student->class }}" class="form-control mb-2">
    <label for="">Major</label>
    <input type="text" id="major" value="{{ $student->major }}" class="form-control mb-2">
    {{-- Button  --}}
    <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancel</button>
        <button id="accept-update" value="save" type="button" class="btn btn-primary">
            Update changes
        </button>
    </div>
</form>
