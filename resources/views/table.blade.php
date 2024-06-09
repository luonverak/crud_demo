<tr id="row-student" data-id="{{ $student->id }}">
    <td>{{ $student->name }}</td>
    <td>{{ $student->gender }}</td>
    <td>{{ $student->class }}</td>
    <td>{{ $student->major }}</td>
    <td>
        <button id="update" data-id="{{ $student->id }}" class="btn btn-warning" type="button">Update</button>
        <button type="button" id="delete" data-id="{{ $student->id }}" class="btn btn-danger">Delete</button>
    </td>
</tr>
