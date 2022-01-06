<div class="container">
    <div class="row">
        @foreach($list as $product)
            <div class="col-3">
                <x-product-list-item :name="$product['name']" :cover="$product['cover']" :price="$product['price']" />
            </div>
        @endforeach
    </div>
</div>
