<table class="table table-dark table-hover" style="table-layout: fixed">
    <thead>
        <tr>
            <th scope="col">Name</th>
            <th scope="col">Gender</th>
            <th scope="col">Class</th>
            <th scope="col">Major</th>
            <th scope="col">Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($students as $student)
            <tr>
                <td>{{ $student->name }}</td>
                <td>{{ $student->gender }}</td>
                <td>{{ $student->class }}</td>
                <td>{{ $student->major }}</td>
                <td>
                    <button class="btn btn-warning" type="submit">Update</button>
                    <a id="delete" class="btn btn-danger">Delete</a>
                </td>
            </tr>
        @endforeach

    </tbody>
</table>
