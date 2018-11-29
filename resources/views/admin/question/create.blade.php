@extends('layouts.app-admin')
    @section('content')
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Thêm câu hỏi</h1>
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
                                    <form action="{{ route('questions.store') }}" method="post" role="form" enctype="multipart/form-data"> 
                                    {{ @csrf_field() }}
                                        <div class="form-group">
                                            <label>Chọn loại câu hỏi</label>
                                            <select class="form-control" name="question_type">
                                                <option value="1">Lý thuyết</option>
                                                <!-- <option>Nghiệp vụ vận tải</option>
                                                <option>Văn hóa lái xe</option>
                                                <option>Kỹ thuật sửa chữa</option> -->
                                                <option value="2">Biển báo</option>
                                                <option value="3">Sa Hình</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Nhập nội dung câu hỏi</label>
                                            <textarea class="form-control" rows="3" name="question_content" required></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label>Chèn ảnh</label>
                                            <input type="file" name="question_img">
                                        </div>
                                        <div class="form-group">
                                            <label>
                                                <input type="checkbox" name="optionsRadios" value="a">Chọn Là Đúng
                                            </label>
                                            <input class="form-control" placeholder="Nhập đáp án A" name="question_ansA" required>
                                        </div>
                                        <div class="form-group">
                                            <label>
                                                <input type="checkbox" name="optionsRadios" value="b">Chọn Là Đúng
                                            </label>
                                            <input class="form-control" placeholder="Nhập đáp án B" name="question_ansB" required>
                                        </div>
                                        <div class="form-group">
                                            <label>
                                                <input type="checkbox" name="optionsRadios" value="c">Chọn Là Đúng
                                            </label>
                                            <input class="form-control" placeholder="Nhập đáp án C" name="question_ansC">
                                        </div>
                                        <div class="form-group">
                                            <label>
                                                <input type="checkbox" name="optionsRadios" value="d">Chọn Là Đúng
                                            </label>
                                            <input class="form-control" placeholder="Nhập đáp án D" name="question_ansD">
                                            <input class="form-control" placeholder="Nhập key đáp án" name="question_answerTrue">
                                        </div>
                                        <button type="submit" class="btn btn-default" name="">Lưu</button>
                                        <button type="reset" class="btn btn-default">Hủy bỏ</button>
                                        <button type="button" class="btn btn-default" onclick="kkk(this.form)">tttt</button>

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
                function kkk(form) {
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