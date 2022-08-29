<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
        Gallery Form
            <!-- <small>Optional description</small> -->
        </h1>
        <ol class="breadcrumb">
            <li><a href="<?php echo base_url(); ?>dashboard/"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="<?php echo base_url(); ?>viewGallery/"><i class="fa fa-dashboard"></i> Back to List</a></li>
            <li class="active">Gallery Form</li>
        </ol>
    </section>
    <form class="form-horizontal" method="POST" action="<?php echo base_url(); ?>addGallery" enctype="multipart/form-data">
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
                            <input type="hidden" name="gallery_id" value="<?php if (isset($records->gallery_id)) echo $records->gallery_id ?>" />
                            <?php echo validation_errors(); ?>
                        </div>
                        <div class="box-body">
                            <div class="form-group">
                                <label for="" class="col-md-2 control-label">Gallery Title<span style="color:red">*</span></label>
                                <div class="col-sm-6">
                                    <input type="text" name="g_title" value="<?php if (isset($records->gallery_title)) echo $records->gallery_title ?>" class="form-control" placeholder="Gallery Title">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="" class="col-md-2 control-label">Upload Image<span style="color:red">*</span></label>
                                <div class="col-sm-6">
                                   <input type="hidden" name="g_image1" value="<?php if (isset($records->gallery_image)) echo $records->gallery_image ?>">
                                   <input type="file" class="form-control" name="g_image">
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