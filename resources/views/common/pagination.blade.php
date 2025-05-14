@if ($ITEM->lastPage() > 1)
    <div class="ot-pagination pagination-content d-flex justify-content-end align-content-center py-3">
        <nav aria-label="Page navigation example">
            <ul class="pagination ot-pagination  justify-content-between">
                <li class="page-item {{ $ITEM->currentPage() == 1 ? ' disabled' : '' }}">
                    <a class="page-link" href="{{ $ITEM->url(1) }}">
                        <i class="las la-angle-left"></i>
                    </a>
                </li>
                @for ($i = 1; $i <= $ITEM->lastPage(); $i++)
                    <li class="page-item {{ $ITEM->currentPage() == $i ? ' active' : '' }}">
                        <a class="page-link" href="{{ $ITEM->url($i) }}">{{ $i }}</a>
                    </li>
                @endfor
                <li class="page-item {{ $ITEM->currentPage() == $ITEM->lastPage() ? ' disabled' : '' }}">
                    <a class="page-link" href="{{ $ITEM->url($ITEM->currentPage() + 1) }}">
                        <i class="las la-angle-right"></i>
                    </a>
                </li>
            </ul>
        </nav>
    </div>
@endif
