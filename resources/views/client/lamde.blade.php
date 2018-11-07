@extends('layouts.client')
@section('content')

	<style>
		.bang_cau_hoi ul{
			border: 1px solid #000;
			margin: 20px 0 10px;
		}
		.bang_cau_hoi ul li{
			display: inline-block;
			margin: 7px;
			padding: 8px 2px;
		}
		@media (max-width:1023px) {
			.bang_cau_hoi ul li{
				margin: 4px;
			}
		}
		@media (max-width:424px) {
			.bang_cau_hoi ul li{
				margin: 5px;
			}
		}
		.bang_cau_hoi ul li a{
			padding: 10px;
			border: 1px solid #000;
		}
		.bang_cau_hoi ul li a:hover, .prev_next a:hover{
			background: #233785;
			color: #fff;
		}
		.div_time{
			background-color: #ff0;
			padding: 5px;
		}
		.div_time input{
			padding: 5px;
			color: #fff;
			background: #233785;
			border-radius: 3px;
		}
		.div_time input:hover{
			color: red;
		}
		.noi_dung_cau_hoi{
			border-left: 5px solid;
    		padding-left: 10px;
    		display: none;
		}
		.noi_dung_cau_hoi p{
			color: #233785;
			margin-top: 10px;
			font-weight: bold;
		}
		.noi_dung_cau_hoi h4,.noi_dung_cau_hoi img{
			margin-bottom: 15px;
		}
		.noi_dung_cau_hoi label input{
			display: inline-block;
		}
		.prev_next{
			margin: 20px auto;
		}
		.prev_next a{
			padding: 5px 15px;
			font-weight: bold;
			border: 1px solid #000;
			border-radius: 3px;
			margin-left: 20px;
		}
		.active, .dot:hover {
		  background-color: #233785;
		  color:#fff;
		}
	</style>

	<section style="margin: 20px 0px;">
		<div class="container">
			<div class="row">
				<div class="col-md-4 bang_cau_hoi">
					<h4>Câu hỏi</h4>
					<ul>
						<li><a href="javascript:void(0);" class="dot" onclick="currentSlide(1)">01</a></li>
						<li><a href="javascript:void(0);" class="dot" onclick="currentSlide(2)">02</a></li>
						<li><a href="javascript:void(0);" class="dot" onclick="currentSlide(3)">03</a></li>
						<li><a href="javascript:void(0);" class="dot" onclick="currentSlide(4)">04</a></li>
						<li><a href="javascript:void(0);" class="dot" onclick="currentSlide(5)">05</a></li>
						<li><a href="javascript:void(0);" class="dot" onclick="currentSlide(6)">06</a></li>
						<li><a href="javascript:void(0);" class="dot" onclick="currentSlide(7)">07</a></li>
						<li><a href="javascript:void(0);" class="dot" onclick="currentSlide(8)">08</a></li>
						<li><a href="javascript:void(0);" class="dot" onclick="currentSlide(9)">09</a></li>
						<li><a href="javascript:void(0);" class="dot" onclick="currentSlide(10)">10</a></li>
						<li><a href="javascript:void(0);" class="dot" onclick="currentSlide(11)">11</a></li>
						<li><a href="javascript:void(0);" class="dot" onclick="currentSlide(12)">12</a></li>
						<li><a href="javascript:void(0);" class="dot" onclick="currentSlide(13)">13</a></li>
						<li><a href="javascript:void(0);" class="dot" onclick="currentSlide(14)">14</a></li>
						<li><a href="javascript:void(0);" class="dot" onclick="currentSlide(15)">15</a></li>
						<li><a href="javascript:void(0);" class="dot" onclick="currentSlide(16)">16</a></li>
						<li><a href="javascript:void(0);" class="dot" onclick="currentSlide(17)">17</a></li>
						<li><a href="javascript:void(0);" class="dot" onclick="currentSlide(18)">18</a></li>
						<li><a href="javascript:void(0);" class="dot" onclick="currentSlide(19)">19</a></li>
						<li><a href="javascript:void(0);" class="dot" onclick="currentSlide(20)">20</a></li>
						<li><a href="javascript:void(0);" class="dot" onclick="currentSlide(21)">21</a></li>
						<li><a href="javascript:void(0);" class="dot" onclick="currentSlide(22)">22</a></li>
						<li><a href="javascript:void(0);" class="dot" onclick="currentSlide(23)">23</a></li>
						<li><a href="javascript:void(0);" class="dot" onclick="currentSlide(24)">24</a></li>
						<li><a href="javascript:void(0);" class="dot" onclick="currentSlide(25)">25</a></li>
						<li><a href="javascript:void(0);" class="dot" onclick="currentSlide(26)">26</a></li>
						<li><a href="javascript:void(0);" class="dot" onclick="currentSlide(27)">27</a></li>
						<li><a href="javascript:void(0);" class="dot" onclick="currentSlide(28)">28</a></li>
						<li><a href="javascript:void(0);" class="dot" onclick="currentSlide(29)">29</a></li>
						<li><a href="javascript:void(0);" class="dot" onclick="currentSlide(30)">30</a></li>
					</ul>
				</div>
				<div class="col-md-8">
					<form action="{{ route('ChamBai') }}" method="post">
					{{ @csrf_field() }}
						<div class="row div_time">
							<div class="col-md-10">
								<p>Thời gian còn lại: 15:00</p>
							</div>
							<div class="col-md-2">
								<input type="submit" value="Nộp bài">
							</div>
						</div>
						<input type="" name="exam_id" value="{{ $data[0]->exam_id }}">
						@foreach($data as $key => $value)
						<div class="col-md-12 noi_dung_cau_hoi" id="">
							<p>Câu số {{ ++$key }}:</p>
							<h4>{{ $value->question->question_content }}</h4>
							<img src="{{ $value->question_img }}" alt="" width="100%">
							<ul>
								<li>
									<label>
									    <input type="checkbox" class="chon" value="a" name="cau{{ $key }}_check1" />
									    {{ $value->question->question_ansA }}
									</label>
								</li>
								<li>
									<label>
									    <input type="checkbox" class="chon" value="b" name="cau{{ $key }}_check2" />
									    {{ $value->question->question_ansB }}
									</label>
								</li>
								<li>
									<label>
									    <input type="checkbox" class="chon" value="c" name="cau{{ $key }}_check3" />
									    {{ $value->question->question_ansC }}
									</label>
								</li>
								<li>
									<label>
									    <input type="checkbox" class="chon" value="d" name="cau{{ $key }}_check4" />
									    {{ $value->question->question_ansD }}
									</label>
								</li>
								<input type="text" name="cau{{ $key }}_answerTrue" value="{{ $value->question->question_answerTrue }}">
							</ul>	
						</div>
						@endforeach
						<div class="row">
							<div class="col-md-12 prev_next">
								<a href="javascript:void(0);" title="" onclick="plusSlides(-1)">Câu trước</a>
								<a href="javascript:void(0);" title="" onclick="plusSlides(1)">Câu Tiếp</a>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>


		<!-- <script type="text/javascript" charset="utf-8" >
			
		</script> -->
	</section>

	<script  type="text/javascript" charset="utf-8" >
		if({{ Session()->get('diem') }} != null)
			alert('Điểm của bạn là: '+{{ Session()->get('diem') }});

		function show_cau_hoi() {
			var x = document.getElementsByClassName("noi_dung_cau_hoi");

		    for (var i = 0; i < x.length; i++){
		        x[i].style.display = 'none';
		    }
			document.getElementById(id).style.display = 'block';
		}
	</script>
	
<script>
	var slideIndex = 1;
	showSlides(slideIndex);

	function plusSlides(n) {
	  showSlides(slideIndex += n);
	}

	function currentSlide(n) {
	  showSlides(slideIndex = n);
	}

	function showSlides(n) {
	  var i;
	  var slides = document.getElementsByClassName("noi_dung_cau_hoi");
	  var dots = document.getElementsByClassName("dot");
	  if (n > slides.length) {slideIndex = 1}    
	  if (n < 1) {slideIndex = slides.length}
	  for (i = 0; i < slides.length; i++) {
	      slides[i].style.display = "none";  
	  }
	  for (i = 0; i < dots.length; i++) {
	      dots[i].className = dots[i].className.replace(" active", "");
	  }
	  slides[slideIndex-1].style.display = "block";  
	  dots[slideIndex-1].className += " active";
	}
</script>

@endsection