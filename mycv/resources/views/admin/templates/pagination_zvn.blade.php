@php
    $totalItems = $items->total();  
    $totalPages = $items->lastPage();
    $totalItemsPerPage = $items->perPage();
@endphp


<div class="x_content">
    <div class="row">
        <div class="col-md-6">
            <p class="m-b-0">Tổng phần tử trên trang: <b>{{ $totalItemsPerPage }}</b></p>
            <p class="m-b-0">Có tổng cộng <b> {{ $totalPages }}</b> trang</p>
            <p class="m-b-0">Có tổng cộng <b> {{ $totalItems }}</b> Phần tử</p>
        </div>
        <div class="col-md-6">
            <nav aria-label="Page navigation example">
                <ul class="pagination zvn-pagination">
                    <li class="page-item disabled">
                        <a class="page-link" href="#" tabindex="-1">«</a>
                    </li>
                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                    <li class="page-item active"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item">
                        <a class="page-link" href="#">»</a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
</div>
{{ $items->links() }}