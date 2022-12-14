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
      if($this->uri->segment(2)=="RoomDetails")
      {echo "active";}
      elseif($this->uri->segment(2)=="showRoomAvailability")
      {echo "active";}
      elseif($this->uri->segment(2)=="showBookings")
      {echo "active";}
      ?>">
      <a><i class="fa fa-hotel"></i><span>Rooms & Reservations</span><span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span></a>
      <ul class="treeview-menu ">
         <li class="<?php if($this->uri->segment(2)=="RoomDetails"){echo "active";}?>" ><a  href="<?php echo base_url();?>Rooms/RoomDetails"><i class="fa fa-circle-o"></i> <span>Rooms</span></a></li>
         <li class="<?php if($this->uri->segment(2)=="showRoomAvailability"){echo "active";}?>" ><a  href="<?php echo base_url();?>Rooms/showRoomAvailability"><i class="fa fa-circle-o"></i> <span>Availability</span></a></li>
         <li class="<?php if($this->uri->segment(2)=="showBookings"){echo "active";}?>" ><a  href="<?php echo base_url();?>Rooms/showBookings"><i class="fa fa-circle-o"></i> <span>Booking</span></a></li>
      </ul>

      <li class="treeview <?php
      if($this->uri->segment(2)=="showOffersPage")
      {echo "active";}
      elseif($this->uri->segment(1)=="#")
      {echo "active";}
      ?>">
      <a><i class="fa fa-superpowers"></i><span>Offers</span><span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span></a>
      <ul class="treeview-menu ">
         <li class="<?php if($this->uri->segment(2)=="showOffersPage"){echo "active";}?>" ><a  href="<?php echo base_url();?>Offers/showOffersPage"><i class="fa fa-circle-o"></i> <span>Manage Offers</span></a></li>
      </ul>
   </li>

   <li class="<?php if ($this->uri->segment(1) == "FAQ") { echo "active"; } ?>"><a href="<?php echo base_url(); ?>FAQ/showFAQPage"><i class="fa fa-question-circle"></i> <span>FAQ</span></a></li>

   <li class="<?php if ($this->uri->segment(2) == "showEventsPage") { echo "active"; } ?>"><a href="<?php echo base_url(); ?>Events/showEventsPage"><i class="fa fa-calendar"></i> <span>Events Management</span></a></li>

   <li class="<?php if ($this->uri->segment(2) == "showReviewsPage") { echo "active"; } ?>"><a href="<?php echo base_url(); ?>Reviews/showReviewsPage"><i class="fa fa-check-circle-o"></i> <span>Guest Reviews & Ratings</span></a></li>

   <li class="<?php if ($this->uri->segment(2) == "showPromocodePage") { echo "active"; } ?>"><a href="<?php echo base_url(); ?>Promocode/showPromocodePage"><i class="fa fa-percent"></i> <span>Promo Code Management</span></a></li>



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

   <li class="<?php if ($this->uri->segment(2) == "showBookingInterface") { echo "active"; } ?>"><a href="<?php echo base_url(); ?>Booking/showBookingInterface"><i class="fa fa-cube"></i> <span>Booking Interface</span></a></li>



   <!-- ################################################################################################################## -->

   </ul>
</section>
</aside>
