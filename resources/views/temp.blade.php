@section('header')
@section('pagetitle', 'LOGO | Tên Template')

    @include('header')
    @include('menu')
    @include('breadrum')


    <!--  -->
    <section class="section">
            <div class="container">
                <div class="row">
                    <!-- SIDEBAR -->
                    <div class="col-lg-4 col-md-4">
                        <!-- SEARCH -->
                        <div class="sidebar p-30">
                            <div class="text-center">
                                <div id="search-2" class="widget widget-search mb-0">
                                    <form role="search" method="get" id="searchform" class="searchform">
                                        <div>
                                            <input type="text" value="" name="s" id="s" placeholder="Tìm kiếm">
                                            <input type="submit" id="searchsubmit" value="Search">
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <!-- SEARCH -->

                        <!-- Categories widget-->
                        <div class="sidebar p-30">
                            <div class="widget widget_categories">
                                <h4 class="text-uppercase text-center">Template</h4>
                                <ul class="list-unstyled">
                                    @foreach ($loaitemp as $loai)
                                        
                                  
                                <li class="mb-2"><a href="#">{{$loai->name_type}}</a> <span class="float-right">(1)</span></li>
                                @endforeach
                                </ul>
                            </div>
                        </div>
                        <!-- Categories widget-->
                        
                        <!-- TAG -->
                        <div class="sidebar p-30">
                            <div class="widget">
                                <h4 class="text-uppercase text-center">Tags</h4>
                                <div class="text-center tagcloud">
                                    @foreach ($tags as $t)
                                        
                                  
                                <a href="#">{{$t->name_tags}}</a>
                                    @endforeach
                                    
                                </div>
                            </div>
                        </div>
                        <!-- TAG -->

                    </div>
                    <!-- SIDEBAR -->

                    <!-- BLOG POST START -->
                    <div class="col-md-8">
                        <!-- Post Start -->
                        <article class="post m-0">
                            <div class="post-preview">
                                <a href="single-post.html"><img src="assets/images/blog/blog-3.jpg" alt="" class="img-fluid mx-auto d-block"></a>
                            </div>

                            <div class="post-header">
                                <ul class="post-meta">
                                    <li> <small class=" btn-outline-red mr-3 mb-3" > <i class="mdi mdi-calendar "></i> <?=date('d-m-20y',strtotime($template->Ngay))?></small></li>
                                    <li><i class=""></i> <small class=" font-14 font-weight-bold  btn-outline-green mr-3 mb-3" >{{$template->name}}</small></li>

                                    <li><i class="mdi mdi-text-outline"></i>
                                        <a href="#"> <small class=" btn-outline-dark-green mr-3 mb-3"  >{{$template->name_type}}</small></a></li>
                                </ul>
                                
                                <div class="post-content">
                                    <p class="header" style="color :red"  >Mô tả :</p>
                                    <small>
                                    <p class="mb-2">
                                        {{$template->description}}
                                    </p>
                                </small>
                                </div>

                                <div class="post-content">
                                    <p class="header" style="color :green"  >Tags : <small style="color:grey" > 
                                    
                                        <?php
                                        $tags = $template->tags;
                                        $arr = explode(",",  $tags);
                                ?>
                                
                                @foreach ($arr as $t)
                        
                               <a href="" class="post-tags__link"> {{$t}}</a> 
                               @endforeach
                                    </small>   </p>
                                    
                                </div>
                             

                                 <!-- FOLLOW -->
                        <div class="sidebar p-30" style="border: none" >
                            <div class="widget">
                               <div class="row">
                                   <div class="col-lg-6 col-md-4 mb-3 goit">
                                   <a href="#" class="btn btn-buttons  mb-3 btn-round"> <i class="fa fa-eye" aria-hidden="true"></i> XEM THỬ</a>
                                   </div>

                                   <div class="col-lg-6 col-md-4 down">
                                   <a href="#" class="btn btn-buttons mr-3 btn-round down"> <i class="fa fa-download" aria-hidden="true"></i> TÀI VỀ</a>
                                   </div>
                               </div>
                            </div>
                        </div>
                        <!-- FOLLOW -->
                            </div>
                            
                        </article>

                        <!-- Post End -->
                    </div>
                </div>
            </div>
        </section>
        <!--  -->

    @section('footer')
    @include('footer')