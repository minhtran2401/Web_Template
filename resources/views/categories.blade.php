@section("header")
    @include("header")
    @include("menu")   
    @include("breadrum")

<!-- HOME START------------->
{{-- <section class="bg-half" style="background-image: url('assets/images/home/bg-work.jpg');">
    <div class="bg-overlay"></div>
    <div class="home-center">
        <div class="home-desc-center">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-12">
                        <div class="page-next-level text-white">
                            <h4 class="text-uppercase">Three Colomn Work</h4>
                            <div class="page-next"> <a href="index-2.html">Home</a><i class="mdi mdi-chevron-right"></i> &nbsp;<a href="#">About</a> <i class="mdi mdi-chevron-right"></i> &nbsp;<a href="#">Work</a> <i class="mdi mdi-chevron-right"></i> &nbsp;<span>Three Colomn Work</span> </div>
                        </div>
                    </div>  
                </div>
            </div>
        </div>
    </div>
</section> --}}
<!-- HOME END---------------> 

<!-- WORK START -->
<section class="section"> 
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mx-auto">
                <div class="text-center">
                    <ul class="col container-filter portfolioFilter list-unstyled m-0" id="filter">
                        <li><a class="categories active" data-filter="*">All</a></li>
                        <li><a class="categories" data-filter=".marketing">Marketing</a></li>
                        <li><a class="categories" data-filter=".finance">Finance</a></li>
                        <li><a class="categories" data-filter=".account">Accounting</a></li>
                        <li><a class="categories" data-filter=".part">Partners</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    
    <div class="container">
        <div class="port portfolio-masonry mt-3">
            <div class="portfolioContainer row">

                @foreach ($kq ?? '' as $r)
                <div class="col-lg-4 col-md-6 part">
                    <div class="portfolio-box">
                        <a class="mfp-image" href="assets/images/work/work-1.jpg" title="Business Post">
                            <img src="{{$r->image}}" class="img-fluid" alt="member-image">
                        </a>
                        <div class="gallary-title text-center">
                            <h6><a href="work-single.html">{{$r->name}}</a></h6>
                            {{-- <span class="text-muted">{{$r->name_type}}</span> --}}
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