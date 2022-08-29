<div class="banner-header section-padding valign bg-img bg-fixed" data-overlay-dark="4" data-background="assets/img/slider/2.jpg" style="background-image: url(&quot;assets/img/slider/2.jpg&quot;);">
    <div class="container">
        <div class="row">
            <div class="col-md-12 caption mt-90">
                <h1>Gallery</h1>
            </div>
        </div>
    </div>
</div>
<!-- Image Gallery -->
<section class="section-padding">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-subtitle">Images</div>
                <div class="section-title">Image Gallery</div>
            </div>
            <!-- 3 columns -->
            <?php foreach($images as $img_list){ ?>
            <div class="col-md-4 gallery-item">
                <a href="<?php echo base_url() ?>Admin/uploads/gallery/<?php echo $img_list->gallery_image ?>" title="" class="img-zoom">
                    <div class="gallery-box">
                        <div class="gallery-img"> <img src="<?php echo base_url() ?>Admin/uploads/gallery/<?php echo $img_list->gallery_image ?>" class="img-fluid mx-auto d-block" alt="work-img"> </div>
                    </div>
                </a>
            </div>
            <?php } ?>
            <!-- <div class="col-md-4 gallery-item">
                <a href="assets/img/slider/2.jpg" title="" class="img-zoom">
                    <div class="gallery-box">
                        <div class="gallery-img"> <img src="assets/img/slider/2.jpg" class="img-fluid mx-auto d-block" alt="work-img"> </div>
                    </div>
                </a>
            </div>
            <div class="col-md-4 gallery-item">
                <a href="assets/img/slider/2.jpg" title="" class="img-zoom">
                    <div class="gallery-box">
                        <div class="gallery-img"> <img src="assets/img/slider/2.jpg" class="img-fluid mx-auto d-block" alt="work-img"> </div>
                    </div>
                </a>
            </div>
            <!-- 2 columns -->
            <!-- <div class="col-md-6 gallery-item">
                <a href="assets/img/slider/2.jpg" title="" class="img-zoom">
                    <div class="gallery-box">
                        <div class="gallery-img"> <img src="assets/img/slider/2.jpg" class="img-fluid mx-auto d-block" alt="work-img"> </div>
                    </div>
                </a>
            </div>
            <div class="col-md-6 gallery-item">
                <a href="assets/img/slider/2.jpg" title="" class="img-zoom">
                    <div class="gallery-box">
                        <div class="gallery-img"> <img src="assets/img/slider/2.jpg" class="img-fluid mx-auto d-block" alt="work-img"> </div>
                    </div>
                </a>
            </div> -->
            <!-- 3 columns -->
            <!-- <div class="col-md-4 gallery-item">
                <a href="assets/img/slider/2.jpg" title="" class="img-zoom">
                    <div class="gallery-box">
                        <div class="gallery-img"> <img src="assets/img/slider/2.jpg" class="img-fluid mx-auto d-block" alt="work-img"> </div>
                    </div>
                </a>
            </div>
            <div class="col-md-4 gallery-item">
                <a href="assets/img/slider/2.jpg" title="" class="img-zoom">
                    <div class="gallery-box">
                        <div class="gallery-img"> <img src="assets/img/slider/2.jpg" class="img-fluid mx-auto d-block" alt="work-img"> </div>
                    </div>
                </a>
            </div>
            <div class="col-md-4 gallery-item">
                <a href="assets/img/slider/2.jpg" title="" class="img-zoom">
                    <div class="gallery-box">
                        <div class="gallery-img"> <img src="assets/img/slider/2.jpg" class="img-fluid mx-auto d-block" alt="work-img"> </div>
                    </div>
                </a>
            </div> -->
        </div>
    </div>
</section>