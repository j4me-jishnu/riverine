<div class="content-wrapper">
  <section class="content-header">
    <h1>
      Offers Management
    </h1>
    <ol class="breadcrumb">
      <li><a href="<?php echo base_url(); ?>Dashboard"><i class="fa fa-dashboard"></i> Home</a></li>
      <li><a href="<?php echo base_url(); ?>addNearby"><i class="fa fa-dashboard"></i> Back To Add</a></li>
      <li class="active">Offers Management</li>
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
          <div class="col-md-2">
            <button type="button" class="btn btn-primary" onclick="showAddOfferModal()" name="button">Add offer</button>
          </div>
        </div>
        <div class="box-body table-responsive">
          <table id="gallery_table" class="table table-bordered table-striped">
            <thead>
              <tr>
                <th>Room</th>
                <th>IMAGE</th>
                <th>DATE</th>
                <th><center>EDIT/DELETE</center></th>
              </tr>
            </thead>
            <tbody>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </section>
</div>


<div id="showAddOfferModal" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Add Offer</h4>
      </div>
      <div class="modal-body">
        <form class="" action="<?php echo base_url(); ?>Offers/addOffer" method="post">
        <div class="row">
          <div class="col-md-6">
            <label for="">Offer Name</label>
            <input type="text" name="cat_name" value="" class="form-control" placeholder="Enter room category name" required>
          </div>
          <div class="col-md-6">
            <label for="">Description</label>
            <input type="text" name="cat_name" value="" class="form-control" placeholder="Enter room category name" required>
          </div>
          <div class="col-md-6">
            <label for="">Select Room</label>
            <select class="form-control" name="room_id" id="roomSelect">
              <option value="" selected>Choose</option>
              <?php foreach ($room_list as $room): ?>
                <option value="<?php echo $room->room_id; ?>"><?php echo $room->room_name; ?></option>
              <?php endforeach; ?>
            </select>
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-success" >Save</button>
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </form>
    </div>

  </div>
</div>
