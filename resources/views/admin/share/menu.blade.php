<nav class="sidenav navbar navbar-vertical  fixed-left  navbar-expand-xs navbar-light bg-white" id="sidenav-main">
    <div class="scrollbar-inner">
        <!-- Brand -->
        <div class="sidenav-header  align-items-center">
            <a class="navbar-brand" href="javascript:void(0)">
                <img src="/admin/assets/img/brand/blue.png" class="navbar-brand-img" alt="...">
            </a>
        </div>
        <div class="navbar-inner">
            <!-- Collapse -->
            <div class="collapse navbar-collapse" id="sidenav-collapse-main">
                <!-- Nav items -->
                <ul class="navbar-nav">
                    @if (Auth::guard('admin')->user()->is_master == 0)
                        <li class="nav-item">
                            <a class="nav-link" href="/admin/account/index">
                                <i class="ni ni-circle-08 text-info"></i>
                                <span class="nav-link-text">Quản lý tài khoản</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/admin/danh-muc/index">
                                <i class="ni ni-bullet-list-67 text-danger"></i>
                                <span class="nav-link-text">Quản lý danh mục</span>
                            </a>
                        </li>
                    @endif
                    <li class="nav-item">
                        <a class="nav-link" href="/admin/san-pham/index">
                            <i class="ni ni-basket text-success"></i>
                            <span class="nav-link-text">Quản lý sản phẩm</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/admin/nhap-kho/index">
                            <i class="ni ni-bag-17 text-warning"></i>
                            <span class="nav-link-text">Quản lý nhập kho</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/admin/hoa-don-ban-hang/index">
                            <i class="ni ni-delivery-fast text-primary"></i>
                            <span class="nav-link-text">Hóa đơn bán hàng</span>
                        </a>
                    </li>
    
                    <li class="nav-item">
                        <a class="nav-link" href="/admin/hoa-don-nhap-kho/thongke-hoadon">
                            <i class="ni ni-chart-bar-32 text-info"></i>
                            <span class="nav-link-text">Thống kê</span>
                        </a>
                    </li>
                </ul>
                <!-- Divider -->
                <hr class="my-3">
                <!-- Heading -->
                <h6 class="navbar-heading p-0 text-muted">
                    <span class="docs-normal">Documentation</span>
                </h6>
                <!-- Navigation -->
                <ul class="navbar-nav mb-md-3">
                    <li class="nav-item">
                        <a class="nav-link"
                            href="https://demos.creative-tim.com/argon-dashboard/docs/getting-started/overview.html"
                            target="_blank">
                            <i class="ni ni-spaceship"></i>
                            <span class="nav-link-text">Getting started</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link"
                            href="https://demos.creative-tim.com/argon-dashboard/docs/foundation/colors.html"
                            target="_blank">
                            <i class="ni ni-palette"></i>
                            <span class="nav-link-text">Foundation</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link"
                            href="https://demos.creative-tim.com/argon-dashboard/docs/components/alerts.html"
                            target="_blank">
                            <i class="ni ni-ui-04"></i>
                            <span class="nav-link-text">Components</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link"
                            href="https://demos.creative-tim.com/argon-dashboard/docs/plugins/charts.html"
                            target="_blank">
                            <i class="ni ni-chart-pie-35"></i>
                            <span class="nav-link-text">Plugins</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</nav>
