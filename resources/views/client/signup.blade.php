<div class="signup">
    <button type="button" class="btn btn-primary"  data-toggle="modal" data-target="#myModal1">Sign up</button>
    <div class="modal fade" id="myModal1" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                </div>
                <div class="modal-body">
                    <div class="wrap-login100 p-l-25 p-r-22 p-t-10 p-b-10">
                        <form class="form-horizontal" method="POST" action="{{ route('register') }}">
                            {{ csrf_field() }}
                            <span class="login100-form-title p-b-55">
                                Sign up
                            </span>
                            <div class="row">
                            <div class="wrap-input100 validate-input m-b-16 col-md-6" data-validate="First Name is required" >
                                <input class="input100" type="text" name="user_firstName" placeholder="First Name">
                                <span class="focus-input100"></span>
                                <span class="symbol-input100">
                                    <span class="lnr lnr-user"></span>
                                </span>
                            </div>
                            <div class="wrap-input100 validate-input m-b-16 col-md-6" data-validate="Last Name is required">
                                <input class="input100" type="text" name="user_lastName" placeholder="Last Name">
                                <span class="focus-input100"></span>
                                <span class="symbol-input100">
                                  <span class="lnr lnr-user"></span>
                                </span>
                            </div>
                            </div>
                            <div class="wrap-input100 validate-input m-b-16" data-validate="User Name is required">
                                <input class="input100" type="text" name="name" placeholder="User Name">
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
                                <input class="input100" type="password" name="password" placeholder="Password">
                                <span class="focus-input100"></span>
                                <span class="symbol-input100">
                                    <span class="lnr lnr-lock"></span>
                                </span>
                            </div>
                            <div class="wrap-input100 validate-input m-b-16" data-validate="Password is required">
                                <input class="input100" type="password" name="password_confirmation" placeholder="Pre Password">
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
                                <button class="login100-form-btn" type="submit">
                                    Sign up
                                </button>
                            </div>
                            <div class="text-center w-full p-t-25">
                                <a class="txt1 bo1 hov1" href="{{ route('login') }}">
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
