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
                    <h1>Search results by your keyword: "{{ isset($search) ? $search : ''}}"</h1>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->

    <!-- Default box -->
    <div class="card">

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
                        <th style="width: 10%" class="text-center">
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
                            <a href="/post-detail/{{ $data->post_id }}"><img style="width: 100px;" src="/img/{{ $data->image }}" alt="image"></a>
                        </td>
                        <td style="text-align: center;">{{ $data->title }}</td>
                        <td style="text-align: center;"><a href="{{ $data->slug }}">{{ substr($data->slug, 0, 20) }} ...</a></td>
                        <td style="text-align: center;">{{ $data->status }}</td>
                        <td style="text-align: center;">{{ substr($data->excerpt, 0, 10) }} ...</td>
                        <td style="text-align: center;">{{ substr($data->content, 0, 50) }} ...</td>
                        @if ($data->feature == 1)
                        <td style="text-align: center;"><strong>Đã duyệt</strong></td>
                        @elseif ($data->feature == 0)
                        <td style="text-align: center;"><strong>Chờ duyệt</strong></td>
                        @endif
                        <td style="text-align: center;">{{ $data->posted_at ? Carbon\Carbon::parse($data->posted_at)->format('Y-m-d') : '-' }}</td>
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
</div>
@endsection
