<form action="{{ route('updateProfile', Auth::user()->id) }}" method="post" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <div class="row">
        <div class="col-md-12">
            <div class="card card-info">
                <div class="card-header">
                    <h3 class="card-title"><strong>Update Your Infomation</strong></h3>
                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                            <strong>-</strong>
                        </button>
                    </div>
                </div>
                <div class="card-body">
                    <div class="form-group row">
                        <label for="password" class="col-md-4 col-form-label text-md-right">Name:</label>
                        <div class="col-md-6">
                            <input name="name" id="name" type="name" class="form-control" autocomplete="current-password" placeholder="input your name">
                        </div>
                    </div>
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>

    </div>
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
            <!-- <input type="submit" value="Update Product" class="btn btn-success float-right"> -->
            <button type="submit" class="btn btn-success">Update Infomation</button>
        </div>
    </div>
</form>
