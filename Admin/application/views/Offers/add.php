<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
        Nearby Places Details Form
            <!-- <small>Optional description</small> -->
        </h1>
        <ol class="breadcrumb">
            <li><a href="<?php echo base_url(); ?>dashboard/"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="<?php echo base_url(); ?>viewNearby"><i class="fa fa-dashboard"></i> Back to List</a></li>
            <li class="active">Nearby Places Details Form</li>
        </ol>
    </section>
    <form class="form-horizontal" method="POST" action="<?php echo base_url(); ?>addNearby" enctype="multipart/form-data">
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
                            <input type="hidden" name="nearby_id" value="<?php if (isset($records->nearby_id)) echo $records->nearby_id ?>" />
                            <?php echo validation_errors(); ?>
                        </div>
                        <div class="box-body">
                            <div class="form-group">
                                <label for="" class="col-md-2 control-label">Nearby Title<span style="color:red">*</span></label>
                                <div class="col-md-6">
                                    <input type="text" name="nearby_title" class="form-control" value="<?php if (isset($records->nearby_title)) echo $records->nearby_title ?>">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="" class="col-md-2 control-label">Nearby Description<span style="color:red">*</span></label>
                                <div class="col-sm-6">
                                    <textarea name="nearby_desc" class="form-control" id=""><?php if (isset($records->nearby_desc)) echo $records->nearby_desc ?></textarea>
                                </div>
                            </div>
                            <?php if(isset($records->nearby_display)){ ?>
                            <div class="form-group">
                                <label for="" class="col-md-2 control-label">Diplay On Homepage</label>
                                <div class="col-sm-6">
                                    <select name="nearby_display" id="" class="form-control">
                                        <option <?php if (isset($records->nearby_display) && $records->nearby_display == 1) echo "selected" ?> value="1">Yes</option>
                                        <option <?php if (isset($records->nearby_display) && $records->nearby_display == 0) echo "selected" ?> value="0">NO</option>
                                    </select>
                                </div>
                            </div>
                            <?php } ?>
                            <div class="form-group">
                                <label for="" class="col-md-2 control-label">Nearby Place Image Upload<span style="color:red">*</span></label>
                                <div class="col-sm-6">
                                    <input type="file" name="nearby_img" class="form-control">
                                    <input type="hidden" name="nearby_img1" class="form-control" value="<?php if (isset($records->nearby_img)) echo $records->nearby_img ?>">
                                    <?php if (isset($records->nearby_img)){ ?>
                                        <img src="<?php echo base_url() ?>uploads/nearby/<?php echo $records->nearby_img ?>" height="50px;" width="50px;" alt="">
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