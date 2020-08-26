@section("header")
@section('pagetitle', 'LOGO | TẤT CẢ TEMPLATE')

    @include("header")
    
    @include("menu")   
    @include("breadrum")


<!-- WORK START -->
<section class="section"> 
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mx-auto">
                <div class="text-center  btn-buttons btn-outline-dark-gray mr-3 mb-3">
                    <h3 class="mt-4 font-18 font-weight-bold"> TEMPLATE : {{$title}} </h3>
                </div>
            </div>
        </div>
    </div>
    
    <div class="container">
        <div class="port portfolio-masonry mt-3">
            <div class="portfolioContainer row">

                @foreach ($kq as $r)
                <div class="col-lg-4 col-md-6 part">
                    <div class="portfolio-box">
                        <a class="mfp-image" href="assets/images/work/no-img.jpg" title="Business Post">
                            <img src="{{$r->image}}" class="img-fluid" alt="member-image">
                        </a>
                        <div class="gallary-title text-center">
                            <h6><a href="">{{$r->name}}</a></h6>
                        </div>
                    </div>
                </div>
                @endforeach

            </div>
        </div>
    </div>
</section>
<!-- WORK END -->

<!-- PARTNER START -->
<section class="section-two bg-light">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 p-0">
                <div class="slider autoplay">
                    <div><img src="assets/images/client/partner-1.png" class="mx-auto d-block img-fluid" alt="img-missing"></div>
                    <div><img src="assets/images/client/partner-2.png" class="mx-auto d-block img-fluid" alt="img-missing"></div>
                    <div><img src="assets/images/client/partner-3.png" class="mx-auto d-block img-fluid" alt="img-missing"></div>
                    <div><img src="assets/images/client/partner-4.png" class="mx-auto d-block img-fluid" alt="img-missing"></div>
                    <div><img src="assets/images/client/partner-5.png" class="mx-auto d-block img-fluid" alt="img-missing"></div>
                    <div><img src="assets/images/client/partner-1.png" class="mx-auto d-block img-fluid" alt="img-missing"></div>
                    <div><img src="assets/images/client/partner-2.png" class="mx-auto d-block img-fluid" alt="img-missing"></div>
                    <div><img src="assets/images/client/partner-3.png" class="mx-auto d-block img-fluid" alt="img-missing"></div>
                    <div><img src="assets/images/client/partner-4.png" class="mx-auto d-block img-fluid" alt="img-missing"></div>
                    <div><img src="assets/images/client/partner-5.png" class="mx-auto d-block img-fluid" alt="img-missing"></div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- PARTNER END -->

@section("footer")
@include("footer")