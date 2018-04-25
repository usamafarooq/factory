
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
                <h1>Edit Purchases</h1>
                <small></small>
                <ol class="breadcrumb">
                    <li><a href="<?php echo base_url() ?>"><i class="pe-7s-home"></i> Home</a></li>
                    <li class="active">Edit Purchases</li>
                </ol>
            </div>
        </div>
        <!-- /. Content Header (Page header) -->

        <form method="post" action="<?php echo base_url() ?>purchases/update" enctype="multipart/form-data">
            <input type="hidden" name="id" value="<?php echo $purchases["id"] ?>">
            <div class="row">
                <div class="col-sm-12">
                    <div class="panel panel-bd ">
                        <div class="panel-heading">
                            <div class="panel-title">
                                <h4>Edit Purchases</h4>
                            </div>
                        </div>
                        <div class="panel-body"><div class="form-group row">

                                <label for="example-text-input" class="col-sm-3 col-form-label">Date<span class="required">*</span></label>
                                        <div class="col-sm-9">

                                        <input class="form-control" name="Date" type="date" value="<?php echo $purchases["Date"] ?>" id="example-text-input" placeholder="" required=""></div>

                                    </div><div class="form-group row">

                                <label for="example-text-input" class="col-sm-3 col-form-label">Reference No</label>
                                        <div class="col-sm-9">

                                        <input class="form-control" name="Reference_No" type="number" value="<?php echo $purchases["Reference_No"] ?>" id="example-text-input" placeholder="" ></div>

                                    </div><div class="form-group row">

                                <label for="example-text-input" class="col-sm-3 col-form-label">Status<span class="required">*</span></label>
                                        <div class="col-sm-9">

                                        <select class="form-control" name="Status" required="">
        <option>Select Status</option><option value="Received" <?php if("Received" == $purchases["Status"]) echo "selected" ?>>Received</option><option value="Pending" <?php if("Pending" == $purchases["Status"]) echo "selected" ?>>Pending</option><option value="Ordered" <?php if("Ordered" == $purchases["Status"]) echo "selected" ?>>Ordered</option></select></div>

                                    </div><div class="form-group row">

                                <label for="example-text-input" class="col-sm-3 col-form-label">Attach Document</label>
                                        <div class="col-sm-9">

                                        <input class="form-control" name="Attach_Document" type="file" value="" id="example-text-input" placeholder=""></div>

                                    </div><div class="form-group row">

                                <label for="example-text-input" class="col-sm-3 col-form-label">Supplier<span class="required">*</span></label>
                                        <div class="col-sm-9">
                                            <select class="form-control" name="Supplier" required="">
                                                <option>Select Supplier</option><?php foreach ($table_vednor as $t) {?>
                                                    <option value="<?php echo $t["id"] ?>" <?php if($t["id"] == $purchases["Supplier"]) echo "selected" ?>><?php echo $t["Name"] ?></option>
                                               <?php } ?></select>
                                        </div>

                                    </div><div class="form-group row">

                                <label for="example-text-input" class="col-sm-3 col-form-label">Order Tax</label>
                                        <div class="col-sm-9">

                                        <input class="form-control" name="Order_Tax" type="text" value="<?php echo $purchases["Order_Tax"] ?>" id="example-text-input" placeholder="" ></div>

                                    </div><div class="form-group row">

                                <label for="example-text-input" class="col-sm-3 col-form-label">Discount (5/5$)</label>
                                        <div class="col-sm-9">

                                        <input class="form-control" name="Discount" type="text" value="<?php echo $purchases["Discount_(5/5$)"] ?>" id="example-text-input" placeholder="" ></div>

                                    </div><div class="form-group row">

                                <label for="example-text-input" class="col-sm-3 col-form-label">Shipping</label>
                                        <div class="col-sm-9">

                                        <input class="form-control" name="Shipping" type="text" value="<?php echo $purchases["Shipping"] ?>" id="example-text-input" placeholder="" ></div>

                                    </div><div class="form-group row">

                                <label for="example-text-input" class="col-sm-3 col-form-label">Payment Term</label>
                                        <div class="col-sm-9">

                                        <input class="form-control" name="Payment_Term" type="text" value="<?php echo $purchases["Payment_Term"] ?>" id="example-text-input" placeholder="" ></div>

                                    </div><div class="form-group row">

                                <label for="example-text-input" class="col-sm-3 col-form-label">Note</label>
                                        <div class="col-sm-9">

                                        <textarea class="form-control" name="Note" ><?php echo $purchases["Note"] ?></textarea></div>

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
