@if ($paginator->hasPages())
<nav class="d-flex justify-content-between pt-2" aria-label="Page navigation">
    {{-- Previous Page Link --}}
    @if ($paginator->onFirstPage())
    <ul class="pagination">
        <li class="page-item"><a class="page-link" href="#"><i class="czi-arrow-left mr-2"></i>Prev</a>
        </li>
    </ul>
    @else
    <ul class="pagination">
        <li class="page-item"><a class="page-link" href="{{ $paginator->previousPageUrl() }}"><i
                    class="czi-arrow-left mr-2"></i>Prev</a>
        </li>
    </ul>
    @endif
    <ul class="pagination">
        {{-- Pagination Elements --}}
        @foreach ($elements as $element)
        {{-- "Three Dots" Separator --}}
        @if (is_string($element))
        <li class="disabled" aria-disabled="true"><span>{{ $element }}</span></li>
        @endif
        {{-- Array Of Links --}}
        @if (is_array($element))
        @foreach ($element as $page => $url)
        @if ($page == $paginator->currentPage())
        <li class="page-item active d-none d-sm-block" aria-current="page"><span class="page-link">{{ $page }}<span
                    class="sr-only">(current)</span></span></li>
        @else
        <li class="page-item d-none d-sm-block"><a class="page-link" href="{{ $url }}">{{ $page }}</a></li>
        @endif
        @endforeach
        @endif
        @endforeach
    </ul>
    <ul class="pagination">
        {{-- Next Page Link --}}
        @if ($paginator->hasMorePages())
        <li class="page-item"><a class="page-link" href="{{ $paginator->nextPageUrl() }}" aria-label="Next">Next<i
                    class="czi-arrow-right ml-2"></i></a></li>

        <li>
            @else
        <li class="page-item"><a class="page-link" aria-label="Next">Next<i class="czi-arrow-right ml-2"></i></a></li>

        <li>
            @endif
    </ul>
</nav>
@endif