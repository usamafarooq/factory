
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
                <h1>Add Order</h1>
                <small></small>
                <ol class="breadcrumb">
                    <li><a href="<?php echo base_url() ?>"><i class="pe-7s-home"></i> Home</a></li>
                    <li class="active">Add Order</li>
                </ol>
            </div>
        </div>
        <!-- /. Content Header (Page header) -->
        
        <form method="post" id="requisition" action="<?php echo base_url() ?>requisition/submit_pending" enctype="multipart/form-data">
            <input type="hidden" name="redirect" value="<?php echo $url ?>">
            <div class="row">
                <div class="col-sm-12">
                    <div class="panel panel-bd ">
                        <div class="panel-heading">
                            <div class="panel-title">
                                <h4>Add Order</h4>
                            </div>
                        </div>
                        <div class="panel-body">
                            
                            <?php foreach ($orders as $o) {?>
                            <div class="row">
                                <input type="hidden" name="id[]" value="<?php echo $o['id'] ?>">
                                <div class="form-group row">
                                    <div class="col-md-4">
                                        <label>Product Name</label>
                                        <input type="text" class="form-control" name="" disabled="" value="<?php echo $o['Product_Name'] ?>">
                                    </div>
                                    <div class="col-md-4">
                                        <label>Quantity</label>
                                        <input type="text" class="form-control" name="" disabled="" value="<?php echo $o['received_quantity'] ?>">
                                    </div>
                                    <div class="col-md-4">
                                        <label>Pending Quantity</label>
                                        <input type="number" class="form-control" name="pending[]">
                                    </div>
                                </div>
                            </div>
                            <?php } ?>
                            <div class="form-group row">
                                <div class="col-sm-12">
                                    <button type="submit" class="btn btn-primary pull-right">Submit</button>
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
