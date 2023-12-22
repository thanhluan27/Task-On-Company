<div>
    <a style="font-weight: bold;" href="{{ route('category') }}"><button class="btn btn-primary">Back To Category List</button></a>
    <button data-toggle="modal" data-target="#status-modal" class="btn btn-success" {{ $bulkDisabled ? 'disabled' : null }}>Update</button>
    <button data-toggle="modal" data-target="#delete-modal" class="btn btn-danger" {{ $bulkDisabled ? 'disabled' : null }}>Delete</button>
    <table class="table table-stripped mt-3">
        <tr>
            <th></th>
            <th>ID</th>
            <th>name</th>
            <th>Status</th>
        </tr>
        @foreach($categories as $data)
        <tr>
            <th>
                <input type="checkbox" wire:model="selectedItem.{{ $data->category_id }}">
            </th>
            <td>{{ $data->category_id }}</td>
            <td>{{ $data->category_name }}</td>
            @if ($data->status == null)
            <td>N/A</td>
            @else
            <td>{{ $data->status }}</td>
            @endif
        </tr>
        @endforeach
    </table>

    <!-- MODEL CHANGE STATUS OPEN -->
    <div id="status-modal" class="modal" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Change status</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <select wire:model.defer="selectedStatus" class="form-control">
                        <option value="null">Selected one</option>
                        <option value="Đã đăng">Đã đăng</option>
                        <option value="Đã cập nhật">Đã cập nhật</option>
                        <option value="Đã chỉnh sửa">Đã chỉnh sửa</option>
                    </select>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" data-dismiss="modal" wire:click="changeStaus">Save changes</button>
                </div>
            </div>
        </div>
    </div>

    <!-- MODEL DELELTE STATUS OPEN -->
    <div id="delete-modal" class="modal" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Delete Status</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <h3 class="btn btn-danger"> <strong>ARE YOU SURE WANT TO DELETE ?</strong></h1>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-dismiss="modal" wire:click="deleteStaus">Delete Now</button>
                    </div>
            </div>
        </div>
    </div>
</div>
