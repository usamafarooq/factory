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
                <h1>Batch Release</h1>
                <small></small>
                <small></small>

                <ol class="breadcrumb">
                    <li><a href="#"><i class="pe-7s-home"></i> Home</a></li>
                    <li><a href="#" class="active">Forms</a></li>

                </ol>
            </div>
        </div>
        <!-- /. Content Header (Page header) -->

        <!-- Inline form -->

        <!-- Textual inputs -->
        <div class="col-sm-12">
            <div class="panel panel-bd ">
                <div class="panel-heading">
                    <div class="panel-title">
                        <h4>Batch Release Form</h4> <br>
                        <small>DOC NO: PRD/FM/005-01 | REV # 00</small>
                    </div>
                </div>
                <div class="panel-body">
                    <form method="post" action="">
                    <div class="form-group row">
                        <div class="col-md-6">
                            <label for="example-email-input" class="col-sm-3 col-form-label">text:</label>
                            <div class="col-sm-9">
                                <input class="form-control" type="text" id="example-email-input" value="<?php echo $order['id'] ?>" readonly>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <label for="example-email-input" class="col-sm-3 col-form-label">Date:</label>
                            <div class="col-sm-9">
                                <input class="form-control" type="date" value="<?php echo date('Y-m-d') ?>" id="example-email-input" readonly>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-6">
                            <label for="example-email-input" class="col-sm-3 col-form-label">Product Name</label>
                            <div class="col-sm-9">
                                <input class="form-control" type="text" value="<?php echo $order['product_name'] ?>" id="example-email-input" readonly>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <label for="example-email-input" class="col-sm-3 col-form-label">Order Qty</label>
                            <div class="col-sm-9">
                                <input class="form-control" type="number" value="<?php echo $order['quantity'] ?>" id="example-email-input" readonly>
                            </div>
                        </div>
                    </div> 
                    <div class="form-group row">
                       
                        <div class="col-md-6">
                            <label for="example-email-input" class="col-sm-3 col-form-label">Name Of Machine Operator</label>
                            <div class="col-sm-9">
                                <input class="form-control" type="text" name="operator" id="example-email-input">
                            </div>
                        </div>
                         <div class="col-md-6">
                            <label for="example-email-input" class="col-sm-3 col-form-label">Machine Name</label>
                            <div class="col-sm-9">
                                <input class="form-control" type="text" value="<?php echo $order['machine_Name'] ?>" id="example-email-input" readonly>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                       
                        <div class="col-md-6">
                            <label for="example-email-input" class="col-sm-3 col-form-label">Status Of Batch</label>
                            <div class="col-sm-9">
                                <input class="form-control" type="text" name="status" id="example-email-input">
                            </div>
                        </div>
                         <div class="col-md-6">
                            <label for="example-email-input" class="col-sm-3 col-form-label">Finished Quantity </label>
                            <div class="col-sm-9">
                                <input class="form-control" type="text" name="finish_qty" id="example-email-input">
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                       
                        <div class="col-md-8">
                            <label for="example-email-input" class="col-sm-5 col-form-label">Approval of Batch Release :</label>
                            <div class="col-sm-6">
                                <e class="aks_value">__________________</e>
                                <p>QC Inspector</p>
                                <br>
                            </div>
                        </div>
                    </div>
                    
                  
                   <hr>
                   <center><h3>Packing Area</h3></center>
                   <div class="form-group row">
                        <div class="col-md-6">
                            <label for="example-email-input" class="col-sm-3 col-form-label">Packer Name </label>
                            <div class="col-sm-9">
                                <input class="form-control" type="text" name="packer_name" id="example-email-input">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <label for="example-email-input" class="col-sm-5 col-form-label">Date</label>
                            <div class="col-sm-6">
                                 <input class="form-control" type="date" name="date" id="example-email-input">
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-6">
                            <label for="example-email-input" class="col-sm-3 col-form-label">Qty per MC </label>
                            <div class="col-sm-9">
                                <input class="form-control" type="text" name="qty_per_mc" id="example-email-input">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <label for="example-email-input" class="col-sm-5 col-form-label">Total Cartons</label>
                            <div class="col-sm-6">
                                 <input class="form-control" type="text" name="total_carton" id="example-email-input">
                            </div>
                        </div>
                    </div>
                   
                    <div class="form-group row">
                        
                       
                        <div class="col-lg-8">
                            <p>&nbsp;</p>
                            <address>
                               <label for="example-text-input" class="col-sm-4">Packing In-charge  :</label>
                                <e class="aks_value">__________________</e>
                                <br>
                            </address>
                        </div>
                    </div>
                    <div class="form-group row">
                        <button type="submit" class="btn btn-info pull-right">Submit</button>
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

<style type="text/css">
    footer.main-footer {
    float:  left;
}
</style>