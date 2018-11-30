@extends('layouts.client')
@section('content')
<div class="container">
	<div class="row mt-3 mb-3">
		<div class="col-md-2">
			<div class="form-group form-control border-primary">
				<div class="form-group">
					<img width="150" src="{{$data[0]->user_img}}" alt="" class="mx-auto d-block img-circle rounded-circle">
				</div>
				<div class="form-group">
					<h6 class="text-center huy-text-style"><b>{{$data[0]->user_firstName}} {{$data[0]->user_lastName}}</b></h6>
				</div>
				<!-- <ul>
					<li class="">
						<a href="">Thông tin chung</a>
					</li>
					<li class="">
						<a href="">Ảnh đại diện</a>
					</li>
					<li class="">
						<a href="">Tài khoản</a>
					</li>

				</ul> -->

			</div>
		</div>
		<div class="col-md-10">
			<div class="form-group">
				<div class="col-md-12">
					<h3 class="text-center font-weight-bold huy-text-style">Trang Cá Nhân</h3>
				</div>
			</div>
			<div class="form-group form-control" style="border:none">
				<div class="col-md-8 mx-auto pt-3 pb-3">
					<form action="" method="post" enctype="multipart/form-data">
						{{csrf_field()}}
						@if(Session::has('success'))
						<div class="alert alert-success"><span class="glyphicon glyphicon-ok"></span><em> {!! session('success') !!}</em></div>
						@endif
						@if(Session::has('warning'))
						<div class="alert alert-warning"><span class="glyphicon glyphicon-ok"></span><em> {!! session('warning') !!}</em></div>
						@endif
						<!-- thong tin ca nhan-->
						<div class="row form-group form-control">
							<div class="form-group">
								<h5 >Thông Tin Cá Nhân:</h5>
							</div>
							<div class="form-group">
								<div class="row">
									<div class="col-md-5">
										<label>First Name:</label>
										<input type="text" name="user_firstName" placeholder="First Name" value="{{$data[0]->user_firstName}}" class="form-control" disabled>
									</div>
									<div class="col-md-7">
										<label>Last Name:</label>
										<input type="text" name="user_lastName" placeholder="Last Name" value="{{$data[0]->user_lastName}}" class="form-control" disabled>
									</div>
								</div>
							</div>
							<!-- <div class="form-group">
								<input type="text" name="name" placeholder="Username" value="{{$data[0]->name}}" class="form-control">
							</div> -->
							<div class="form-group">
								<label>Email:</label>
								<input type="text" name="email" placeholder="Email" value="{{$data[0]->email}}" class="form-control" disabled>
							</div>
							<!-- <div class="form-group">
								<label>Giới Tính:</label>
								<select class="form-control" name="">
									<option value="1">Nam</option>
									<option value="2">Nữ</option>
								</select>
							</div> -->
							<div class="form-group">
								<label>Ngày Sinh:</label>
								<input type="text" name="user_birth" placeholder="" value="{{$data[0]->user_birth}}" class="form-control" disabled>
							</div>
							<div class="form-group">
								<label>Địa Chỉ:</label>
								<input type="text" name="user_adress" placeholder="" value="{{$data[0]->user_adress}}" class="form-control" disabled>
							</div>
						</div>
						<!-- anh dai dien -->
						<!-- <div class="row form-group form-control">
							<div class="form-group">
								<h5 >Ảnh đại diện:</h5>
							</div>
							<div class="form-group">
								<img width="100" src="{{$data[0]->user_img}}" alt="">
								<input type="file" name="user_img" class="form-control">
							</div>
						</div> -->
						<!-- edit password-->
						<!-- <div class="row form-group form-control">
							<div class="form-group">
								<h5 >Đổi Mật Khẩu:</h5>
							</div>
							<div class="form-group">
								<input type="text" name="old_password" placeholder="Nhập mật khẩu cũ" class="form-control">
							</div>
							<div class="form-group">
								<input type="text" id="password" name="password" placeholder="Nhập mật khẩu mới" class="form-control">
							</div>
							<div class="form-group">
								<input type="text" id="confirm_password" name="confirm_password" placeholder="Nhập lại mật khẩu mới" class="form-control">
							</div>
						</div> -->
						<!-- button save -->

						<!-- <input type="submit" name="" value="Lưu thay đổi" class="btn btn-primary ">
						<input type="reset" name="" value="Hủy" class="btn btn-danger"> -->
					</form>
				</div>
			</div>
		</div>
	</div>
</div>


@endsection