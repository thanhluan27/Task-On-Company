@extends('news.post-header')
@extends('news.sidebar')

@section('content')
<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>View Post List</h1>
                </div>
            </div>
        </div>
    </section>

    <div class="card">
        <div class="card-header">
            <!-- Component Action -->
            <x-post.sub-index-post :posts="$posts" />
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
                        <th style="width: 5%" class="text-center">
                            Image
                        </th>
                        <th style="width: 15%" class="text-center">
                            Title
                        </th>
                        <th style="width: 10%" class="text-center">
                            Slug
                        </th>
                        <th style="width: 10%" class="text-center">
                            Status
                        </th>
                        <th style="width: 10%" class="text-center">
                            Category
                        </th>
                        <th style="width: 10%" class="text-center">
                            Excerpt
                        </th>
                        <th style="width: 25%" class="text-center">
                            Content
                        </th>
                        <th style="width: 1%" class="text-center">
                            Feature
                        </th>
                        <th style="width: 30%" class="text-center">
                            PostAt
                        </th>
                        <th style="width: 30%" class="text-center">
                            Action
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($posts as $data)
                    <!-- Component Post List -->
                    <x-post.post-index :data="$data" />
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    <!-- Pagination -->
    {!! $posts->links('pagination::bootstrap-5') !!}
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
