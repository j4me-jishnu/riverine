<div class="content-wrapper">
  <section class="content-header">
    <h1>Manage Rooms</h1>
    <ol class="breadcrumb">
      <li><a href="<?php echo base_url(); ?>Dashboard"><i class="fa fa-dashboard"></i> Home</a></li>
      <li><a href="<?php echo base_url(); ?>addNearby"><i class="fa fa-dashboard"></i> Back To Add</a></li>
      <li class="active">Room Details</li>
    </ol>
  </section>
  <!-- Main content -->
  <section class="content">
    <ul class="nav nav-tabs" role="tablist">
      <li class="nav-item">
        <a class="nav-link active" data-toggle="tab" href="#tabs-1" role="tab"><b>Room Categories</b></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-toggle="tab" href="#tabs-2" role="tab"><b>Rooms</b></a>
      </li>
    </ul>
    <div class="tab-content">
      <div class="tab-pane active" id="tabs-1" role="tabpanel">
        <div class="row">
          <div class="box">
            <div class="box-header">
              <input type="hidden" id="response" value="<?php echo $this->session->flashdata('response'); ?>" />
              <div class="col-md-8">
                <h2 class="box-title"></h2>
              </div>
            </div>
            <div class="box-body table-responsive">
              <button type="button" name="button" class="btn btn-primary" onclick="showCategoryModal()">Add Room Category</button>
              <table id="categoryTable" class="table table-bordered table-striped">
                <thead>
                  <tr>
                    <th>SINO</th>
                    <th>Room Category</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
      <div class="tab-pane" id="tabs-2" role="tabpanel">
        <div class="tab-pane active" id="tabs-1" role="tabpanel">
          <div class="tab-content">
            <div class="tab-pane active" id="tabs-1" role="tabpanel">
              <div class="row">
                <div class="box">
                  <div class="box-header">
                    <input type="hidden" id="response" value="<?php echo $this->session->flashdata('response'); ?>" />
                    <div class="col-md-8">
                      <h2 class="box-title"></h2>
                    </div>
                  </div>
                  <div class="box-body table-responsive">
                    <button type="button" name="button" class="btn btn-primary" onclick="showAddRoomModal()">Add Room</button>
                    <table id="roomsTable" class="table table-bordered table-striped">
                      <thead>
                        <tr>
                          <th>SINO</th>
                          <th>Room Name</th>
                          <th>Images Count</th>
                          <th>Adult Price</th>
                          <th>Below 5 Children</th>
                          <th>Above 5 Children</th>
                          <th>Extra Bed</th>
                          <th>Status</th>
                          <th>Action</th>
                          <th>Last updated</th>
                        </tr>
                      </thead>
                      <tbody>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
        </div>
      </div>
    </div>
  </section>
</div>
<div id="showCategoryModal" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Add Room Category Details</h4>
      </div>
      <div class="modal-body">
        <form class="" action="<?php echo base_url(); ?>Rooms/addRoomCategory" method="post">
        <div class="row">
          <div class="col-md-6">
            <label for="">Category Name</label>
            <input type="text" name="cat_name" value="" class="form-control" placeholder="Enter room category name" required>
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
<div id="showAddRoomModal" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Add Room</h4>
      </div>
      <div class="modal-body">
        <form class="" action="<?php echo base_url(); ?>Rooms/addRoom" method="post" enctype="multipart/form-data">
        <div class="row">
          <div class="col-md-6">
            <label for="">Room Name/No</label>
            <input type="text" name="room_name" value="" class="form-control" placeholder="" required>
          </div>
          <div class="col-md-6">
            <label for="">Category</label>
            <select class="form-control" name="room_cat" id="room_cat" class="form-control">
            </select>
          </div>
          <div class="col-md-6">
            <label for="">Adult Price</label>
            <input type="number" step="0.01" name="room_adult_price" value="" class="form-control" required>
          </div>
          <div class="col-md-6">
            <label for="">Children Below 5 Price</label>
            <input type="number" step="0.01" name="below5_price" value="" class="form-control" required>
          </div>
          <div class="col-md-6">
            <label for="">Children Above 5 Price</label>
            <input type="number" step="0.01" name="above5_price" value="" class="form-control" required>
          </div>
          <div class="col-md-6">
            <label for="">Extra Bed Price</label>
            <input type="number" step="0.01" name="extra_bed_price" value="" class="form-control" required>
          </div>
          <div class="col-md-6">
            <label for="">Status</label>
            <select class="form-control" name="room_status">
              <option value="0">Not Available</option>
              <option value="1">Available</option>
            </select>
          </div>
          <div class="col-md-6">
            <label for="">Room Images (Maximum 5 Images)</label>
            <!-- <input type="number" step="0.01" name="extra_bed_price" value="" class="form-control" required> -->
            <input type='file' class="form-control" name='files[]' multiple=""><br/><br/>
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-success">Save</button>
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </form>
    </div>
  </div>
</div>
