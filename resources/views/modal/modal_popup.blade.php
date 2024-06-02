<div class="modal fade" id="modal_popup" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Student information</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="/post" method="post">
                    @csrf
                    <label for="">Name</label>
                    <input type="text" name="name" class="form-control mb-2">
                    <label for="">Gender</label>
                    <select name="gender" class="form-select mb-2">
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                    </select>
                    <label for="">Class</label>
                    <input type="text" name="class" class="form-control mb-2">
                    <label for="">Major</label>
                    <input type="text" name="major" class="form-control mb-2">
                    {{-- Button  --}}
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancel</button>
                        <button name="save" value="save" type="submit" class="btn btn-primary">Save
                            changes</button>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>
