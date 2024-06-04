@extends('layouts.app')

@section('content')
<main>
      <div class="allcategorys-wrapper">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <ul class="top-title-all-pages d-flex">
                <li>
                 Home
                </li>
                <li>
                  <img src="{{asset('images/arrowm.png')}}">
                </li>
                <li>
                  <a href="#">{{ $category_with_products->category_name ?? $category_with_products->category_name}}</a>
                </li>
              </ul>
            </div>
          </div>
          <div class="row">
            @include('layouts.categories_sidebar')

            <div class="col-md-8">
             @include('reuseables.products')
              
            </div>
          </div>
        </div>
      </div>
      </div>
    </main>
@endsection