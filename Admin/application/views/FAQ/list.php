<div class="content-wrapper">
  <section class="content-header">
    <h1>
      Frequently Asked Questions Management
    </h1>
    <ol class="breadcrumb">
      <li><a href="<?php echo base_url(); ?>Dashboard"><i class="fa fa-dashboard"></i> Home</a></li>
      <li><a href="<?php echo base_url(); ?>addNearby"><i class="fa fa-dashboard"></i> Back To Add</a></li>
      <li class="active">Frequently Asked Questions</li>
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
            <button type="button" class="btn btn-primary" onclick="showAddFAQModal()" name="button">Add QA</button>
          </div>
        </div>
        <div class="box-body table-responsive">
          <table id="faq_table" class="table table-bordered table-striped">
            <thead>
              <tr>
                <th>Sl No</th>
                <th>QUESTION</th>
                <th>ANSWER</th>
                <th>LAST UPDATED</th>
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


<div id="showAddFAQModal" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Add Frequently Asked Questions</h4>
      </div>
      <div class="modal-body">
        <form class="" action="<?php echo base_url(); ?>FAQ/addFAQ" method="post">
        <div class="row">
          <div class="col-md-10">
            <label for="">Question</label>
            <textarea name="question" rows="5" cols="33" class="form-control" required></textarea>
          </div>
          <div class="col-md-10">
            <label for="">Answer</label>
            <textarea name="answer" rows="5" cols="33" class="form-control" required></textarea>
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
