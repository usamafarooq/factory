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
                <h1>View Clients</h1>
                <small> </small>
                <ol class="breadcrumb">
                    <li><a href="<?php echo base_url() ?>"><i class="pe-7s-home"></i> Home</a></li>

                    <li class="active">View Clients</li>
                </ol>
            </div>
        </div>
        <!-- /. Content Header (Page header) -->

        <div class="row">
            <div class="col-sm-12">
                <div class="panel panel-bd">
                    <div class="panel-heading">
                        <div class="panel-title">
                            <h4>View Clients</h4>
                        </div>
                    </div>
                    <div class="panel-body">

                        <div class="table-responsive">
                            <table id="dataTableExample2" class="table table-bordered table-striped table-hover">
                                <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th>Client Name</th>
                                        <th>Detail</th>
                                        <th>Contact Person</th>
                                        <th>Contact Number</th>
                                        <th>Email</th>
                                        <th>Company Name</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
							    		foreach ($clients as $module) {
							    	?>
                                        <tr>
                                            <td><?php echo $module["id"] ?></td>
                                            <td><?php echo $module["client_Name"] ?></td>
                                            <td><?php echo $module["Detail"] ?></td>
                                            <td><?php echo $module["Contact_Person"] ?></td>
                                            <td><?php echo $module["Contact_Number"] ?></td>
                                            <td><?php echo $module["Email"] ?></td>
                                            <td><?php echo $module["Company_Name"] ?></td>
                                            <td>
                                                <a href="<?php echo base_url('client_inventory_report/view/'.$module['id']) ?>"><img src="<?php echo base_url() ?>assets/icons/view_report.png" title="View Report" alt="View Report" width="25" height="25"></a>
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