@if(Auth::user()->role == 'admin')
<h3 class="card-title"><strong>ACTION: </strong></h3>
@else
<h3 class="card-title"><strong>ACTION: You cannot take any action</strong></h3>
@endif
<br>
@foreach ($posts as $key => $value)
@if($key == 0)
@can('addPost', $value)
<a class="btn btn-success btn-sm" href="{{ route('create', $value) }}"> Add New Post
</a>
@endcan
@endif
@endforeach
@foreach ($posts as $key => $value)
@if($key == 0)
@can('viewSuperAction', $value)
<div class="btn-group">
    <button class="btn btn-warning btn-sm dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <strong>Super Action</strong>
    </button>
    <div class="dropdown-menu">

        <!-- BULK ACTION -->
        <a class="dropdown-item" style="color: #B8860B" href="{{ route('showBulk') }}"><strong>Posts Bulk Action</strong></a>

        <!-- CHANGE ALL -->
        <a class="dropdown-item" style="color: #B8860B" href="{{ route('edit.post') }}"><strong>Update All Status</strong></a>
        <form action="{{ route('destroy.post') }}" method="POST">
            @csrf
            @method('DELETE')
            <button style="color: #B22222" type="submit" class="dropdown-item"><strong>Remove All Status</strong></button>
        </form>

        <!-- <a type="submit" class="dropdown-item" style="color: #B22222" href="#"><strong>Remove All Status</strong></a> -->
    </div>
</div>
@endcan
@endif
@endforeach
<div class="card-tools">
    <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
        <strong>-</strong>
    </button>
</div>
