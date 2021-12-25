@extends('layouts.layout')
@section('content')
    <h1>Create Form</h1>
    <form action="{{route('logout')}}" method="POST">
        <button type="submit" class="btn btn-danger">Logout</button>
    </form>

    <form action="{{ route('createBook') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input name="title" type="text" class="form-control" id="formGroupExampleInput" placeholder="Input title here">
        </div>
        <div class="mb-3">
            <label for="author" class="form-label">Author</label>
            <input name="author" type="text" class="form-control" id="formGroupExampleInput" placeholder="Input author here">
        </div>
        <div class="mb-3">
            <label for="release" class="form-label">Release</label>
            <input name="release" type="date" class="form-control" id="formGroupExampleInput" placeholder="Input Date">
        </div>
        <div class="mb-3">
            <label for="price" class="form-label">Price</label>
            <input name="price" type="numeric" class="form-control" id="formGroupExampleInput" placeholder="Input price here">
        </div>
        <div class="mb-3">
            <label for="genreId" class="form-label">GenreId</label>
            <input name="genreId" type="numeric" class="form-control" id="formGroupExampleInput" placeholder="Input genreId here">
        </div>
        @error('price')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <button type="submit" class="btn btn-success">Insert</button>
    </form>

@endsection

    {{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script> --}}
