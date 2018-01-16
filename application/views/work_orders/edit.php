
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
                <h1>Edit Work_orders</h1>
                <small></small>
                <ol class="breadcrumb">
                    <li><a href="index.html"><i class="pe-7s-home"></i> Home</a></li>
                    <li class="active">Edit Work_orders</li>
                </ol>
            </div>
        </div>
        <!-- /. Content Header (Page header) -->

        <form method="post" action="<?php echo base_url() ?>work_orders/update" enctype="multipart/form-data">
            <input type="hidden" name="id" value="<?php echo $work_orders["id"] ?>">
            <div class="row">
                <div class="col-sm-12">
                    <div class="panel panel-bd ">
                        <div class="panel-heading">
                            <div class="panel-title">
                                <h4>Edit Work_orders</h4>
                            </div>
                        </div>
                        <div class="panel-body">
                        </div>
                        <div class="form-group row">

                                <div class="form-group col-lg-6">
                                <label for="example-text-input" class="col-sm-3 col-form-label">Date</label>
                                        <div class="col-sm-9">
                                            <input class="form-control" name="Date" type="date" value="<?php echo $work_orders["Date"] ?>" id="example-text-input" placeholder="" >
                                        </div>

                                    </div>
                                    <div class="form-group col-lg-6">
                                <label for="example-text-input" class="col-sm-3 col-form-label">Client</label>
                                        <div class="col-sm-9">
                                            <input class="form-control" name="Client" type="text" value="<?php echo $work_orders["Client"] ?>" id="example-text-input" placeholder="" >
                                        </div>

                                    </div>
                                </div>
                                
                                <div class="form-group row">

                                <div class="form-group col-lg-6">
                                <label for="example-text-input" class="col-sm-3 col-form-label">Description</label>
                                        <div class="col-sm-9">
                                            <input class="form-control" name="Description" type="text" value="<?php echo $work_orders["Description"] ?>" id="example-text-input" placeholder="" >
                                        </div>

                                    </div>
                                    <div class="form-group col-lg-6">
                                <label for="example-text-input" class="col-sm-3 col-form-label">Item Code</label>
                                        <div class="col-sm-9">
                                            <input class="form-control" name="Item_Code" type="text" value="<?php echo $work_orders["Item_Code"] ?>" id="example-text-input" placeholder="" >
                                        </div>

                                    </div>
                                </div>
                                
                                <div class="form-group row">

                                <div class="form-group col-lg-6">
                                <label for="example-text-input" class="col-sm-3 col-form-label">Quantity</label>
                                        <div class="col-sm-9">
                                            <input class="form-control" name="quantity" type="number" value="<?php echo $work_orders["quantity"] ?>" id="example-text-input" placeholder="" >
                                        </div>

                                    </div>
                                    <div class="form-group col-lg-6">
                                <label for="example-text-input" class="col-sm-3 col-form-label">PO No</label>
                                        <div class="col-sm-9">
                                            <input class="form-control" name="PO_No" type="text" value="<?php echo $work_orders["PO_No"] ?>" id="example-text-input" placeholder="" >
                                        </div>

                                    </div>
                                </div>
                                
                                <div class="form-group row">

                                <div class="form-group col-lg-6">
                                <label for="example-text-input" class="col-sm-3 col-form-label">PO Date</label>
                                        <div class="col-sm-9">
                                            <input class="form-control" name="PO_Date" type="date" value="<?php echo $work_orders["PO_Date"] ?>" id="example-text-input" placeholder="" >
                                        </div>

                                    </div>
                                    <div class="form-group col-lg-6">
                                <label for="example-text-input" class="col-sm-3 col-form-label">Batch No</label>
                                        <div class="col-sm-9">
                                            <input class="form-control" name="Batch_No" type="text" value="<?php echo $work_orders["Batch_No"] ?>" id="example-text-input" placeholder="" >
                                        </div>

                                    </div>
                                </div>
                                
                                <div class="form-group row">

                                <div class="form-group col-lg-6">
                                <label for="example-text-input" class="col-sm-3 col-form-label">Delivery Date</label>
                                        <div class="col-sm-9">
                                            <input class="form-control" name="Delivery_Date" type="date" value="<?php echo $work_orders["Delivery_Date"] ?>" id="example-text-input" placeholder="" >
                                        </div>

                                    </div>
                                    <div class="form-group col-lg-6">
                                <label for="example-text-input" class="col-sm-3 col-form-label">Order Type</label>
                                        <div class="col-sm-9">
                                             <div class="col-sm-9">
                                                <div class="radio radio-info radio-inline">
                                                    <input type="radio" id="inlineRadio1" value="New"  <?php if($work_orders["Order_Type"] == 'New') echo 'checked' ?> name="Order_Type" >
                                                    <label for="inlineRadio1"> New </label>
                                                </div>
                                                <div class="radio radio-info radio-inline">
                                                    <input type="radio" id="inlineRadio2" value="Repeat"  <?php if($work_orders["Order_Type"] == 'Repeat') echo 'checked' ?> name="Order_Type">
                                                    <label for="inlineRadio2"> Repeat </label>
                                                </div>
                                            </div>
                                            
                                        </div>

                                    </div>
                                </div>
                                
                                <div class="form-group row">

                                <div class="form-group col-lg-6">
                                <label for="example-text-input" class="col-sm-3 col-form-label">Delivery Status</label>
                                        <div class="col-sm-9">
                                            <div class="radio radio-info radio-inline">
                                                <input type="radio" id="inlineRadio3" value="N" <?php if($work_orders["Order_Type"] == 'N') echo 'checked' ?> name="Delivery_Status" checked="">
                                                <label for="inlineRadio3"> N </label>
                                            </div>
                                            <div class="radio radio-info radio-inline">
                                                <input type="radio" id="inlineRadio4" value="U" <?php if($work_orders["Order_Type"] == 'U') echo 'checked' ?> name="Delivery_Status">
                                                <label for="inlineRadio4"> U </label>
                                            </div>
                                            <div class="radio radio-info radio-inline">
                                                <input type="radio" id="inlineRadio5" value="M.U" <?php if($work_orders["Order_Type"] == 'M.U') echo 'checked' ?> name="Delivery_Status">
                                                <label for="inlineRadio5"> M.U. </label>
                                            </div>
                                        </div>
                                        

                                    </div>
                                    <div class="form-group col-lg-6">
                                <label for="example-text-input" class="col-sm-3 col-form-label">Instruction Remarks</label>
                                        <div class="col-sm-9">
                                            <input class="form-control" name="Instruction_Remarks" type="textarea" value="<?php echo $work_orders["Instruction_Remarks"] ?>" id="example-text-input" placeholder="" >
                                        </div>

                                    </div>
                                </div>
                                
                                <div class="form-group row">
                                     <div class="form-group col-lg-12">
                                <div class="col-sm-12">
                                    <button type="submit" class="btn btn-primary pull-right">Update</button>
                                </div>

                            </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
