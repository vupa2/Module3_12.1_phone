@extends('backend.layouts.master')

@section('title', ucwords(trans('title.edit', ['attribute' => 'product'])))

@section('extra-css')
    <!-- dropify -->
    <link href="{{ asset('backend/assets/libs/dropify/dropify.min.css') }}" rel="stylesheet" type="text/css" />

    {{-- Extra --}}
    <link href="{{ asset('backend/assets/libs/switchery/switchery.min.css') }}" rel="stylesheet" type="text/css" />
@endsection

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card-box">
                <h4 class="header-title mt-0 mb-3 text-capitalize">{{ trans('form-label.information', ['attribute' => 'product']) }}</h4>

                <form class="w-100" data-parsley-validate action="{{ route('admin.products.update', $product) }}" novalidate enctype="multipart/form-data" method="POST">
                    @csrf
                    @method('PUT')
                    <input class="d-none" name="id" type="number" value="{{ $product->id }}">
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label class="text-capitalize col-form-label" for="name">{{ trans('form-label.name') }}<span class="text-danger"> (*)</span></label>
                            <input id="name" class="form-control @error('name') parsley-error @enderror" name="name" type="text" value="{{ old('name', $product->name) }}" parsley-trigger="change" required placeholder="Enter product's name">
                            @error('name')
                                <ul class="parsley-errors-list filled" aria-hidden="false">
                                    <li class="parsley-required">{{ $message }}</li>
                                </ul>
                            @enderror
                        </div>
                        <div class="form-group col-md-6">
                            <label class="text-capitalize col-form-label d-block" for="active">{{ trans('form-label.active') }}</label>
                            <input type="hidden" name="active" value="0">
                            <input type="checkbox" name="active" id="active" class="form-control" data-plugin="switchery" data-color="#00b19d" value="1">
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label class="text-capitalize col-form-label" for="brand_id">{{ trans('form-label.brand') }}</label>
                            <select id="brand_id" name="brand_id" class="form-control text-capitalize @error('brand_id') parsley-error @enderror">
                                <option value="">None</option>
                                @foreach ($brands as $brand)
                                    <option value="{{ $brand->id }}" @if (old('brand_id', $product->brand_id) == $brand->id) selected @endif>{{ $brand->name }}</option>
                                @endforeach
                            </select>
                            @error('brand_id')
                                <ul class="parsley-errors-list filled" aria-hidden="false">
                                    <li class="parsley-required">{{ $message }}</li>
                                </ul>
                            @enderror
                        </div>
                        <div class="form-group col-md-6">
                            <label class="text-capitalize col-form-label" for="category_id">{{ trans('form-label.category') }}</label>
                            <select id="category_id" name="category_id" class="form-control text-capitalize @error('category_id') parsley-error @enderror">
                                <option value="">None</option>
                                @foreach ($categories as $category)
                                    <option value="{{ $category->id }}" @if (old('category_id', $product->category_id) == $category->id) selected @endif>{{ $category->name }}</option>
                                @endforeach
                            </select>
                            @error('category_id')
                                <ul class="parsley-errors-list filled" aria-hidden="false">
                                    <li class="parsley-required">{{ $message }}</li>
                                </ul>
                            @enderror
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label class="text-capitalize col-form-label" for="price">{{ trans('form-label.price') }}<span class="text-danger"> (*)</span></label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">$</span>
                                </div>
                                <input id="price" class="form-control @error('price') parsley-error @enderror" name="price" type="number" min="0" value="{{ old('price', $product->price) }}" parsley-trigger="change" required placeholder="Enter product's price">
                            </div>
                            @error('price')
                                <ul class="parsley-errors-list filled" aria-hidden="false">
                                    <li class="parsley-required">{{ $message }}</li>
                                </ul>
                            @enderror
                        </div>
                        <div class="form-group col-md-6">
                            <label class="text-capitalize col-form-label" for="price">{{ trans('form-label.quantity') }}<span class="text-danger"> (*)</span></label>
                            <input id="quantity" class="form-control @error('quantity') parsley-error @enderror" name="quantity" type="number" min="0" value="{{ old('quantity', $product->quantity) }}" parsley-trigger="change" required placeholder="Enter product's quantity">
                            @error('quantity')
                                <ul class="parsley-errors-list filled" aria-hidden="false">
                                    <li class="parsley-required">{{ $message }}</li>
                                </ul>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="text-capitalize" for="description">{{ trans('form-label.description') }}</label>
                        <textarea id="description" class="form-control @error('description') parsley-error @enderror" name="description" placeholder="Enter product's description" rows="6">{{ old('description', $product->description) }}</textarea>
                        @error('description')
                            <ul class="parsley-errors-list filled" aria-hidden="false">
                                <li class="parsley-required">{{ $message }}</li>
                            </ul>
                        @enderror
                    </div>
                    <div class="form-group @error('description') parsley-error @enderror">
                        <label class="text-capitalize" for="image">{{ trans('form-label.image') }}</label>
                        <input id="image" name="image" type="file" class="form-control-file dropify" data-max-file-size="2M" data-height="80" data-allowed-file-extensions="png jpeg jpg">
                        @error('image')
                            <ul class="parsley-errors-list filled" aria-hidden="false">
                                <li class="parsley-required">{{ $message }}</li>
                            </ul>
                        @enderror
                    </div>

                    <div class="form-group text-left mb-0 text-center text-capitalize ">
                        <button class="btn btn-primary waves-effect waves-light text-capitalize width-md mr-1" type="submit">
                            {{ trans('button.submit') }}
                        </button>
                        <a class="btn btn-secondary waves-effect waves-light width-md" type="button" href="{{ route('admin.products.index') }}">
                            {{ trans('button.cancel') }}
                        </a>
                    </div>

                </form>
            </div>
        </div><!-- end col -->

        <div class="col-md-4">
            <div class="card-box">
                <h4 class="header-title text-capitalize mt-0 mb-3">{{ trans('form-label.image') }}</h4>
                @empty($product->image)
                    <h1 class="font-weight-bold text-capitalize text-center">{{ trans('no-data.no', ['attribute' => 'image']) }}</h1>
                @else
                    <img class="w-100 h-100" src="{{ asset($product->image) }}" alt>
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

    {{-- Extra --}}
    <script src="{{ asset('backend/assets/libs/bootstrap-tagsinput/bootstrap-tagsinput.min.js') }}"></script>
    <script src="{{ asset('backend/assets/libs/switchery/switchery.min.js') }}"></script>
    <script src="{{ asset('backend/assets/libs/multiselect/jquery.multi-select.js') }}"></script>
    <script src="{{ asset('backend/assets/libs/jquery-quicksearch/jquery.quicksearch.min.js') }}"></script>

    <script src="{{ asset('backend/assets/libs/select2/select2.min.js') }}"></script>
    <script src="{{ asset('backend/assets/libs/bootstrap-touchspin/jquery.bootstrap-touchspin.min.js') }}"></script>
    <script src="{{ asset('backend/assets/libs/jquery-mask-plugin/jquery.mask.min.js') }}"></script>
    <script src="{{ asset('backend/assets/libs/moment/moment.js') }}"></script>
    <script src="{{ asset('backend/assets/libs/bootstrap-timepicker/bootstrap-timepicker.min.js') }}"></script>
    <script src="{{ asset('backend/assets/libs/bootstrap-colorpicker/bootstrap-colorpicker.min.js') }}"></script>
    <script src="{{ asset('backend/assets/libs/bootstrap-datepicker/bootstrap-datepicker.min.js') }}"></script>
    <script src="{{ asset('backend/assets/libs/bootstrap-daterangepicker/daterangepicker.js') }}"></script>
    <script src="{{ asset('backend/assets/libs/bootstrap-maxlength/bootstrap-maxlength.min.js') }}"></script>


    <script>
        const active = '{{ $product->active }}' != 0;
        $('#active').prop('checked', active);
        $('#active').closest('.form-group').children("input:first").prop("disabled", active);

        $("#active").on('load change', function() {
            if ($(this).is(':checked')) {
                $(this).closest('.form-group').children("input:first").prop("disabled", true);
            } else {
                $(this).closest('.form-group').children("input:first").prop("disabled", false);
            }
        });

    </script>

    <script src="{{ asset('backend/assets/js/pages/form-advanced.init.js') }}"></script>


@endpush