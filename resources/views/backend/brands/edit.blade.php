@extends('backend.layouts.master')

@section('title', ucwords(trans('title.edit', ['attribute' => 'brand'])))

@section('extra-css')
    <!-- dropify -->
    <link href="{{ asset('backend/assets/libs/dropify/dropify.min.css') }}" rel="stylesheet" type="text/css" />
@endsection

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card-box">
                <h4 class="header-title mt-0 mb-3 text-capitalize">{{ trans('form-label.information', ['attribute' => 'brand']) }}</h4>

                <div class="mb-3">
                    <span class="font-italic d-block mb-1">{{ 'ID: ' . $brand->id . ' - Slug: ' . $brand->slug }}</span>
                    <span class="font-italic d-block mb-1">{{ 'Created: ' . $brand->created_at->diffForHumans() . ' - Updated: ' . $brand->updated_at->diffForHumans() }}</span>
                </div>

                <form class="w-100" data-parsley-validate action="{{ route('admin.brands.update', $brand) }}" novalidate enctype="multipart/form-data" method="POST">
                    @csrf
                    @method('PUT')
                    <input class="d-none" name="id" type="number" value="{{ $brand->id }}">
                    <div class="form-group">
                        <label class="text-capitalize col-form-label" for="name">{{ trans('form-label.name') }}<span class="text-danger"> (*)</span></label>
                        <input id="name" class="form-control @error('name') parsley-error @enderror" name="name" type="text" value="{{ old('name', $brand->name) }}" parsley-trigger="change" required placeholder="Enter brand's name">
                        @error('name')
                            <ul class="parsley-errors-list filled" aria-hidden="false">
                                <li class="parsley-required">{{ $message }}</li>
                            </ul>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label class="text-capitalize col-form-label" for="description">{{ trans('form-label.description') }}</label>
                        <textarea id="description" class="form-control @error('description') parsley-error @enderror" name="description" placeholder="Enter brand's description" parsley-trigger="change" rows="6">{{ old('description', $brand->description) }}</textarea>
                        @error('description')
                            <ul class="parsley-errors-list filled" aria-hidden="false">
                                <li class="parsley-required">{{ $message }}</li>
                            </ul>
                        @enderror
                    </div>
                    <div class="form-group @error('description') parsley-error @enderror">
                        <label class="text-capitalize col-form-label" for="image">{{ trans('form-label.image') }}</label>
                        <input id="image" name="image" type="file" class="form-control-file dropify" data-max-file-size="2M" data-height="80" data-allowed-file-extensions="png jpeg jpg">
                        @error('image')
                            <ul class="parsley-errors-list filled" aria-hidden="false">
                                <li class="parsley-required">{{ $message }}</li>
                            </ul>
                        @enderror
                    </div>

                    <div class="form-group text-left mb-0 text-center text-capitalize">
                        <button class="btn btn-primary waves-effect waves-light text-capitalize width-md mr-1" type="submit">
                            {{ trans('button.submit') }}
                        </button>
                        <a class="btn btn-secondary waves-effect waves-light width-md" type="button" href="{{ route('admin.brands.index') }}">
                            {{ trans('button.cancel') }}
                        </a>
                    </div>

                </form>
            </div>

        </div><!-- end col -->

        <div class="col-md-4">
            <div class="card-box">
                <h4 class="header-title text-capitalize mt-0 mb-3">{{ trans('form-label.image') }}</h4>
                @empty($brand->image)
                    <h1 class="font-weight-bold text-capitalize text-center">{{ trans('no-data.no', ['attribute' => 'image']) }}</h1>
                @else
                    <img class="w-100 h-100" src="{{ asset($brand->image) }}" alt>
                @endempty
            </div>

        </div><!-- end col -->

    </div>
    <!-- end row -->
@endsection

@push('scripts')
    <!-- Validation js (Parsleyjs) -->
    <script src="{{ asset('backend/assets/libs/parsleyjs/parsley.min.js') }}"></script>

    <!-- validation init -->
    <script src="{{ asset('backend/assets/js/pages/form-validation.init.js') }}"></script>

    <!-- dropify js -->
    <script src="{{ asset('backend/assets/libs/dropify/dropify.min.js') }}"></script>

    <!-- form-upload init -->
    <script src="{{ asset('backend/assets/js/pages/form-fileupload.init.js') }}"></script>
@endpush
