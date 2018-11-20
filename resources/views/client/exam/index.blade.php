@extends('layouts.client')
@section('content')
	<style type="text/css">
		.BoDe{
			margin: 40px auto;
		}
		.BoDe h2{
			margin: 30px 0;
			color: #000;
		}
		.ListDe{
			padding: 10px;
			border-top: 1px solid #000;
		}
		.ListDe h4{
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
			<!-- <div class="row">
				<h2 class="text-center">Bốc đề tự động:</h2>
			</div> -->
			<div class="row">
				<div class="col-md-3 mx-auto form-control border-primary shadow-lg">
					<form action="{{ route('exams.create') }}" method="get">
					{{ @csrf_field() }}
						<div class="form-group">
		                    <label>Chọn Hạng Đề Thi:</label>
		                    <select class="form-control" name="exam_type">
		                        <option value="b1">Hạng B1</option>
		                        <option value="b2">Hạng B2</option>
		                        <option value="c">Hạng C</option>
		                        <option value="d">Hạng D</option>
		                        <option value="e">Hạng E</option>
		                        <option value="f">Hạng F</option>
		                    </select>
		                </div>
		                <div class="form-group">
							<input type="submit" name="" value="Bốc Đề Tự Động" class="btn btn-primary center-block">
						</div>
					</form>
				</div>
			</div>
			<div class="row">
				<h2>Danh sách đề đã thi:</h2>
			</div>
			
			<div class="row ListDe">
			@foreach($data as $key => $item)
	            <div class="col-sm-9 col-md-7 col-lg-4 p-b-30">
	                <!-- Block 1 -->
	                <div class="block-1">
	                    <div class="wrap-pic-b1 wrap-pic-w">
	                        <img src="client/images/{{ $item->exam_type }}.jpg" alt="IMG-FEATURE">
	                    </div>

	                    <div class="wrap-text-b1 bg-main op-09 trans-05 ">
	                        <a href="{{ route('xemlai',$item->exam_id) }}" class="wrap-title-b1">
	                            <i class="fa fa-car color-white fs-30" aria-hidden="true"></i>
	                            <h4 class="m-txt3 color-white tt-up m-l-15">Mã đề: {{ $item->exam_id }}</h4>
	                        </a>

	                        <div class="wrap-para-b1 p-l-50 p-r-20 m-tt-20 ">
	                            <h5 class="s-txt1">Điểm thi: <font size="8" color="red">{{ $item->exam_score }}</font></h5>
								<span class="s-txt1">Ngày thi: {{ $item->created_at }}</span>
							@if( $item->exam_status == 'Đạt' )
								<p class="s-txt1">Trạng thái: <font size="5" color="#1ef104">{{ $item->exam_status }}</font></p>
							@else
								<p class="s-txt1">Trạng thái: <font size="5" color="red">{{ $item->exam_status }}</font></p>
							@endif
	                        </div>
	                        <hr>
	                        <div class="col-md-6 wrap-more-b1 mt-5">
	                            <a href="{{ route('xemlai',$item->exam_id) }}" class="s-txt1 hov-color-white m-tt-10">
	                                <i class="fa fa-caret-right fs-16 trans-04" aria-hidden="true"></i>
	                                <span class=" trans-04">Xem Lại</span>
	                            </a>
	                        </div>  
	                        <div class="col-md-6 wrap-more-b1 mt-5">
	                            <a href="{{ route('DeleteExam',$item->exam_id) }}" class="s-txt1 hov-color-white m-tt-10">
	                                <i class="fa fa-trash fs-16 trans-04" aria-hidden="true"></i>
	                                <span class=" trans-04">Xóa Bài Thi</span>
	                            </a>
	                        </div>
	                    </div>
	                </div>
	            </div>
	        @endforeach
	        </div>
		</div>
			
			
	</div>
	<script type="text/javascript" charset="utf-8" >
		if({{ Session()->get('diem') }} != null)
			alert('Điểm bài thi của bạn là: '+{{ Session()->get('diem') }});
	</script>
@endsection
