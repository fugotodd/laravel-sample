@php
/** @var \Illuminate\Contracts\Pagination\LengthAwarePaginator $paginator */
@endphp
<nav>
    <ul class="pagination justify-content-center">
        <li class="page-item {{$paginator->currentPage() == 1 ? 'disabled':''}}">
            <a class="page-link" @if($paginator->currentPage() != 1) href="{{$paginator->previousPageUrl()}}" @endif>上一頁</a>
        </li>
        @for($p = 1; $p <= $paginator->lastPage(); $p++)
            <li class="page-item @if($paginator->currentPage() == $p) active @endif"><a class="page-link" href="{{$paginator->currentPage() == $p ? '#':$paginator->url($p)}}">{{$p}}</a></li>
        @endfor
        <li class="page-item {{$paginator->lastPage() == $paginator->currentPage() ? 'disabled':''}}"><a class="page-link" @if($paginator->lastPage() != $paginator->currentPage()) href="{{$paginator->nextPageUrl()}}" @endif>下一頁</a></li>
    </ul>
</nav>
