
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
                <h1>Edit Product release</h1>
                <small></small>
                <ol class="breadcrumb">
                    <li><a href="<?php echo base_url() ?>"><i class="pe-7s-home"></i> Home</a></li>
                    <li class="active">Edit Product release</li>
                </ol>
            </div>
        </div>
        <!-- /. Content Header (Page header) -->

        <form method="post" action="<?php echo base_url() ?>product_release/update" enctype="multipart/form-data">
            <input type="hidden" name="id" value="<?php echo $product_release["id"] ?>">
            <div class="row">
                <div class="col-sm-12">
                    <div class="panel panel-bd ">
                        <div class="panel-heading">
                            <div class="panel-title">
                                <h4>Edit Product release</h4>
                            </div>
                        </div>
                        <div class="panel-body"><div class="form-group row">

                                <label for="example-text-input" class="col-sm-3 col-form-label">Date<span class="required">*</span></label>
                                        <div class="col-sm-9">

                                        <input class="form-control" name="Date" type="date" value="<?php echo $product_release["Date"] ?>" id="example-text-input" placeholder="" required=""></div>

                                    </div><div class="form-group row">

                                <label for="example-text-input" class="col-sm-3 col-form-label">Reference No<span class="required">*</span></label>
                                        <div class="col-sm-9">

                                        <input class="form-control" name="Reference_No" type="number" value="<?php echo $product_release["Reference_No"] ?>" id="example-text-input" placeholder="" required=""></div>

                                    </div><div class="form-group row">

                                <label for="example-text-input" class="col-sm-3 col-form-label">Store<span class="required">*</span></label>
                                        <div class="col-sm-9">
                                            <select class="form-control" name="Store" required="">
                                                <option>Select Store</option><?php foreach ($table_sub_store as $t) {?>
                                                    <option value="<?php echo $t["id"] ?>" <?php if($t["id"] == $product_release["Store"]) echo "selected" ?>><?php echo $t["Name"] ?></option>
                                               <?php } ?></select>
                                        </div>

                                    </div><div class="form-group row">

                                <label for="example-text-input" class="col-sm-3 col-form-label">Status<span class="required">*</span></label>
                                        <div class="col-sm-9">

                                        <select class="form-control" name="Status" required="">
        <option>Select Status</option><option value="Pending" <?php if("Pending" == $product_release["Status"]) echo "selected" ?>>Pending</option><option value="complete" <?php if("complete" == $product_release["Status"]) echo "selected" ?>>Complete</option></select></div>

                                    </div><div class="form-group row">

                                <label for="example-text-input" class="col-sm-3 col-form-label">Note</label>
                                        <div class="col-sm-9">

                                        <textarea class="form-control" name="Note" ><?php echo $product_release["Note"] ?></textarea></div>

                                    </div><div class="form-group row">

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
