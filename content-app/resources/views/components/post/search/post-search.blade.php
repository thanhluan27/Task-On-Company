<tr>
    <td>
        <a href="{{ route('detail', $data->post_id) }}"><img style="width: 100px;" src="{{ asset('storage/img/posts/'.$data->image) }}" alt="image"></a>
    </td>
    <td style="text-align: center;">{{ $data->title }}</td>
    <td style="text-align: center;"><a href="{{ $data->slug }}">{{ substr($data->slug, 0, 20) }} ...</a></td>
    <td style="text-align: center;">{{ $data->status }}</td>
    <td style="text-align: center;">{{ substr($data->excerpt, 0, 10) }} ...</td>
    <td style="text-align: center;">{{ substr($data->content, 0, 50) }} ...</td>
    @if ($data->feature == 1)
    <td style="text-align: center;"><strong>Nổi bật</strong></td>
    @elseif ($data->feature == 0)
    <td style="text-align: center;"><strong>Không nổi bật</strong></td>
    @endif
    <td style="text-align: center;">{{ $data->posted_at ? Carbon\Carbon::parse($data->posted_at)->format('d-m-Y') : '-' }}</td>
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
