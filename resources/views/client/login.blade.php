<div class="login">
    <button type="button" class="btn btn-success mr-xs mb-sm"   data-toggle="modal" data-target="#myModal">Login</button>
    <div class="modal fade" id="myModal" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                </div>
                <div class="modal-body">
                    <div class="wrap-login100 p-l-50 p-r-50 p-t-10 p-b-10">
                        <form class="form-horizontal" method="POST" action="{{ route('login') }}">
                            {{ csrf_field() }}

                            <span class="login100-form-title p-b-55">Login</span>

                            <div class="wrap-input100 validate-input m-b-16" data-validate="Valid email is required: ex@abc.xyz">
                                <input class="input100" type="email" name="email" placeholder="Email">
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

                            <div class="contact100-form-checkbox m-l-4">
                                <input class="input-checkbox100" id="ckb1" type="checkbox" name="remember-me">
                                <label class="label-checkbox100" for="ckb1">
                                    Remember me
                                </label>
                            </div>

                            <div class="container-login100-form-btn p-t-25">
                                <button class="login100-form-btn" type="submit">
                                    Login
                                </button>
                            </div>
                            <div class="text-center w-full p-t-50">
                                <a class="txt1 bo1 hov1" href="{{ route('register') }}">
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
</div>
