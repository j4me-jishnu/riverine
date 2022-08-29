<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Home Description Form
            <!-- <small>Optional description</small> -->
        </h1>
        <ol class="breadcrumb">
            <li><a href="<?php echo base_url(); ?>dashboard/"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="<?php echo base_url(); ?>Home/viewHomeDesc"><i class="fa fa-dashboard"></i> Back to List</a></li>
            <li class="active">Home Description Form</li>
        </ol>
    </section>
    <form class="form-horizontal" method="POST" action="<?php echo base_url(); ?>addHomeDesc" enctype="multipart/form-data">
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
                            <input type="hidden" name="hd_id" value="<?php if (isset($records->hd_id)) echo $records->hd_id ?>" />
                            <?php echo validation_errors(); ?>
                        </div>
                        <div class="box-body">
                            <div class="form-group">
                                <label for="" class="col-md-2 control-label">Home Description Title<span style="color:red">*</span></label>
                                <div class="col-md-6">
                                    <input type="name" name="home_desc_title" class="form-control" value="<?php if (isset($records->hd_title)) echo $records->hd_title  ?>">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="" class="col-md-2 control-label">Home Description<span style="color:red">*</span></label>
                                <div class="col-sm-6">
                                    <textarea name="home_description" class="form-control" id=""><?php if (isset($records->hd_desc)) echo $records->hd_desc ?></textarea>
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