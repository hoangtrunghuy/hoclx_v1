<div class="wrap-header-mobile">
    <!-- Logo moblie -->        
    <a href="" class="logo-mobile">
        <img src="client/images/icons/logo.png" alt="IMG-LOGO">
    </a>
    <!-- Button show menu -->
    <div class="btn-show-menu-mobile hamburger hamburger--squeeze">
        <span class="hamburger-box">
            <span class="hamburger-inner"></span>
        </span>
    </div>

</div>
<!-- Menu Mobile -->
<div class="menu-mobile">
    <ul class="topbar-mobile">
        <li class="bo1-b p-t-8 p-b-8">
            <div class="left-top-bar p-l-7">
                <form action="" method="">
                    <input type="text" name="">
                    <input type="submit" name="" value="Tìm Kiếm">
                </form>
            </div>
        </li>

        <li class="right-top-bar bo1-b p-t-8 p-b-8">
            <span>
                <i class="icon_phone" aria-hidden="true"></i>
                <span>1-800-123-6889</span>
            </span>
        </li>

        <li class="right-top-bar bo1-b p-t-8 p-b-8">
            <span>
                <i class="icon_pin" aria-hidden="true"></i>
                <span>Xuân Phương - Nam Từ Liêm - Hà Nội</span>
            </span>
        </li>

        <li class="right-top-bar bo1-b p-t-8 p-b-8">
            <span>
                <i class="icon_clock" aria-hidden="true"></i>
                <span>09:30 am – 06:00 pm</span>
            </span>
        </li>
    </ul>

    <ul class="main-menu-m bg-main">
        <li class="bg-main">
             <a href="{{ route('home') }}">Trang Chủ</a>
            <span class="arrow-mFain-menu-m">
                <i class="fa fa-angle-right" aria-hidden="true"></i>
            </span>
        </li>

        <li class="bg-main">
            <a href="{{ route('lythuyet') }}">Ôn Lý Thuyết</a>
            <span class="arrow-main-menu-m">
                <i class="fa fa-angle-right" aria-hidden="true"></i>
            </span>
        </li>

        <li class="bg-main">
            <a href="{{ route('exams.index') }}">Luyện Đề</a>
        </li>

        <li class="bg-main">
           <a href="#feed">Đánh Giá</a>
        </li>

        <li class="bg-main">
            <a href="#tip">Cộng Đồng</a>
                    <ul class="sub-menu">
                        <li><a href="#">Thảo luận</a></li>
                        <li><a href="#">Đặt câu hỏi cho Cộng Đồng</a></li>
                    </ul>
        </li>

        <li class="bg-main">
             <a href="{{ route('about-us') }}">Giới Thiệu</a>
        </li>

        <li class="bg-main">
            <a href="{{ route('getLienhe') }}">Liên Hệ</a>
        </li>
    </ul>
