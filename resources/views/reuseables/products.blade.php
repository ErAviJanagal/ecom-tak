<div class="allproductswrapper">
    <div class="allproductightbox d-flex">
        <h3 class="title-custom">{{ $category_with_products->category_name ?? $category_with_products->category_name}}</h3>
        
    </div>
    <div class="allproduct">
        <div class="row">
        @foreach($products as $product)
        <div class="col-md-4">
            <div class="bestsallerslideritem">
            <a href="{{ route('products', ['category' => $category_with_products->category_slug, 'product' => $product->product_slug]) }}">
            <div class="slideritemimg">
                <img src="{{ asset($product->product_image) }}">
            </div>
            <h4>{{$product->product_name}}</h4>
            
            <h6>
                <span class="pricediscount">Rs {{$product->sale_price}}</span>
                <span class="pricemain">Rs {{$product->regular_price}}</span>
            </h6>
            
            </a>
            </div>
        </div>
        @endforeach  
        
        </div>
    </div>
    </div>
    <div class="bottompaginationbox">
    <div class="row">
    <div class="col-md-6">
        Items <span>{{ $products->firstItem() }}</span> to <span>{{ $products->lastItem() }}</span> of <span>{{ $products->total() }}</span> total
    </div>
    <div class="col-md-6">
        <div class="pagination-box text-end">
            {{ $products->links() }}
            
        </div>
    </div>
    </div>
</div>