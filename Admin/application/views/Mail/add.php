<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            E-Mail Form
            <!-- <small>Optional description</small> -->
        </h1>
        <ol class="breadcrumb">
            <li><a href="<?php echo base_url(); ?>dashboard/"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="<?php echo base_url(); ?>Media/"><i class="fa fa-dashboard"></i> Back to List</a></li>
            <li class="active">E-Mail Form</li>
        </ol>
    </section>
    <form class="form-horizontal" method="POST" action="<?php echo base_url(); ?>Email/add" enctype="multipart/form-data">
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
                            <input type="hidden" name="email_id" value="<?php if (isset($records->mail_id)) echo $records->mail_id ?>" />
                            <?php echo validation_errors(); ?>
                        </div>
                        <div class="box-body">
                            <div class="form-group">
                                <label for="" class="col-md-2 control-label">Email Title<span style="color:red">*</span></label>
                                <div class="col-sm-6">
                                    <input type="text" data-pms-required="true" name="e_title" value="<?php if (isset($records->mail_title)) echo $records->mail_title ?>" class="form-control" placeholder="Email Title">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="" class="col-md-2 control-label">Username<span style="color:red">*</span></label>
                                <div class="col-sm-6">
                                    <input type="text" data-pms-required="true" name="e_username" value="<?php if (isset($records->mail_username)) echo $records->mail_username ?>" class="form-control" placeholder="Username">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="" class="col-md-2 control-label">Password<span style="color:red">*</span></label>
                                <div class="col-sm-6">
                                    <input type="text" data-pms-required="true" name="e_password" value="<?php if (isset($records->mail_password)) echo $records->mail_password ?>" class="form-control" placeholder="Password">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="" class="col-md-2 control-label">Mail Host<span style="color:red">*</span></label>
                                <div class="col-sm-6">
                                    <input type="text" data-pms-required="true" name="e_host" value="<?php if (isset($records->mail_host)) echo $records->mail_host ?>" class="form-control" placeholder="Host">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="" class="col-md-2 control-label">Mail Port<span style="color:red">*</span></label>
                                <div class="col-sm-6">
                                    <input type="number" data-pms-required="true" name="e_port" value="<?php if (isset($records->mail_port)) echo $records->mail_port ?>" class="form-control" placeholder="Port">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="" class="col-md-2 control-label">Recieve Mail<span style="color:red">*</span></label>
                                <div class="col-sm-6">
                                    <input type="text" data-pms-required="true" name="e_recieve" value="<?php if (isset($records->mail_recieve)) echo $records->mail_recieve ?>" class="form-control" placeholder="Enter Recieving Mail">
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