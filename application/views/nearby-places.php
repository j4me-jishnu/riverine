 <div class="banner-header section-padding valign bg-img bg-fixed" data-overlay-dark="4" data-background="assets/img/slider/2.jpg" style="background-image: url(&quot;assets/img/slider/2.jpg&quot;);">
     <div class="container">
         <div class="row">
             <div class="col-md-12 caption mt-90">
                 <h1>Near By Places</h1>
             </div>
         </div>
     </div>
 </div>
 <!-- Image Gallery -->
 <section class="section-padding">
     <div class="container">
         <div class="row">
             <div class="col-md-12">
                <?php $i=1; foreach($near_by as $places){ ?>
                    <?php if($i%2 != 0){ ?>
                 <div class="row at-wrp">
                     <div class="col-md-4">
                         <img src="<?php echo base_url() ?>Admin/uploads/nearby/<?php echo $places->nearby_img ?>" class="img-responsive">
                     </div>
                     <div class="col-md-8">
                         <h3><?php echo $places->nearby_title ?></h3>
                         <p><?php echo $places->nearby_desc ?></p>
                     </div>
                 </div>
                 <?php } else { ?>
                 <div class="row at-wrp">
                     <div class="col-md-8">
                         <h3><?php echo $places->nearby_title ?></h3>
                         <p><?php echo $places->nearby_desc ?></p>
                     </div>
                     <div class="col-md-4">
                         <img src="<?php echo base_url() ?>Admin/uploads/nearby/<?php echo $places->nearby_img ?>" class="img-responsive">
                     </div>
                 </div>
                 <?php } $i++; } ?>
                 <!-- <div class="row at-wrp">
                     <div class="col-md-4">
                         <img src="assets/img/n2.jpg" class="img-responsive">
                     </div>
                     <div class="col-md-8">
                         <h3>Vazhachal Water Falls</h3>
                         <p>Vazhachal waterfalls are yet another feast to your eyes. The river at vazhachal gives you a rare experience of flowing through the sloppy terrains in a ferocious mood. You could spend hours sitting here and doing nothing. </p>
                     </div>
                 </div>
                 <div class="row at-wrp">
                     <div class="col-md-8">
                         <h3>Peringalkuthu Sam</h3>
                         <p>Perigalkuthu dam is the first hydro electric power project to commissioned on the Chalakudi river. This dam and project was commissioned on 15th May 1957. The length of this dam is 290.25 meters and height is 23 meters. </p>
                     </div>
                     <div class="col-md-4">
                         <img src="assets/img/n3.jpg" class="img-responsive">
                     </div>
                 </div>
                 <div class="row at-wrp">
                     <div class="col-md-4">
                         <img src="assets/img/n4.jpg" class="img-responsive">
                     </div>
                     <div class="col-md-8">
                         <h3>Sholayar Dam</h3>
                         <p>Sholayar dam is yet another hydro electric project across chalakudi river. This is one of the major projects after Idukki dam. The forests have rich evergreen character and drive through these forests is really refreshing. The view from the road side of the reservoir is really a great one. </p>
                     </div>
                 </div>
                 <div class="row at-wrp">
                     <div class="col-md-8">
                         <h3>Malakkapara</h3>
                         <p>Malakkapara is a small town bordering Kerala and Tamilnadu. This area is rich with tea plantations. The view is really spectacular. </p>
                     </div>
                     <div class="col-md-4">
                         <img src="assets/img/n5.jpg" class="img-responsive">
                     </div>
                 </div>
                 <div class="row at-wrp">
                     <div class="col-md-4">
                         <img src="assets/img/n6.jpg" class="img-responsive">
                     </div>
                     <div class="col-md-8">
                         <h3>Thumboormuzhi Gardens</h3>
                         <p>Thumboormuzhi Gardens is basically an irrigation project where the river is divided into left bank canal and right bank canal for agricultural requirements. The beautiful butterfly gardens and the hanging bridge is designed with an aesthetic sense. The play area for children is also very attractive. </p>
                     </div>
                 </div> -->
             </div>
         </div>
     </div>
 </section>