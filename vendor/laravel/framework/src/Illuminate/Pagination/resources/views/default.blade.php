@if ($paginator->hasPages())
    <ul class="pagination pagina-list">
        {{-- Previous Page Link --}}
        @if ($paginator->onFirstPage())
            <li class="disabled disabled-item"><span>&laquo;</span></li>
        @else
            <li class="pagina-prev"><a class="link-prev" href="{{ $paginator->previousPageUrl() }}" rel="prev">&laquo;</a></li>
        @endif

        {{-- Pagination Elements --}}
        @foreach ($elements as $element)
            {{-- "Three Dots" Separator --}}
            @if (is_string($element))
                <li class="disabled disabled-item"><span>{{ $element }}</span></li>
            @endif

            {{-- Array Of Links --}}
            @if (is_array($element))
                @foreach ($element as $page => $url)
                    @if ($page == $paginator->currentPage())
                        <li class="active active-item pagina-item"><span class="disable-span">{{ $page }}</span></li>
                    @else
                        <li class="pagina-item"><a class="link-item" href="{{ $url }}">{{ $page }}</a></li>
                    @endif
                @endforeach
            @endif
        @endforeach

        {{-- Next Page Link --}}
        @if ($paginator->hasMorePages())
            <li><a href="{{ $paginator->nextPageUrl() }}" class="link-next" rel="next">&raquo;</a></li>
        @else
            <li class="disabled"><span>&raquo;</span></li>
        @endif
    </ul>
@endif
