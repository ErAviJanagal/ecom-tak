@extends('layouts.app')

@section('content')

<main>
    <div class="cart-wrapper">
     @include('reuseables.cart')
    </div>
  </main>
@endsection

@push('scripts')
<script>
    function cartProductManager(id, action) {
        $.ajax({
            url: "{{ route('manage-cart-product') }}",
            type: 'POST',
            data: {
                id: id,
                action:action,
                _token: '{{ csrf_token() }}'
            },
            success: function(response) {
                $('.cart-wrapper').html(response.html);
                $('.cart_counter').html(response.cart_count);
                // swal("Good job!", response.message, "success");
            },
            error: function(jqXHR, textStatus, errorThrown) {
                let errorResponse = jqXHR.responseJSON ? jqXHR.responseJSON.message : 'Something went wrong';
                swal("Oops!", errorResponse, "error");
            }
        });
    }
    function decreseQty(id){
        cartProductManager(id, 'decrease')
        
    }
    function increaseQty(id){
        cartProductManager(id, 'increase')
    }     
    function removeItem(id){
        cartProductManager(id, 'remove')
    }     
</script>

@endpush