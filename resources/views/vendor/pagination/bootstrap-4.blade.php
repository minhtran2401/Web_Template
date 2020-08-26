@if ($paginator->hasPages())
    <nav>
        <ul class="pagination justify-content-center mt-4">
            {{-- Previous Page Link --}}
            @if ($paginator->onFirstPage())
                <li class="prev"><a style="cussor:pointer" aria-disabled="true" aria-label="@lang('pagination.previous')"><i class="fas fa-caret-left" aria-hidden="true"></i></a></li>
                {{-- <li class="page-item disabled" aria-disabled="true" aria-label="@lang('pagination.previous')">
                    <span class="page-link" aria-hidden="true">&lsaquo;</span>
                </li> --}}
            @else
            <li class="prev"><a href="{{ $paginator->previousPageUrl() }}" rel="prev" aria-label="@lang('pagination.previous')"><i class="fas fa-caret-left"></i></a></li>
                {{-- <li class="page-item">
                    <a class="page-link" href="{{ $paginator->previousPageUrl() }}" rel="prev" aria-label="@lang('pagination.previous')">&lsaquo;</a>
                </li> --}}
            @endif

            {{-- Pagination Elements --}}
            @foreach ($elements as $element)
                {{-- "Three Dots" Separator --}}
                @if (is_string($element))
                    <li class="active" style="cussor: pointer" aria-disabled="true"><a>{{ $element }}</a></li>
                    {{-- <li class="page-item disabled" aria-disabled="true"><span class="page-link">{{ $element }}</span></li> --}}
                @endif

                {{-- Array Of Links --}}
                @if (is_array($element))
                    @foreach ($element as $page => $url)
                        @if ($page == $paginator->currentPage())
                            <li class="page-item" aria-current="current"><a>{{ $page }}</a></li>
                            {{-- <li class="page-item active" aria-current="current"><span class="page-link">{{ $page }}</span></li> --}}
                        @else
                            <li class="page-item"><a href="{{ $url }}">{{ $page }}</a></li>
                            {{-- <li class="page-item"><a class="page-link" href="{{ $url }}">{{ $page }}</a></li> --}}
                        @endif
                    @endforeach
                @endif
            @endforeach

            {{-- Next Page Link --}}
            @if ($paginator->hasMorePages())
                <li class="page-item">
                    <li class="next"><a href="{{ $paginator->nextPageUrl() }}" rel="next" aria-label="@lang('pagination.next')"><i class="fas fa-caret-right"></i></a></li>
                    {{-- <a class="page-link" href="{{ $paginator->nextPageUrl() }}" rel="next" aria-label="@lang('pagination.next')">&rsaquo;</a> --}}
                </li>
            @else
                <li class="next"><a style="cussor:pointer" aria-disabled="true" aria-label="@lang('pagination.next')"><i class="fas fa-caret-right" aria-hidden="true"></i></a></li>
                {{-- <li class="page-item disabled" aria-disabled="true" aria-label="@lang('pagination.next')">
                    <span class="page-link" aria-hidden="true">&rsaquo;</span>
                </li> --}}
            @endif
        </ul>
    </nav>
@endif
