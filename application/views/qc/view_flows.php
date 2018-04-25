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
                <h1>View Work Orders</h1>
                <small> </small>
                <ol class="breadcrumb">
                    <li><a href="<?php echo base_url() ?>"><i class="pe-7s-home"></i> Home</a></li>

                    <li class="active">View Work Orders</li>
                </ol>
            </div>
        </div>
        <!-- /. Content Header (Page header) -->

        <div class="row">
            <div class="col-sm-12">
                <div class="panel panel-bd">
                    <div class="panel-heading">
                        <div class="panel-title">
                            <h4>View Work Orders</h4>

                        </div>
                    </div>
                    <div class="panel-body">

                        <div class="table-responsive">
                            <table id="dataTableExample2" class="table table-bordered table-striped table-hover">
                                <thead>
                                    <tr>
                                        <th>Wo No</th>
                                        <th>Job Description</th>
                                        <th>Flow</th>
                                        <th>Parent Flow</th>
                                        <th>Start Date</th>
                                        <th>End Date</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
							    		foreach ($flows as $f) {
							    	?>
                                        <tr>
                                            <td>
                                                <?php echo $f["WO_no"] ?>
                                            </td>
                                            <td>
                                                <?php echo $f["Job_Description"] ?>
                                            </td>
                                            <td>
                                                <?php echo $f["Name"] ?>
                                            </td>
                                            <td>
                                                <?php echo $f["parent"] ?>
                                            </td>
                                            <td>
                                                <?php echo $f["start_date"] ?>
                                            </td>
                                            <td>
                                                <?php echo $f["end_date"] ?>
                                            </td>
                                            <td>
                                                <?php  
                                                    if ($f['submit'] > 0) {
                                                        echo 'Completed';
                                                    }
                                                    elseif ($f['start'] > 0) {
                                                        echo 'In Progress';
                                                    }
                                                    else{
                                                        echo 'Panding';
                                                    }
                                                ?>
                                            </td>
                                            <td>
                                                <?php 
                                                    if ($f['clearance'] == 0) {
                                                ?>
                                                <a href="<?php echo base_url() ?>qc/line_clearance/<?php echo $f["id"] ?>/<?php echo $f["WO_no"] ?>"><img src="<?php echo base_url() ?>assets/icons/line_clearance_form.png" title="Line Clearance" alt="Line Clearance" width="25" height="25"></a>
                                                <?php 
                                                    }
                                                    else{
                                                ?>
                                                <a href="<?php echo base_url() ?>qc/view_line_clearance/<?php echo $f["id"] ?>/<?php echo $f["WO_no"] ?>"><img src="<?php echo base_url() ?>assets/record1.png" title="View Line Clearance" alt="Line Clearance" width="25" height="25"></a>
                                                <?php 
                                                    }
                                                ?>
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