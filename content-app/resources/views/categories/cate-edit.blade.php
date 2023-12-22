@extends('news.post-header')
@extends('news.sidebar')
@extends('news.post-footer')
@section('content')
<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Edit Category</h1>
                </div>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ url('/category') }}"> Back</a>
            </div>
        </div>
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

    <section class="content">
        <!-- Component Edit Category -->
        <x-category.form.edit-category :category="$category" />
    </section>
</div>
@endsection
