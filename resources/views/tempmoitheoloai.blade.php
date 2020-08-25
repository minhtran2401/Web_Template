<?php

use Illuminate\Support\Facades\DB;

$showtemp =DB::table('template')
        ->join('template_type','template.id_type', '=', 'template_type.id_type')
        ->orderby('template.Ngay', 'asc')
        ->where ('template.AnHien', '=', '1')
        ->limit(8) ->get();

  
  

?>
  <section class="section bg-light"> 
    <div class="container"> 
        <div class="row justify-content-center">
            <div class="col-lg-8 col-md-12">
                <div class="section-title text-center">
                    <h3>Template Mới Nhất</h3>
                    <div class="spacer-15"></div>
                    <p class="text-muted mb-0">Donec sodales sagittis magna. Excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi.</p>
                    <div class="spacer-30"></div>
                </div>
            </div>
        </div>

        <div class="row">
         
            
        </div>
    </div>
    

    <div class="tab-content" >
    <div class="container-fluid tab-pane fade show active" id="#type" role="tabpanel" aria-labelledby="pills-all-tab">
        <div class="port portfolio-masonry mt-3">
            <div class="portfolioContainer row">

                @foreach ($showtemp as $show)
                    
             

                <div class="col-lg-3 col-md-6 part" >
                    <div class="portfolio-box">
                    <a class="mfp-image" href="assets/images/work/work-1.jpg" title="{{$show->name}}">
                            <img src="assets/images/work/work-1.jpg" class="img-fluid" alt="member-image">
                        </a>
                        <div class="gallary-title text-center">
                        <h6><a href="work-single.html">{{$show->name}}</a></h6>
                        <span class="text-muted">{{$show->name_type}}</span>
                        </div>
                    </div>
                </div>
                @endforeach
                
            
            </div>
        </div>

        
        <div class="row">
            <div class="col-md-12">
                <div class="text-center mt-30">
                    <a href="categories" class="btn btn-custom">See More <i class="fas fa-angle-right"></i></a>
                </div>
            </div>
        </div>
    </div>

    


    

    </div>


</section>


