<!-- /.Navbar  Static Side -->
<div class="control-sidebar-bg"></div>
<!-- Page Content -->
<div id="page-wrapper">
    <!-- main content -->
    <div class="content">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="header-icon">
                <i class="pe-7s-box1"></i>
            </div>
            <div class="header-title">
                <h1>View Jobs</h1>
                <small> </small>
                <ol class="breadcrumb">
                    <li><a href="<?php echo base_url() ?>"><i class="pe-7s-home"></i> Home</a></li>

                    <li class="active">View Jobs</li>
                </ol>
            </div>
        </div>
        <!-- /. Content Header (Page header) -->

        <div class="row">
            <div class="col-sm-12">
                <div class="panel panel-bd">
                    <div class="panel-heading">
                        <div class="panel-title">
                            <h4>Date RANGE</h4>
                        </div>
                    </div>
                    <div class="panel-body">
                        <form method="post" action="">
                            <div class="form-group row">
                                <div class="col-md-6">
                                    <label>Start Date</label>
                                    <input type="date" name="start" class="form-control" required="" value="<?php echo $start ?>">
                                </div>
                                <div class="col-md-6">
                                    <label>End Date</label>
                                    <input type="date" name="end" class="form-control" required="" value="<?php echo $end ?>">
                                </div>
                                <div class="form-group row">
                                    <div class="col-md-12">
                                        <br><button class="btn btn-info pull-right" type="submit">Submit</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <div class="panel panel-bd">
                    <div class="panel-heading">
                        <div class="panel-title">
                            <h4>View Jobs</h4>
                        </div>
                    </div>
                    <div class="panel-body">

                        <div class="table-responsive">
                            <table id="dataTableExample2" class="table table-bordered table-striped table-hover">
                                <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th>Client</th>
                                        <th>Item Code</th>
                                        <th>Quantity</th>
                                        <th>PO No</th>
                                        <th>PO Date</th>
                                        <th>Batch No</th>
                                        <th>Delivery Date</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
							    		foreach ($jobs as $module) {
							    	?>
                                        <tr>
                                            <td>
                                                <?php echo $module["id"] ?>
                                            </td>
                                            <td>
                                                <?php echo $module["Client"] ?>
                                            </td>
                                            <td>
                                                <?php echo $module["Item_Code"] ?>
                                            </td>
                                            <td>
                                                <?php echo $module["quantity"] ?>
                                            </td>
                                            <td>
                                                <?php echo $module["PO_No"] ?>
                                            </td>
                                            <td>
                                                <?php echo $module["PO_Date"] ?>
                                            </td>
                                            <td>
                                                <?php echo $module["Batch_No"] ?>
                                            </td>
                                            <td>
                                                <?php echo $module["Delivery_Date"] ?>
                                            </td>
                                            <td>
                                                <a href="<?php echo base_url('job_inventory_report/view/'.$module['id']) ?>"><img src="<?php echo base_url() ?>assets/icons/view_report.png" title="View Report" alt="View Report" width="25" height="25"></a>
                                            </td>
                                        </tr>
                                        <?php } ?>
                                </tbody>
                            </table>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>