</div>
<section class="slider" style="background: #000;">
    <div class="rev_slider_wrapper fullwidthbanner-container rs1-revo">
        <div id="rev_slider_1" class="rev_slider fullwidthabanner" data-version="5.4.5" style="display:none">
            <ul>
                <!-- Slide 1 -->
                <li data-transition="fade">
                    <img src="client/images/testimonial-bg-01.jpg" alt="IMG-SLIDE" class="rev-slidebg">

                    <h2 class="tp-caption tp-resizeme txt1 txt-center p-l-15 p-r-15"
                        data-frames='[{"delay":500,"speed":1500,"frame":"0","from":"x:left;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'
                        data-x="center"
                        data-y="center"
                        data-width="['1200','992','768','480']"
                        data-hoffset="['0','0','0','0']"
                        data-voffset="['-85','-85','-85','-160']"
                        data-fontsize="['50', '50', '50', '50']"
                        data-lineheight="['60', '60', '60', '60']"
                        data-height="['auto']"
                    >hoclaixe123.com</h2>

                    <p class="tp-caption tp-resizeme txt2 txt-center p-l-15 p-r-15"
                       data-frames='[{"delay":1500,"speed":1500,"frame":"0","from":"x:right;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'
                       data-x="center"
                       data-y="center"
                       data-width="['780','780','780','480']"
                       data-hoffset="['0','0','0','0']"
                       data-voffset="['-10','-10','-10','-50']"
                       data-fontsize="['18', '18', '18', '16']"
                       data-lineheight="['30', '30', '30', '30']"
                       data-height="['auto']"
                    >Phía trước tay lái là cả sự sống và ước mơ, xin hãy lái xe bằng cả trái tim. Học lái xe giỏi xây dựng tương lai.
                    </p>

                    <div class="tp-caption tp-resizeme wrap-btn-slide"
                         data-frames='[{"delay":3000,"speed":1500,"frame":"0","from":"y:bottom;rX:-20deg;rY:-20deg;rZ:0deg;","to":"o:1;","ease":"Power3.easeOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'
                         data-x="center"
                         data-y="center"
                         data-hoffset="['0','0','0','0']"
                         data-voffset="['75','75','75','90']"
                         data-height="['auto']">
                        <div class="p-l-10 p-r-10 p-t-5 p-b-5">
                            <!-- Button -->
                            <a href="#" class="btn-drive size1 m-txt1 bg-main bo-rad-4 trans-03">
                                Ôn Lý Thuyết
                                <i class="fa fa-chevron-right m-l-9 fs-14" aria-hidden="true"></i>
                            </a>
                        </div>

                        <div class="p-l-10 p-r-10 p-t-5 p-b-5">
                            <!-- Button -->
                            <a href="#" class="btn-drive size1 m-txt2 bgwhite bo-rad-4 trans-03">
                                Luyện Đề Ngay
                                <i class="fa fa-chevron-right m-l-9 fs-14" aria-hidden="true"></i>
                            </a>
                        </div>
                    </div>

                </li>

                <!-- Slide 2 -->
                <li data-transition="fade">
                    <img src="client/images/slide-04.jpg" alt="IMG-SLIDE" class="rev-slidebg">

                    <h2 class="tp-caption tp-resizeme txt1 txt-center p-l-15 p-r-15"
                        data-frames='[{"delay":500,"speed":1500,"frame":"0","from":"y:top;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'
                        data-x="center"
                        data-y="center"
                        data-width="['1200','992','768','480']"
                        data-hoffset="['0','0','0','0']"
                        data-voffset="['-85','-85','-85','-160']"
                        data-fontsize="['50', '50', '50', '50']"
                        data-lineheight="['60', '60', '60', '60']"
                        data-height="['auto']"
                    >hoclaixe123.com</h2>

                    <p class="tp-caption tp-resizeme txt2 txt-center p-l-15 p-r-15"
                       data-frames='[{"delay":1500,"speed":1500,"frame":"0","from":"y:bottom;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'
                       data-x="center"
                       data-y="center"
                       data-width="['780','780','780','480']"
                       data-hoffset="['0','0','0','0']"
                       data-voffset="['-10','-10','-10','-50']"
                       data-fontsize="['18', '18', '18', '16']"
                       data-lineheight="['30', '30', '30', '30']"
                       data-height="['auto']"
                    >Lý thuyết hay, đề thi chất lượng, cập nhật thông tin lái xe nhanh, tiện lợi và chính xác nhất.
                            Giúp bạn vượt qua kỳ thi sát hạch một cách dễ dàng.
                    </p>

                    <div class="tp-caption tp-resizeme wrap-btn-slide"
                         data-frames='[{"delay":3000,"speed":1500,"frame":"0","from":"z:0;rX:0;rY:0;rZ:0;sX:0.8;sY:0.8;skX:0;skY:0;opacity:0;","to":"o:1;","ease":"Power4.easeOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'
                         data-x="center"
                         data-y="center"
                         data-hoffset="['0','0','0','0']"
                         data-voffset="['75','75','75','90']"
                         data-height="['auto']">
                        <div class="p-l-10 p-r-10 p-t-5 p-b-5">
                            <!-- Button -->
                            <a href="#" class="btn-drive size1 m-txt1 bg-main bo-rad-4 trans-03">
                                Ôn Lý Thuyết
                                <i class="fa fa-chevron-right m-l-9 fs-14" aria-hidden="true"></i>
                            </a>
                        </div>

                        <div class="p-l-10 p-r-10 p-t-5 p-b-5">
                            <!-- Button -->
                            <a href="#" class="btn-drive size1 m-txt2 bgwhite bo-rad-4 trans-03">
                                Luyện Đề Ngay
                                <i class="fa fa-chevron-right m-l-9 fs-14" aria-hidden="true"></i>
                            </a>
                        </div>
                    </div>
                </li>

                <!-- Slide 3 -->
                <li data-transition="fade">
                    <img src="client/images/testimonial-bg-01.jpg" alt="IMG-SLIDE" class="rev-slidebg">

                    <h2 class="tp-caption tp-resizeme txt1 txt-center p-l-15 p-r-15"
                        data-frames='[{"delay":500,"speed":1500,"frame":"0","from":"x:-500px;skX:85px;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'
                        data-x="center"
                        data-y="center"
                        data-width="['1200','992','768','480']"
                        data-hoffset="['0','0','0','0']"
                        data-voffset="['-85','-85','-85','-160']"
                        data-fontsize="['50', '50', '50', '50']"
                        data-lineheight="['60', '60', '60', '60']"
                        data-height="['auto']"
                    >hoclaixe123.com</h2>

                    <p class="tp-caption tp-resizeme txt2 txt-center p-l-15 p-r-15"
                       data-frames='[{"delay":1500,"speed":1500,"frame":"0","from":"x:500px;skX:-85px;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'
                       data-x="center"
                       data-y="center"
                       data-width="['780','780','780','480']"
                       data-hoffset="['0','0','0','0']"
                       data-voffset="['-10','-10','-10','-50']"
                       data-fontsize="['18', '18', '18', '16']"
                       data-lineheight="['30', '30', '30', '30']"
                       data-height="['auto']"
                    >Hãy đến với chúng tôi hoclaixe123.com.
                    </p>

                    <div class="tp-caption tp-resizeme wrap-btn-slide"
                         data-frames='[{"delay":3000,"speed":1500,"frame":"0","from":"y:bottom;rZ:90deg;sX:2;sY:2;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'
                         data-x="center"
                         data-y="center"
                         data-hoffset="['0','0','0','0']"
                         data-voffset="['75','75','75','90']"
                         data-height="['auto']">
                        <div class="p-l-10 p-r-10 p-t-5 p-b-5">
                            <!-- Button -->
                            <a href="#" class="btn-drive size1 m-txt1 bg-main bo-rad-4 trans-03">
                                Ôn Lý Thuyết
                                <i class="fa fa-chevron-right m-l-9 fs-14" aria-hidden="true"></i>
                            </a>
                        </div>

                        <div class="p-l-10 p-r-10 p-t-5 p-b-5">
                            <!-- Button -->
                            <a href="#" class="btn-drive size1 m-txt2 bgwhite bo-rad-4 trans-03">
                                Luyện Đề Ngay
                                <i class="fa fa-chevron-right m-l-9 fs-14" aria-hidden="true"></i>
                            </a>
                        </div>
                    </div>
                </li>


            </ul>
        </div>

    </div>
</section>