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
    <div class="breadcrumb-option">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb__links">
                        <a href="/home-pages/index"><i class="fa fa-home"></i> Home</a>
                        <span>Shop</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- Sản phẩm --}}
    @include('customer.pages.shopproduct')
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
        //     var active = location.search; //?kytu=asc
		// 	$('#select option[value="'+active+'"]').attr('selected','selected');
          
        });
        // $('.select').change(function(){
        //         var value = $(this).find(':selected').val();    
        //         // alert(value);
        //         if(value!=0){
        //             var url = value;
        //             // alert(url);
        //             window.location.replace(url); 
        //         }else{
        //             alert('Hãy lọc sản phẩm');
        //         }  
        //     })
            
    </script>
    <script src="/js/bootstrap-select.js"></script>
@endsection
