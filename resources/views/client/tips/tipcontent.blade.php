
@extends('layouts.client')
<div id="fb-root"></div>
<script>(function(d, s, id) {
	var js, fjs = d.getElementsByTagName(s)[0];
	if (d.getElementById(id)) return;
	js = d.createElement(s); js.id = id;
	js.src = 'https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v3.2&appId=602300516877402&autoLogAppEvents=1';
	fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
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
					<aside>
						<h4 class="entry-title">FACEBOOK</h4>
						<br>
						<!--Facebook page-->
						<div class="fb-page" data-href="https://www.facebook.com/bay.tam.chuc.company/" data-tabs="timeline" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/bay.tam.chuc.company/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/bay.tam.chuc.company/">Tổng Cục Công Ty Phần Mềm Bảy Tám Chục</a></blockquote></div>

					</aside>

					<div class="wrap-text-b5 p-t-28">
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
										Địa chỉ: Trường Đại học Công Nghiệp Hà Nội
									</span>
								</li>

								<li class="dis-flex p-t-11">
									<span class="w-size9">
										<i class="fa fa-phone fs-14 color6" aria-hidden="true"></i>
									</span>

									<span class="s-txt2 w-size10">
										Phone: (+84) 968 437 320
									</span>
								</li>

								<li class="dis-flex p-t-11">
									<span class="w-size9">
										<i class="fa fa-fax fs-14 color6" aria-hidden="true"></i>
									</span>

									<span class="s-txt2 w-size10">
										Fax: (+84) 968 437 320
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

		@endforeach
		<script>
			var str = document.getElementsByClassName('stringToHtml');
			for (var i = 0; i < str.length; i++) {
				str[i].innerHTML = str[i].innerText;
			}
		</script>
		@endsection

