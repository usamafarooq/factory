
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
                <h1>Edit Quantity adjustments</h1>
                <small></small>
                <ol class="breadcrumb">
                    <li><a href="<?php echo base_url() ?>"><i class="pe-7s-home"></i> Home</a></li>
                    <li class="active">Edit Quantity adjustments</li>
                </ol>
            </div>
        </div>
        <!-- /. Content Header (Page header) -->

        <form method="post" action="<?php echo base_url() ?>quantity_adjustments/update" enctype="multipart/form-data">
            <input type="hidden" name="id" value="<?php echo $quantity_adjustments["id"] ?>">
            <div class="row">
                <div class="col-sm-12">
                    <div class="panel panel-bd ">
                        <div class="panel-heading">
                            <div class="panel-title">
                                <h4>Edit Quantity adjustments</h4>
                            </div>
                        </div>
                        <div class="panel-body"><div class="form-group row">

                                <label for="example-text-input" class="col-sm-3 col-form-label">Date<span class="required">*</span></label>
                                        <div class="col-sm-9">

                                        <input class="form-control" name="Date" type="date" value="<?php echo $quantity_adjustments["Date"] ?>" id="example-text-input" placeholder="" required=""></div>

                                    </div><div class="form-group row">

                                <label for="example-text-input" class="col-sm-3 col-form-label">Type<span class="required">*</span></label>
                                        <div class="col-sm-9">

                                        <select class="form-control" name="Type" required="">
        <option>Select Type</option><option value="Addition" <?php if("Addition" == $quantity_adjustments["Type"]) echo "selected" ?>>Addition</option><option value="Subtraction" <?php if("Subtraction" == $quantity_adjustments["Type"]) echo "selected" ?>>Subtraction</option></select></div>

                                    </div><div class="form-group row">

                                <label for="example-text-input" class="col-sm-3 col-form-label">Quantity<span class="required">*</span></label>
                                        <div class="col-sm-9">

                                        <input class="form-control" name="Quantity" type="number" value="<?php echo $quantity_adjustments["Quantity"] ?>" id="example-text-input" placeholder="" required=""></div>

                                    </div><div class="form-group row">

                                <label for="example-text-input" class="col-sm-3 col-form-label">Note<span class="required">*</span></label>
                                        <div class="col-sm-9">

                                        <textarea class="form-control" name="Note" required=""><?php echo $quantity_adjustments["Note"] ?></textarea></div>

                                    </div><div class="form-group row">

                                <label for="example-text-input" class="col-sm-3 col-form-label">Product<span class="required">*</span></label>
                                        <div class="col-sm-9">
                                            <select class="form-control" name="Product" required="">
                                                <option>Select Product</option><?php foreach ($table_product as $t) {?>
                                                    <option value="<?php echo $t["id"] ?>" <?php if($t["id"] == $quantity_adjustments["Product"]) echo "selected" ?>><?php echo $t["Product_Name"] ?></option>
                                               <?php } ?></select>
                                        </div>

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
