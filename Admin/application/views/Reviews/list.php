<div class="content-wrapper">
  <section class="content-header">
    <h1>
      Reviews and Ratings
    </h1>
    <ol class="breadcrumb">
      <li><a href="<?php echo base_url(); ?>Dashboard"><i class="fa fa-dashboard"></i> Home</a></li>
      <li><a href="<?php echo base_url(); ?>addNearby"><i class="fa fa-dashboard"></i> Back To Add</a></li>
      <li class="active">Reviews and Ratings</li>
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
            <!-- <button type="button" class="btn btn-primary" onclick="showAddOfferModal()" name="button">Add offer</button> -->
          </div>
        </div>
        <div class="box-body table-responsive">
          <table id="offers_table" class="table table-bordered table-striped">
            <thead>
              <tr>
                <th>Sl No</th>
                <th>NAME</th>
                <th>CONTACT INFO</th>
                <th>RATING</th>
                <th>COMMENT</th>
                <th>POSTED DATE</th>
                <th>STATUS</th>
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
