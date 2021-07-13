@extends('backend.layouts.master')

@section('title', 'Profile Settings')

@section('content')
    <div class="row">
        <div class="col-xl-12">
            <div class="card-box">
                <h4 class="header-title mt-0 mb-3">Profile Form</h4>

                <form action="#" data-parsley-validate novalidate class="w-50">
                    <div class="form-group">
                        <label for="name">Name*</label>
                        <input type="text" name="name" parsley-trigger="change" required
                               placeholder="Enter user name" class="form-control" id="name" value="{{ auth()->user()->name }}">
                    </div>
                    <div class="form-group">
                        <label for="email">Email address*</label>
                        <input type="email" name="email" parsley-trigger="change" required
                               placeholder="Enter email" class="form-control" id="email" value="{{ auth()->user()->email }}">
                    </div>
                    <div class="form-group">
                        <label for="pass1">Password*</label>
                        <input id="pass1" type="password" placeholder="Password" required
                               class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="passWord2">Confirm Password *</label>
                        <input data-parsley-equalto="#pass1" type="password" required
                               placeholder="Password" class="form-control" id="passWord2">
                    </div>
                    <div class="form-group">
                        <div class="checkbox">
                            <input id="remember-1" type="checkbox">
                            <label for="remember-1"> Remember me </label>
                        </div>
                    </div>

                    <div class="form-group text-left mb-0">
                        <button class="btn btn-primary waves-effect waves-light mr-1" type="submit">
                            Submit
                        </button>
                        <button type="reset" class="btn btn-secondary waves-effect waves-light">
                            Cancel
                        </button>
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
