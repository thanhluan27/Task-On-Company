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
                <thead>
                    <tr>
                        <th style="width: 30%" class="text-left">
                            Category Name
                        </th>
                        <th style="width: 40%" class="text-left">
                            Slug
                        </th>
                        <th style="width: 20%" class="text-left">
                            Status
                        </th>
                        <th style="width: 30%" class="text-center">
                            Action
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($category as $data)
                    <tr>
                        <td style="text-align: left;"><strong>{{ $data->category_name }}</strong></td>
                        <td style="text-align: left;"><a href="{{ $data->slug }}">{{ substr($data->slug, 0, 50) }} ...</a></td>
                        @if ($data->status == null)
                        <td style="text-align: left; color: red;"><strong>N/A</strong></td>
                        @else
                        <td style="text-align: left;">{{ $data->status }}</td>
                        @endif
                        <td class="project-actions text-center">
                            <form action="{{ route('destroy.category',$data->category_id) }}" method="POST">
                                <a class="btn btn-success btn-sm" href="{{ route('edit.category',$data->category_id) }}" style="width: 50px; height: 40px; margin-bottom: 2px;">
                                    <img src="{{ asset('img/icon/edit2.png') }}" alt="edit" style="width: 30px; height: 30px;">
                                </a>
                                <a class="btn btn-info btn-sm" href="" style="width: 50px; height: 40px; margin-bottom: 2px;">
                                    <img src="{{ asset('img/icon/view2.png') }}" alt="view" style="width: 30px; height: 30px;">
                                </a>
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger" style="width: 50px; height: 40px;"><img src="{{ asset('img/icon/delete2.png') }}" alt="button" style="width: 30px; height: 30px;"></button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <!-- /.card-body -->
    </div>

    <!-- /.card -->
    <!-- /.content -->
    <!-- Pagination -->
    {!! $category->links('pagination::bootstrap-5') !!}
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
