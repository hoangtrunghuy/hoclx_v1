
<section class="testimonial">
    <div class="wrap-testimonial parallax100 bg-overlay-3 p-t-75 p-b-80" style="background-image: url('images/testimonial-bg-01.jpg');">
        <div class="wrap-slide-slick-1">
            <div class="p-b-40">
                <h3 class="m-txt6 txt-center p-b-8 respon1">
                    SỰ HÀI LÒNG CỦA HỌC VIÊN CHÍNH LÀ THÀNH CÔNG LỚN NHẤT CỦA CHÚNG TÔI.
                </h3>

                <div class="bg-main size2 bo-rad-3 m-lr-auto"></div>
            </div>

            <div class="slide-slick-1 js-slick-1">
                @foreach($data as $item)
                <div class="slide-slick-1 js-slick-1">
                <div class="item-slick-1">
                <p class="para-slide-slick-1 m-lr-auto w-size1 s-txt1 txt-center p-l-40 p-r-40 p-b-25 animated">
                {{ $item->feedback_content }}
                </p>

                <div class="wrap-person m-lr-auto flex-c-m animated">
                <div class="wrap-pic-person">
                <img src="{{ $item->user->user_img }}" alt="IMG-PERSON">
                </div>

                <div class="wrap-info-person p-l-20">
                <span class="dis-block s-txt3">{{$item->user->user_firstName . ' ' . $item->user->user_lastName}}</span>
                <span class="dis-block s-txt4">{{$item->user->user_adress}}</span>
                </div>
                </div>
                </div>
                </div>
                @endforeach

            </div>
        </div>
    </div>
</section>
