@extends('layouts.client')
@section('content')

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
					
					<div class="row div_time shadow-lg">
						<div class="col-md-10">
							<b style="color:red;font-size: 20px;">Hết giờ! </b>
						</div>
						<div class="col-md-2">
							<input type="button" value="Đã nộp bài" style="color:red;">
						</div>
					</div>
					<input type="hidden" name="exam_id" value="{{ $data[0]->exam_id }}">
					@foreach($data as $key => $value)
					<div class="col-md-12 noi_dung_cau_hoi" id="">
						<p>Câu số {{ ++$key }}:</p>
						<h4>{{ $value->question->question_content }}</h4>
						<img src="{{ $value->question->question_img }}" alt="" width="100%">
						<ul>
							<li>
								<label >
								    <input type="checkbox" class="chon" value="a" name="cau{{ $key }}_check1" @if (strpos($value->user_ans, 'a') !== false) checked="checked" @endif />

								    {{ $value->question->question_ansA }} 

								    @if (strpos($value->question->question_answerTrue, 'a') !== false) 
								    	<i class="fa fa-2x fa-check-circle text-success"></i>
								    @endif
								</label>
							</li>
							<li>
								<label>
								    <input type="checkbox" class="chon" value="b" name="cau{{ $key }}_check2" @if (strpos($value->user_ans, 'b') !== false) checked="checked" @endif />

								    {{ $value->question->question_ansB }}

								    @if (strpos($value->question->question_answerTrue, 'b') !== false) 
								    	<i class="fa fa-2x fa-check-circle text-success"></i>
								    @endif
								</label>
							</li>
							<li>
								<label>
								    <input type="checkbox" class="chon" value="c" name="cau{{ $key }}_check3" @if (strpos($value->user_ans, 'c') !== false) checked="checked" @endif />

								    {{ $value->question->question_ansC }}

								    @if (strpos($value->question->question_answerTrue, 'c') !== false) 
								    	<i class="fa fa-2x fa-check-circle text-success"></i>
								    @endif
								</label>
							</li>
							<li>
								<label>
								    <input type="checkbox" class="chon" value="d" name="cau{{ $key }}_check4" @if (strpos($value->user_ans, 'd') !== false) checked="checked" @endif />

								    {{ $value->question->question_ansD }}

								    @if (strpos($value->question->question_answerTrue, 'd') !== false) 
								    	<i class="fa fa-2x fa-check-circle text-success"></i>
								    @endif
								</label>
							</li>
							<input type="hidden" name="cau{{ $key }}_answerTrue" value="{{ $value->question->question_answerTrue }}">
						</ul>	
					</div>
					@endforeach
					<div class="row">
						<div class="col-md-12 prev_next">
							<a href="javascript:void(0);" title="" onclick="plusSlides(-1)">Câu trước</a>
							<a href="javascript:void(0);" title="" onclick="plusSlides(1)">Câu Tiếp</a>
						</div>
					</div>
					
				</div>
			</div>
		</div>


		<!-- <script type="text/javascript" charset="utf-8" >
			
		</script> -->
	</section>

	<script  type="text/javascript" charset="utf-8" >
		

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
