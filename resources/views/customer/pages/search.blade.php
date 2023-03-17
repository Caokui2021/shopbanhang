@foreach ($data as $value)
    @php
        $hinh_anh = explode(',', $value->hinh_anh);
    @endphp
    {{-- <div class="media">
        <img style="height: 40px; width: 40px;" src="{{ $hinh_anh[0] }}" alt="">
        <div class="media-body">
            <a href="/product-detail/{{ $value->id }}">
                <h6 class="text-left media-heading">{{ $value->ten_san_pham }}</h6>
            </a>
        </div>
    </div> --}}
    <div class="media1">
        <a href="/product-detail/{{ $value->id }}">
            <img style="height: 40px; width: 40px;" src="{{ $hinh_anh[0] }}"
            alt="">
        </a>
        <a href="/product-detail/{{ $value->id }}">
            <span class="text-left media-heading">{{ $value->ten_san_pham }}</span>
        </a>
    </div>
@endforeach
