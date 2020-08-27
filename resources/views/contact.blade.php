@section("header")
@section('pagetitle', 'LOGO | Liên Hệ')

    @include("header")
    @include("menu")   
    @include("breadrum")

        <!--  -->
        <section class="section">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8 col-md-12">
                        <div class="section-title text-center">
                            <h3>Liên Hệ</h3>
                            <div class="spacer-15"></div>
                            <p class="text-muted mb-0">Mọi thắc mắc về template bạn vui lòng gửi về cho chúng tôi theo form bên dưới.</p>
                            <div class="spacer-30"></div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="map video-app-box mt-30">
                            {{-- <iframe src="https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d6030.418742494061!2d-111.34563870463673!3d26.01036670629853!3m2!1i1024!2i768!4f13.1!5e0!3m2!1ses-419!2smx!4v1471908546569" style="border: 0" allowfullscreen></iframe> --}}
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3918.4436496496137!2d106.62617681423795!3d10.853821992269074!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3175298945afff59%3A0xcf4afe79d65f5ddc!2zQ8O0bmcgdmnDqm4gcGjhuqduIG3hu4FtIFF1YW5nIFRydW5n!5e0!3m2!1svi!2s!4v1598284090344!5m2!1svi!2s" style="border: 0" allowfullscreen></iframe>
                        </div>
                    </div>
                    <!-- col end -->
                    <div class="col-md-6">
                        <div class="custom-form mt-30">
                            <div id="message"></div>
                            <form method="post" action="contact" name="contact-form" id="contact-form">
                                {{csrf_field()}}
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group app-label">
                                            <input name="name" id="name" type="text" class="form-control" placeholder="Tên Bạn :">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group app-label">
                                            <input name="email" id="email" type="email" class="form-control" placeholder="Email  :">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group app-label">
                                            <input name="title" id="title" class="form-control" placeholder="Viết Tiêu Đề :">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group app-label">
                                            <textarea name="message" id="message" rows="3" class="form-control" placeholder="Nhập Mô Tả :"></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <input  type="submit" id="submit" name="send" class="submitBnt btn btn-custom w-100" value="Gửi">
                                        <div id="simple-msg"></div>
                                    </div>
                                </div>



                            </form>
                        </div>
                    </div>
                </div>

                <div class="row mt-lg-5 mt-md-3 mt-sm-30">
                    <div class="col-lg-3 col-md-6">
                        <div class="contact-details text-center mt-30 p-20">
                            <div class="contact-icon">
                                <i class="fas fa-map-marker-alt"></i>
                            </div>
                            <div class="spacer-15"></div>
                            <div class="contact-head">
                                <p class="mb-0 info-title">Địa Chỉ</p>
                                <p class="mb-0"><a href="#" class="text-muted">Cao Đẳng FPT Polytechnic</a></p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-lg-3 col-md-6">
                        <div class="contact-details text-center mt-30 p-20">
                            <div class="contact-icon">
                                <i class="fas fa-envelope"></i>
                            </div>
                            <div class="spacer-15"></div>
                            <div class="contact-head">
                                <p class="mb-0 info-title">Email</p>
                                <p class="mb-0"><a href="#" class="text-muted">nhatntps10403@fpt.edu.vn</a></p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-lg-3 col-md-6">
                        <div class="contact-details text-center mt-30 p-20">
                            <div class="contact-icon">
                                <i class="fas fa-globe"></i>
                            </div>
                            <div class="spacer-15"></div>
                            <div class="contact-head">
                                <p class="mb-0 info-title">Website</p>
                                <p class="mb-0"><a href="#" class="text-muted">www.folyhugo.info</a></p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-lg-3 col-md-6">
                        <div class="contact-details text-center mt-30 p-20">
                            <div class="contact-icon">
                                <i class="fas fa-phone"></i>
                            </div>
                            <div class="spacer-15"></div>
                            <div class="contact-head">
                                <p class="mb-0 info-title">Điện Thoại</p>
                                <p class="mb-0">0327485717</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--  -->

        

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
      
        @section("footer")
        @include("footer")
