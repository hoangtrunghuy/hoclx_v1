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
                                    <form action="{{ route('questions.store') }}" method="post" role="form" > 
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
                                            <input type="file">
                                        </div>
                                        <div class="form-group">
                                            <label>
                                                <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked>Chọn Là Đúng
                                            </label>
                                            <input class="form-control" placeholder="Nhập đáp án A" name="question_ansA" required>
                                        </div>
                                        <div class="form-group">
                                            <label>
                                                <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked>Chọn Là Đúng
                                            </label>
                                            <input class="form-control" placeholder="Nhập đáp án B" name="question_ansB" required>
                                        </div>
                                        <div class="form-group">
                                            <label>
                                                <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked>Chọn Là Đúng
                                            </label>
                                            <input class="form-control" placeholder="Nhập đáp án C" name="question_ansC">
                                        </div>
                                        <div class="form-group">
                                            <label>
                                                <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked>Chọn Là Đúng
                                            </label>
                                            <input class="form-control" placeholder="Nhập đáp án D" name="question_ansD">
                                            <input class="form-control" placeholder="Nhập key đáp án" name="question_answerTrue">
                                        </div>
                                        <button type="submit" class="btn btn-default" name="">Lưu</button>
                                        <button type="reset" class="btn btn-default">Hủy bỏ</button>
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
    @endsection