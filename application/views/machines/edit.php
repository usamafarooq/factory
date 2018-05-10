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
                <h1>Edit Machines</h1>
                <small></small>
                <ol class="breadcrumb">
                    <li><a href="<?php echo base_url() ?>"><i class="pe-7s-home"></i> Home</a></li>
                    <li class="active">Edit Machines</li>
                </ol>
            </div>
        </div>
        <!-- /. Content Header (Page header) -->

        <form method="post" action="<?php echo base_url() ?>machines/update" enctype="multipart/form-data">
            <input type="hidden" name="id" value="<?php echo $machines["id"] ?>">
            <div class="row">
                <div class="col-sm-12">
                    <div class="panel panel-bd ">
                        <div class="panel-heading">
                            <div class="panel-title">
                                <h4>Edit Machines</h4>
                            </div>
                        </div>
                        <div class="panel-body">
                            <div class="form-group row">

                                <label for="example-text-input" class="col-sm-3 col-form-label">Code</label>
                                <div class="col-sm-9">

                                    <input class="form-control" name="machine_Name" type="text" value="<?php echo $machines["machine_Name"] ?>" id="example-text-input" placeholder=""></div>

                            </div>
                            <div class="form-group row">

                                <label for="example-text-input" class="col-sm-3 col-form-label">Machine</label>
                                <div class="col-sm-9">

                                    <textarea class="form-control" name="detail"><?php echo $machines["detail"] ?></textarea></div>

                            </div>
                            <div class="form-group row">

                                <label for="example-text-input" class="col-sm-3 col-form-label">Feature</label>
                                <div class="col-sm-9">
                                    <select multiple="" class="form-control" name="feature[]">
                                    <?php 
                                    $feature = explode(',', $machines["feature"]);
                                    foreach ($table_feature as $t) {
                                        $key = array_search($t["id"], $feature);
                                        if ($key >= -1) {
                                            if (array_key_exists($key,$feature)) {
                                                $checked = 'selected';
                                            }
                                            else{
                                                $checked = '';
                                            }
                                        }
                                        else{
                                            $checked = '';
                                        }
                                    ?>
                                        <option  value="<?php echo $t["id"] ?>" <?php echo $checked ?>><?php echo $t["name"] ?></option>
                                    <?php } ?>
                                    </select>
                                </div>

                            </div>
                            <div class="form-group row">
                                <label for="example-text-input" class="col-sm-3 col-form-label">Dept</label>
                                <div class="col-sm-9">
                                    <select multiple="" class="form-control" name="flows[]">
                                    <?php 
                                        $flows = explode(',', $machines["flows"]);
                                        foreach ($table_flow as $t) {
                                            $key = array_search($t["id"], $flows);
                                            if ($key >= -1) {
                                                if (array_key_exists($key,$flows)) {
                                                    $checked = 'selected';
                                                }
                                                else{
                                                    $checked = '';
                                                }
                                            }
                                            else{
                                                $checked = '';
                                            }
                                    ?>
                                        <option value="<?php echo $t["id"] ?>" <?php echo $checked ?>><?php echo $t["Name"] ?></option>
                                    <?php } ?>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">

                                <div class="col-sm-12">
                                    <button type="submit" class="btn btn-primary pull-right">Update</button>
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