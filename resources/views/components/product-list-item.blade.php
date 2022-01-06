@props(['name' => '', 'cover' => '', 'price' => null, 'pid' => null])

<div class="product-item">
    <div class="img-wrapper square">
        <div class="img-container">
            <img src="{{url($cover)}}" alt="{{$name}}" class="product-cover">
        </div>
        <div class="overlay">
            <button class="btn add-cart" type="button" data-pid="{{$pid}}" data-exist="{{ShopCart::hasItem($pid) ? 'true':'false'}}">
                {{ShopCart::hasItem($pid) ? '移出購物車':'加入購物車'}}</button>
        </div>
    </div>
    <div class="ellipsis">
        <div class="product-name">{{$name}}</div>
    </div>
    <div class="product-price">NT${{money_format($price, 0)}}</div>
</div>
