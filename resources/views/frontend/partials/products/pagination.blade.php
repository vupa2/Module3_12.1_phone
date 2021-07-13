<!-- PAGER WRAP -->
@if ($paginator->lastPage() > 1)
    <div class="pager-wrap">
        <!-- PAGER -->
        <ul class="pager">

            @if ($paginator->currentPage() != 1)
                <!-- PAGER ITEM -->
                <li class="pager-item">
                    <a href="#">
                        <!-- SVG ARROW -->
                        <svg class="svg-arrow medium inverted">
                            <use xlink:href="#svg-arrow">{{ $paginator->url(1) }}</use>
                        </svg>
                        <!-- /SVG ARROW -->
                    </a>
                </li>
                <!-- /PAGER ITEM -->
            @endif

            @for ($i = 1; $i <= $paginator->lastPage(); $i++)
                <!-- PAGER ITEM -->
                <li class="pager-item @if ($paginator->currentPage() == $i) 'selected' @endif }}">
                    <a href="{{ $paginator->url($i) }}">{{ $i }}</a>
                </li>
                <!-- /PAGER ITEM -->
            @endfor

            @if ($paginator->currentPage() != $paginator->lastPage())
                <!-- PAGER ITEM -->
                <li class="pager-item">
                    <a href="#">
                        <!-- SVG ARROW -->
                        <svg class="svg-arrow medium">
                            <use xlink:href="#svg-arrow">{{ $paginator->url($paginator->lastPage()) }}</use>
                        </svg>
                        <!-- /SVG ARROW -->
                    </a>
                </li>
                <!-- /PAGER ITEM -->
            @endif
        </ul>
        <!-- /PAGER -->
    </div>
    <!-- /PAGER WRAP -->
@endif
