
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
                <h1>Edit Product</h1>
                <small></small>
                <ol class="breadcrumb">
                    <li><a href="<?php echo base_url() ?>"><i class="pe-7s-home"></i> Home</a></li>
                    <li class="active">Edit Product</li>
                </ol>
            </div>
        </div>
        <!-- /. Content Header (Page header) -->

        <form method="post" action="<?php echo base_url() ?>product/update" enctype="multipart/form-data">
            <input type="hidden" name="id" value="<?php echo $product["id"] ?>">
            <div class="row">
                <div class="col-sm-12">
                    <div class="panel panel-bd ">
                        <div class="panel-heading">
                            <div class="panel-title">
                                <h4>Edit Product</h4>
                            </div>
                        </div>
                        <div class="panel-body"><div class="form-group row">

                                <label for="example-text-input" class="col-sm-3 col-form-label">Product Name<span class="required">*</span></label>
                                        <div class="col-sm-9">

                                        <input class="form-control" name="Product_Name" type="text" value="<?php echo $product["Product_Name"] ?>" id="example-text-input" placeholder="" required=""></div>

                                    </div><div class="form-group row">

                                <label for="example-text-input" class="col-sm-3 col-form-label">Product Code<span class="required">*</span></label>
                                        <div class="col-sm-9">

                                        <input class="form-control" name="Product_Code" type="text" value="<?php echo $product["Product_Code"] ?>" id="example-text-input" placeholder="" required=""></div>

                                    </div><div class="form-group row">

                                <label for="example-text-input" class="col-sm-3 col-form-label">Barcode<span class="required">*</span></label>
                                        <div class="col-sm-9">

                                        <input class="form-control" name="Barcode" type="text" value="<?php echo $product["Barcode"] ?>" id="example-text-input" placeholder="" required=""></div>

                                    </div><div class="form-group row">

                                <label for="example-text-input" class="col-sm-3 col-form-label">Size<span class="required">*</span></label>
                                        <div class="col-sm-9"><input class="form-control" name="size" type="text" value="<?php echo $product["size"] ?>" id="example-text-input" placeholder="" required=""></div>

                                    </div><div class="form-group row">

                                <label for="example-text-input" class="col-sm-3 col-form-label">Brand Name<span class="required">*</span></label>
                                        <div class="col-sm-9"><input class="form-control" name="brand" type="text" value="<?php echo $product["brand"] ?>" id="example-text-input" placeholder="" required=""></div>

                                    </div><div class="form-group row">

                                <label for="example-text-input" class="col-sm-3 col-form-label">Gramage<span class="required">*</span></label>
                                        <div class="col-sm-9"><input class="form-control" name="gramage" type="text" value="<?php echo $product["gramage"] ?>" id="example-text-input" placeholder="" required=""></div>

                                    </div><div class="form-group row">

                                <label for="example-text-input" class="col-sm-3 col-form-label">Category<span class="required">*</span></label>
                                        <div class="col-sm-9">
                                            <select class="form-control" name="Category" required="">
                                                <option>Select Category</option><?php foreach ($table_category as $t) {?>
                                                    <option value="<?php echo $t["id"] ?>" <?php if($t["id"] == $product["Category"]) echo "selected" ?>><?php echo $t["Name"] ?></option>
                                               <?php } ?></select>
                                        </div>

                                    </div><div class="form-group row">

                                <label for="example-text-input" class="col-sm-3 col-form-label">Sub Category</label>
                                        <div class="col-sm-9">
                                            <select class="form-control" name="Sub_Category" >
                                                <option>Select Sub Category</option><?php foreach ($table_sub_category as $t) {?>
                                                    <option value="<?php echo $t["id"] ?>" <?php if($t["id"] == $product["Sub_Category"]) echo "selected" ?>><?php echo $t["Name"] ?></option>
                                               <?php } ?></select>
                                        </div>

                                    </div><div class="form-group row">

                                <label for="example-text-input" class="col-sm-3 col-form-label">Product Unit<span class="required">*</span></label>
                                        <div class="col-sm-9">

                                        <input class="form-control" name="Product_Unit" type="text" value="<?php echo $product["Product_Unit"] ?>" id="example-text-input" placeholder="" required=""></div>

                                    </div><div class="form-group row">

                                <label for="example-text-input" class="col-sm-3 col-form-label">Product Cost</label>
                                        <div class="col-sm-9">

                                        <input class="form-control" name="Product_Cost" type="text" value="<?php echo $product["Product_Cost"] ?>" id="example-text-input" placeholder="" ></div>

                                    </div><div class="form-group row">

                                <label for="example-text-input" class="col-sm-3 col-form-label">Product Price<span class="required">*</span></label>
                                        <div class="col-sm-9">

                                        <input class="form-control" name="Product_Price" type="text" value="<?php echo $product["Product_Price"] ?>" id="example-text-input" placeholder="" required=""></div>

                                    </div><div class="form-group row">

                                <label for="example-text-input" class="col-sm-3 col-form-label">Product Image<span class="required">*</span></label>
                                        <div class="col-sm-9">

                                        <input class="form-control" name="Product_Image" type="file" value="" id="example-text-input" placeholder=""></div>

                                    </div><div class="form-group row">

                                <label for="example-text-input" class="col-sm-3 col-form-label">Product Details</label>
                                        <div class="col-sm-9">

                                        <textarea class="form-control" name="Product_Details" ><?php echo $product["Product_Details"] ?></textarea></div>

                                    </div><div class="form-group row">

                                <label for="example-text-input" class="col-sm-3 col-form-label">Product details for invoice</label>
                                        <div class="col-sm-9">

                                        <textarea class="form-control" name="Product_details_for_invoice" ><?php echo $product["Product_details_for_invoice"] ?></textarea></div>

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
