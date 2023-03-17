@extends('admin.master')

@section('title')
    Thống kê hóa đơn
@endsection

@section('content')
    <div class="card-body">
        <button type="button" class="btn btn-primary btn-xs dropdown-toggle mg-2" data-toggle="dropdown">
            Hóa đơn nhập kho
            <span class="caret"></span>
        </button>
        <ul class="dropdown-menu pull-right" role="menu">
            <li><a href="/admin/hoa-don-nhap-kho/thongke-hoadon">Hóa đơn nhập kho</a>
            </li>
            <li><a href="/admin/hoa-don-ban-hang/thongke">Hóa đơn bán hàng</a>
            </li>
        </ul>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <form action="{{ Route('postThongKeNhapKho') }}" method="POST">
                            @csrf
                            <div class="row">
                                <div class="col-md-5">
                                    <input type="date" name="from_date" class="form-control" value="{{ Carbon\Carbon::parse($begin)->format('Y-m-d') }}">
                                </div>
                                <div class="col-md-5">
                                    <input type="date" name="end_date" class="form-control" value="{{ Carbon\Carbon::parse($end)->format('Y-m-d') }}">
                                </div>
                                <div class="col-md-2">
                                    <button type="submit" class="btn btn-primary">Thống Kê</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <table class="table table-bordered">
                    <thead>
                        <tr class="text-center">
                            <th><b>#</b></th>
                            <th><b>Ngày</b></th>
                            <th><b>Tổng Tiền</b></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $key => $value)
                            <tr>
                                <th class="text-center">{{ $key + 1 }}</th>
                                <td class="text-center">{{ $value->date }}</td>
                                <td class="text-end">${{ number_format($value->total, 0, ',', '.') }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <div class="col-md-8">
                <div>
                    <canvas id="myChart"></canvas>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('js')
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
    var labels    = {!! json_encode($labels) !!};
    var data_js   = {!! json_encode($data_js) !!};

    const data = {
      labels: labels,
      datasets: [{
        label: 'Thống kê hóa đơn',
        backgroundColor: [
            'rgba(255, 99, 132, 0.2)',
            'rgba(255, 159, 64, 0.2)',
            'rgba(255, 205, 86, 0.2)',
            'rgba(75, 192, 192, 0.2)',
            'rgba(54, 162, 235, 0.2)',
            'rgba(153, 102, 255, 0.2)',
            'rgba(201, 203, 207, 0.2)'
        ],
        borderColor: [
            'rgb(255, 99, 132)',
            'rgb(255, 159, 64)',
            'rgb(255, 205, 86)',
            'rgb(75, 192, 192)',
            'rgb(54, 162, 235)',
            'rgb(153, 102, 255)',
            'rgb(201, 203, 207)'
        ],
        data: data_js,
        borderWidth: 3,
      }]
    };

    const config = {
      type: 'bar',
      data: data,
      options: {}
    };
  </script>
  <script>
    const myChart = new Chart(
      document.getElementById('myChart'),
      config
    );
  </script>
@endsection
