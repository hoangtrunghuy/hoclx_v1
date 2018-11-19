@extends('layouts.client')
@section('content')
<div class="container">
	<div class="row mt-3 mb-3">
		<div class="col-md-2">
			<div class="form-group form-control border-primary">
				<div class="form-group">
					<img width="150" src="{{Auth::user()->user_img}}" alt="" class="mx-auto d-block img-circle rounded-circle">
				</div>
				<div class="form-group">
					<h6 class="text-center huy-text-style"><b>{{Auth::user()->name}}</b></h6>
					<br><p class="text-center">{{Auth::user()->email}}</p>
				</div>
				<ul>
					<li class="">
						<a href="{{ route('profile.update') }}">Thông tin chung</a>
					</li>
					<li class="">
						<a href="{{ route('profile.update.image') }}">Ảnh đại diện</a>
					</li>
					<li class="">
						<a href="{{ route('profile.update.account') }}">Tài khoản</a>
					</li>

				</ul>

			</div>
		</div>
		<div class="col-md-10">
			<div class="form-group">
				<div class="col-md-12">
					<h3 class="text-center font-weight-bold huy-text-style">Trang Cá Nhân</h3>
				</div>
			</div>
			<div class="form-group form-control border-primary">
				<div class="col-md-8 mx-auto pt-3 pb-3">
					<form action="{{route('profile.update',Auth::user()->id)}}" method="post" enctype="multipart/form-data">
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
										<input type="text" name="user_firstName" placeholder="First Name" value="{{Auth::user()->user_firstName}}" class="form-control">
									</div>
									<div class="col-md-7">
										<input type="text" name="user_lastName" placeholder="Last Name" value="{{Auth::user()->user_lastName}}" class="form-control">
									</div>
								</div>
							</div>
							<div class="form-group">
								<input type="text" name="name" placeholder="Username" value="{{Auth::user()->name}}" class="form-control">
							</div>
							<div class="form-group">
								<input type="text" name="email" placeholder="Email" value="{{Auth::user()->email}}" class="form-control">
							</div>
							<div class="form-group">
								<label>Giới Tính:</label>
								<select class="form-control" name="">
									<option value="1">Nam</option>
									<option value="2">Nữ</option>
								</select>
							</div>
							<div class="form-group">
								<input type="text" name="user_birth" placeholder="Ngày Sinh" value="{{Auth::user()->user_birth}}" class="form-control">
							</div>
							<div class="form-group">
								<input type="text" name="user_adress" placeholder="Địa Chỉ" value="{{Auth::user()->user_adress}}" class="form-control">
							</div>
						</div>
						<!-- anh dai dien -->
						<div class="row form-group form-control">
							<div class="form-group">
								<h5 >Ảnh đại diện:</h5>
							</div>
							<div class="form-group">
								<img width="100" src="{{Auth::user()->user_img}}" alt="">
								<input type="file" name="user_img" class="form-control">
							</div>
						</div>
						<!-- edit password-->
						<div class="row form-group form-control">
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
						</div>
						<!-- button save -->

						<input type="submit" name="" value="Lưu thay đổi" class="btn btn-primary ">
						<input type="reset" name="" value="Hủy" class="btn btn-danger">

					</form>
				</div>
			</div>
		</div>
	</div>
</div>
<script>
	var password = document.getElementById("password")
	, confirm_password = document.getElementById("confirm_password");

	function validatePassword(){
		if(password.value != confirm_password.value) {
			confirm_password.setCustomValidity("Passwords Don't Match");
		} else {
			confirm_password.setCustomValidity('');
		}
	}

	password.onchange = validatePassword;
	confirm_password.onkeyup = validatePassword;
</script>

@endsection