@extends('backend.layouts.master')

@section('title', ucwords(trans('title.create', ['attribute' => 'category'])))

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card-box">
                <h4 class="header-title mt-0 mb-3 text-capitalize">{{ trans('form-label.information', ['attribute' => 'category']) }}</h4>

                <form class="w-100" data-parsley-validate action="{{ route('admin.categories.store') }}" novalidate enctype="multipart/form-data" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="name" class="text-capitalize col-form-label">{{ trans('form-label.name', ['attribute' => 'category']) }}<span class="text-danger"> (*)</span></label>
                        <input id="name" class="form-control @error('name') parsley-error @enderror" name="name" type="text" value="{{ old('name') }}" parsley-trigger="change" required placeholder="Enter category's name">
                        @error('name')
                            <ul class="parsley-errors-list filled" aria-hidden="false">
                                <li class="parsley-required">{{ $message }}</li>
                            </ul>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="parent_id" class="text-capitalize col-form-label">{{ trans('form-label.parent', ['attribute' => 'category']) }}</label>
                        <select class="form-control text-capitalize @error('parent_id') parsley-error @enderror" name="parent_id" id="parent_id">
                            <option value="">{{ trans('form-label.no parent') }}</option>
                            @foreach ($categories as $categoryLoop)
                                <option value="{{ $categoryLoop->id }}" @if (old('parent_id') == $categoryLoop->id) selected @endif>{{ $categoryLoop->name }}</option>
                            @endforeach
                        </select>
                        @error('parent_id')
                            <ul class="parsley-errors-list filled" aria-hidden="false">
                                <li class="parsley-required">{{ $message }}</li>
                            </ul>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="description" class="text-capitalize col-form-label">{{ trans('form-label.description', ['attribute' => 'category']) }}</label>
                        <textarea id="description" class="form-control @error('description') parsley-error @enderror" name="description" placeholder="Enter category's description" rows="6">{{ old('description') }}</textarea>
                        @error('description')
                            <ul class="parsley-errors-list filled" aria-hidden="false">
                                <li class="parsley-required">{{ $message }}</li>
                            </ul>
                        @enderror
                    </div>

                    <div class="form-group text-left mb-0 text-center text-capitalize">
                        <button class="btn btn-primary waves-effect waves-light width-md text-capitalize mr-1" type="submit">
                            {{ trans('button.submit') }}
                        </button>
                        <a class="btn btn-secondary waves-effect waves-light width-md" type="button" href="{{ route('admin.categories.index') }}">
                            {{ trans('button.cancel') }}
                        </a>
                    </div>

                </form>
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
@endpush
