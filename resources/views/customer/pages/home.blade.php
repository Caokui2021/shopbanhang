@extends('customer.master')

@section('content')
    <style>
        .form-search .form-group {
            position: relative;
        }

        .form-search .search-ajax-result {
            background: white;
            width: 280px;
            position: absolute;
            border: 1px solid black;
            margin-top: 9rem;
            z-index: 1;
        }

        .form-search .search-ajax-result .media {
            align-items: center;
            padding: 5px;
            background: rgb(221, 221, 221);
            border: 1px solid white;
        }
    </style>
    {{-- Thể loại --}}
    @include('customer.components.categories')
    {{-- Sản phẩm --}}
    @include('customer.components.product')
    {{-- Ảnh bìa --}}
    @include('customer.components.banner')
    {{-- Xu hướng --}}
    @include('customer.components.trend')
    {{-- Giảm giá --}}
    @include('customer.components.discount')
    {{-- Dịch vụ --}}
    @include('customer.components.services')
@endsection

@section('js')
    <script src="/js/app.js"></script>
    {{-- <script src="/customer/script/homepage.js"></script> --}}
    <script>
        $(document).ready(function() {
            $('#slides-shop').superslides({
                inherit_width_from: '.cover-slides',
                inherit_height_from: '.cover-slides',
                play: 5000,
                animation: 'fade',
            });
            $(".cover-slides ul li").append("<div class='overlay-background'></div>");
        });
    </script>
    <script src="/js/jquery.superslides.min.js"></script>
    <script src="/js/bootstrap-select.js"></script>

@endsection
