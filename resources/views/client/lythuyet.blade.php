@extends('layouts.client')
@section('content')

	<section style="margin: 20px 0px;">
		<div class="container">
			<div class="row">
				<div class="col-md-9 mx-auto">
					<h2 class="text-center">Bộ 450 câu hỏi sát hạch lái xe Ôtô:</h2><br><br>
					@foreach($data as $key => $value)
					<div class="col-md-12 form-group form-control" >
						<p style="color:red;"><b>Câu số {{ ++$key }}:</b></p>
						<h4>{{ $value->question_content }}</h4>
						<img src="{{ $value->question_img }}" alt="" width="100%">
						<ul>
							<li>
								<label >
								    * {{ $value->question_ansA }} 

								    @if (strpos($value->question_answerTrue, 'a') !== false) 
								    	<i class="fa fa-2x fa-check-circle text-success"></i>
								    @endif
								</label>
							</li>
							<li>
								<label>
								    * {{ $value->question_ansB }}

								    @if (strpos($value->question_answerTrue, 'b') !== false) 
								    	<i class="fa fa-2x fa-check-circle text-success"></i>
								    @endif
								</label>
							</li>
							<li>
								<label>
								    * {{ $value->question_ansC }}

								    @if (strpos($value->question_answerTrue, 'c') !== false) 
								    	<i class="fa fa-2x fa-check-circle text-success"></i>
								    @endif
								</label>
							</li>
							<li>
								<label>
								    * {{ $value->question_ansD }}

								    @if (strpos($value->question_answerTrue, 'd') !== false) 
								    	<i class="fa fa-2x fa-check-circle text-success"></i>
								    @endif
								</label>
							</li>
						</ul>	
					</div>
					@endforeach
					
				</div>
			</div>
		</div>

	</section>


@endsection
