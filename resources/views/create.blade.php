<!DOCTYPE html>

<head>

    <meta charset="utf-8">

    <title>Wecode101 validation tutorial</title>

    <meta name="description" content="Wecode101 validation in Laravel 8">

    <meta name="author" content="Wecode101">

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh"                         crossorigin="anonymous">

</head>

<html>

<body>

<div class="container align-items-start">

    <h3 class="d-flex justify-content-center">Store Book Records</h3>

    @if ($errors->any())

        <div class="alert alert-danger">

            <ul>

                @foreach ($errors->all() as $error)

                    <li>{{ $error }}</li>

                @endforeach

            </ul>

        </div>

    @endif

    @if (session()->has('message'))
        <div class="alert alert-success">
            {{ session('message') }}
        </div>
    @endif

    <div class="container-fluid d-flex justify-content-center mt-4" style="max-width: 30em">

        <form id="signin" class="form-horizontal validate-form" method="POST" action="{{ route('store') }}">                         {{ csrf_field() }}

            <div class="form-group">

                <label for="title" class="control-label">Title</label>

                <input id="title" type="text" class="form-control" name="title" value="{{ old('title') }}"/>

            </div>

            <div class="form-group mb-2">

                <label for="author" class="control-label">Author</label>

                <input id="author" type="text" class="form-control" name="author" value="{{ old('author') }}"/>

            </div>

            <div class="form-group mb-0">

                <button type="submit" class="btn btn-primary">submit</button>

            </div>

        </form>

    </div>

</div>

</body>

</html>
