<div class="container">

    <form class="d-flex mt-3">
        <div class="flex-fill me-3 mb-3" >
            <input type="text" class="form-control" name="search" value="{{$search}}"/>
        </div>
        <button class="btn btn-primary me-3 mb-3" type="submit">搜尋</button>
        <div class="col-3 mb-3" >
            <select name="sort" class="form-control">
                <option value="">預設</option>
                <option value="asc" {{$checkSort('asc') ? 'selected':''}}>價格低到高</option>
                <option value="desc" {{$checkSort('desc') ? 'selected':''}}>價格高到低</option>
            </select>
        </div>
    </form>

    <div class="row mt-3 mb-3">
        @foreach($list as $product)
            <div class="col-3">
                <x-product-list-item :name="$product->title" :cover="$product->cover" :price="$product->price" />
            </div>
        @endforeach
        @if($list->isEmpty())
            <div class="text-center">找不到商品</div>
        @endempty
    </div>

    @if($list->isNotEmpty())
        {{$list->appends(request()->input())->links('widgets.pagination')}}
    @endif
</div>
