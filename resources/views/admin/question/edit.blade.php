@extends('layouts.app-admin')
    @section('content')
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Sửa câu hỏi</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Nhập thông tin câu hỏi mới
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-2"></div>
                                <div class="col-lg-8">
                                    <form action="{{ route('questions.update',$model->id) }}" method="post" role="form" enctype="multipart/form-data"> 
                                    {{ @csrf_field() }}
                                    {{ method_field('PUT') }}
                                        <div class="form-group">
                                            <label>Chọn loại câu hỏi</label>
                                            <select class="form-control" name="question_type">
                                                <option value="1" @if ($model->question_type == 1) selected @endif>Lý thuyết</option>
                                                <!-- <option>Nghiệp vụ vận tải</option>
                                                <option>Văn hóa lái xe</option>
                                                <option>Kỹ thuật sửa chữa</option> -->
                                                <option value="2" @if ($model->question_type == 2) selected @endif>Biển báo</option>
                                                <option value="3" @if ($model->question_type == 3) selected @endif>Sa Hình</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Nhập nội dung câu hỏi</label>
                                            <textarea class="form-control" rows="3" name="question_content" required>{{ $model->question_content }}</textarea>
                                        </div>
                                        <div class="form-group">
                                        	<img src="{{ $model->question_img }}" alt=""/>
                                            <label>Chèn ảnh</label>
                                            <input type="file" name="question_img">
                                        </div>
                                        <div class="form-group">
                                            <label>
                                                <input type="checkbox" name="optionsRadios" id="optionsRadios1" value="a" @if (strpos($model->question_answerTrue, 'a')!==false) checked="checked" @endif >Đáp án đúng
                                            </label>
                                            <input class="form-control" placeholder="Nhập đáp án A" value="{{ $model->question_ansA }}" name="question_ansA" required>
                                        </div>
                                        <div class="form-group">
                                            <label>
                                                <input type="checkbox" name="optionsRadios" id="optionsRadios1" value="b" @if (strpos($model->question_answerTrue, 'b')!==false) checked="checked" @endif >Đáp án đúng
                                            </label>
                                            <input class="form-control" placeholder="Nhập đáp án B" value="{{ $model->question_ansB }}" name="question_ansB" required>
                                        </div>
                                        <div class="form-group">
                                            <label>
                                                <input type="checkbox" name="optionsRadios" id="optionsRadios1" value="c" @if (strpos($model->question_answerTrue, 'c')!==false) checked="checked" @endif >Đáp án đúng
                                            </label>
                                            <input class="form-control" placeholder="Nhập đáp án C" value="{{ $model->question_ansC }}" name="question_ansC">
                                        </div>
                                        <div class="form-group">
                                            <label>
                                                <input type="checkbox" name="optionsRadios" id="optionsRadios1" value="d" @if (strpos($model->question_answerTrue, 'd')!==false) checked="checked" @endif >Đáp án đúng
                                            </label>
                                            <input class="form-control" placeholder="Nhập đáp án D" value="{{ $model->question_ansD }}" name="question_ansD">
                                            <input class="form-control" type="hidden" name="question_answerTrue">
                                        </div>
                                        <button type="submit" class="btn btn-default" onclick="add_Key_Ans(this.form)" name="">Lưu</button>
                                        <button type="reset" class="btn btn-default" onclick="location.href='{{route('questions.index')}}'">Hủy bỏ</button>
                                    </form>
                                </div>
                                
                                <!-- /.col-lg-6 (nested) -->
                            </div>
                            <!-- /.row (nested) -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <script type="text/javascript" charset="utf-8" >
                function add_Key_Ans(form) {
                    with(form){
                        var ans = '';
                        if(optionsRadios[0].checked)
                            ans = ans + optionsRadios[0].value;
                        if(optionsRadios[1].checked)
                            ans = ans + optionsRadios[1].value;
                        if(optionsRadios[2].checked)
                            ans = ans + optionsRadios[2].value;
                        if(optionsRadios[3].checked)
                            ans = ans + optionsRadios[3].value;

                        question_answerTrue.value = ans;
                    }
                }
            </script>
@endsection