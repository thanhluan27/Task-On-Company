@extends('layout.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Bulk Action (select post you want to update or delete <strong>Post</strong> status)</div>
                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif
                    @livewire('bulk-table')

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
