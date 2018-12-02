@extends('layouts.client')
@section('content')

	<section style="margin: 20px 0px;">
		<div class="container">
			<div class="row">
				<div class="col-md-9 mx-auto">
					<h1 class="text-center">Bộ 450 câu hỏi sát hạch lái xe Ôtô:</h1><br><br>
					@foreach($data as $key => $value)
					<div class="col-md-12 form-group form-control" >
						<p style="color:red;"><b>Câu số {{ $value->id }}:</b></p>
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
							@if ($value->question_ansC != null)
							<li>
								<label>
								    * {{ $value->question_ansC }}

								    @if (strpos($value->question_answerTrue, 'c') !== false)
								    	<i class="fa fa-2x fa-check-circle text-success"></i>
								    @endif
								</label>
							</li>
							@endif

							@if ($value->question_ansD != null)
							<li>
								<label>
								    * {{ $value->question_ansD }}

								    @if (strpos($value->question_answerTrue, 'd') !== false)
								    	<i class="fa fa-2x fa-check-circle text-success"></i>
								    @endif
								</label>
							</li>
							@endif
						</ul>
					</div>
					@endforeach

					{{$data->links()}}

				</div>
			</div>
		</div>

	</section>


@endsection
@section('css')
	<style>
		.pagination {
			display: -ms-flexbox;
			display: flex;
			padding-left: 0;
			list-style: none;
			border-radius: .25rem;
		}
		.pagination {
			display: inline-block;
			padding-left: 0;
			margin: 20px 0;
			border-radius: 4px;
		}
		.pagination>li {
			display: inline;
		}
		ul, li {
			margin: 0px;
			list-style-type: none;
		}
		.pagination>li:first-child>a, .pagination>li:first-child>span {
			margin-left: 0;
			border-top-left-radius: 4px;
			border-bottom-left-radius: 4px;
		}
		.pagination>li>a, .pagination>li>span {
			position: relative;
			float: left;
			padding: 6px 12px;
			margin-left: -1px;
			line-height: 1.42857143;
			color: #337ab7;
			text-decoration: none;
			background-color: #fff;
			border: 1px solid #ddd;
		}
		.pagination>.active>a, .pagination>.active>a:focus, .pagination>.active>a:hover, .pagination>.active>span, .pagination>.active>span:focus, .pagination>.active>span:hover {
			z-index: 3;
			color: #fff;
			cursor: default;
			background-color: #337ab7;
			border-color: #337ab7;
		}
		.pagination>li>a, .pagination>li>span {
			position: relative;
			float: left;
			padding: 6px 12px;
			margin-left: -1px;
			line-height: 1.42857143;
			color: #337ab7;
			text-decoration: none;
			background-color: #fff;
			border: 1px solid #ddd;
		}
	</style>
@endsection
