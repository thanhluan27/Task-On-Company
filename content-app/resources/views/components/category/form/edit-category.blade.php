<form action="{{ route('update.category',$category->category_id) }}" method="post" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <div class="row">
        <div class="col-md-12">
            <div class="card card-primary">
                <div class="card-body">
                    <!-- Name -->
                    <div class="form-group">
                        <label for="inputName">Category Name: </label>
                        <input type="hidden" name="id" value="$category->category_id">
                        <input value="{{ $category->category_name }}" name="category_name" type="text" id="inputName" class="form-control">
                    </div>
                    <!-- Slug -->
                    <div class="form-group">
                        <label for="inputprice">Slug: </label>
                        <input value="{{ $category->slug }}" type="text" name="slug" id="text" class="form-control">
                    </div>
                    <!-- Status -->
                    <div class="form-group">
                        <label for="inputprice">Status: </label>
                        <input value="{{ $category->status }}" type="text" name="status" id="text" class="form-control">
                    </div>
                </div>
            </div>
        </div>

    </div>
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
            <!-- <input type="submit" value="Update Product" class="btn btn-success float-right"> -->
            <button type="submit" class="btn btn-success">Update product</button>
        </div>
    </div>
</form>
