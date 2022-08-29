<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
        Testimonial Description Form
            <!-- <small>Optional description</small> -->
        </h1>
        <ol class="breadcrumb">
            <li><a href="<?php echo base_url(); ?>dashboard/"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="<?php echo base_url(); ?>viewTestimonial"><i class="fa fa-dashboard"></i> Back to List</a></li>
            <li class="active">Testimonial Description Form</li>
        </ol>
    </section>
    <form class="form-horizontal" method="POST" action="<?php echo base_url(); ?>addTestimonial" enctype="multipart/form-data">
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
                            <input type="hidden" name="tsml_id" value="<?php if (isset($records->tsml_id)) echo $records->tsml_id ?>" />
                            <?php echo validation_errors(); ?>
                        </div>
                        <div class="box-body">
                            <div class="form-group">
                                <label for="" class="col-md-2 control-label">Customer Name<span style="color:red">*</span></label>
                                <div class="col-md-6">
                                    <input type="text" name="tsml_cname" class="form-control" value="<?php if (isset($records->tsml_cname)) echo $records->tsml_cname  ?>">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="" class="col-md-2 control-label">Testimonial Description<span style="color:red">*</span></label>
                                <div class="col-sm-6">
                                    <textarea name="tsml_descp" class="form-control" id=""><?php if (isset($records->tsml_descp)) echo $records->tsml_descp ?></textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="" class="col-md-2 control-label">Customer Image Upload<span style="color:red">*</span></label>
                                <div class="col-sm-6">
                                    <input type="file" name="tsml_img" class="form-control">
                                    <input type="hidden" name="tsml_img1" class="form-control" value="<?php if (isset($records->tsml_img)) echo $records->tsml_img ?>">
                                    <?php if (isset($records->tsml_img)){ ?>
                                        <img src="<?php echo base_url() ?>uploads/testimoney/<?php echo $records->tsml_img ?>" height="50px;" width="50px;" alt="">
                                    <?php } ?>
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