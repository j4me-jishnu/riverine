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
          <table id="offers_table" class="table table-bordered table-striped">
            <thead>
              <tr>
                <th>Sl No</th>
                <th>OFFER NAME</th>
                <th>OFFER DESCRIPTION</th>
                <th>ROOM CATEGORY</th>
                <th>START</th>
                <th>ENDS</th>
                <th>STATUS</th>
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
          <div class="col-md-8">
            <label for="">Offer Name</label>
            <input type="text" name="offer_name" value="" class="form-control" placeholder="Enter offer name" required>
          </div>
          <div class="col-md-12">
            <label for="">Offer Description</label>
            <textarea id="story" name="offer_desc" rows="5" cols="33" class="form-control" required></textarea>
        </div>
          <div class="col-md-8">
            <label for="">Select Room Category</label>
            <select class="form-control" name="category_id" id="categorySelect" required>
              <option value="" selected>Choose</option>
              <?php foreach ($category_list as $category): ?>
                <option value="<?php echo $category->cat_id; ?>"><?php echo $category->cat_name; ?></option>
              <?php endforeach; ?>
            </select>
          </div>
          <div class="col-md-6">
            <label for="">Start on</label>
            <input type="date" class="form-control" name="offer_start" value="" required>
          </div>
          <div class="col-md-6">
            <label for="">Ending at</label>
            <input type="date" class="form-control" name="offer_end" value="" required>
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
