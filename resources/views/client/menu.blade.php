<div class="wrap-menu-desktop">
    <div class="limiter-menu-desktop">

        <!-- Logo desktop -->
        <a href="index.html" class="logo">
            <img src="client/images/icons/logo.png" alt="IMG-LOGO">
        </a>

        <!-- Menu desktop -->
        <div class="menu-desktop">
            <ul class="main-menu">
                <li>
                    <a href="index.html">Trang Chủ</a>

                </li>

                <li>
                    <a href="course-list.html">Ôn Lý Thuyết</a>
                    <ul class="sub-menu">
                        <li><a href="course-list.html">Hạng B1</a></li>
                        <li><a href="course-list.html">Hạng B2</a></li>
                        <li><a href="course-list.html">Hạng C</a></li>
                        <li><a href="course-list.html">Hạng D</a></li>
                        <li><a href="course-list.html">Hạng E</a></li>
                        <li><a href="course-list.html">Hạng F</a></li>

                    </ul>
                </li>

                <li>
                    <a href="about-team.html">Luyện Đề</a>
                    <ul class="sub-menu">
                        <li><a href="null.php">Luyện đề mẫu</a></li>
                        <li><a href="#">Bốc đề tự động</a></li>
                    </ul>
                </li>

                <li>
                    <a href="#">Đánh Giá</a>
                </li>

                <li>
                    <a href="blog.html">Cộng Đồng</a>
                    <ul class="sub-menu">
                        <li><a href="blog.html">Thảo luận</a></li>
                        <li><a href="blog-single.html">Đặt câu hỏi cho Cộng Đồng</a></li>
                    </ul>
                </li>

                <li class="respon-sub-menu">
                    <a href="about.html">Giới Thiệu</a>
                </li>

                <li class="respon-sub-menu">
                    <a href="contact.html">Liên Hệ</a>
                </li>
            </ul>
        </div>

        <!-- Social desktop -->
        @guest
        <div class="social">
            <!-- login -->
            @include('client.login')
        <!--  Sign up -->
            @include('client.signup')

</div>
        @else
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true" v-pre>
                    {{ Auth::user()->name }} <span class="caret"></span>
                </a>

                <ul class="dropdown-menu">
                    <li>
                        <a href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                            Logout
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            {{ csrf_field() }}
                        </form>
                    </li>
                </ul>
            </li>
        @endguest

</div>
</div>
<script src="LoginStyle/js/main.js"></script>
<script src="LoginStyle/vendor/select2/select2.min.js"></script>

