<div class="navbar-default sidebar" role="navigation">
    <div class="sidebar-nav navbar-collapse">
        <ul class="nav" id="side-menu">
            <li class="sidebar-search">
                <div class="input-group custom-search-form">
                    <input type="text" class="form-control" placeholder="Search...">
                    <span class="input-group-btn">
                                <button class="btn btn-default" type="button">
                                    <i class="fa fa-search"></i>
                                </button>
                            </span>
                </div>
                <!-- /input-group -->
            </li>
            <li>
                <a href="{{route('dashboard.index')}}"><i class="fa fa-dashboard fa-fw"></i> Tổng quan</a>
            </li>
            <li>
                <a href="{{route('questions.index')}}"><i class="fa fa-edit fa-fw"></i> Quản lý ôn tập</a>
            </li>
            <li>
                <a href="#"><i class="fa fa-file-text fa-fw"></i> Quản lý đề thi<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="de-co-ban.html">Đề cơ bản</a>
                    </li>
                    <li>
                        <a href="#">Đề nâng cao</a>
                    </li>

                </ul>
                <!-- /.nav-second-level -->
            </li>
            <li>
                <a href="{{route('feedback.index')}}" ><i class="fa fa-comments fa-fw"></i> Quản lý feedback</a>
            </li>
            <li>
                <a href="#"><i class="fa fa-users fa-fw"></i> Quản lý User<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="#">Trang cá nhân</a>
                    </li>
                    <li>
                        <a href="{{route('user.index')}}">Tài khoản khác</a>
                    </li>
                </ul>
                <!-- /.nav-second-level -->
            </li>
            {{--<li>--}}
                {{--<a href=""><i class="fa fa-archive fa-fw"></i> Quản lý Pages</a>--}}
            {{--</li>--}}
            {{--<li>--}}
                {{--<a href="#"><i class="fa fa-film fa-fw"></i> Quản lý Video</a>--}}
            {{--</li>--}}
            <li>
                <a href="{{route('tips.index')}}"><i class="fa fa-support fa-fw"></i> Quản lý Mẹo lái xe</a>
            </li>
            <li>
                <a href="#"><i class="fa fa-car fa-fw"></i> Quản lý tin tức lái xe</a>
            </li>
        </ul>
    </div>
    <!-- /.sidebar-collapse -->
</div>
<!-- /.navbar-static-side -->