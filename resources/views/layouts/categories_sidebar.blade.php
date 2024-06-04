<div class="col-md-{{isset($type) ? 3 : 4}}">
    <h3 class="title-custom">
    Categories 
    <button id="btn-hide" class="occt mobilehide">Open</button> 
    <button id="btn-show" style="display: none;">Close</button>
    </h3>
    <div class="catgorycontainer">
    <div class="catgorybox-left">
        <ul class="catgorycontainer-inner">
        @foreach($categories as $category)
            @if(isset($type))
                <li class="sidebar-dropdown {{$category->category_slug == $product->category->category_slug  ? 'active' : ''}}">
            @else
                <li class="sidebar-dropdown {{$category->category_slug == $category_with_products->category_slug  ? 'active' : ''}}">
            @endif
                <a class="alinkcat" href="{{ route('products', ['category' => $category->category_slug]) }}">
                    <span>{{ $category->category_name }}</span>
                    <!-- <i class="fa fa-angle-right" aria-hidden="true"></i> -->
                </a>
            </li>
        @endforeach

        </ul>
    </div>
    </div>
</div>