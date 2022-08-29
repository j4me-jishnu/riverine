<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <title>Riverine Suits</title>
    <link rel="shortcut icon" href="<?php echo base_url() ?>assets/img/favicon.png" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Barlow&amp;family=Barlow+Condensed&amp;family=Gilda+Display&amp;display=swap">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/plugins.css" />
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/style.css" />

</head>

<body>
    <!-- Progress scroll totop -->
    <div class="progress-wrap cursor-pointer">
        <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
        </svg>
    </div>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg">
        <div class="container">
            <!-- Logo -->
            <div class="logo-wrapper navbar-brand valign">
                <a href="<?php echo base_url() ?>Home">
                    <div class="logo">
                        <img src="<?php echo base_url() ?>assets/img/logo.png" class="logo-img" alt="">
                    </div>
                </a>
            </div>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"> <span class="icon-bar"><i class="ti-line-double"></i></span> </button>
            <!-- Navbar links -->
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                <!-- <span class="nav-link active"> Home</a> </span> -->
                    <li class="nav-item dropdown"><a class="nav-link <?php if($this->uri->segment(1)=="Home") {echo 'active';}?>" href="<?php echo base_url() ?>Home">Home</a></li>
                    <li class="nav-item"><a class="nav-link <?php if($this->uri->segment(1)=="About") {echo 'active';}?>" href="<?php echo base_url() ?>About">About</a></li>
                    <li class="nav-item"><a class="nav-link <?php if($this->uri->segment(1)=="Accomadation") {echo 'active';}?>" href="<?php echo base_url() ?>Accomadation">Accommodation</a></li>
                    <li class="nav-item "> <a class="nav-link <?php if($this->uri->segment(1)=="Activities") {echo 'active';}?>" href="<?php echo base_url() ?>Activities"> Activities</a></li>
                    <li class="nav-item"><a class="nav-link <?php if($this->uri->segment(1)=="Nearby_Places") {echo 'active';}?>" href="<?php echo base_url() ?>Nearby_Places">Nearby Places</a></li>
                    <li class="nav-item"><a class="nav-link <?php if($this->uri->segment(1)=="Gallery") {echo 'active';}?>" href="<?php echo base_url() ?>Gallery">Gallery</a></li>
                    <li class="nav-item"><a class="nav-link <?php if($this->uri->segment(1)=="Contact") {echo 'active';}?>" href="<?php echo base_url() ?>Contact">Contact</a></li>
                </ul>
            </div>
        </div>
    </nav>