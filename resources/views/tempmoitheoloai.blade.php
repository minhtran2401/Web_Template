<?php
    $typeName = DB::table('template_type')->where('id_type', $idType)->value('name_type');
    $tempmoi = DB::table('template')
    ->select('id_temp', 'template.name', 'image')
    ->join('template_type','template.id_type', '=', 'template_type.id_type')
    ->where('template.Anhien', '=', '1')
    ->where('template.id_type', '=', $idType)
    ->offset(0)->limit(8)->get();
?>


<?php                       
  $loaiTempcon = DB::table('template_type')->select('id_type', 'name_type')
  ->where('id_type','=',$idType ?? '')
  ->get();
?>
<div class="container">
  @foreach ($loaiTempcon as $lt)
      <a href="">{{$lt->name_type}}</a>
  </li>
  @endforeach
    <!-- tab content -->
              <?php foreach($tempmoi as $r) { ?>
                <ul>
                  <li><?=$r->name?></li>
                </ul>  
              <?php } ?>
  <!-- end tab content -->     
</div>

</section>