@extends('news.post-header')
@extends('news.sidebar')

@section('content')

<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>View Category List</h1>
                </div>
            </div>
        </div>
    </section>
    <div class="card">
        <div class="card-header">
            <!-- Component Super Action -->
            <x-category.sub--category-index :category="$category" />
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
                    <!-- Component Category List -->
                    <x-category.category-index :data="$data" />
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
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
