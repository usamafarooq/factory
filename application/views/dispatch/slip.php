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
                <h1>View Slip</h1>
                <small> </small>
                <ol class="breadcrumb">
                    <li><a href="<?php echo base_url() ?>"><i class="pe-7s-home"></i> Home</a></li>

                    <li class="active">View Slip</li>
                </ol>
            </div>
        </div>
        <!-- /. Content Header (Page header) -->

        <div class="row">
            <div class="col-sm-12">
                <div class="panel panel-bd">
                    <div class="panel-heading">
                        <div class="panel-title">
                            <h4>View Slip</h4>
                        </div>
                    </div>
                    <div class="panel-body">
                        <table border="1">
                            <tbody>
                                <?php 
                                    $qty = explode('+', $slip['qty_per_mc']);
                                    $carton = explode('+', $slip['total_carton']);
                                    for ($i=0; $i < sizeof($qty); $i++) {
                                ?>
                                <tr>
                                    <td><?php echo $slip['Description'] ?></td>
                                    <td><?php echo $slip['Item_code'] ?></td>
                                    <td><?php echo $qty[$i] ?></td>
                                    <td><?php echo $slip['PO_No'] ?></td>
                                    <td><?php echo $slip['id'] ?> / <?php echo date('Y', strtotime($slip['created_at'])) ?></td>
                                    <td><?php echo date('d-M-Y', strtotime($slip['mfg_date'])) ?></td>
                                    <td><?php echo $slip['delivery_challan'] ?></td>
                                </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div style="height: 450px;"></div>
    </div>
    <!-- /.main content -->
</div>
<!-- /#page-wrapper -->
</div>
<!-- /#wrapper -->
<!-- START CORE PLUGINS -->