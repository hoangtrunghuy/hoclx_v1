<section class="bgwhite p-t-75 p-b-90">
    <div class=" p-b-10">
        <div class="p-b-24">
            <h3 class="m-txt4 txt-center p-b-8 respon1">
                Thông tin lái xe hôm nay
            </h3>

            <div class="bg-main size2 bo-rad-3 m-lr-auto"></div>
        </div>
    </div>
    <div class="container-slick-2">
        <div class="wrap-slick-2">
            <div class="slick-2 js-slick-2">
                @foreach($datas as $item)
                <div class="item-slick-2 m-l-15 m-r-15">
                    <!-- Block 4 -->
                    <div class="block-4">
                        <div class="wrap-pic-b4 wrap-pic-w hov5">
                            <a href="blog-single.html"><img src="{{ $item->image }}" alt="IMG-NEWS"></a>
                        </div>

                        <div class="wrap-text-b4 p-t-23">
                            <a href="blog-single.html"><h4 class="m-txt8 hov-color-main trans-04 m-b-10">
                                    {{ $item->title }}
                                </h4></a>

                            <span class="s-txt7">July 18, 2017 | </span>
                            <a href="#" class="dis-inline s-txt8 hov-color-main">Pro Tips</a>

                            <p class="s-txt2 p-t-11 p-b-22">
                                {{ $item->discription }}
                            </p>

                            <div class="wrap-btn-b4 flex-w">
                                <!-- Button -->
                                <a href="blog-single.html"
                                   class="btn-drive m-txt10 size8 bo3 bg1 hov-color-white bo-rad-4">
                                    Xem chi tiết
                                </a>
                            </div>

                        </div>
                    </div>
                </div>
                    @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>