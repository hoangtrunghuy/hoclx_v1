<div class="wrap-menu-desktop">
    <div class="limiter-menu-desktop">

        <!-- Logo desktop -->
        <a href="{{ route('home') }}" class="logo">
            <img src="client/images/icons/logo.png" alt="IMG-LOGO">
        </a>

        <!-- Menu desktop -->
        <div class="menu-desktop" id="root">
            <ul class="main-menu">
                <li>
                    <a href="{{ route('home') }}">Trang Chủ</a>

                </li>

                <li>
                    <a href="{{ route('lythuyet') }}">Ôn Lý Thuyết</a>
                </li>

                <li>
                    <a href="{{ route('exams.index') }}">Luyện Đề</a>
                    <!-- <ul class="sub-menu">
                        <li><a href="null.php">Luyện đề mẫu</a></li>
                        <li><a href="#">Bốc đề tự động</a></li>
                    </ul> -->
                </li>

                <li>
                    <a href="#feed">Đánh Giá</a>
                </li>

                <li>
                    <a href="#tip">Cộng Đồng</a>
                    <ul class="sub-menu">
                        <li><a href="#">Thảo luận</a></li>
                        <li><a href="#">Đặt câu hỏi cho Cộng Đồng</a></li>
                    </ul>
                </li>

                <li class="respon-sub-menu">
                    <a href="#">Giới Thiệu</a>
                </li>

                <li class="respon-sub-menu">
<<<<<<< HEAD
                    <a href="#">Liên Hệ</a>
=======
                    <a href="{{ route('getLienhe') }}">Liên Hệ</a>
>>>>>>> 375b4ea7f3f64ef6ba91b2aed0f4a8e82715b8c3
                </li>
                @auth
                    <input type="hidden" id="status_acc" value="{{Auth::user()->user_status}}" \>


                    <!--<a href="{{ route('asd') }}">Verify</a>
                    <a href="{{ route('asd') }}" class="btn btn-success mr-xs mb-sm">Xác thực</a>

                    <script>
                        var s =document.getElementById('status_acc');
                        if(s.value == 1)
                        {
                            document.getElementById('verify_field').remove();
                        }


                    </script> -->
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
                    <a class="dropdown-item" href="{{route('user.edit.profile')}}">Profile</a>
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
<<<<<<< HEAD
<!-- <div id="message">@include('emails.messeage')</div>
<script>
    var s =document.getElementById('status_acc');
    if(s.value == 0)
    {
        var root = document.getElementById("message");
        root.setAttribute('class','alert alert-success');

        var para = document.createElement("p");
        var node = document.createTextNode("Vui lòng kiểm tra email để xác thực tài khoản");
        para.appendChild(node);

        //container.appendChild(para);
        root.appendChild(para);
    }

</script> -->
=======
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
>>>>>>> 375b4ea7f3f64ef6ba91b2aed0f4a8e82715b8c3

