
<section class="testimonial">
    <div class="wrap-testimonial parallax100 bg-overlay-3 p-t-75 p-b-80"
         style="background-image: url('client/images/testimonial-bg-01.jpg');">
        <div class="wrap-slide-slick-1">
            <div class="p-b-40">
                <h3 class="m-txt6 txt-center p-b-8 respon1">
                    SỰ HÀI LÒNG CỦA HỌC VIÊN CHÍNH LÀ THÀNH CÔNG LỚN NHẤT CỦA CHÚNG TÔI.
                </h3>

                <div class="bg-main size2 bo-rad-3 m-lr-auto"></div>
            </div>
            @foreach($data as $item)
                <div class="slide-slick-1 js-slick-1">
                    <div class="item-slick-1">
                        <p class="para-slide-slick-1 m-lr-auto w-size1 s-txt1 txt-center p-l-40 p-r-40 p-b-25 animated">
                            {{ $item->feedback_content }}
                        </p>

                        <div class="wrap-person m-lr-auto flex-c-m animated">
                            <div class="wrap-pic-person">
                                <img src="client/images/manh.jpg" alt="IMG-PERSON">
                            </div>

                            <div class="wrap-info-person p-l-20">
                                <span class="dis-block s-txt3">{{ $item->user->user_firstName . ' ' . $item->user->user_lastName}}</span>
                                <span class="dis-block s-txt4">{{$item->user->user_adress}}</span>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach

            {{--<div class="item-slick-1">
                <p class="para-slide-slick-1 m-lr-auto w-size1 s-txt1 txt-center p-l-40 p-r-40 p-b-25 animated">
                    Thật sự website giúp ích cho tôi rất nhiều trong việc học lý thuyết oto. Trang web đẹp,
                    dễ sử dụng, cập nhật đầy đủ thông tin về bài học-tài liệu của bộ giao thông vận tải.
                </p>

                <div class="wrap-person m-lr-auto flex-c-m animated">
                    <div class="wrap-pic-person">
                        <img src="client/images/huy.jpg" alt="IMG-PERSON">
                    </div>

                    <div class="wrap-info-person p-l-20">
                        <span class="dis-block s-txt3">Hoàng Trung Huy</span>
                        <span class="dis-block s-txt4">Ba Vì, Hà Nội</span>
                    </div>
                </div>
            </div>

            <div class="item-slick-1">
                <p class="para-slide-slick-1 m-lr-auto w-size1 s-txt1 txt-center p-l-40 p-r-40 p-b-25 animated">
                    Nhờ trang web mà tôi đạt điểm tuyệt đối trong kì sát hạch vừa rồi. Trang web là rất chuyên
                    nghiệp,
                    quan tâm đến người sử dụng, giao diện đẹp, ghi điểm cũng như đánh giá điểm chính xác.
                </p>

                <div class="wrap-person m-lr-auto flex-c-m animated">
                    <div class="wrap-pic-person">
                        <img src="client/images/hue.jpg" alt="IMG-PERSON">
                    </div>

                    <div class="wrap-info-person p-l-20">
                        <span class="dis-block s-txt3">Bùi Văn Huế</span>
                        <span class="dis-block s-txt4">Tân Yên, Bắc Giang</span>
                    </div>
                </div>
            </div>

            <div class="item-slick-1">
                <p class="para-slide-slick-1 m-lr-auto w-size1 s-txt1 txt-center p-l-40 p-r-40 p-b-25 animated">
                    Khi làm trong ban sát hạch lái xe oto tôi thường xuyên giới thiệu học viên của mình vào trang
                    web
                    để luyện và học lý thuyết nhờ vậy giảm thiểu rất nhiều công sức cũng như thời gian đến tận địa
                    điểm
                    để học giờ đây có thể học trực tiếp trên trang web này.
                </p>

                <div class="wrap-person m-lr-auto flex-c-m animated">
                    <div class="wrap-pic-person">
                        <img src="client/images/testimonial-img-04.jpg" alt="IMG-PERSON">
                    </div>

                    <div class="wrap-info-person p-l-20">
                        <span class="dis-block s-txt3">Tống Thị Ngọc Lan</span>
                        <span class="dis-block s-txt4">Tân Yên, Bắc Giang</span>
                    </div>
                </div>
            </div>--}}
        </div>
    </div>
</section>