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
    {{-- Table  --}}
    @include('table');
    <!-- Modal -->
    @include('modal.modal_popup')
    {{-- @include('modal.confirm_popup') --}}
</body>

<script src="/jquery/student.js"></script>

</html>
