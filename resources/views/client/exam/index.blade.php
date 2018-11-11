@extends('layouts.client')
@section('content')
	<style type="text/css">
		.BoDe{
			margin: 40px auto;
		}
		.BoDe h2{
			margin: 30px 0;
		}
		.ListDe{
			padding: 10px;
			border-top: 1px solid #000;
		}
		.ListDe h4{
			color: #0056b3;
			font-weight: bold;
		}
		.DeMini{
			margin: 10px 0;

		}
		.DeMini div{
			padding: 10px;
		}
	</style>
	<div class="container">
		<div class="BoDe">
			<div class="row">
				<h2>Danh sach de thi cua ban</h2>
			</div>
			<a href="{{ route('exams.create') }}" title="">Create New Exam</a>
			
			<div class="row ListDe">
			@foreach($data as $key => $item)
				<div class="col-lg-4 DeMini">
					<div style="border:1px solid #000;border-radius: 0 40px 0 0;">
						<div ><h4>Mã đề: {{ $item->exam_id }}</h4></div>
						<div style="border:1px solid #000;">
							<h5>Score: <font color="red">{{ $item->exam_score }}</font></h5>
							<span>ngay tao: {{ $item->created_at }}</span>
							<p>staus: </p>
						</div>
						<div class="">
							<a href="{{ route('exams.show',$item->exam_id) }}" title="">View Detail </a>
							<a href="{{ route('DeleteExam',$item->exam_id) }}" title="">Delete Exam</a>
						</div>
					</div>
				</div>

			@endforeach
			</div>

			
			
	</div>

@endsection
