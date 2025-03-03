@if ($paginator->lastPage() != 1)
<link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}" >

<div id="pagination" class = "margin-Paginate center">
    {{ $paginator->firstItem() }} - {{ $paginator->lastItem() }} di {{ $paginator->total() }} ---


    @if (!$paginator->onFirstPage())
        <a href="{{ $paginator->url(1) }}" class="link" >Inizio</a> |
    @else
        Inizio |
    @endif


    @if ($paginator->currentPage() != 1)
    <a href="{{ $paginator->previousPageUrl() }}" class="link">&lt; Precedente</a> |
    @else
        &lt; Precedente |
    @endif


    @if ($paginator->hasMorePages())
        <a href="{{ $paginator->nextPageUrl() }}" class="link">Successivo &gt;</a> |
    @else
        Successivo &gt; |
    @endif

    @if ($paginator->hasMorePages())
        <a href="{{ $paginator->url($paginator->lastPage()) }}" class="link">Fine</a>
    @else
        Fine
    @endif
</div>
@endif