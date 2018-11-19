@extends('layouts.client')
@section('content')
<!-- Content page -->
	<section class="p-t-65 p-b-60">
		<div class="container">
			<div class="row">
				<div class="col-md-7 col-lg-8 p-b-50">
					<div>
						<h3 class="m-txt28 rs1-color p-b-40">
							LIÊN HỆ
						</h3>

						<form id="contact-form" class="flex-w flex-sb validate-form" method="POST" action="/post-contact" name="contact" >
							{{ csrf_field() }}
							<div class=" size25 w-full-lg m-b-20 validate-input" data-validate = "Name is required">
								<input class="s-txt31 size-full cl-ph-1 bo6 input-focus-1 bo-rad-2 p-l-18 p-r-18" type="text" name="name" placeholder="Họ và tên">
							</div>

							<div class=" size25 w-full-lg m-b-20 validate-input" data-validate = "Valid email is: ex@abc.xyz">
								<input class="s-txt31 size-full cl-ph-1 bo6 input-focus-1 bo-rad-2 p-l-18 p-r-18" type="text" name="email" placeholder="Email">
							</div>

							<div class=" size25 w-full-lg m-b-20">
								<input class="s-txt31 size-full cl-ph-1 bo6 input-focus-1 bo-rad-2 p-l-18 p-r-18" type="text" name="phone" placeholder="Số điện thoại">
							</div>

							<div class="w-full m-b-20 validate-input" data-validate = "Message is required">
								<textarea class="s-txt31 size22 cl-ph-1 bo6 input-focus-1 bo-rad-2 p-l-18 p-r-18 p-t-12" name="contact_content" placeholder="Ghóp ý"></textarea>
							</div>

							<div>
								<!-- Button -->
								<input type="submit" class="btn btn-success" value="Submit">
							</div>
						</form>
					</div>
				</div>

				<div class="col-md-5 col-lg-4 p-b-50">
					<div class="p-l-20 p-l-0-lg">
						<h3 class="m-txt28 rs1-color p-b-35">
							LIÊN HỆ
						</h3>

						<p class="s-txt2">
							Chúng tôi luôn luôn lắng nghe các ý kiến đóng ghóp của các bạn để công ty phục vụ các bạn ngày một tốt hơn. Mọi ý kiến đóng ghóp thông qua điện thoại hoặc điền và gửi form bên dưới. Cảm ơn các bạn đã quan tâm và đóng ghóp cho công ty.
						</p>

						<ul class="p-t-26">
							<li class="s-txt32 rs2-color p-b-10">
								<i class="m-r-5 fa fa-home" aria-hidden="true"></i>
								Trường Đại học Công Nghiệp Hà Nội
							</li>

							<li class="s-txt32 rs2-color p-b-10">
								<i class="m-r-5 fa fa-phone" aria-hidden="true"></i>
								0968437320
							</li>

							<li class="s-txt32 rs2-color p-b-10">
								<i class="m-r-5 fa fa-envelope-o" aria-hidden="true"></i>
								contact.hoclaixe123@gmail.com
							</li>

							<li class="s-txt32 rs2-color p-b-10">
								<i class="m-r-5 fa fa-clock-o" aria-hidden="true"></i>
								Mon-Fri 09:30 am – 06:00 pm
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</section>
@endsection