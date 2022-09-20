





<div class="content-wrapper">
  <section class="content-header">
    <h1>
      New Booking
    </h1>
    <ol class="breadcrumb">
      <li><a href="<?php echo base_url(); ?>Dashboard"><i class="fa fa-dashboard"></i> Home</a></li>
      <li><a href="<?php echo base_url(); ?>addNearby"><i class="fa fa-dashboard"></i> Back To Add</a></li>
      <li class="active">Near By Places Details</li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="row">
      <div class="box">
        <div class="box-header">
          <input type="hidden" id="response" value="<?php echo $this->session->flashdata('response'); ?>" />
          <div class="col-md-8">
            <h2 class="box-title"></h2>
          </div>
        </div>






        <div class="box-body">
          <form class="" action="<?php echo base_url(); ?>Rooms/addRoomCategory" method="post">
            <div class="row">
              <div class="col-md-4">
                <label for="">Booking ID</label>
                <input type="text" name="booking_code" id="booking_code" value="" class="form-control" placeholder="Enter room category name" readonly required>
              </div>
              <div class="col-md-4">
                <label for="">Guest Name</label>
                <input type="text" name="name" id="name" value="" class="form-control" required>
              </div>




              <div class="col-md-4">
                <label for="">Mobile</label>
                <input type="number" name="mobile" id="mobile" value="" class="form-control" required>
              </div>
              <div class="col-md-4">
                <label for="">POI Type</label>
                <select class="form-control" name="poi_type" id="poi_type">
                  <?php foreach ($pois as $item): ?>
                      <option value="<?php echo $item->poi_id; ?>"><?php echo $item->poi_name; ?></option>
                  <?php endforeach; ?>
                </select>
              </div>
              <div class="col-md-4">
                <label for="">Nationality</label>
                <select class="form-control" name="nationality" id="nationality" required>
                  <option value="0">Indian</option>
                  <option value="1">Foriegner</option>
                </select>
              </div>
              <div class="col-md-4">
                <label for="">Property</label>
                <select class="form-control" name="property" id="property" required>
                  <?php foreach ($properties as $item): ?>
                    <option value="<?php echo $item->prop_id; ?>"><?php echo $item->prop_name; ?></option>
                  <?php endforeach; ?>
                </select>
              </div>
              <div class="col-md-4">
                <label for="">Choose Room From Avalable Rooms</label>
                <select class="form-control" name="room" id="room" required>
                  <?php foreach ($available_rooms as $room): ?>
                    <option value="<?php echo $room->room_id; ?>"><?php echo $room->room_name; ?></option>
                  <?php endforeach; ?>
                </select>
              </div>
              <div class="col-md-4">
                <label for="">Check-In</label>
                <input type="datetime-local" name="check_in" value="" class="form-control" required>
              </div>
              <div class="col-md-4">
                <label for="">Check-Out</label>
                <input type="datetime-local" name="check_out" value="" class="form-control" required>
              </div>
              <div class="col-md-4">
                <label for="">Number of Adults</label>
                <input type="number" name="adults_count" value="" class="form-control" required>
              </div>
              <div class="col-md-4">
                <label for="">Number of Children</label>
                <input type="number" name="children_count" value="" class="form-control" required>
              </div>
              <div class="col-md-4">
                <label for="">Extra Bed Count</label>
                <input type="number" name="children_count" value="" class="form-control" required>
              </div>
            </div>

            <hr>
            <div class="col-md-12">
              <h4>Add Personal Details</h4>
            </div>
            <div class="col-md-1">
              <label for=""></label>
            </div>
            <div class="col-md-1">
              <label for="">Guest Name</label>
            </div>
            <div class="col-md-2">
              <label for="">Mobile</label>
            </div>
            <div class="col-md-2">
              <label for="">Address</label>
            </div>
            <div class="col-md-2">
              <label for="">POI Type</label>
            </div>
            <div class="col-md-2">
              <label for="">Document Number</label>
            </div>
            <div class="col-md-2">
              <label for="">Nationality</label>
            </div>

            <!-- ########## -->
            <div class="row">
              <input type="hidden" name="counter" id="counter" value="0">
            </div>
            <DIV id="service" class="box-body no-padding">
            </div>
            <i class="fa fa-fw fa-plus-square fa-2x" onClick="addMore();" Style="color:green;"></i>
            <i class="fa fa-fw fa-minus-square pull-right fa-2x" onClick="deleteRow();" style="color:red;"></i>



          </div>
          <div class="modal-footer">
            <button type="submit" class="btn btn-success" >Confirm</button>
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          </div>
        </form>
        </div>








      </div>
    </div>
  </section>
</div>
