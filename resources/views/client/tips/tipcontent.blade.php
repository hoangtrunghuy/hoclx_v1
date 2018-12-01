@extends('layouts.client')
@section('content')
@foreach($data as $item)
	<section class="bgwhite p-t-80 p-b-75">
		<div class="container">
			<div class="row">
				<div class="col-sm-10 col-md-8 col-lg-9 m-lr-auto p-b-50">
					<div class="p-r-20 p-r-0-md">
						<div class="bo2">
	
							<div class="p-l-38 p-r-38 p-t-30 p-b-18 p-lr-15-sm">
								
								<div class="flex-sb-m p-b-12">
									<span class="s-txt5">
										hoclaixe123.com
									</span>
									<span class="color1 fs-12">
										<i class="fa fa-star" aria-hidden="true"></i>
										<i class="fa fa-star" aria-hidden="true"></i>
										<i class="fa fa-star" aria-hidden="true"></i>
										<i class="fa fa-star" aria-hidden="true"></i>
										<i class="fa fa-star" aria-hidden="true"></i>
									</span>
								</div>
								
								
								<h4 class="m-txt25 p-b-22">
									{{$item->title}}
								</h4>
								
								<div class="stringToHtml">
								{{$item->content}}
								</div>		
								
								
								 <div class="flex-w flex-sb-m">
									<div class="flex-w p-t-10 p-b-10 p-r-30">
										<div class="m-r-8 m-t-4 m-b-4">
											<a href="#" class="btn-drive m-txt1 size3 bg-main hov-color-white bo-rad-4">
												Trở về trang chủ
											</a>
										</div>

										<div class="m-t-4 m-b-4">
											<a href="{{ route('content.index.all') }}" class="btn-drive m-txt10 size19 bo3 bg1 hov-color-white bo-rad-4">
												Tất cả bài viết
											</a>
										</div>
									</div>

									{{--<div class="flex-w flex-m p-t-10 p-b-10 rs1-share-item">--}}
										{{--<span class="s-txt26 p-r-17 m-t-4 m-b-4">--}}
											{{--Share--}}
										{{--</span>--}}

										{{--<a href="#" class="flex-c-m bg1 size14 bo-rad-3 bo2 color7 hov-bg-main hov-color-white trans-03 m-r-5 m-t-4 m-b-4">--}}
											{{--<i class="fa fa-facebook fs-18"></i>--}}
										{{--</a>--}}

										{{--<a href="#" class="flex-c-m bg1 size14 bo-rad-3 bo2 color7 hov-bg-main hov-color-white trans-03 m-r-5 m-t-4 m-b-4">--}}
											{{--<i class="fa fa-twitter fs-18"></i>--}}
										{{--</a>--}}

										{{--<a href="#" class="flex-c-m bg1 size14 bo-rad-3 bo2 color7 hov-bg-main hov-color-white trans-03 m-r-5 m-t-4 m-b-4">--}}
											{{--<i class="fa fa-google-plus fs-18"></i>--}}
										{{--</a>--}}

										{{--<a href="#" class="flex-c-m bg1 size14 bo-rad-3 bo2 color7 hov-bg-main hov-color-white trans-03 m-r-5 m-t-4 m-b-4">--}}
											{{--<i class="fa fa-linkedin fs-18"></i>--}}
										{{--</a>--}}

										{{--<a href="#" class="flex-c-m bg1 size14 bo-rad-3 bo2 color7 hov-bg-main hov-color-white trans-03 m-t-4 m-b-4">--}}
											{{--<i class="fa fa-plus fs-18"></i>--}}
										{{--</a>--}}
									{{--</div>--}}
								</div>
	
							</div>
						</div>
					</div>	
				</div>
	
				<div class="col-sm-10 col-md-4 col-lg-3 m-lr-auto p-b-50">
					<div class="block-5">
						<div class="wrap-pic-b5 wrap-pic-w hov5 bo2">
							<a href="#"><img src="{{$item->image}}" alt="IMG-INSTRUCTOR"></a>
						</div>

						 <div class="wrap-text-b5 p-t-28">
							{{--<a href="#"><h4 class="m-txt16 hov-color-main trans-04 p-b-8">--}}
								{{--Bùi Văn Huế--}}
							{{--</h4></a>--}}

							{{--<span class="s-txt8 color-main">--}}
								{{--Chuyên viên công nghệ--}}
							{{--</span>--}}

							{{--<p class="s-txt2 p-t-11 p-b-12">--}}
								{{--nên viết gì--}}
							{{--</p>--}}

							{{--<span class="dis-block p-b-4">--}}
								{{--<a href="#" class="fs-20 color2 hov-color-main trans-03 m-r-16">--}}
									{{--<i class="fa fa-facebook-square" aria-hidden="true"></i>--}}
								{{--</a>--}}

								{{--<a href="#" class="fs-20 color2 hov-color-main trans-03 m-r-16">--}}
									{{--<i class="fa fa-twitter" aria-hidden="true"></i>--}}
								{{--</a>--}}

								{{--<a href="#" class="fs-20 color2 hov-color-main trans-03 m-r-16">--}}
									{{--<i class="fa fa-linkedin-square" aria-hidden="true"></i>--}}
								{{--</a>--}}

							{{--</span>--}}

							{{--<span class="dis-block s-txt14">--}}
								{{--096969696--}}
							{{--</span>--}}

							{{--<div class="wrap-btn-b5 p-t-23 flex-w">--}}
								{{--Button--}}
								{{--<a href="#" class="btn-drive m-txt10 size11 bo3 bg1 hov-color-white bo-rad-4">--}}
									{{--Xem hồ sơ--}}
								{{--</a>--}}
							{{--</div>--}}

						{{--</div>--}}
					</div>

					{{-- Map
					<div class="map p-t-50">
						<div class="contact-map h-size5" id="google_map" data-map-x="40.707840" data-map-y="-74.011229" data-pin="images/icons/marker-01.png" data-scrollwhell="0" data-draggable="1" data-zoom="13"></div>
						<div>
							Button
							<a href="#" class="btn-drive size18 m-txt23 bg-main trans-03">
								<i class="fa fa-map-marker m-r-8 fs-16" aria-hidden="true"></i>
								Bản đồ
							</a>
						</div>
					</div>

					Contact --}}
					<div class="p-t-45">
						<h4 class="m-txt24 p-b-13">
							Liên hệ
						</h4>
	
						<ul>
							<li class="dis-flex p-t-11">
								<span class="w-size9">
									<i class="fa fa-map-marker fs-14 color6" aria-hidden="true"></i>
								</span>
	
								<span class="s-txt2 w-size10">
									Địa chỉ: Ngõ 80 - Xuân Phương - Nam Từ Liêm - Hà Nội
								</span>
							</li>
	
							<li class="dis-flex p-t-11">
								<span class="w-size9">
									<i class="fa fa-phone fs-14 color6" aria-hidden="true"></i>
								</span>
	
								<span class="s-txt2 w-size10">
									Phone: (+1) 96 6969 6969
								</span>
							</li>
	
							<li class="dis-flex p-t-11">
								<span class="w-size9">
									<i class="fa fa-fax fs-14 color6" aria-hidden="true"></i>
								</span>
	
								<span class="s-txt2 w-size10">
									Fax: (+1) 96 696 696969
								</span>
							</li>
	
							<li class="dis-flex p-t-11">
								<span class="w-size9">
									<i class="fa fa-envelope fs-14 color6" aria-hidden="true"></i>
								</span>
	
								<span class="s-txt2 w-size10">
									Email: contact@hoclauoto.com
								</span>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</section>
{{-- 	<div class="container">
		<div class="row">
			<div class="col-sm-2">
				<img height="100px" class="img-thumbnail" src="{{$item->image}}" alt="">
			</div>
			<div class="col-sm-10">
				<div class="row">
					<div class="col-sm-12">
						<h3>{{$item->title}}</h3>
					</div>
				</div>
				<hr width="auto">
				<div class="row">
					<div class="col-sm-12" >
						<p class="stringToHtml">{{$item->content}}</p>
					<div>
				</div>
			</div>
		</div>
	</div> --}}
	@endforeach
	<script>
        var str = document.getElementsByClassName('stringToHtml');
        for (var i = 0; i < str.length; i++) {
            str[i].innerHTML = str[i].innerText;
        }
</script>
@endsection

