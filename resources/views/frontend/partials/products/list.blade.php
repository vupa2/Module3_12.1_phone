<!-- PRODUCT LIST ITEM -->
<div class="product-list-item">
    <!-- PRODUCT IMG -->
    <a href="{{ route('products.show', $product) }}">
        <figure class="product-img">
            @if ($product->image && File::exists(public_path($product->image)))
                <img src="{{ asset($product->image) }}" alt="{{ $product->name }}" />
            @else
                <img src="{{ asset('frontend/img/products/01.jpg') }}" alt="{{ $product->name }}" />
            @endif
        </figure>
    </a>
    <!-- /PRODUCT IMG -->

    <!-- PRODUCT LIST ITEM INFO -->
    <div class="product-list-item-info">
        <a href="{{ route('products.show', $product) }}">
            <h6 class="title medium">{{ $product->name }}</h6>
        </a>
        <p class="product-description medium">By {{ $product->brand_name ?? 'Unknown' }}</p>

        <h6 class="product-price medium">${{ $product->price }}</h6>

        <p class="product-description-preview">{{ Str::words($product->description, 50) }}</p>
        {{-- <!-- BUTTON LIST -->
        <div class="button-list wrap-4">
            <!-- BUTTON -->
            <a href="javascript:void(0);" class="button square" onclick="addToCart({{ $product }})">
                <!-- SVG CART -->
                <svg class="svg-cart-small">
                    <use xlink:href="#svg-cart-small"></use>
                </svg>
                <!-- /SVG CART -->
            </a>
            <!-- /BUTTON -->
        </div>
        <!-- /BUTTON LIST --> --}}
    </div>
    <!-- /PRODUCT LIST ITEM INFO -->
</div>
<!-- /PRODUCT LIST ITEM -->

<script>
    function addToCart(product) {
        console.log(product);
        // $.ajax({
        //     type: 'POST',
        //     dataType: 'json',
        //     url: '{{ route('carts.render') }}',

        // })
    }

</script>
