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
                    <h1>Edit All Status</h1>
                </div>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ url('/post') }}"> Back</a>
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
        <form action="{{ route('update.post') }}" method="post" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="row">
                <div class="col-md-12">
                    <div class="card card-primary">
                        <div class="card-body">
                            <!-- Status -->
                            <div class="form-group">
                                <label for="inputprice">Status: </label>
                                <input value="" type="text" name="status" id="text" class="form-control" placeholder="Input the status you want to change all...">
                            </div>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>

            </div>
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                    <!-- <input type="submit" value="Update Product" class="btn btn-success float-right"> -->
                    <button type="submit" class="btn btn-success">Change All</button>
                </div>
            </div>
        </form>
    </section>
    <!-- /.content -->
</div>
@endsection
