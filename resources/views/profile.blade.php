@extends('layouts.client')
@section('content')
<div class="container">
	<div class="row mt-3 mb-3">
		<div class="col-md-2">
			<div class="form-group form-control border-primary">
				<div class="form-group">
					<img width="150" src="https://scontent.fhan2-2.fna.fbcdn.net/v/t1.0-9/34319464_888812377987168_6458777892808556544_n.jpg?_nc_cat=106&_nc_ht=scontent.fhan2-2.fna&oh=54f8838c52a1eee429b3f04b206c2d51&oe=5C80AAAF" alt="" class="mx-auto d-block img-circle rounded-circle">
				</div>
				<div class="form-group">
					<h6 class="text-center huy-text-style"><b>Hoàng Trung Huy</b></h6>
					<br><p class="text-center">@huy95</p>
				</div>
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
					<form action="" method="">
				<!-- thong tin ca nhan-->
						<div class="row form-group form-control">
							<div class="form-group">
								<h5 >Thông Tin Cá Nhân:</h5>
							</div>
							<div class="form-group">
								<div class="row">
									<div class="col-md-5">
										<input type="text" name="" placeholder="First Name" class="form-control">
									</div>
									<div class="col-md-7">
										<input type="text" name="" placeholder="Last Name" class="form-control">
									</div>
								</div>
							</div>
							<div class="form-group">
								<input type="text" name="" placeholder="Username" class="form-control">
							</div>
							<div class="form-group">
								<input type="text" name="" placeholder="Email" class="form-control">
							</div>
							<div class="form-group">
                                <label>Giới Tính:</label>
                                <select class="form-control" name="">
                                    <option value="1">Nam</option>
                                    <option value="2">Nữ</option>
                                </select>
                            </div>
							<div class="form-group">
								<input type="text" name="" placeholder="Ngày Sinh" class="form-control">
							</div>
							<div class="form-group">
								<input type="text" name="" placeholder="Địa Chỉ" class="form-control">
							</div>
						</div>
				<!-- anh dai dien -->
						<div class="row form-group form-control">
							<div class="form-group">
								<h5 >Ảnh đại diện:</h5>
							</div>
							<div class="form-group">
								<img width="100" src="https://scontent.fhan2-2.fna.fbcdn.net/v/t1.0-9/34319464_888812377987168_6458777892808556544_n.jpg?_nc_cat=106&_nc_ht=scontent.fhan2-2.fna&oh=54f8838c52a1eee429b3f04b206c2d51&oe=5C80AAAF" alt="">
								<input type="file" name="" class="form-control">
							</div>
						</div>
				<!-- edit password-->
						<div class="row form-group form-control">
							<div class="form-group">
								<h5 >Đổi Mật Khẩu:</h5>
							</div>
							<div class="form-group">
								<input type="text" name="" placeholder="Nhập mật khẩu cũ" class="form-control">
							</div>
							<div class="form-group">
								<input type="text" name="" placeholder="Nhập mật khẩu mới" class="form-control">
							</div>
							<div class="form-group">
								<input type="text" name="" placeholder="Nhập lại mật khẩu mới" class="form-control">
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

@endsection