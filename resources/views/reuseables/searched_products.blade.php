
    <div class="allcategorys-wrapper">
        <div class="container-fluid">
            <div class="col-md-12 p-2"><b>{{$message}}</b></div>
            <div class="row">

            @forelse($all_products as $product)
            <div class="col-md-3">
                <div class="bestsallerslideritem">
                <a href="{{ route('products', ['category' => $product->category->category_slug, 'product' => $product->product_slug]) }}">
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
            @empty
                <h3 class="mt-3">No data found</h3>
            @endforelse
            </div>
       
            </div>
           
            <div class="pagination-box text-end serach-pagination" style="float: right">
            {{ $all_products->links() }}
            
        </div>
           
        
   
        </div>
    </div>
    

   
