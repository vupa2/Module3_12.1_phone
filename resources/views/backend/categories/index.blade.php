@extends('backend.layouts.master')

@section('title', ucwords(trans('title.list', ['attribute' => 'category'])))

@section('content')
    {{-- <div class="row">
        <div class="col-lg-12">
            <div class="card-box">
                <h4 class="mt-0 header-title">Search</h4>
            </div>
        </div>
    </div> --}}

    <div class="row">
        <div class="col-md-12">
            <div class="card-box">

                <div class="mt-0 mb-3 d-flex justify-content-between align-items-center">
                    <h4 class="header-title text-capitalize d-inline-block">{{ trans('table.table_name', ['attribute' => 'category']) }}</h4>
                    <a class="text-white text-capitalize btn btn-rounded btn-primary width-lg waves-effect waves-light" href="{{ route('admin.categories.create') }}">{{ trans('button.create') }}</a>
                </div>

                <div class="table-responsive">
                    <table class="table table-hover mb-0 text-center">
                        <thead>
                            <tr>
                                <th class="text-capitalize" scope="col" style="width: 5%">#</th>
                                <th class="text-capitalize" scope="col" style="width: 25%">{{ trans('table.name') }}</th>
                                <th class="text-capitalize" scope="col" style="width: 25%">{{ trans('table.parent') }}</th>
                                <th class="text-capitalize" scope="col" style="width: 20%">{{ trans('table.updated') }}</th>
                                <th class="text-capitalize" scope="col" style="width: 25%">{{ trans('table.actions') }}</th>
                            </tr>
                        </thead>
                        <tbody class="table-striped">
                            @forelse ($categories as $category)
                                <tr>
                                    <th class="align-middle" scope="row">{{ $loop->iteration }}</th>
                                    <td class="align-middle">{{ $category->name }}</td>
                                    <td class="align-middle">{{ $category->parent->name ?? '' }}</td>
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
                                    @include('backend.partials.categories.list', ['category' => $child, 'index' => $loop->parent->iteration])
                                @endforeach
                            @empty
                                <tr>
                                    <td colspan="5">
                                        <h3 class="font-weight-bold text-capitalize">{{ trans('no-data.no_found', ['attribute' => 'categories']) }}</h3>
                                    </td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>

                </div>
            </div>

        </div>

    </div>
    <!--- end row -->
@endsection

@push('scripts')

    {{-- Extra scripts --}}
    <script>
        !(function(t) {
            'use strict';
            var e = function() {};
            (e.prototype.init = function() {

                t('.category-delete-btn').click(function(e) {
                    e.preventDefault();

                    Swal.fire({
                        title: 'Are you sure?',
                        text: "You won't be able to revert this!",
                        type: 'warning',
                        showCancelButton: !0,
                        confirmButtonText: 'Yes, delete it!',
                        cancelButtonText: 'No, cancel!',
                        confirmButtonClass: 'btn btn-success mt-2',
                        cancelButtonClass: 'btn btn-danger ml-2 mt-2',
                        buttonsStyling: !1
                    }).then(function(t) {
                        if (t.value) {
                            $(e.target).closest('td').find('.category-delete-form').submit();
                        } else if (t.dismiss === Swal.DismissReason.cancel) {
                            Swal.fire({
                                title: 'Cancelled',
                                text: 'Your imaginary file is safe :)',
                                type: 'error'
                            });
                        }
                    });
                });
            }),
            (t.SweetAlert = new e()),
            (t.SweetAlert.Constructor = e);
        })(window.jQuery),
        (function(t) {
            'use strict';
            window.jQuery.SweetAlert.init();
        })();

    </script>
@endpush
