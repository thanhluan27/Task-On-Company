<tr>
    <td style="text-align: left;"><strong>{{ $data->category_name }}</strong></td>
    <td style="text-align: left;"><a href="{{ $data->slug }}">{{ substr($data->slug, 0, 50) }} ...</a></td>
    @if ($data->status == null)
    <td style="text-align: left; color: red;"><strong>N/A</strong></td>
    @else
    <td style="text-align: left;">{{ $data->status }}</td>
    @endif
    <td class="project-actions text-center">
        <form action="{{ route('destroy.category',$data->category_id) }}" method="POST">
            @can('editCate', $data)
            <a class="btn btn-success btn-sm" href="{{ route('edit.category',$data->category_id) }}" style="width: 50px; height: 40px; margin-bottom: 2px;">
                <img src="{{ asset('img/icon/edit2.png') }}" alt="edit" style="width: 30px; height: 30px;">
            </a>
            @endcan
            <a class="btn btn-info btn-sm" href="" style="width: 50px; height: 40px; margin-bottom: 2px;">
                <img src="{{ asset('img/icon/view2.png') }}" alt="view" style="width: 30px; height: 30px;">
            </a>
            @can('deleteCate', $data)
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger" style="width: 50px; height: 40px;"><img src="{{ asset('img/icon/delete2.png') }}" alt="button" style="width: 30px; height: 30px;"></button>
            @endcan
        </form>
    </td>
</tr>
