@if ($paginator->hasPages())
        <div class="pagination-box">
            {{-- Previous Page Link --}}
            @if (! $paginator->onFirstPage())
                    <a href="{{ $paginator->previousPageUrl() }}" rel="prev" aria-label="@lang('pagination.previous')" class="prev-page">prev page</a>
            @endif
            {{-- Pagination Elements --}}
            <div class="pages">
            @foreach ($elements as $element)
                {{-- "Three Dots" Separator --}}
                @if (is_string($element))
                    <span>{{ $element }}</span>
                @endif

                {{-- Array Of Links --}}
                @if (is_array($element))
                    @foreach ($element as $page => $url)
                        @if ($page == $paginator->currentPage())
                            <a aria-current="page" class="active" >{{ $page }}</a>
                        @else
                            <a href="{{ $url }}">{{ $page }}</a>
                        @endif
                    @endforeach
                @endif
            @endforeach
            </div>

            {{-- Next Page Link --}}
            @if ($paginator->hasMorePages())
                    <a href="{{ $paginator->nextPageUrl() }}" rel="next" aria-label="@lang('pagination.next')" class="next-page">next page</a>
            @endif
        </div>
@endif
