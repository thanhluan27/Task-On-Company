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
            <a class="btn btn-primary" href="{{ route('post') }}"> Back</a>
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
    <x-post.form.add-form :categories="$categories" />
    <!-- /.content -->
</div>
@endsection
