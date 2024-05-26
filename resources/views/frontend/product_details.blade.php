@extends('frontend.layouts.app')
@section('content')
    <div class="page-content">
        <div class="container mt-2">
            <div class="product-details-top">
                <div class="product_data">
                    <div class="row">
                        <div class="col-md-5">
                            <div class="row" style="border: 1px solid #E5E7EB; margin-right: 10px">
                                <div class="col-lg-10 mt-2 m-auto">
                                    <div class="product-gallery product-gallery-vertical">
                                        <div class="row">
                                            <figure id="productDetailsImage" class="product-main-image">

                                            </figure>
                                            @if ($products->first()->inventorie_id != null)
                                                @if ($products->first()->rel_to_inventorie)
                                                    @php
                                                        $inventorie = $products->first()->rel_to_inventorie
                                                    @endphp

                                                    @foreach ($inventorie->rel_to_attribute->take(1) as $sl => $attribute)
                                                        <figure class="product-main-image productDetailsImageemptey">
                                                            <img id="product-zoom" src="{{ asset('uploads/product') }}/{{ $attribute->image }}" data-zoom-image="{{ asset('uploads/product') }}/{{ $attribute->image }}" alt="product image">

                                                            <a href="#" id="btn-product-gallery" class="btn-product-gallery">
                                                                <i class="icon-arrows"></i>
                                                            </a>
                                                        </figure>
                                                    @endforeach
                                                    <div id="product-zoom-gallery" class="product-image-gallery">
                                                        @foreach ($inventorie->rel_to_attribute as $sl => $attribute)
                                                            <a class="product-gallery-item active" href="#" data-image="{{ asset('uploads/product') }}/{{ $attribute->image }}" data-zoom-image="assets/images/products/single/1-big.jpg">
                                                                <img src="{{ asset('uploads/product') }}/{{ $attribute->image }}" alt="product side">
                                                            </a>
                                                        @endforeach
                                                    </div>
                                                @endif
                                            @else
                                                <figure class="product-main-image">
                                                    <img id="product-zoom"
                                                        src="{{ asset('uploads/product') }}/{{ $products->first()->image }}"
                                                        data-zoom-image="{{ asset('uploads/product') }}/{{ $products->first()->image }}"
                                                        alt="product image">
                                                    <a href="" id="btn-product-gallery" class="btn-product-gallery">
                                                        <i class="icon-arrows"></i>
                                                    </a>
                                                </figure>
                                            @endif

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6 pt-3" style="border: 1px solid #E5E7EB; margin-left: 10px">
                            <form action="{{ route('cart.store') }}" method="POST">
                                @csrf
                                <input type="hidden" name="product_id" class="product_id" value="{{ $products->first()->id }}">
                                <div class="product-details">
                                <h1 class="product-title">{{ $products->first()->name }}</h1>
                                @if ($products->first()->inventorie_id != null)
                                    <input type="hidden" name="inventory_id" class="inventorie_id" value="{{ $products->first()->inventorie_id }}">
                                    <div class="product_code" style="border-bottom: 1px solid #E5E7EB; padding-bottom: 10px; margin-bottom: 10px">
                                        <p class="sku_text"><strong>SKU: </strong>
                                            @if ($products->first()->rel_to_inventorie)
                                                <span style="font-weight: 400">{{ $products->first()->rel_to_inventorie->sku }}</span>
                                            @endif
                                        </p>
                                    </div>
                                    <div class="product-price">
                                        @if ($products->first()->rel_to_inventorie)
                                            @php
                                                $inventorie = $products->first()->rel_to_inventorie
                                            @endphp
                                            @foreach ($inventorie->rel_to_attribute->take(1) as $attribute)
                                                @if ($attribute->sell_price != null)
                                                    Price: <span class="line-through pl-3 text-dark" style="font-size: 14px">Tk {{ $attribute->price }}</span>
                                                    <span class="pl-3">Tk {{ $attribute->sell_price }}</span>
                                                @else
                                                    Price: <span class="pl-3">Tk {{ $attribute->sell_price }}</span>
                                                @endif
                                            @endforeach
                                        @endif
                                    </div>
                                    <div class="details-filter-row details-row-size">
                                        <div class="product-nav ">
                                            <label for="color">Brand:</label>
                                            @if ($products->first()->rel_to_inventorie)
                                                <span style="font-weight: 400">{{ $products->first()->rel_to_inventorie->brand }}</span>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="details-filter-row details-row-size">
                                        <div class="product-nav ">
                                            <label for="color">Status:</label>
                                            @if ($products->first()->rel_to_inventorie)
                                                @php
                                                    $inventorie = $products->first()->rel_to_inventorie
                                                @endphp
                                                @foreach ($inventorie->rel_to_attribute->take(1) as $attribute)
                                                    @if ($attribute->quantity != 0)
                                                        <span style="font-weight: 400" class="text-success">In Stock</span>
                                                    @else
                                                        <span style="font-weight: 400" class="text-danger">Out Of Stock</span>
                                                    @endif
                                                @endforeach
                                            @endif

                                        </div>
                                    </div>
                                    @if ($products->first()->rel_to_inventorie)
                                        @php
                                            $inventorie = $products->first()->rel_to_inventorie;
                                        @endphp
                                        @if ($inventorie->rel_to_attribute->where('weight', '!=', null)->isNotEmpty())
                                            <div class="details-filter-row details-row-size">
                                                <label>Weight:</label>
                                                <div class="product-nav product-nav-thumbs product_details_weight">
                                                    @foreach ($inventorie->rel_to_attribute as $attribute)
                                                        <input type="radio" id="weight_details_{{ $attribute->id }}" class="px-2 weight-option inpute_weight" name="attribute_id" value="{{ $attribute->id }}"  required>
                                                        <label for="weight_details_{{ $attribute->id }}">{{ $attribute->weight }}</label>
                                                    @endforeach
                                                </div>
                                            </div>
                                        @elseif ($inventorie->rel_to_attribute->where('rel_to_color', '!=', null)->isNotEmpty())
                                            @if ($available_colors->isNotEmpty())
                                                <div class="details-filter-row details-row-size">
                                                    @php
                                                        $color = null;
                                                    @endphp
                                                    <label>Color:</label>
                                                    <div class="product-nav product-nav-thumbs product_details_color">
                                                        @foreach ($available_colors as $colorId => $colorAttributes)
                                                            @php
                                                                $color = $colorAttributes->first()->rel_to_color;
                                                            @endphp
                                                            <label for="color_details_{{ $colorId }}" class="color-option" data-color="{{ $color->name }}" style="background: {{ $color->code }}">{{ $color->name }}</label>
                                                            <input id="color_details_{{ $colorId }}" class="color_id" type="radio" name="color_id" value="{{ $color->id }}" required>
                                                        @endforeach
                                                        @error('color_id')
                                                            <strong class="text-danger">{{ $message }}</strong>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="details-filter-row details-row-size" id="size_id">

                                                </div>

                                                <div class="details-filter-row details-row-size" id="size-options">
                                                    <!-- Size options will be dynamically populated here -->
                                                </div>

                                            @endif
                                        @endif
                                        <div id="productDetails">
                                            <!-- Display dynamic content here (image, price, quantity) -->
                                        </div>
                                    @endif

                                    <div class="details-filter-row details-row-size pro_details_ico">
                                        <label for="qty">পরিমান :</label>
                                        <div class="product-details-quantity">
                                            <input type="number" name="quantity" id="qty"
                                                class="form-control qty-input" value="1" min="1" max="10"
                                                step="1" data-decimals="0" required>

                                        </div>
                                    </div>
                                @else
                                    <div class="product_code"
                                        style="border-bottom: 1px solid #E5E7EB; padding-bottom: 10px; margin-bottom: 10px">
                                        <p class="sku_text"><strong>SKU: </strong>
                                            <span style="font-weight: 400">{{ $products->first()->sku }}</span>
                                        </p>
                                    </div>
                                    <div class="product-price">
                                        @if ($products->first()->sell_price != null)
                                            Price: <span class="line-through pl-3 text-dark"
                                                style="font-size: 14px">Tk{{ $products->first()->price }}</span>
                                            <span class="pl-3">Tk {{ $products->first()->sell_price }}</span>
                                        @else
                                            Price: <span class="pl-3">Tk {{ $products->first()->sell_price }}</span>
                                        @endif
                                    </div>
                                    <div class="details-filter-row details-row-size">
                                        <div class="product-nav ">
                                            <label for="color">Brand:</label>
                                            <span >{{ $products->first()->brand }}</span>
                                        </div><!-- End .product-nav -->
                                    </div>

                                    <div class="details-filter-row details-row-size">
                                        <div class="product-nav ">
                                            <label for="color">Status:</label>
                                            @if ($products->first()->quantity != 0)
                                                <span style="font-weight: 400" class="text-success">In Stock</span>
                                            @else
                                                <span style="font-weight: 400" class="text-danger">Out Of Stock</span>
                                            @endif
                                        </div><!-- End .product-nav -->
                                    </div>
                                    @if ($products->first()->weight != null)
                                        <div class="details-filter-row details-row-size">
                                            <label>Weight:</label>
                                            <div class="product-nav product-nav-thumbs product_details_weight">
                                                @foreach ($products as $product)
                                                    <input type="radio" id="weight_details_{{ $product->id }}" class="px-2 weight-option inpute_weight" name="attribute_id" value="{{ $product->id }}"  required>
                                                    <label for="weight_details_{{ $product->id }}">{{ $product->weight }}</label>
                                                @endforeach
                                            </div>
                                        </div>
                                    @elseif ($products->first()->color_id != null)
                                        <div class="details-filter-row details-row-size">
                                            <label>Color:</label>
                                            <div class="product-nav product-nav-thumbs">
                                                @foreach ($products as $product)
                                                    @if ($product->rel_to_color != null)
                                                    <label for="color_details_{{ $product->id }}" class="color-option" data-color="{{ $product->rel_to_color->name }}" style="background: {{ $product->rel_to_color->code }}">{{ $product->rel_to_color->name }}</label>
                                                    <input id="color_details_{{ $product->id }}" type="radio" name="attribute_id" class="inpute_color" value="{{ $product->id }}" required>
                                                    @endif
                                                @endforeach
                                            </div>
                                        </div>
                                    @endif
                                    <div class="details-filter-row details-row-size">
                                        <input type="hidden" name="inventory_id" class="inventory_id" value="{{ $products->first()->inventory_id }}">
                                    </div><!-- End .details-filter-row -->

                                    <div class="details-filter-row details-row-size pro_details_ico">
                                        <label for="qty">পরিমান :</label>
                                        <div class="product-details-quantity">
                                            <input type="number" name="quantity" id="qty"
                                                class="form-control qty-input" value="1" min="1" max="10"
                                                step="1" data-decimals="0" required>

                                        </div><!-- End .product-details-quantity -->
                                    </div>
                                @endif

                                    <div class="mt-3" style="border-top: 2px solid #E5E7EB; padding-top: 10px; display: flex; width: 100%">
                                        <button type="submit" class="btn-cart mr-3 product_details_card" name="btn" value="1" id="load"><span>Add to cart</span></button>
                                        <button type="submit" class=" btn-cart btn-buy product_details_buy" name="btn" value="2"><span>Order Now</span></button>
                                    </div><!-- End .product-details-action -->
                                    <div class="my-3 call-btn product_details_chat">
                                        <a href="tel: {{$setting->first()->number_two}}">Call Now</a>
                                    </div>
                                    <div class="my-3 call-btn product_details_chat">
                                        <a href="https://api.whatsapp.com/send?phone=88{{$setting->first()->number_two}}&text=Hello%20there,%20I%20found%20you%20on%20website!%20i%20would%20like%20to%20talk%20about%20your%20{{ $products->first()->name }}%20service." target="_blank">WhatsApp</a>
                                    </div>
                                </div><!-- End .product-details -->
                            </form>
                        </div><!-- End .col-md-6 -->
                    </div>
                </div>
            </div><!-- End .product-details-top -->

            <div class="product-details-tab">
                <ul class="nav nav-pills justify-content-center" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="product-desc-link" data-toggle="tab" href="#product-desc-tab" role="tab" aria-controls="product-desc-tab" aria-selected="true">পন্যের বিবরণ</a>
                    </li>
                </ul>
                <div class="tab-content">
                    <div class="tab-pane fade show active" id="product-desc-tab" role="tabpanel" aria-labelledby="product-desc-link">
                        <div class="product-desc-content">
                            <h3>Product Information</h3>
                            <p>{!! $products->first()->description !!}</p>
                        </div><!-- End .product-desc-content -->
                    </div><!-- .End .tab-pane -->
                </div><!-- End .tab-content -->
            </div>
        </div>
    </div>
