<tr>
    <th class="align-middle" scope="row">{{ $index . '.' . $loop->iteration }}</th>
    <td class="align-middle">{{ $category->name }}</td>
    <td class="align-middle @if ($loop->iteration === 1) text-danger @endif">{{ $category->parent->name }}</td>
    <td class="align-middle">{{ $category->updated_at->diffForHumans() }}</td>
    <td class="align-middle">
        <a class="btn btn-sm btn-rounded btn-success text-capitalize" href="{{ route('admin.categories.edit', $category) }}"><i class="fe-edit"></i> {{ trans('button.edit') }}</a>
        <a class="btn btn-sm btn-rounded btn-danger text-white category-delete-btn text-capitalize" href="javascript: void(0);"><i class="fe-trash-2"></i> {{ trans('button.delete') }}</a>
        <form class="d-none category-delete-form" action="{{ route('admin.categories.destroy', $category) }}" method="POST">
            @csrf
            @method('DELETE')
        </form>
    </td>
</tr>
@foreach ($category->children as $child)
    @include('backend.partials.categories.list', ['category' => $child, 'index' => ($index . '.' . $loop->parent->iteration)])
@endforeach
