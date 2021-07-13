@extends('backend.layouts.master')

@section('title', ucwords(trans('title.list', ['attribute' => 'brand'])))

@section('extra-css')
    <!-- dropify -->
    <link href="{{ asset('backend/assets/libs/dropify/dropify.min.css') }}" rel="stylesheet" type="text/css" />
@endsection

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
                    <h4 class="header-title text-capitalize d-inline-block">{{ trans('table.table_name', ['attribute' => 'brand']) }}</h4>
                    <a class="text-white text-capitalize btn btn-rounded btn-primary width-lg waves-effect waves-light" href="{{ route('admin.brands.create') }}">{{ trans('button.create') }}</a>
                </div>

                <div class="table-responsive">
                    <table class="table table-hover mb-0 text-center">
                        <thead>
                            <tr>
                                <th scope="col" style="width: 5%">#</th>
                                <th class="text-capitalize" scope="col" style="width: 30%">{{ trans('table.name') }}</th>
                                <th class="text-capitalize" scope="col" style="width: 20%">{{ trans('table.image') }}</th>
                                <th class="text-capitalize" scope="col" style="width: 25%">{{ trans('table.updated') }}</th>
                                <th class="text-capitalize" scope="col" style="width: 20%">{{ trans('table.actions') }}</th>
                            </tr>
                        </thead>
                        <tbody class="table-striped">
                            @forelse ($brands as $brand)
                                <tr>
                                    <th class="align-middle" scope="row">{{ $brands->firstItem() + $loop->index }}</th>
                                    <td class="align-middle">{{ $brand->name }}</td>
                                    <td class="align-middle">
                                        @if (empty($brand->image))
                                            <span class="text-capitalize">{{ trans('no-data.no', ['attribute' => 'image']) }}</span>
                                        @else
                                            <img class="align-middle" src="{{ asset($brand->image) }}" alt="{{ strtolower($brand->image) }}" width="70" height="auto">
                                        @endif
                                    </td>
                                    <td class="align-middle">{{ $brand->updated_at->diffForHumans() }}</td>
                                    <td class="align-middle">
                                        <a class="btn btn-sm btn-rounded btn-success text-capitalize" href="{{ route('admin.brands.edit', $brand) }}"><i class="fe-edit"></i> {{ trans('button.edit') }}</a>
                                        <a class="btn btn-sm btn-rounded btn-danger text-white brand-delete-btn text-capitalize" href="javascript: void(0);"><i class="fe-trash-2"></i> {{ trans('button.delete') }}</a>
                                        <form class="d-none brand-delete-form" action="{{ route('admin.brands.destroy', $brand) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                        </form>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="6">
                                        <h3 class="font-weight-bold text-capitalize">{{ trans('no-data.no_found', ['attribute' => 'brands']) }}</h3>
                                    </td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>

                </div>
            </div>

            <div class="d-flex justify-content-center">
                {{ $brands->links() }}
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

                t('.brand-delete-btn').click(function(e) {
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
                            $(e.target).closest('td').find('.brand-delete-form').submit();
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
