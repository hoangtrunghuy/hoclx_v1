<section class="bg3 p-t-75 p-b-90" id="gop-y">
    <div class="container">
        <div class=" p-b-22">
            <div class="p-b-24">
                <h3 class="m-txt6 txt-center p-b-8 respon1">
                    Đóng góp ý kiến cho chúng tôi
                </h3>

                <div class="bg-main size2 bo-rad-3 m-lr-auto"></div>
            </div>

            <p class="w-size3 m-txt11 txt-center m-lr-auto p-l-15 p-r-15">
                Mỗi ý kiến đóng góp vàng ngọc của quý độc giả sẽ là động lực to lớn giúp cho dịch vụ của chúng tôi được tốt hơn.
            </p>
        </div>
        @guest
        <form action="/postcontact" method="POST" role="form" >
                {{ @csrf_field() }}

                <div class="row">
                    <div class="col-sm-6 col-lg-3 m-t-20">
                        <input class="size6 s-txt6 p-l-20" type="text" name="name" placeholder="Họ và tên: *">
                    </div>

                    <div class="col-sm-6 col-lg-3 m-t-20">
                        <input class="size6 s-txt6 p-l-20" type="text" name="email" placeholder="Email: *">
                    </div>

                    <div class="col-sm-6 col-lg-3 m-t-20">
                        <input class="size6 s-txt6 p-l-20" type="text" name="phone" placeholder="Số điện thoại: *">
                    </div>

                    <div class="col-sm-6 col-lg-3 m-t-20">
                        <input class="size6 s-txt6 p-l-20" type="text" name="contact_content" placeholder="Góp ý: *">
                    </div>
                </div>
                <div class="flex-c-m p-t-36">
                    <!-- Button -->
                    <button class="btn-drive m-txt1 size7 bg-main hov-color-white bo-rad-4" type="submit">
                        Gửi
                    </button>
                </div>

            @else
                <form action="{{ route('callbackstore') }}" method="POST" role="form" >
                    {{ @csrf_field() }}
                <div class="row">
                    <div class="col-sm-6 col-lg-4 m-t-20"></div>
                    <div class="col-sm-6 col-lg-4 m-t-20">
                        <input class="size6 s-txt6 p-l-20" type="text" name="feedback_content" placeholder="Góp ý: *">
                    </div>
                </div>
                    <div class="flex-c-m p-t-36">
                        <!-- Button -->
                        <button class="btn-drive m-txt1 size7 bg-main hov-color-white bo-rad-4" type="submit">
                            Gửi
                        </button>
                    </div>
                </form>
            @endguest



        </form>
    </div>
</section>