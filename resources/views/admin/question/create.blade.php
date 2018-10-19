<!-- <form action="{{ route('questions.store') }}" method="post" >
	{{ @csrf_field() }}
	id_question	<input type="text" name="id_question">
    type		<input type="text" name="type">
    question	<input type="text" name="question">
    image		<input type="text" name="image">
    answer		<input type="text" name="answer">
    <input type="submit" name="" value="them">
</form> -->


<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title></title>

    <!-- Bootstrap Core CSS -->
    <link href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="{{ asset('vendor/metisMenu/metisMenu.min.css') }}" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="{{ asset('css/sb-admin-2.css') }}" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="{{ asset('vendor/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">Hoclaioto.org</a>
            </div>
            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right">

                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="#"><i class="fa fa-user fa-fw"></i> User Profile</a>
                        </li>
                        <li><a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a>
                        </li>
                        <li class="divider"></li>
                        <li><!-- <a href="index.php"><i class="fa fa-sign-out fa-fw"></i> Logout</a> --><?php>header("location:pages/index.html")<?>;logout
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
            <!-- /.navbar-top-links -->

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
                            <a href="index.html"><i class="fa fa-dashboard fa-fw"></i> Tổng quan</a>
                        </li>
                        <li>
                            <a href="them_cau_hoi.html"><i class="fa fa-edit fa-fw"></i> Quản lý ôn tập</a>
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
                            <a href="#"><i class="fa fa-comments fa-fw"></i> Quản lý feedback</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-users fa-fw"></i> Quản lý User<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="#">Trang cá nhân</a>
                                </li>
                                <li>
                                    <a href="#">Tài khoản khác</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-archive fa-fw"></i> Quản lý Pages</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-film fa-fw"></i> Quản lý Video</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-support fa-fw"></i> Quản lý Mẹo lái xe</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-car fa-fw"></i> Quản lý tin tức lái xe</a>
                        </li>
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Thêm câu hỏi</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Nhập thông tin câu hỏi mới
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-2"></div>
                                <div class="col-lg-8">
                                    <form action="{{ route('questions.store') }}" method="post" role="form" > 
                                    {{ @csrf_field() }}
                                        <div class="form-group">
                                            <label>Chọn loại câu hỏi</label>
                                            <select class="form-control" name="question_type">
                                                <option value="1">Lý thuyết</option>
                                                <!-- <option>Nghiệp vụ vận tải</option>
                                                <option>Văn hóa lái xe</option>
                                                <option>Kỹ thuật sửa chữa</option> -->
                                                <option value="2">Biển báo</option>
                                                <option value="3">Sa Hình</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Nhập nội dung câu hỏi</label>
                                            <textarea class="form-control" rows="3" name="question_content" required></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label>Chèn ảnh</label>
                                            <input type="file">
                                        </div>
                                        <div class="form-group">
                                            <label>
                                                <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked>Chọn Là Đúng
                                            </label>
                                            <input class="form-control" placeholder="Nhập đáp án A" name="question_ansA" required>
                                        </div>
                                        <div class="form-group">
                                            <label>
                                                <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked>Chọn Là Đúng
                                            </label>
                                            <input class="form-control" placeholder="Nhập đáp án B" name="question_ansB" required>
                                        </div>
                                        <div class="form-group">
                                            <label>
                                                <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked>Chọn Là Đúng
                                            </label>
                                            <input class="form-control" placeholder="Nhập đáp án C" name="question_ansC">
                                        </div>
                                        <div class="form-group">
                                            <label>
                                                <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked>Chọn Là Đúng
                                            </label>
                                            <input class="form-control" placeholder="Nhập đáp án D" name="question_ansD">
                                            <input class="form-control" placeholder="Nhập key đáp án" name="question_answerTrue">
                                        </div>
                                        <button type="submit" class="btn btn-default" name="">Lưu</button>
                                        <button type="reset" class="btn btn-default">Hủy bỏ</button>
                                    </form>
                                </div>
                                
                                <!-- /.col-lg-6 (nested) -->
                            </div>
                            <!-- /.row (nested) -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="{{ asset('vendor/bootstrap/js/bootstrap.min.js') }}"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="{{ asset('vendor/metisMenu/metisMenu.min.js') }}"></script>

    <!-- Custom Theme JavaScript -->
    <script src="{{ asset('js/sb-admin-2.js') }}"></script>

</body>

</html>
