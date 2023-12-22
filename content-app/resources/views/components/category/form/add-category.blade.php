<form action="{{ route('store.category') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="row">
        <!-- Tile -->
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Category Name:</strong>
                <input type="hidden" name="user_id" value="{{ Auth::user()->id}}">
                <input type="text" name="category_name" class="form-control" placeholder="Title">
            </div>
        </div>
        <!-- Slug -->
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Slug:</strong>
                <input type="text" name="slug" class="form-control" placeholder="Slug">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Status:</strong>
                <input type="text" name="status" class="form-control" placeholder="Status">
            </div>
        </div>
        <!-- SUBMIT -->
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Add</button>
            </div>
        </div>
</form>
