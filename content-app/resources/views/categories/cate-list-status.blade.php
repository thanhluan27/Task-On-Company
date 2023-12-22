@extends('news.post-header')
@extends('news.sidebar')

@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>View list Category</h1>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->

    <!-- Default box -->
    <div class="card">
        <div class="card-header">
            <h3 class="card-title"><strong>Category Table</strong></h3>
            <br>
            <a class="btn btn-success btn-sm" href="{{ url('/category/create') }}"> Add New Category
            </a>
            <div class="btn-group">
                <button class="btn btn-warning btn-sm dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <strong>Super Action</strong>
                </button>
                <div class="dropdown-menu">
                    <a class="dropdown-item" style="color: #B8860B" href="{{ url('/category/status') }}"><strong>Update All Status</strong></a>
                    <form action="{{ route('destroy.status') }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button style="color: #B22222" type="submit" class="dropdown-item"><strong>Remove All Status</strong></button>
                    </form>
                    <!-- <a type="submit" class="dropdown-item" style="color: #B22222" href="#"><strong>Remove All Status</strong></a> -->
                </div>
            </div>
            <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                    <strong>-</strong>
                </button>
                <!-- <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                    <i class="fas fa-times"></i>
                </button> -->
            </div>
        </div>

        @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
        @endif

        <div class="card-body p-0">
            {{-- table --}}
            <table class="table table-striped projects">

            </table>
        </div>
        <!-- /.card-body -->
    </div>

    <!-- /.card -->
    <!-- /.content -->
    <!-- Pagination -->
</div>
@endsection

<!-- /.content-wrapper -->
<!-- Control Sidebar -->
<aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
</aside>
<!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="{{ asset('js/jquery.min.js') }}"></script>
<!-- Bootstrap 4 -->
<script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('js/adminlte.min.js') }}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{ asset('js/demo.js') }}"></script>
</body>

</html>
