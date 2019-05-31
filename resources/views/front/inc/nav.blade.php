<nav class="nav-section">
    <div class="container">
        <div class="nav-right">
            <a href=""><i class="fa fa-search"></i></a>
            <a href=""><i class="fa fa-shopping-cart"></i></a>
        </div>
        <ul class="main-menu">
            <li class="@yield('student')"><a href="{{ url('/student') }}">Trang Chủ</a></li>
            <li class="@yield('course')"><a href="{{ url('/course') }}">Tra Điểm</a></li>

            <li class="@yield('contact')"><a href="{{ url('/contact') }}">Liên Hệ</a></li>
        </ul>
    </div>
</nav>
