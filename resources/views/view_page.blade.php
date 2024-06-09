<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- Link bootstrap   --}}
    <link rel="stylesheet" href="{{ '/style/bootstrap-5.3.3-dist/css/bootstrap.css' }}">
    <script src="{{ '/style/bootstrap-5.3.3-dist/js/bootstrap.js' }}"></script>
    <script src="{{ '/jquery/jquery-3.7.1.min.js' }}"></script>
    <title>Student</title>
</head>

<body>
    <div class="container-fluid bg-dark float-end p-3 ">
        <h1 class="text-light">Student CRUD</h1>
        <button type="button" class="btn btn-primary float-end" data-bs-toggle="modal" data-bs-target="#modal_popup">
            Add Student
        </button>
    </div>
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
            @include('table')
            @endforeach
        </tbody>
    </table>
    <!-- Modal -->
    @include('modal.modal_popup')
    @include('modal.modal_delete')

    <div class="modal fade" id="modal-update" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Student information</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body modal-boy-update">

                </div>

            </div>
        </div>
    </div>
</body>

<script src="/jquery/student.js"></script>

</html>
