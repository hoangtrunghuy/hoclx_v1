@extends('layouts.client')
<script>(function(d, s, id) {
	var js, fjs = d.getElementsByTagName(s)[0];
	if (d.getElementById(id)) return;
	js = d.createElement(s); js.id = id;
	js.src = 'https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v3.2&appId=602300516877402&autoLogAppEvents=1';
	fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
@section('content')
@foreach($data as $item)
<section class="p-t-65 p-b-45">
	<div class="container">
		<div class="row">
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
			<div class="col-md-8 col-lg-9 p-b-50">
				<div class="p-r-40 p-r-0-lg">
					<!-- Content Detail -->
					<div class="p-b-48">
						<h3 class="m-txt21 p-b-25">
							{{$item->infor_drivings_title}}
						</h3>						
						<div class="stringToHtml">
							{{$item->infor_drivings_content}}
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<script>
	var str = document.getElementsByClassName('stringToHtml');
	for (var i = 0; i < str.length; i++) {
		str[i].innerHTML = str[i].innerText;
	}
</script>
@endforeach
@endsection
