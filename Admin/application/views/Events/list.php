<div class="content-wrapper">
  <section class="content-header">
    <h1>
      Events Management
    </h1>
    <ol class="breadcrumb">
      <li><a href="<?php echo base_url(); ?>Dashboard"><i class="fa fa-dashboard"></i> Home</a></li>
      <li><a href="<?php echo base_url(); ?>addNearby"><i class="fa fa-dashboard"></i> Back To Add</a></li>
      <li class="active">Events Management</li>
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
            <button type="button" class="btn btn-primary" onclick="showAddEventModal()" name="button">Add Event</button>
          </div>
        </div>
        <div class="box-body table-responsive">
          <table id="events_table" class="table table-bordered table-striped">
            <thead>
              <tr>
                <th>Sl No</th>
                <th>EVENT NAME</th>
                <th>DESCRIPTION</th>
                <th>IMAGE COUNT</th>
                <th>EVENT DATE</th>
                <th>QR</th>
                <th><center>CREATED AT</center></th>
                <th><center>ACTION</center></th>
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


<div id="showAddEventsModal" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Add Events</h4>
      </div>
      <div class="modal-body">
        <form class="" enctype="multipart/form-data" action="<?php echo base_url(); ?>Events/addEvent" method="post">
          <div class="row">
            <div class="col-md-8">
              <label for="">Event Name</label>
              <input type="text" name="event_name" value="" class="form-control" placeholder="Enter offer name" required>
            </div>
            <div class="col-md-12">
              <label for="">Description</label>
              <textarea id="story" name="event_desc" rows="5" cols="33" class="form-control" required></textarea>
            </div>
            <div class="col-md-6">
              <label for="">Event Date</label>
              <input type="date" class="form-control" name="event_date" value="" required>
            </div>
            <div class="col-md-6">
              <label for="">Event Images</label>
              <input type='file' class="form-control" name='files[]' multiple="" required>
            </div>
          </div>
        </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-success" >Proceed</button>
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </form>
    </div>

  </div>
</div>
