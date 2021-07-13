@extends('frontend.layouts.master')

@section('content')
    <!-- SECTION -->
    <div class="section no-title">
        <h6 class="pretitle">Welcome to</h6>
        <h3 class="title large">Browse all Designs</h3>
        <hr class="line-separator">

        {{-- @include('frontend.partials.products.filter') --}}

        <!-- PRODUCT LIST -->
        <div class="product-list v2">
            @foreach ($products as $product)
                @include('frontend.partials.products.list')
            @endforeach
        </div>
        <!-- /PRODUCT LIST -->

        {{ $products->links('frontend.partials.products.pagination') }}
    </div>
    <!-- /SECTION -->

@endsection
