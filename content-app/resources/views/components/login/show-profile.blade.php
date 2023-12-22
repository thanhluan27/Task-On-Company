<form>
    <div class="row">
        <div class="col-md-12">
            <div class="card card-info">
                <div class="card-header">
                    <h3 class="card-title"><strong>Your Profile</strong></h3>
                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                            <strong>-</strong>
                        </button>
                    </div>
                </div>
                <div class="card-body">
                    <p><strong>Name:</strong> {{Auth::user()->name}}</p>
                    <p><strong>Email:</strong> {{Auth::user()->email}}</p>
                    @if (Auth::user()->role == 'admin')
                    <p><strong>Permission: </strong> <b style="color: #DC143C;">{{Auth::user()->role}}</b></p>
                    @elseif (Auth::user()->role == 'editor')
                    <p><strong>Permission: </strong> <b style="color: #32CD32;">{{Auth::user()->role}}</b></p>
                    @else
                    <p><strong>Permission: </strong> <b style="color: #1E90FF;">{{Auth::user()->role}}</b></p>
                    @endif
                </div>
            </div>
        </div>
    </div>
</form>
