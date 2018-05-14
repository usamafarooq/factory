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
                            <h1>View Work Order</h1>
                            <small> </small>
                            <ol class="breadcrumb">
                                <li><a href="<?php echo base_url() ?>"><i class="pe-7s-home"></i> Home</a></li>

                                <li class="active">View Work Order</li>
                            </ol>
                        </div>
                    </div> <!-- /. Content Header (Page header) -->

                    <div class="row">
                        <div class="col-sm-12">
                            <div class="panel panel-bd">
                                <div class="panel-heading">
                                    <div class="panel-title">
                                        <h4>View Work Order</h4>
                                    </div>
                                </div>
                                <div class="panel-body">
                                    
                                    <div class="table-responsive">
                                        <table id="dataTableExample2" class="table table-bordered table-striped table-hover">
                                            <thead>
                                                <tr>
                                                    <th>Id</th>
                                                    <th>WO no</th>
                                                    <th>Job Description</th>
                                                    <th>Quantity</th>
                                                    <th>Start Date</th>
                                                    <th>End Date</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                    foreach ($orders as $o) {
                                                ?>
                                                <tr>
                                                    <td><?php echo $o['id'] ?></td>
                                                    <td><?php echo $o['WO_no'] ?></td>
                                                    <td><?php echo $o['Job_Description'] ?></td>
                                                    <td><?php echo $o['Quantity'] ?></td>
                                                    <td><?php echo $o['start_date'] ?></td>
                                                    <td><?php echo $o['end_date'] ?></td>
                                                    <td>
                                                        <a target="_blank" href="<?php echo base_url() ?>all_orders/view_plane/<?php echo $o["WO_no"] ?>"><img src="<?php echo base_url() ?>assets/icons/view_plan.png" title="View Plan" alt="View Plan" width="25" height="25"></a>
                                                        <?php 
                                                            if ($o['con'] == 0) {
                                                                echo '<a href="'.base_url('machine_flow/dispatch_start/'.$o['id'].'/'.$o['flow_id']).'"><img src="'.base_url().'assets/icons/start_process.png" title="Start" alt="Start" width="25" height="25"></a>';
                                                            }
                                                            else{
                                                                if ($o['submit'] == 0) {
                                                                    echo '<a href="'.base_url('machine_flow/dispatch_complete/'.$o['id'].'/'.$o['flow_id']).'"><img src="'.base_url().'assets/icons/complete.png" title="Complete" alt="Complete" width="25" height="25"></a>';
                                                                }
                                                                else{
                                                                    if ($o['d_id'] <= 0) {
                                                                        echo '<a href="'.base_url('dispatch/delivery_challan/'.$o['WO_no']).'">Delivery Challan</a>';
                                                                    }
                                                                    else{
                                                                        echo '<a href="'.base_url('dispatch/print_slip/'.$o['WO_no']).'">Print Slip</a>';
                                                                    }
                                                                    //echo '<img src="'.base_url().'assets/icons/complete_process.png" title="Completed" alt="Completed" width="25" height="25">';
                                                                }
                                                            }
                                                        ?>
                                                        <!-- <?php 
                                                            if ($o['con'] >= 1) {
                                                                if ($o['submit'] == 0) {
                                                        ?>
                                                        <a href="<?php echo base_url('machine_flow/dispatch_complete/'.$o['id'].'/'.$o['flow_id']) ?>"><button class="btn btn-info">Complete</button></a>
                                                        <?php 
                                                            }
                                                            else{
                                                                echo 'completed';
                                                            }
                                                            }
                                                        ?> -->
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
                    <div style="height: 450px;"></div>
                </div> <!-- /.main content -->
            </div><!-- /#page-wrapper -->
        </div><!-- /#wrapper -->
        <!-- START CORE PLUGINS -->






