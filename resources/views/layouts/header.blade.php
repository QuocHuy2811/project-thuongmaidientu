 <div class="header-area">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="user-menu">
                        <ul>
                            <li><a href="#"><i class="fa fa-user"></i> My Account</a></li>
                            <li><a href="#"><i class="fa fa-heart"></i> Wishlist</a></li>
                            <li><a href="/cart"><i class="fa fa-user"></i> My Cart</a></li>
                            <li><a href=""><i class="fa fa-user"></i> Checkout</a></li>
                            @if(Session::has('user'))
                                <!-- Đã đăng nhập: Ẩn login, thay bằng logout -->
                                <li><a href="{{ route('logout') }}" onclick="return confirm('Bạn có chắc muốn đăng xuất?')">
                                    <i class="fa fa-sign-out"></i> Đăng xuất
                                </a></li>
                            @else
                                <!-- Chưa đăng nhập: Hiển thị login -->
                                <li><a href="/dangnhap"><i class="fa fa-user"></i> Login</a></li>
                            @endif
                        </ul>
                    </div>
                </div>
                
                <div class="col-md-4">
                    <div class="header-right">
                        <ul class="list-unstyled list-inline">
                            <li class="dropdown dropdown-small">
                                <a data-toggle="dropdown" data-hover="dropdown" class="dropdown-toggle" href="#"><span class="key">currency :</span><span class="value">USD </span><b class="caret"></b></a>
                                <ul class="dropdown-menu">
                                    <li><a href="#">USD</a></li>
                                    <li><a href="#">INR</a></li>
                                    <li><a href="#">GBP</a></li>
                                </ul>
                            </li>

                            <li class="dropdown dropdown-small">
                                <a data-toggle="dropdown" data-hover="dropdown" class="dropdown-toggle" href="#"><span class="key">language :</span><span class="value">English </span><b class="caret"></b></a>
                                <ul class="dropdown-menu">
                                    <li><a href="#">English</a></li>
                                    <li><a href="#">French</a></li>
                                    <li><a href="#">German</a></li>
                                </ul>
                            </li>
                            @if(Session::has('user'))
                                @if(Session::get('user.role') === 'khachhang')
                                    @php
                                        $fullName = Session::get('user.hoTenNguoiDung');
                                        $ten = explode(' ', trim($fullName));  // Tách thành mảng: ['Nguyễn', 'Trần', 'Dương', 'Khan']
                                        $ten = end($ten);  // Lấy phần cuối: 'Khan'
                                    @endphp
                                    <!-- Khách hàng: Hiển thị tên -->
                                    <span class="role-nguoidung" style="color: #888;"><i class="fa fa-user"></i> {{ $ten }}</span>
                                @else
                                    <!-- Admin: Hiển thị Admin Panel -->
                                    <a href="{{ route('admin.home') }}" class="role-nguoidung"><i class="fa fa-user"></i> Admin Panel</a>
                                @endif
                            @else
                                <!-- Chưa đăng nhập: Đăng ký -->
                                <a href="/dangki"><i class="fa fa-user"></i> Đăng ký</a>
                            @endif
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- End header area -->
     <div class="site-branding-area">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <div class="logo">
                        <h1><a href="./"><img src="img/logo.png"></a></h1>
                    </div>
                </div>
                
                <div class="col-sm-6">
                    <div class="shopping-item">
                        <a href="/cart">Cart - <span class="cart-amunt">$100</span> <i class="fa fa-shopping-cart"></i> <span class="product-count">5</span></a>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- End site branding area -->
    
    <div class="mainmenu-area">
        <div class="container">
            <div class="row">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div> 
                <ul class="nav navbar-nav">
                    <li class="{{ request()->routeIs('home') ? 'active' : '' }}">
                        <a href="{{ route('home') }}">Home</a>
                    </li>
                    <li class="{{ request()->routeIs('shop') ? 'active' : '' }}">
                        <a href="{{ route('shop') }}">Shop page</a>
                    </li>
                    <li class="{{ request()->routeIs('single.static') ? 'active' : '' }}">  {{-- Giả sử name cho /single tĩnh --}}
                        <a href="{{ route('single.static') }}">Single product</a>
                    </li>
                    <li class="{{ request()->routeIs('cart') ? 'active' : '' }}">
                        <a href="{{ route('cart') }}">Cart</a>
                    </li>
                    <li class="{{ request()->routeIs('checkout') ? 'active' : '' }}">
                        <a href="{{ route('checkout') }}">Checkout</a>
                    </li>
                    <li><a href="#">Category</a></li>  {{-- Không active nếu chưa có route --}}
                    <li><a href="#">Others</a></li>
                    <li class="{{ request()->routeIs('contact') ? 'active' : '' }}">
                        <a href="{{ route('contact') }}">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </div> <!-- End mainmenu area -->