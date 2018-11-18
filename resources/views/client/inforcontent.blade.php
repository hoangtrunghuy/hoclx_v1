@extends('layouts.client')
@section('content')
@foreach($data as $item)
<section class="p-t-65 p-b-45">
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-lg-9 p-b-50">
					<div class="p-r-40 p-r-0-lg">
						<!-- Content Detail -->
						<div class="p-b-48">
							<h3 class="m-txt21 p-b-25">
								{{$item->infor_drivings_title}}
							</h3>

							<div class="flex-w flex-m s-txt29 bo2-b p-b-15">
								{{-- <span>
									by Tammy Ramos
									<span class="m-l-4 m-r-9">|</span>
								</span>   --}}

								<span>
									{{$item->updated_at}}
									<span class="m-l-4 m-r-9">|</span>
								</span> 

								{{-- <span>
									Driving
									<span class="m-l-4 m-r-9">|</span>
								</span>   --}}

								{{-- <span>
									3 Comments
								</span>
 --}}							</div>
							
								<div class="stringToHtml">
									{{$item->infor_drivings_content}}
								</div>
							</div>

							<!-- <div class="bg1 flex-w p-l-30 p-r-30 p-t-30 p-b-40">
								<div class="wrap-pic-w w-size15 m-r-30 m-b-10">
									<img src="images/avatar-01.jpg" alt="IMG">
								</div>

								<div class="w-size16 w-full-sm m-b-10">
									<span class="m-txt16">
										Tammy Ramos
									</span>

									<p class="s-txt2 w-size17 p-t-9">
										Nunc risus ex, tempus quis purus ac, tempor consequat ex. Vivamus sem magna, maximus at est id, maximus aliquet nunc. 
									</p>
								</div>
							</div> -->
						</div>

						<!-- Comment -->
						

						<!-- Leave a comment -->

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
