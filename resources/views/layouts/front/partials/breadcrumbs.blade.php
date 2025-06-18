<div class="breadcrumb_wrapper w-100 position-relative">
    <div class="container">
        <div class="page-heading-here d-sm-flex flex-column justify-content-end gap-5">
            <h1 class="inner_banner_heading">{{ $pagename ?? '' }}</h1>
            <div style="--bs-breadcrumb-divider: url('{{ frontImage('icon.svg') }}');" aria-label="breadcrumb">
                <div class="breadcrumb_arrow position-absolute">
                    <svg class="breadcrumb-list-shape me-2" width="88" height="91" viewBox="0 0 88 91"
                        fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M75.3557 83.4825C51.6516 78.2316 30.2731 65.4227 30.8424 38.6307C29.0856 37.5878 27.3642 36.4078 25.6807 35.1082C15.8629 27.5282 7.34269 15.8295 0.970618 3.77828L0 1.94173L3.67259 0L4.64321 1.83605C10.7341 13.3558 18.8345 24.574 28.2197 31.82C29.1853 32.5658 30.1649 33.2687 31.1564 33.9242C31.7447 28.7351 34.2557 18.3221 41.4244 12.7755C53.1965 3.6676 66.5598 9.52271 70.2762 19.1546C74.5799 30.309 65.1659 39.6328 59.589 41.7844C51.0354 45.0846 42.7385 44.3218 35.01 40.8138C35.681 63.7945 54.9747 74.6677 76.0057 79.3717L77.1209 72.3207L87.9707 83.4999L74.2006 90.7853L75.3557 83.4825ZM35.1147 36.2473C42.2964 39.9314 50.0548 41.0102 58.0934 37.9089C62.3617 36.2618 69.6945 29.1868 66.4003 20.6502C63.5203 13.1858 53.0893 9.00325 43.9669 16.0613C37.698 20.9114 35.7338 30.1584 35.2637 34.5703C35.2034 35.1366 35.1536 35.696 35.1147 36.2473Z"
                            fill="white"></path>
                    </svg>
                </div>
                <ol class="breadcrumb w-fit ms-auto">
                    @foreach ($breadcrumbs as $crumb)
                        <li class="breadcrumb-item d-flex align-items-center">
                            <a href="{{ $crumb['url'] }}" class="breadcrumb_link text-uppercase text-decoration-none">
                                {{ $crumb['label'] }}
                            </a>
                        </li>
                    @endforeach
                </ol>
            </div>
        </div>
    </div>
</div>
