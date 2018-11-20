@extends('layouts.client')
@section('content')
    <section class="bg-img-1 bg-overlay-3 p-t-93 p-b-95" style="background-image: url({{ asset('client/images/slide-04.jpg') }});">
        <div class="container">
            <div class="flex-w flex-sb-m">
                <div class="p-t-10 p-b-10 p-r-30">
                    <div class="flex-w p-b-9">
						<span>
							<a href="" class="s-txt19 hov-color-main trans-02">
								<i class="fa fa-home"></i>
								Home
							</a>
							<span class="s-txt19 p-l-6 p-r-9">/</span>
						</span>

                        <span>
							<span class="s-txt19">
								About Us
							</span>
						</span>
                    </div>

                    <h2 class="m-txt6 respon1">
                        About Us
                    </h2>
                </div>

                <div class="p-t-10 p-b-10">
                    <!-- Button -->
                    <a href="#" class="btn-drive size1 m-txt1 bg-main bo-rad-4 trans-03">
                        Get in touch
                        <i class="fa fa-chevron-right m-l-9 fs-14" aria-hidden="true"></i>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- About -->
    <section class="bgwhite p-t-62 p-b-60">
        <div class="container">
            <div class="row">
                <div class="col-md-6 p-b-30">
                    <div class="p-b-44">
                        <h3 class="m-txt4 p-b-8 respon1">
                            GIỚI THIỆU
                        </h3>

                        <div class="bg-main size2 bo-rad-3"></div>
                    </div>

                    <p class="s-txt2 p-b-16">
                        Phần mềm đào đạo và sát hạch lái xe ô tô là một phần mềm giúp cho việc ôn tập cũng như thi sát hạch
                        lái xe một cách dễ dàng, thuận tiện. Bạn không cần đến các trung tâm sát hạch lái xe để học mà bạn có
                        thể học và thi thử trên trang hoclaixe123.com.
                    </p>

                    <ul class="list-01 p-t-2">
                        <li class="p-b-6">
                            <span class="s-txt2">Giao diện bắt mắt.</span>
                        </li>
                        <li class="p-b-6">
                            <span class="s-txt2">Đề thi được bố tự động.</span>
                        </li>

                        <li class="p-b-6">
                            <span class="s-txt2">Tin tức lãi xe được cập nhật thường xuyên</span>
                        </li>

                        <li class="p-b-6">
                            <span class="s-txt2">Mẹo lái xe hữu ích cho người đọc.</span>
                        </li>
                    </ul>
                </div>

                <div class="col-md-6 p-b-30">
                    <div class="wrap-pic-w pos-relative m-t-15">
                        <div class="">
                            <img src="{{asset('client/images/icons/logo.png')}}" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonial -->
    <section class="testimonial">
        <div class="wrap-testimonial bg4 p-t-65 p-b-90">
            <div class="wrap-slide-slick-6">
                <div class="p-b-48">
                    <h3 class="m-txt6 txt-center p-b-8 respon1">
                        Project Manager nói về chúng tôi
                    </h3>

                    <div class="bg-main size2 bo-rad-3 m-lr-auto"></div>
                </div>

                <div class="slide-slick-6 js-slick-6">
                    <div class="item-slick-6" data-thumb="{{asset('client/images/hue.jpg')}}">
                        <div class="content-item-slick-6">
                            <span class="xl-txt1 float-l p-r-5 dis-block h-full pos1">“</span>
                            <p class="para-slide-slick-6 s-txt1 txt-center p-t-12 p-b-22 animated">
                                Trang web đẹp, trình bày bắt mắt, đề thi chất lượng, tin tức lái xe cập nhật nhanh chóng,
                                mẹo lái xe hay, bổ ích...
                            </p>

                            <div class="wrap-person-slick-6 animated">
                                <div class="txt-center">
                                    <span class="s-txt16 m-r-15">Mr.Tăng Hoàng Hà</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="item-slick-6" data-thumb="{{asset('client/images/huy.jpg')}}">
                        <div class="content-item-slick-6">
                            <span class="xl-txt1 float-l p-r-5 dis-block h-full pos1">“</span>
                            <p class="para-slide-slick-6 s-txt1 txt-center p-t-12 p-b-22 animated">
                                Trang web load nhanh, ổn định, công nghệ cập nhật, chất lượng tốt.
                                Một sản phẩm hữu ích cho thị trường...
                            </p>

                            <div class="wrap-person-slick-6 animated">
                                <div class="txt-center">
                                    <span class="s-txt16 m-r-15">Mr.Văn Phát Đạt</span>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
                <div class="wrap-slick6-dots p-t-23 p-l-15 p-r-15"></div>
        </div>
        </div>
    </section>

    <!-- Instructors -->
    <section class="bg-white p-t-64 p-b-40">
        <div class="container">
            <div class="p-b-30">
                <h3 class="m-txt4 p-b-8 txt-center respon1">
                    CHÚNG TÔI GỒM
                </h3>

                <div class="bg-main size2 bo-rad-3 m-lr-auto"></div>
            </div>

            <div class="row">
                <div class="col-sm-6 col-md-4 p-b-50">
                    <!-- Block 5 -->
                    <div class="block-5">
                        <div class="wrap-pic-b5 wrap-pic-w hov5 bo2">
                            <img src="{{asset('client/images/hue.jpg')}}" alt="">
                        </div>

                        <div class="wrap-text-b5 p-t-28">
                            <h4 class="m-txt16 hov-color-main trans-04 p-b-8">
                                    BÙI VĂN HUẾ
                                </h4></a>

                            <span class="s-txt8 color-main">
								CHUYÊN VIÊN CÔNG NGHỆ
							</span>

                            <p class="s-txt2 p-t-11 p-b-12">
                                Có kinh nghiệm làm việc trên nhiều nền tảng, nhiều ngôn ngữ như
                                C, C++, C#, PHP-Laravel, Java, HTML, CSS, JavaScript, Bootstrap, Sql Server, MySql, No-sql...
                            </p>

                            <span class="dis-block p-b-4">
								<a href="https://www.facebook.com/HueBui22" class="fs-20 color2 hov-color-main trans-03 m-r-16">
									<i class="fa fa-facebook-square" aria-hidden="true"></i>
								</a>

								<a  class="fs-20 color2 hov-color-main trans-03 m-r-16">
									<i class="fa fa-twitter" aria-hidden="true"></i>
								</a>

								<a  class="fs-20 color2 hov-color-main trans-03 m-r-16">
									<i class="fa fa-linkedin-square" aria-hidden="true"></i>
								</a>

							</span>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-md-4 p-b-50">
                    <!-- Block 5 -->
                    <div class="block-5">
                        <div class="wrap-pic-b5 wrap-pic-w hov5 bo2">
                            <img src="{{asset('client/images/huy.jpg')}}" alt="">
                        </div>

                        <div class="wrap-text-b5 p-t-28">
                            <h4 class="m-txt16 hov-color-main trans-04 p-b-8">
                                HOÀNG TRUNG HUY
                            </h4></a>

                            <span class="s-txt8 color-main">
								CHUYÊN VIÊN CÔNG NGHỆ
							</span>

                            <p class="s-txt2 p-t-11 p-b-12">
                                Có kinh nghiệm làm việc trên nhiều nền tảng, nhiều ngôn ngữ như
                                C, C++, C#, PHP-Laravel, Java, HTML, CSS, JavaScript, Bootstrap, Sql Server, MySql, No-sql...
                            </p>

                            <span class="dis-block p-b-4">
								<a href="https://www.facebook.com/trunghuy95" class="fs-20 color2 hov-color-main trans-03 m-r-16">
									<i class="fa fa-facebook-square" aria-hidden="true"></i>
								</a>

								<a  class="fs-20 color2 hov-color-main trans-03 m-r-16">
									<i class="fa fa-twitter" aria-hidden="true"></i>
								</a>

								<a  class="fs-20 color2 hov-color-main trans-03 m-r-16">
									<i class="fa fa-linkedin-square" aria-hidden="true"></i>
								</a>

							</span>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 p-b-50">
                    <!-- Block 5 -->
                    <div class="block-5">
                        <div class="wrap-pic-b5 wrap-pic-w hov5 bo2">
                            <img src="{{asset('client/images/manh.jpg')}}" alt="">
                        </div>

                        <div class="wrap-text-b5 p-t-28">
                            <h4 class="m-txt16 hov-color-main trans-04 p-b-8">
                                NGUYỄN ĐÌNH MẠNH
                            </h4></a>

                            <span class="s-txt8 color-main">
								CHUYÊN VIÊN CÔNG NGHỆ
							</span>

                            <p class="s-txt2 p-t-11 p-b-12">
                                Có kinh nghiệm làm việc trên nhiều nền tảng, nhiều ngôn ngữ như
                                C, C++, C#, PHP-Laravel, Java, HTML, CSS, JavaScript, Bootstrap, Sql Server, MySql, No-sql...
                            </p>

                            <span class="dis-block p-b-4">
								<a href="https://www.facebook.com/DinhManh2910" class="fs-20 color2 hov-color-main trans-03 m-r-16">
									<i class="fa fa-facebook-square" aria-hidden="true"></i>
								</a>

								<a  class="fs-20 color2 hov-color-main trans-03 m-r-16">
									<i class="fa fa-twitter" aria-hidden="true"></i>
								</a>

								<a  class="fs-20 color2 hov-color-main trans-03 m-r-16">
									<i class="fa fa-linkedin-square" aria-hidden="true"></i>
								</a>

							</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @endsection