<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
      Development Process Details
        <!-- <small>Optional description</small> -->
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo base_url();?>Dashboard"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="<?php echo base_url();?>Development/add"><i class="fa fa-dashboard"></i> Back To Add</a></li>
        <li class="active">Development Process Details</li>
      </ol>
    </section>
     <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="box">
            <div class="box-header">
            <input type="hidden" id="response" value="<?php echo $this->session->flashdata('response');?>" />
              <!-- <h3 class="box-title">Data Table With Full Features</h3> -->
              <div class="col-md-8"><h2 class="box-title"></h2> </div>
				
				
				<div class="col-md-2">
                  <a href="<?php echo base_url();?>Development/add" class="btn btn-primary"><i class="fa fa-plus-square"></i>  Add Development Process </a>
				</div>
            </div>
            <!-- /.box-header -->
            <div class="box-body table-responsive">
              <table id="gallery_table" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>SINO</th>
                  <th>HEADING</th>
				  <th>STEP1(TITLE)</th>
                  <th>STEP1(DESC)</th>
                  <th>STEP2(TITLE)</th>
                  <th>STEP2(DESC)</th>
                  <th>STEP3(TITLE)</th>
                  <th>STEP3(DESC)</th>
                  <th>STEP4(TITLE)</th>
                  <th>STEP4(DESC)</th>
                  <th><center>EDIT/DELETE</center></th>
				</tr>
                </thead>
                <tbody>
                </tbody>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
         
     </div>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
