@if ($paginator->hasPages())
<nav class="d-flex justify-content-center" aria-label="Page navigation example">
    <ul class="edu-pagination justify-content-end">
        @if ($paginator->onFirstPage())
            <li class="page-item disabled">
                {{-- <a class="page-link" href="#" tabindex="-1">Previous</a> --}}
                <a href="#" tabindex="-1"><i class="ri-arrow-drop-left-line"></i></a>
            </li>
        @else
            <li class="page-item"><a href="{{ $paginator->previousPageUrl() }}"><i class="ri-arrow-drop-left-line"></i></a></li>
            {{-- <li class="page-item"><a class="page-link" href="{{ $paginator->previousPageUrl() }}">Previous</a></li> --}}
        @endif

        @foreach ($elements as $element)
            @if (is_string($element))
                <li class="page-item disabled">{{ $element }}</li>
            @endif
            @if (is_array($element))
                @foreach ($element as $page => $url)
                    @if ($page == $paginator->currentPage())
                        <li class="page-item active">
                            <a class="page-link">{{ $page }}</a>
                        </li>
                    @else
                        <li class="page-item">
                            <a class="page-link" href="{{ $url }}">{{ $page }}</a>
                        </li>
                    @endif
                @endforeach
            @endif
        @endforeach

        @if ($paginator->hasMorePages())
            <li class="page-item">
                <li><a href="{{ $paginator->nextPageUrl() }}" rel="next"><i class="ri-arrow-drop-right-line"></i></a></li>
                {{-- <a class="page-link" href="{{ $paginator->nextPageUrl() }}" rel="next">Next</a> --}}
            </li>
        @else
            <li class="page-item disabled">
                <a href="#"><i class="ri-arrow-drop-right-line"></i></a>
            </li>
        @endif
    </ul>
@endif