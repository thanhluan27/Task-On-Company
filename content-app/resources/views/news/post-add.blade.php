@extends('news.post-header')
@extends('news.sidebar')
@extends('news.post-footer')
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Add new Post</h1>
            </div>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ url('/post') }}"> Back</a>
        </div>
    </div><!-- /.container-fluid -->

    @if ($errors->any())
    <div class="alert alert-danger">
        <strong>Whoops!</strong> There were some problems with your input.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

    <!-- Main content -->
    <form action="{{ route('store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row">
            <!-- Tile -->
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Title:</strong>
                    <input type="text" name="title" class="form-control" placeholder="Title">
                </div>
            </div>
            <!-- Slug -->
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Slug:</strong>
                    <input type="text" name="slug" class="form-control" placeholder="Slug">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Status:</strong>
                    <input type="text" name="status" class="form-control" placeholder="Status">
                </div>
            </div>
            <!-- Image -->
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Image:</strong>
                    <input type="file" name="image" class="form-control" placeholder="image">
                </div>
            </div>
            <!-- Excerpt -->
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Excerpt:</strong>
                    <textarea class="form-control" style="height: 50px" name="excerpt" placeholder="Excerpt"></textarea>
                </div>
            </div>
            <!-- Content -->
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Content:</strong>
                    <textarea class="form-control" style="height:150px" name="content" placeholder="Content"></textarea>
                </div>
            </div>
            <!-- Feature -->
            <div class="form-group">
                <label for="inputFeature">Feature:</label>
                <br>
                <input name="feature" type="checkbox" value="1" id="inputFeature" style="width: 30px; height: 30px;">
            </div>
            <!-- Post At -->
            <div class="form-group">
                <label for="posted_at">Post At:</label>
                <input type="date" name="posted_at" id="posted_at" class="form-control @error('posted_at') is-invalid @enderror" value="{{ old('posted_at') }}">
                @error('posted_at')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
                <br>
            </div>
            <div class="form-group">
                <label for="category_id">Category</label>
                <select name="category_id" id="category_id" class="form-control custom-select">
                    <option checked value="0">Select One</option>
                    @foreach ($categories as $data)
                    <option value="{{ $data->category_id }}">{{ $data->category_name}}</option>
                    @endforeach
                </select>
            </div>
            <!-- SUBMIT -->
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                    <button type="submit" class="btn btn-primary">Add New Post</button>
                </div>
            </div>
    </form>

    <!-- /.content -->
</div>
@endsection
