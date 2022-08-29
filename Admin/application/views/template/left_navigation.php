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
      <li class="<?php if ($this->uri->segment(1) == "viewActivity") { echo "active"; } ?>"><a href="<?php echo base_url(); ?>viewActivity"><i class="fa fa-window-restore"></i> <span>Activity</span></a></li>
      <li class="<?php if ($this->uri->segment(1) == "viewNearby") { echo "active"; } ?>"><a href="<?php echo base_url(); ?>viewNearby"><i class="fa fa-feed"></i> <span>Nearby Places</span></a></li>
      <li class="<?php if ($this->uri->segment(1) == "viewGallery") { echo "active"; } ?>"><a href="<?php echo base_url(); ?>viewGallery"><i class="fa fa-cube"></i> <span>Gallery</span></a></li>
<!-- ########################################################################################################### -->
      <li class="treeview <?php
      if($this->uri->segment(1)=="Rooms")
      {echo "active";}
      elseif($this->uri->segment(1)=="#")
      {echo "active";}
      ?>">
      <a><i class="fa fa-hotel"></i><span>Rooms & Reservations</span><span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span></a>
      <ul class="treeview-menu ">
         <li class="<?php if($this->uri->segment(1)=="Rooms"){echo "active";}?>" ><a  href="<?php echo base_url();?>Rooms"><i class="fa fa-circle-o"></i> <span>Rooms</span></a></li>
         <li class="<?php if($this->uri->segment(1)=="#"){echo "active";}?>" ><a  href="<?php echo base_url();?>viewHomeDesc"><i class="fa fa-circle-o"></i> <span>Room Availability</span></a></li>
      </ul>

      <li class="treeview <?php
      if($this->uri->segment(1)=="#")
      {echo "active";}
      elseif($this->uri->segment(1)=="#")
      {echo "active";}
      ?>">
      <a><i class="fa fa-star-half-o"></i><span>Guest Reviews & Ratings</span><span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span></a>
      <ul class="treeview-menu ">
         <li class="<?php if($this->uri->segment(1)=="#"){echo "active";}?>" ><a  href="<?php echo base_url();?>HomeText"><i class="fa fa-user-circle-o"></i> <span>#</span></a></li>
         <li class="<?php if($this->uri->segment(1)=="#"){echo "active";}?>" ><a  href="<?php echo base_url();?>viewHomeDesc"><i class="fa fa-user-circle-o"></i> <span>R#</span></a></li>
      </ul>
   </li>
      <li class="treeview <?php
      if($this->uri->segment(1)=="#")
      {echo "active";}
      elseif($this->uri->segment(1)=="#")
      {echo "active";}
      ?>">
      <a><i class="fa fa-superpowers"></i><span>Offers Available</span><span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span></a>
      <ul class="treeview-menu ">
         <li class="<?php if($this->uri->segment(1)=="#"){echo "active";}?>" ><a  href="<?php echo base_url();?>HomeText"><i class="fa fa-user-circle-o"></i> <span>#</span></a></li>
         <li class="<?php if($this->uri->segment(1)=="#"){echo "active";}?>" ><a  href="<?php echo base_url();?>viewHomeDesc"><i class="fa fa-user-circle-o"></i> <span>R#</span></a></li>
      </ul>
   </li>
      <li class="treeview <?php
      if($this->uri->segment(1)=="#")
      {echo "active";}
      elseif($this->uri->segment(1)=="#")
      {echo "active";}
      ?>">
      <a><i class="fa fa-question-circle"></i><span>FAQ</span><span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span></a>
      <ul class="treeview-menu">
         <li class="<?php if($this->uri->segment(1)=="#"){echo "active";}?>" ><a  href="<?php echo base_url();?>HomeText"><i class="fa fa-user-circle-o"></i> <span>#</span></a></li>
         <li class="<?php if($this->uri->segment(1)=="#"){echo "active";}?>" ><a  href="<?php echo base_url();?>viewHomeDesc"><i class="fa fa-user-circle-o"></i> <span>R#</span></a></li>
      </ul>
   </li>
      <li class="treeview <?php
      if($this->uri->segment(1)=="#")
      {echo "active";}
      elseif($this->uri->segment(1)=="#")
      {echo "active";}
      ?>">
      <a><i class="fa fa-calendar"></i><span>Events Management & QR</span><span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span></a>
      <ul class="treeview-menu ">
         <li class="<?php if($this->uri->segment(1)=="#"){echo "active";}?>" ><a  href="<?php echo base_url();?>HomeText"><i class="fa fa-user-circle-o"></i> <span>#</span></a></li>
         <li class="<?php if($this->uri->segment(1)=="#"){echo "active";}?>" ><a  href="<?php echo base_url();?>viewHomeDesc"><i class="fa fa-user-circle-o"></i> <span>R#</span></a></li>
      </ul>
   </li>
      <li class="treeview <?php
      if($this->uri->segment(1)=="#")
      {echo "active";}
      elseif($this->uri->segment(1)=="#")
      {echo "active";}
      ?>">
      <a><i class="fa fa-credit-card"></i><span>Guest Payments</span><span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span></a>
      <ul class="treeview-menu ">
         <li class="<?php if($this->uri->segment(1)=="#"){echo "active";}?>" ><a  href="<?php echo base_url();?>HomeText"><i class="fa fa-user-circle-o"></i> <span>#</span></a></li>
         <li class="<?php if($this->uri->segment(1)=="#"){echo "active";}?>" ><a  href="<?php echo base_url();?>viewHomeDesc"><i class="fa fa-user-circle-o"></i> <span>R#</span></a></li>
      </ul>
   </li>



   <!-- ################################################################################################################## -->

   </ul>
</section>
</aside>
