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
					<form action="{{ route('ChamBai') }}" method="post"> 
					{{ @csrf_field() }}
						<div class="row div_time shadow-lg">
							<div class="col-md-10">
								<p style="color:red;font-size: 20px;"><i class="fa fa-hourglass-half"></i><b id="countDown"></b></p>
							</div>
							<div class="col-md-2">
								<input type="submit" value="Nộp bài" id="nopbai">
							</div>
						</div>
						<input type="hidden" name="exam_id" value="{{ $data[0]->exam_id }}">
						<input type="hidden" name="exam_type" value="{{ $data[0]->exam_type }}">
						@foreach($data as $key => $value)
						<div class="col-md-12 noi_dung_cau_hoi" id="">
							<p>Câu số {{ ++$key }}:</p>
							<h4>{{ $value->question->question_content }}</h4>
							<img src="{{ $value->question->question_img }}" alt="" width="100%">
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
								@if ($value->question->question_ansC != null)
								<li>
									<label>
									    <input type="checkbox" class="chon" value="c" name="cau{{ $key }}_check3" />
									    {{ $value->question->question_ansC }}
									</label>
								</li>
								@endif

								@if ($value->question->question_ansD != null)
								<li>
									<label>
									    <input type="checkbox" class="chon" value="d" name="cau{{ $key }}_check4" />
									    {{ $value->question->question_ansD }}
									</label>
								</li>
								@endif

								<input type="hidden" name="cau{{ $key }}_answerTrue" value="{{ $value->question->question_answerTrue }}">
								<input type="hidden" name="cau{{ $key }}_id" value="{{ $value->question->id }}">
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

<script>
//Dem gio lam bai
// Set seconds we're count down
var time = 20*60;

// Update the count down every 1 second
var x = setInterval(function() {

    time--;
    var minutes = Math.floor((time % (60 * 60)) /  60);
    var seconds = Math.floor((time %  60) );
    
    document.getElementById("countDown").innerHTML = " "+minutes + ":" + seconds;
    
    // bao het gio va nop bai
    if (time < 0) {
        clearInterval(x);
        document.getElementById("countDown").innerHTML = " Hết giờ!";
        document.getElementById("nopbai").click();
    }
}, 1000);
</script>
<script type="text/javascript" charset="utf-8">
	/*window.onbeforeunload = function (e) {
	  var message = "Your confirmation message goes here.",
	  e = e || window.event;
	  // For IE and Firefox
	  if (e) {
	    e.returnValue = message;
	  }

	  // For Safari
	  return message;
	};*/
</script>

@endsection
