<div class="row row-cols-1 row-cols-md-2 g-4">
@foreach ( $products as $product)
<div class="card" style="width: 18rem;">
    <img src="{{URL::asset('images/'.$product ->product_photo)}}" class="card-img-top productphoto" data-product-id ="{{$product ->id}}" alt="...">
    <div class="card-body">
      <h5 class="card-title">{{$product ->product_name}}</h5>
      <p class="card-text">{{$product ->product_price}}</p>
    </div>
</div>
@endforeach
</div>
