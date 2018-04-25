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
                <h1>View orders</h1>
                <small> </small>
                <ol class="breadcrumb">
                    <li><a href="<?php echo base_url() ?>"><i class="pe-7s-home"></i> Home</a></li>

                    <li class="active">View orders</li>
                </ol>
            </div>
        </div>
        <!-- /. Content Header (Page header) -->

        <div class="row">
            <div class="col-sm-12">
                <div class="panel panel-bd">
                    <div class="panel-heading">
                        <div class="panel-title">
                            <h4>View orders</h4>
                            <?php 
								if ($permission["created"] == "1") {
							?>
                            <a href="<?php echo base_url("work_orders/create") ?>"><button class="btn btn-info pull-right">Add Work_orders</button></a>
                            <?php } ?>
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
                                        <?php 
											if ($permission["view"] == "1" || $permission["view_all"] == "1"){
										?>
                                        <th>Action</th>
                                        <?php } ?>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
							    		foreach ($work_orders as $module) {
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
                                            <?php 
												if ($permission["view"] == "1" || $permission["view_all"] == "1"){
											?>
                                            <td>
												<a href="<?php echo base_url() ?>all_orders/view_plane/<?php echo $module["id"] ?>"><img src="<?php echo base_url() ?>assets/icons/view_plan.png" title="View Plane" alt="View Plane" width="25" height="25"></a>

                                                <a href="<?php echo base_url() ?>all_orders/view_timeline/<?php echo $module["id"] ?>"><img src="<?php echo base_url() ?>assets/icons/view_timeline.png" title="View Timeline" alt="View Timeline" width="25" height="25"></a>
                                            </td>
                                            <?php } ?>
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