@extends('news.post-header')
@extends('news.sidebar')
@extends('news.post-footer')
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Edit Post</h1>
                </div>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ url('/') }}"> Back</a>
            </div>
        </div><!-- /.container-fluid -->
    </section>

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
    <section class="content">
        <form action="{{ route('update',$posts->post_id) }}" method="post" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="row">
                <div class="col-md-12">
                    <div class="card card-primary">
                        <div class="card-body">
                            <!-- Name -->
                            <div class="form-group">
                                <label for="inputName">Title: </label>
                                <input type="hidden" name="id" value="$products->product_id">
                                <input value="{{ $posts->title }}" name="title" type="text" id="inputName" class="form-control">
                            </div>
                            <!-- Slug -->
                            <div class="form-group">
                                <label for="inputprice">Slug: </label>
                                <input value="{{ $posts->slug }}" type="text" name="slug" id="text" class="form-control">
                            </div>
                            <!-- Status -->
                            <div class="form-group">
                                <label for="inputprice">Status: </label>
                                <input value="{{ $posts->status }}" type="text" name="status" id="text" class="form-control">
                            </div>
                            <!-- Image -->
                            <div class="form-group">
                                <label for="inputName">Image: </label>
                                <input name="image" type="file" id="inputName" class="form-control">
                                <img style="width: 300px; height: 300px;" src="{{ asset('storage/img/posts/'.$posts->image) }}" alt="">
                            </div>
                            <!-- Excerpt -->
                            <div class="form-group">
                                <label for="inputExcerpt">Excerpt: </label>
                                <textarea name="excerpt" id="inputExcerpt" class="form-control" rows="4">
                                {{ $posts->excerpt }}
                                </textarea>
                            </div>
                            <div class="form-group">
                                <label for="inputContent">Content: </label>
                                <textarea name="content" id="inputContent" class="form-control" rows="4">
                                {{ $posts->content }}
                                </textarea>
                            </div>
                            <!-- Status -->
                            <div class="form-group">
                                <label for="inputProjectLeader">Feature: </label>
                                @if ($posts->feature == 1)
                                <input checked name="feature" type="checkbox" id="inputProjectLeader" style="width: 30px; height: 30px;">
                                @else
                                <input name="feature" type="checkbox" id="inputProjectLeader" style="width: 30px; height: 30px;">
                                @endif
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
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>

            </div>
            <div class="row">
                <div class="col-12">
                    <!-- <input type="submit" value="Update Product" class="btn btn-success float-right"> -->
                    <button type="submit" class="btn btn-success float-left">Update product</button>
                </div>
            </div>
        </form>
    </section>
    <!-- /.content -->
</div>
@endsection
