<!-- /.Navbar  Static Side -->
<div class="control-sidebar-bg"></div>
<!-- Page Content -->
<div id="page-wrapper">
    <!-- main content -->
    <div class="content">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="header-icon">
                <i class="pe-7s-note2"></i>
            </div>
            <div class="header-title">
                <h1>Add Machines</h1>
                <small></small>
                <ol class="breadcrumb">
                    <li><a href="<?php echo base_url() ?>"><i class="pe-7s-home"></i> Home</a></li>
                    <li class="active">Add Machines</li>
                </ol>
            </div>
        </div>
        <!-- /. Content Header (Page header) -->

        <form method="post" action="<?php echo base_url() ?>machines/insert" enctype="multipart/form-data">

            <div class="row">
                <div class="col-sm-12">
                    <div class="panel panel-bd ">
                        <div class="panel-heading">
                            <div class="panel-title">
                                <h4>Add Machines</h4>
                            </div>
                        </div>
                        <div class="panel-body">
                            <div class="form-group row">
                                <label for="example-text-input" class="col-sm-3 col-form-label">Code</label>
                                <div class="col-sm-9"><input class="form-control" name="machine_Name" type="text" value="" id="example-text-input" placeholder=""></div>
                            </div>
                            <div class="form-group row">

                                <label for="example-text-input" class="col-sm-3 col-form-label">Machine</label>
                                <div class="col-sm-9"><textarea class="form-control" name="detail"></textarea></div>
                            </div>
                            <div class="form-group row">
                                <label for="example-text-input" class="col-sm-3 col-form-label">Feature</label>
                                <div class="col-sm-9">
                                    <select multiple="" class="form-control" name="feature[]">
                                    <?php foreach ($table_feature as $t) {?>
                                        <option value="<?php echo $t["id"] ?>"><?php echo $t["name"] ?></option>
                                    <?php } ?>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="example-text-input" class="col-sm-3 col-form-label">Dept</label>
                                <div class="col-sm-9">
                                    <select multiple="" class="form-control" name="flows[]">
                                    <?php foreach ($table_flow as $t) {?>
                                        <option value="<?php echo $t["id"] ?>"><?php echo $t["Name"] ?></option>
                                    <?php } ?>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-12">
                                    <button type="submit" class="btn btn-primary pull-right">Add</button>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>

</div>
<!-- /.main content -->
</div>
<!-- /#page-wrapper -->
</div>
<!-- /#wrapper -->
<!-- START CORE PLUGINS -->