<div class="wrap-menu-desktop">
    <div class="limiter-menu-desktop">

        <!-- Logo desktop -->
        <a href="index.html" class="logo">
            <img src="client/images/icons/logo.png" alt="IMG-LOGO">
        </a>

        <!-- Menu desktop -->
        <div class="menu-desktop" id="root">
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
                @auth
                    <input type="hidden" id="status_acc" value="{{Auth::user()->user_status}}" \>


                    {{--<a href="{{ route('asd') }}">Verify</a>--}}
                    <a href="{{ route('asd') }}" class="btn btn-success mr-xs mb-sm">Xác thực</a>

                    <script>
                        var s =document.getElementById('status_acc');
                        if(s.value == 1)
                        {
                            document.getElementById('verify_field').remove();
                        }


                    </script>
                @endauth

            </ul>
        </div>
        <br />

        <!-- Social desktop -->
        @guest
            <div class="social">
                <!-- login -->
                <form action="{{ route('login') }}">
                    <div class="login">
                        <button type="submit" class="btn btn-success mr-xs mb-sm">Login</button>
                    </div>
                </form>
                <!--  Sign up -->
                <form action="{{ route('register') }}">
                    <div class="signup" style="margin-left: 10px">
                        <button type="submit" class="btn btn-primary">Register</button>
                    </div>
                </form>
            </div>

    </div>
    @else
        <div >
            <div class="dropdown" style="margin-left: 10px;">
                <a href="#" class="dropdown-toggle " data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true"
                   v-pre>
                    <img src="{{ asset(Auth::user()->user_img) }}" width="30px" height="30px"
                         style="border-radius: 50%;">
                </a>
                <div class="dropdown-menu" style="margin-top: 15px;">
                    <a class="dropdown-item" href="{{route('profile.edit',Auth::user()->id)}}">Profile</a>
                    <a class="dropdown-item" href="{{ route('logout') }}"
                       onclick="event.preventDefault();
                document.getElementById('logout-form').submit();">
                        Logout
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        {{ csrf_field() }}
                    </form>

                </div>
            </div>
        </div>
    @endguest

</div>
{{--<div id="message">@include('emails.messeage')</div>--}}
{{--<script>--}}
    {{--var s =document.getElementById('status_acc');--}}
    {{--if(s.value == 0)--}}
    {{--{--}}
        {{--var root = document.getElementById("message");--}}
        {{--root.setAttribute('class','alert alert-success');--}}

        {{--var para = document.createElement("p");--}}
        {{--var node = document.createTextNode("Vui lòng kiểm tra email để xác thực tài khoản");--}}
        {{--para.appendChild(node);--}}

        {{--//container.appendChild(para);--}}
        {{--root.appendChild(para);--}}
    {{--}--}}

{{--</script>--}}

