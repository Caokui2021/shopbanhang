<!DOCTYPE html>
<html>

<head>
    @include('admin.share.head')
</head>

<body>
    <!-- Sidenav -->
    @include('admin.share.menu')
    <!-- Main content -->
    <div class="main-content" id="panel">
        <!-- Topnav -->
        @include('admin.share.top')
        <!-- Header -->
        <!-- Header -->
        <div class="header bg-primary pb-6">
            <div class="container-fluid">
                <div class="header-body">
                    <div class="row align-items-center py-4">
                        <div class="col-lg-6 col-7">
                            <h6 class="h2 text-white d-inline-block mb-0">
                                @yield('title')
                            </h6>
                        </div>
                        <div class="col-lg-6 col-5 text-right">
                            <a href="#" class="btn btn-sm btn-neutral">New</a>
                            <a href="#" class="btn btn-sm btn-neutral">Filters</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Page content -->
        <div class="container-fluid mt--6">
            <div class="row">
                <div class="col">
                    <div class="card">
                        @yield('content')
                    </div>
                </div>
            </div>
            <!-- Footer -->
            @include('admin.share.footer')
        </div>
    </div>
    <!-- Argon Scripts -->
    <!-- Core -->
    @include('admin.share.js')
    @yield('js')
</body>

</html>
