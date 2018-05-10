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
                <h1>Daily Dispatch Report</h1>
                <small> </small>
                <ol class="breadcrumb">
                    <li><a href="<?php echo base_url() ?>"><i class="pe-7s-home"></i> Home</a></li>

                    <li class="active">Daily Dispatch Report</li>
                </ol>
            </div>
        </div>
        <!-- /. Content Header (Page header) -->

        <div class="row">
            <div class="col-sm-12">
                <div class="panel panel-bd">
                    <div class="panel-heading">
                        <div class="panel-title">
                            <h4>Daily Dispatch Report</h4>
                        </div>
                    </div>
                    <div class="panel-body">

                        <div class="table-responsive">
                            <table id="dataTableExample2" class="table table-bordered table-striped table-hover">
                                <thead>
                                    <tr>
                                        <th>Date</th>
                                        <th>Item</th>
                                        <th>Company</th>
                                        <th>W.o.No</th>
                                        <th>Job Description</th>
                                        <th>MC No.</th>
                                        <th>DC No.</th>
                                        <th>P.O No.</th>
                                        <th>Code</th>
                                        <th>W.o.Qty</th>
                                        <th>Delivered Qty</th>
                                        <th>Shortage</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($orders as $o) {?>
                                    <tr>
                                        <td><?php echo date('d-M',strtotime($o['created_at'])) ?></td>
                                        <td><?php echo $o['Item_Code'] ?></td>
                                        <td><?php echo $o['Company_name'] ?></td>
                                        <td><?php echo $o['id'] ?></td>
                                        <td><?php echo $o['Description'] ?></td>
                                        <td></td>
                                        <td><?php echo $o['delivery_challan'] ?></td>
                                        <td><?php echo $o['PO_No'] ?></td>
                                        <td><?php echo $o['Item_Code'] ?></td>
                                        <td><?php echo $o['quantity'] ?></td>
                                        <td>
                                            <?php 
                                                $total = 0;
                                                $qty = explode('+', $o['qty']);
                                                $carton = explode('+', $o['carton']);
                                                for ($i=0; $i < sizeof($qty); $i++) { 
                                                    $total = $total + ($qty[$i] * $carton[$i]);
                                                }
                                                echo $total;
                                            ?>
                                        </td>
                                        <td><?php echo $o['quantity'] - $total ?></td>
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
    <!-- /.main content -->
</div>
<!-- /#page-wrapper -->
