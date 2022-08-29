<script type="text/javascript" src="<?php echo base_url(); ?>/.js"></script>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Development Process Form
      <!-- <small>Optional description</small> -->
    </h1>
    <ol class="breadcrumb">
      <li><a href="<?php echo base_url(); ?>dashboard/"><i class="fa fa-dashboard"></i> Home</a></li>
      <li><a href="<?php echo base_url(); ?>Development/"><i class="fa fa-dashboard"></i> Back to List</a></li>
      <li class="active">Development Process Form</li>
    </ol>
  </section>
  <form class="form-horizontal" method="POST" action="<?php echo base_url(); ?>index.php/Development/add" enctype="multipart/form-data">
    <!-- Main content -->
    <section class="content">
      <div class="row">
        <!-- right column -->
        <div class="col-md-12">
          <!-- Horizontal Form -->
          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title"></h3>
            </div>

            <div class="form-group">
              <input type="hidden" name="develop_id" value="<?php if (isset($records->develop_id)) echo $records->develop_id ?>" />
              <?php echo validation_errors(); ?>
              <label for="inputEmail3" class="col-sm-2 control-label"></label>
            </div>
            <div class="box-body">
              <div class="form-group">
                <label for="title" class="col-sm-2 control-label">Development process Heading <span style="color:red">*</span></label>
                <div class="col-sm-3">
                  <input type="text" data-pms-required="true" autofocus class="form-control" name="devlop_heading" placeholder="Heading" value="<?php if (isset($records->devlop_heading)) echo $records->devlop_heading ?>">
                </div>
              </div>
              <div class="form-group">
                <label for="description" class="col-sm-2 control-label">Step 1 Title</label>
                <div class="col-sm-6">
                  <textarea class="form-control"  name="step_1_title"><?php if (isset($records->develop_1_title)) echo $records->develop_1_title ?></textarea>
                </div>
              </div>
              <div class="form-group">
                <label for="description" class="col-sm-2 control-label">Step 1 Description</label>
                <div class="col-sm-6">
                  <textarea class="form-control"  name="step_1_dec"><?php if (isset($records->develop_1_desc)) echo $records->develop_1_desc ?></textarea>
                </div>
              </div>
              <div class="form-group">
                <label for="description" class="col-sm-2 control-label">Step 2 Title</label>
                <div class="col-sm-6">
                  <textarea class="form-control"  name="step_2_title"><?php if (isset($records->develop_2_title)) echo $records->develop_2_title ?></textarea>
                </div>
              </div>
              <div class="form-group">
                <label for="description" class="col-sm-2 control-label">Step 2 Description</label>
                <div class="col-sm-6">
                  <textarea class="form-control"  name="step_2_dec"><?php if (isset($records->develop_2_desc)) echo $records->develop_2_desc ?></textarea>
                </div>
              </div>
              <div class="form-group">
                <label for="description" class="col-sm-2 control-label">Step 3 Title</label>
                <div class="col-sm-6">
                  <textarea class="form-control"  name="step_3_title"><?php if (isset($records->develop_3_title)) echo $records->develop_3_title ?></textarea>
                </div>
              </div>
              <div class="form-group">
                <label for="description" class="col-sm-2 control-label">Step 3 Description</label>
                <div class="col-sm-6">
                  <textarea class="form-control"  name="step_3_dec"><?php if (isset($records->develop_3_desc)) echo $records->develop_3_desc ?></textarea>
                </div>
              </div>
              <div class="form-group">
                <label for="description" class="col-sm-2 control-label">Step 4 Title</label>
                <div class="col-sm-6">
                  <textarea class="form-control"  name="step_4_title"><?php if (isset($records->develop_4_title)) echo $records->develop_4_title ?></textarea>
                </div>
              </div>
              <div class="form-group">
                <label for="description" class="col-sm-2 control-label">Step 4 Description</label>
                <div class="col-sm-6">
                  <textarea class="form-control"  name="step_4_dec"><?php if (isset($records->develop_4_desc)) echo $records->develop_4_desc ?></textarea>
                </div>
              </div>
            </div>
            <!-- /.box-body -->
            <div class="box-footer">
              <div class="row">
                <div class="col-md-6">
                </div>
                <div class="col-md-4">
                  <button type="button" class="btn btn-danger" onclick="window.location.reload();">Cancel</button>
                  <button type="submit" class="btn btn-primary">Save</button>
                </div>
              </div>
            </div>
          </div>
          <!-- /.box -->
        </div>
        <!--/.col (right) -->
      </div>
    </section>
  </form>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->