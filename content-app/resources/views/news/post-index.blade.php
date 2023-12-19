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
                    <h1>View list Post</h1>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->

    <!-- Default box -->
    <div class="card">
        <div class="card-header">
            <h3 class="card-title"><strong>Post Table</strong></h3>
            <br>
            <a class="btn btn-success btn-sm" href="{{ url('/post/create') }}"> Add New Post
            </a>
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
                        <th style="width: 10%" class="text-center">
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
                    <tr>
                        <td>
                            <a href="{{ route('detail', $data->post_id) }}"><img style="width: 100px;" src="{{ asset('storage/img/posts/'.$data->image) }}" alt="image"></a>
                        </td>
                        <td style="text-align: center;">{{ $data->title }}</td>
                        <td style="text-align: center;"><a href="{{ $data->slug }}">{{ substr($data->slug, 0, 20) }} ...</a></td>
                        <td style="text-align: center;">{{ $data->status }}</td>
                        <td style="text-align: center;">{{ substr($data->excerpt, 0, 30) }} ...</td>
                        <td style="text-align: center;">{{ substr($data->content, 0, 50) }} ...</td>
                        @if ($data->feature == 1)
                        <td style="text-align: center;"><strong>Nổi bật</strong></td>
                        @elseif ($data->feature == 0)
                        <td style="text-align: center;"><strong>Không nổi bật</strong></td>
                        @endif
                        <td style="text-align: center;">{{ $data->posted_at ? Carbon\Carbon::parse($data->posted_at)->format('d-m-Y') : '-' }}</td>
                        <td class="project-actions text-right">
                            <form action="{{ route('destroy',$data->post_id) }}" method="POST">
                                <a class="btn btn-success btn-sm" href="{{ route('edit',$data->post_id) }}" style="width: 50px; height: 40px; margin-bottom: 2px;">
                                    <img src="{{ asset('img/icon/edit2.png') }}" alt="edit" style="width: 30px; height: 30px;">
                                </a>
                                <a class="btn btn-info btn-sm" href="/post-detail/{{ $data->post_id }}" style="width: 50px; height: 40px; margin-bottom: 2px;">
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
