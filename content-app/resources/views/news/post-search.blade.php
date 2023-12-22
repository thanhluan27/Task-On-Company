@extends('news.post-header')
@extends('news.sidebar')
@extends('news.post-footer')
@section('content')

<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Search results by your keyword: "{{ isset($search) ? $search : ''}}"</h1>
                </div>
            </div>
        </div>
    </section>

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
                    <x-post.search.post-search :data="$data" />
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

</div>
@endsection
