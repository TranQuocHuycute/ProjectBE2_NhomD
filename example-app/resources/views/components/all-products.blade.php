<div class="row row-cols-1 row-cols-md-2 g-4">
    @foreach ($products as $product)
        <div class="card" style="width: 18rem;">
            <img src="{{ URL::asset('images/' . $product->product_photo) }}" class="card-img-top product-photo"
                data-product-id="{{ $product->id }}" alt="...">
            <div class="card-body">
                <h5 class="card-title">{{ $product->product_name }}</h5>
                <p class="card-text">
                    @foreach ($product->categories as $category)
                        <span class="badge bg-danger text-light">{{ $category->category_name }}</span>
                    @endforeach
                    {{ $product->product_price }}

                </p>
            </div>
        </div>
    @endforeach
</div>

</div>
