@extends('news.post-header')
@extends('news.sidebar')


@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <!-- <h1>Your Profile</h1> -->
                </div>
            </div>
            <div class="pull-right">
                <!-- <a class="btn btn-primary" href="#"> Back</a> -->
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

    @if ($message = Session::get('success'))
    <div class="alert alert-success">
        <strong>
            <p>{{ $message }}</p>
        </strong>
    </div>
    @endif
    <section class="content">

        <!-- SHOW MY INFOMATION -->
        <x-login.show-profile />

        <!-- UPDATE INFOMATION -->
        <x-login.form.update-profile />

        <!-- UPDATE PASSWORD -->
        <x-login.form.change-password />

    </section>
</div>


@endsection
@extends('news.post-footer')
