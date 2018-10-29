<link rel="stylesheet" type="text/css" href="LoginStyle/fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<link rel="stylesheet" type="text/css" href="LoginStyle/vendor/select2/select2.min.css">

<link rel="stylesheet" type="text/css" href="LoginStyle/css/util.css">
<link rel="stylesheet" type="text/css" href="LoginStyle/css/main.css">

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
        <div class="social">
            <!-- login -->
            <button type="button" class="btn btn-success mr-xs mb-sm"  data-toggle="modal" data-target="#myModal">Login</button>
            <div class="modal fade" id="myModal" role="dialog">
                <div class="modal-dialog">
                    <!-- Modal content-->
                    <div class="modal-content">
                        <div class="modal-header">
                        </div>
                        <div class="modal-body">
                            <div class="wrap-login100 p-l-50 p-r-50 p-t-10 p-b-10">
                                <form class="login100-form validate-form">
                                    <span class="login100-form-title p-b-55">
                                        Login
                                    </span>
                                    <div class="wrap-input100 validate-input m-b-16" data-validate="Valid email is required: ex@abc.xyz">
                                        <input class="input100" type="text" name="email" placeholder="Email">
                                        <span class="focus-input100"></span>
                                        <span class="symbol-input100">
                                            <span class="lnr lnr-envelope"></span>
                                        </span>
                                    </div>

                                    <div class="wrap-input100 validate-input m-b-16" data-validate="Password is required">
                                        <input class="input100" type="password" name="pass" placeholder="Password">
                                        <span class="focus-input100"></span>
                                        <span class="symbol-input100">
                                            <span class="lnr lnr-lock"></span>
                                        </span>
                                    </div>

                                    <div class="contact100-form-checkbox m-l-4">
                                        <input class="input-checkbox100" id="ckb1" type="checkbox" name="remember-me">
                                        <label class="label-checkbox100" for="ckb1">
                                            Remember me
                                        </label>
                                    </div>

                                    <div class="container-login100-form-btn p-t-25">
                                        <button class="login100-form-btn">
                                            Login
                                        </button>
                                    </div>
                                    <div class="text-center w-full p-t-50">             
                                       <a class="txt1 bo1 hov1" href="#">
                                        Sign up now                         
                                    </a>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                </div>

            </div>
        </div>

        <!--  Sign up -->
        <div class="signup">
         <button type="button" class="btn btn-primary"  data-toggle="modal" data-target="#myModal1">Sign up</button>
         <div class="modal fade" id="myModal1" role="dialog">
            <div class="modal-dialog">
                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                    </div>
                    <div class="modal-body">
                        <div class="wrap-login100 p-l-50 p-r-50 p-t-10 p-b-10">
                            <form class="login100-form validate-form">
                                <span class="login100-form-title p-b-55">
                                    Sign up
                                </span>
                                <div class="wrap-input100 validate-input m-b-16" data-validate="First Name is required">
                                    <input class="input100" type="text" name="firstname" placeholder="First Name">
                                    <span class="focus-input100"></span>
                                    <span class="symbol-input100">
                                        <span class="lnr lnr-user"></span>
                                    </span>
                                </div>
                                <div class="wrap-input100 validate-input m-b-16" data-validate="Last Name is required">
                                    <input class="input100" type="text" name="firstname" placeholder="Last Name">
                                    <span class="focus-input100"></span>
                                    <span class="symbol-input100">
                                        <span class="lnr lnr-user"></span>
                                    </span>
                                </div>
                                 <div class="wrap-input100 validate-input m-b-16" data-validate="Valid email is required: ex@abc.xyz">
                                    <input class="input100" type="text" name="email" placeholder="Email">
                                    <span class="focus-input100"></span>
                                    <span class="symbol-input100">
                                        <span class="lnr lnr-envelope"></span>
                                    </span>
                                </div>
                                <div class="wrap-input100 validate-input m-b-16" data-validate="Password is required">
                                    <input class="input100" type="password" name="pass" placeholder="Password">
                                    <span class="focus-input100"></span>
                                    <span class="symbol-input100">
                                        <span class="lnr lnr-lock"></span>
                                    </span>
                                </div>
                                <div class="wrap-input100 validate-input m-b-16" data-validate="Password is required">
                                    <input class="input100" type="password" name="pass" placeholder="Pre Password">
                                    <span class="focus-input100"></span>
                                    <span class="symbol-input100">
                                        <span class="lnr lnr-lock"></span>
                                    </span>
                                </div>
                                <div class="contact100-form-checkbox m-l-4">
                                    <input class="input-checkbox100" id="ckb1" type="checkbox" name="remember-me">
                                    <label class="label-checkbox100" for="ckb1">
                                        Remember me
                                    </label>
                                </div>

                                <div class="container-login100-form-btn p-t-25">
                                    <button class="login100-form-btn">
                                        Sign up
                                    </button>
                                </div>
                                <div class="text-center w-full p-t-25">             
                                   <a class="txt1 bo1 hov1" href="#">
                                    LogIn now                        
                                </a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

</div>

</div>
</div>
<script src="LoginStyle/js/main.js"></script>
<script src="LoginStyle/vendor/select2/select2.min.js"></script>

