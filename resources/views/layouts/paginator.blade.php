@if ($paginator->hasPages())
    <div class="nav-next">
    @if ($paginator->onFirstPage())
        <span>&#8592; Предыдущая</span>
    @else
        <a  href="{{ $paginator->previousPageUrl() }}"> &#8592; Предыдущая</a>
    @endif
    </div>
    <div class="nav-previous">
    @if ($paginator->hasMorePages())
        <a  href="{{ $paginator->nextPageUrl() }}"> Следующая &#8594;</a>
    @else
        <span>Следующая &#8594;</span>
    @endif
    </div>
@endif
