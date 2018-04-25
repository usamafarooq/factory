
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
                <h1>Edit Orders</h1>
                <small></small>
                <ol class="breadcrumb">
                    <li><a href="<?php echo base_url() ?>"><i class="pe-7s-home"></i> Home</a></li>
                    <li class="active">Edit Orders</li>
                </ol>
            </div>
        </div>
        <!-- /. Content Header (Page header) -->

        <form method="post" action="<?php echo base_url() ?>orders/update" enctype="multipart/form-data">
            <input type="hidden" name="id" value="<?php echo $orders["id"] ?>">
            <div class="row">
                <div class="col-sm-12">
                    <div class="panel panel-bd ">
                        <div class="panel-heading">
                            <div class="panel-title">
                                <h4>Edit Orders</h4>
                            </div>
                        </div>
                        <div class="panel-body">
                            <div class="form-group row">

                                <div class="form-group col-lg-6">
                                <label for="example-text-input" class="col-sm-3 col-form-label">Date</label>
                                        <div class="col-sm-9">
                                            <input class="form-control" name="Date" type="date" value="<?php echo $orders["Date"] ?>" id="example-text-input" placeholder="" >
                                        </div>

                                    </div>
                                    <div class="form-group col-lg-6">
                                <label for="example-text-input" class="col-sm-3 col-form-label">Name</label>
                                        <div class="col-sm-9">
                                            <input class="form-control" name="Name" type="text" value="<?php echo $orders["Name"] ?>" id="example-text-input" placeholder="" >
                                        </div>

                                    </div>
                                </div>
                                
                                <div class="form-group row">

                                <div class="form-group col-lg-6">
                                <label for="example-text-input" class="col-sm-3 col-form-label">Designation</label>
                                        <div class="col-sm-9">
                                            <input class="form-control" name="Designation" type="text" value="<?php echo $orders["Designation"] ?>" id="example-text-input" placeholder="" >
                                        </div>

                                    </div>
                                    <div class="form-group col-lg-6">
                                <label for="example-text-input" class="col-sm-3 col-form-label">Quantity</label>
                                        <div class="col-sm-9">
                                            <input class="form-control" name="quantity" type="text" value="<?php echo $orders["quantity"] ?>" id="example-text-input" placeholder="" >
                                        </div>

                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="form-group col-lg-6">
                                <label for="example-text-input" class="col-sm-3 col-form-label">Attach File</label>
                                        <div class="col-sm-9">
                                            <input class="form-control" name="Attach_File" type="File" value="<?php echo $orders["Attach_File"] ?>" id="example-text-input" placeholder="" >
                                        </div>

                                    </div>
                                     <div class="form-group col-lg-6">
                                <label for="example-text-input" class="col-sm-3 col-form-label">Order Type</label>
                                        <div class="col-sm-9">
                                            <select class="form-control" id="exampleSelect1" name="Order_Type">
                                            <option value="">Please Select</option>
                                            <option value="New" <?php if($orders["Order_Type"] == 'New') echo 'selected' ?>>New</option>
                                            <option value="Repeat" <?php if($orders["Order_Type"] == 'Repeat') echo 'selected' ?>>Repeat</option>
                                        </select>
                                            <!-- <input class="form-control" name="Order_Type" type="text" value="<?php echo $orders["Order_Type"] ?>" id="example-text-input" placeholder="" > -->
                                        </div>

                                    </div>
                                </div>

                                
                                
                                <div class="form-group row">

                                <div class="form-group col-lg-12">
                                <label for="example-text-input" class="col-sm-3 col-form-label">Remarks</label>
                                        <div class="col-sm-9">
                                            <textarea class="form-control" name="Remarks" type="textarea" id="example-text-input" placeholder="" style="margin: 0px 2.5px 0px -117px; width: 789px;"><?php echo $orders["Remarks"] ?></textarea>
                        
                                         </div>
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