@endsection

@section('footer_script')

<script>
    $('.color_id').click(function(){
        var color_id = $(this).val();
        var inventorie_id = '{{  $products->first()->inventorie_id }}';
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $.ajax({
            type:'POST',
            url:'/getsize',
            data:{'color_id':color_id, 'inventorie_id':inventorie_id},
            success:function(data){
                $('#size_id').html(data);
            }
        });
    });
</script>

    <script>
        $('input[name="color"]').on('click', function() {
            var attribute_id = $(this).val();
            var inventorie_id = '{{  $products->first()->inventorie_id }}';
            $.ajax({
                url: '{{ route("getProductDetails") }}',
                method: 'GET',
                data: { attribute_id: attribute_id, inventorie_id: inventorie_id},
                success: function(response) {
                    updateProductDetails(response);
                },
                error: function(xhr, status, error) {
                    console.error(error);
                }
            });
        });

        $('input[name="attribute_id"]').on('click', function() {
            var attribute_id = $(this).val();
            var inventorie_id = '{{  $products->first()->inventorie_id }}';
            $.ajax({
                url: '{{ route("getProductDetails") }}',
                method: 'GET',
                data: { attribute_id: attribute_id, inventorie_id: inventorie_id},
                success: function(response) {
                    updateProductDetails(response);
                },
                error: function(xhr, status, error) {
                    console.error(error);
                }
            });
        });
                    // <p>Quantity: ${response.quantity}</p>
        function updateProductDetails(response) {
            $('.productDetailsImageemptey').empty();
            $('#productDetails').html(`
                <figure>
                    <del style="font-size:22px; font-weight:600; color:#9d9d9d; margin-right:10px">${response.price} Tk </del>
                    <span style="font-size:22px; font-weight:600; color:#000"> ${response.sell_price} Tk </span>
                    <input type="hidden" name="price" value="${response.sell_price}" >
                </figure>
            `);
            $('#productDetailsImage').html(`
                <div>
                    <figure class="product-main-image productDetailsImageemptey">
                        <img id="product-zoom" src="{{ asset('uploads/product') }}/${response.image}" data-zoom-image="{{ asset('uploads/product') }}/${response.image}" alt="product image">

                        <a href="#" id="btn-product-gallery" class="btn-product-gallery">
                            <i class="icon-arrows"></i>
                        </a>
                    </figure>
                </div>
            `);
        }
    </script>
@endsection
