<aside class="main-sidebar">
   <section class="sidebar">
     <ul class="sidebar-menu" id="navi">
       <li class="<?php if ($this->uri->segment(1) == "dashboard") { echo "active"; } ?>"><a href="<?php echo base_url(); ?>dashboard"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a></li>
       <li class="treeview <?php
       if($this->uri->segment(1)=="HomeText")
       {echo "active";}
       elseif($this->uri->segment(1)=="viewHomeDesc")
       {echo "active";}
       elseif($this->uri->segment(1)=="viewTestimonial")
       {echo "active";}
        ?>">
       <a><i class="fa fa-home"></i><span>Home</span><span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span></a>
       <ul class="treeview-menu ">
          <li class="<?php if($this->uri->segment(1)=="HomeText"){echo "active";}?>" ><a  href="<?php echo base_url();?>HomeText"><i class="fa fa-user-circle-o"></i> <span>Home Title</span></a></li>
          <li class="<?php if($this->uri->segment(1)=="viewHomeDesc"){echo "active";}?>" ><a  href="<?php echo base_url();?>viewHomeDesc"><i class="fa fa-user-circle-o"></i> <span>Home Description</span></a></li>
          <li class="<?php if($this->uri->segment(1)=="viewTestimonial"){echo "active";}?>" ><a  href="<?php echo base_url();?>viewTestimonial"><i class="fa fa-user-circle-o"></i> <span>Testimonial</span></a></li>
       </ul>
    </li>
    <li class="<?php if ($this->uri->segment(1) == "viewActivity") { echo "active"; } ?>"><a href="<?php echo base_url(); ?>viewActivity"><i class="fa fa-dashboard"></i> <span>Activity</span></a></li>
    <li class="<?php if ($this->uri->segment(1) == "viewNearby") { echo "active"; } ?>"><a href="<?php echo base_url(); ?>viewNearby"><i class="fa fa-dashboard"></i> <span>Nearby Places</span></a></li>
    <li class="<?php if ($this->uri->segment(1) == "viewGallery") { echo "active"; } ?>"><a href="<?php echo base_url(); ?>viewGallery"><i class="fa fa-dashboard"></i> <span>Gallery</span></a></li>
       <!-- <li class="<?php if ($this->uri->segment(1) == "Media") { echo "active"; } ?>"><a href="<?php echo base_url(); ?>Media"><i class="fa fa-video-camera"></i> <span>Media</span></a></li>
       <li class="<?php if ($this->uri->segment(1) == "Gallery") { echo "active"; } ?>"><a href="<?php echo base_url(); ?>Gallery"><i class="fa fa-picture-o"></i> <span>Gallery</span></a></li>
       <li class="<?php if ($this->uri->segment(1) == "Products") { echo "active"; } ?>"><a href="<?php echo base_url(); ?>Products"><i class="fa fa-motorcycle"></i> <span>Products</span></a></li>
       <li class="<?php if ($this->uri->segment(1) == "Email") { echo "active"; } ?>"><a href="<?php echo base_url(); ?>Email"><i class="fa fa-envelope-o"></i> <span>E-Mail</span></a></li> -->
     </ul>
   </section>
</aside>