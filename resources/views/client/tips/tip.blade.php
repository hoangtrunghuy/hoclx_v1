<section class="bgwhite p-t-75 p-b-90" id="tip">
    <div class="container">
        <div class="p-b-10">
            <div class="p-b-24">
                <h3 class="m-txt4 txt-center p-b-8 respon1">
                    Mẹo lái xe an toàn
                </h3>

                <div class="bg-main size2 bo-rad-3 m-lr-auto"></div>
            </div>

            <p class="w-size2 txt-center m-txt7 m-lr-auto p-l-15 p-r-15">
                Phía trước tay lái là cả sự sống và ước mơ, xin hãy lái xe bằng cả trái tim.
            </p>
        </div>

        <div class="row">
            @foreach($data as $item)
            <div class="col-sm-6 col-lg-3 p-t-30">
                <!-- Block 3 -->
                <div class="block-3 bo2">
                    <div class="wrap-pic-b3 wrap-pic-w hov5 bo2-b">
                        <a href="{{ route('content.index',$item->id) }}"><img width="100px" height="200px" src="{{$item->image}}" alt="IMG-COURSE"></a>
                    </div>

                    <div class="wrap-text-b3 p-l-20 p-r-20 p-t-16 p-b-26">
                        <div class="flex-sb-m p-b-12">
								<a title="{{$item->title}}" href="{{ route('content.index',$item->id) }}" class="s-txt5">
                                    {{str_limit($item->title,40,"...")}}
								</a>
                            <span class="color1 fs-12">
									<i class="fa fa-star" aria-hidden="true"></i>
									<i class="fa fa-star" aria-hidden="true"></i>
									<i class="fa fa-star" aria-hidden="true"></i>
									<i class="fa fa-star" aria-hidden="true"></i>
									<i class="fa fa-star" aria-hidden="true"></i>
								</span>
                        </div>

                        <a title="{{$item->discription}}" href="{{ route('content.index',$item->id) }}"><h4 class="m-txt8 hov-color-main trans-04 p-b-12">
                                {{str_limit($item->discription,20,"...")}}
                            </h4></a>
                        <span class="m-txt9"></span>

                        <div class="wrap-btn-b3 flex-w p-t-13">
                            {{-- <div class="m-r-8 p-t-8">
                                <!-- Button -->
                                <a href="#" class="btn-drive m-txt1 size3 bg-main hov-color-white bo-rad-4">
                                    Xem thêm
                                </a>
                            </div> --}}

                            <div class="p-t-8" style="margin-left: 60px;">
                                <!-- Button -->
                                <a href="{{ route('content.index',$item->id) }}"
                                   class="btn-drive m-txt10 size4 bo3 bg1 hov-color-white bo-rad-4">
                                    Chi tiết
                                </a>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            @endforeach

        </div>

        <div class="flex-c-m p-t-46">
            <!-- Button -->
            <a href="{{ route('content.index.all') }}" class="btn-drive m-txt1 size5 bg2 hov-color-white bo-rad-4">
                Xem tất cả
                <i class="fa fa-chevron-right m-l-9 fs-14" aria-hidden="true"></i>
            </a>
        </div>
    </div>
</section>