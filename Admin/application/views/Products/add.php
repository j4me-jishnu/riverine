<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Products Form
            <!-- <small>Optional description</small> -->
        </h1>
        <ol class="breadcrumb">
            <li><a href="<?php echo base_url(); ?>dashboard/"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="<?php echo base_url(); ?>Products/"><i class="fa fa-dashboard"></i> Back to List</a></li>
            <li class="active">Products Form</li>
        </ol>
    </section>
    <form class="form-horizontal" method="POST" action="<?php echo base_url(); ?>Products/add" enctype="multipart/form-data">
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
                            <input type="hidden" name="products_id" value="<?php if (isset($records->products_id)) echo $records->products_id ?>" />
                            <?php echo validation_errors(); ?>
                        </div>
                        <div class="box-body">
                            <div class="form-group">
                                <label for="" class="col-md-2 control-label">Product Name<span style="color:red">*</span></label>
                                <div class="col-sm-6">
                                    <input type="text" name="p_name" class="form-control" value="<?php if (isset($records->products_name)) echo $records->products_name ?>">
                                </div>
                            </div>
                            <!-- <div class="form-group">
                                <label for="" class="col-md-2 control-label">Feature 1<span style="color:red">*</span></label>
                                <div class="col-sm-6">
                                    <input type="text" name="f_1" class="form-control" value="<?php if (isset($records->products_feature_1)) echo $records->products_feature_1 ?>">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="" class="col-md-2 control-label">Feature 2<span style="color:red">*</span></label>
                                <div class="col-sm-6">
                                    <input type="text" name="f_2" class="form-control" value="<?php if (isset($records->products_feature_2)) echo $records->products_feature_2 ?>">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="" class="col-md-2 control-label">Feature 3<span style="color:red">*</span></label>
                                <div class="col-sm-6">
                                    <input type="text" name="f_3" class="form-control" value="<?php if (isset($records->products_feature_3)) echo $records->products_feature_3 ?>">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="" class="col-md-2 control-label">Feature 4<span style="color:red">*</span></label>
                                <div class="col-sm-6">
                                    <input type="text" name="f_4" class="form-control" value="<?php if (isset($records->products_feature_4)) echo $records->products_feature_4 ?>">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="" class="col-md-2 control-label">Feature 5<span style="color:red">*</span></label>
                                <div class="col-sm-6">
                                    <input type="text" name="f_5" class="form-control" value="<?php if (isset($records->products_feature_5)) echo $records->products_feature_5 ?>">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="" class="col-md-2 control-label">Feature 6<span style="color:red">*</span></label>
                                <div class="col-sm-6">
                                    <input type="text" name="f_6" class="form-control" value="<?php if (isset($records->products_feature_6)) echo $records->products_feature_6 ?>">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="" class="col-md-2 control-label">Feature 7<span style="color:red">*</span></label>
                                <div class="col-sm-6">
                                    <input type="text" name="f_7" class="form-control" value="<?php if (isset($records->products_feature_7)) echo $records->products_feature_7 ?>">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="" class="col-md-2 control-label">Feature 8<span style="color:red">*</span></label>
                                <div class="col-sm-6">
                                    <input type="text" name="f_8" class="form-control" value="<?php if (isset($records->products_feature_8)) echo $records->products_feature_8 ?>">
                                </div>
                            </div> -->
                            <div class="form-group">
                                <label for="" class="col-md-2 control-label">Upload Image<span style="color:red">*</span></label>
                                <div class="col-sm-6">
                                    <input type="hidden" name="p_img1" class="form-control" value="<?php if (isset($records->products_img)) echo $records->products_img ?>">
                                    <input type="file" name="p_img" class="form-control" value="">
                                    <?php if (isset($records->products_img)) { ?>
                                        <img src="<?php echo base_url() ?>uploads/products/<?php echo $records->products_img ?>" height="50px;" width="50px;" alt="<?php echo $records->products_name ?>">
                                    <?php } ?>    
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="" class="col-md-2 control-label">Upload Inner Image<span style="color:red">*</span></label>
                                <div class="col-sm-6">
                                    <input type="hidden" name="p_inn_img1" class="form-control" value="<?php if (isset($records->products_inner_img)) echo $records->products_inner_img ?>">
                                    <input type="file" name="p_inn_img" class="form-control" value="">
                                    <?php if (isset($records->products_inner_img)) { ?>
                                        <img src="<?php echo base_url() ?>uploads/products/<?php echo $records->products_inner_img ?>" height="50px;" width="50px;" alt="<?php echo $records->products_inner_img ?>">
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