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
                            <h4>Date RANGE</h4>
                        </div>
                    </div>
                    <div class="panel-body">
                        <form method="post" action="">
                            <div class="form-group row">
                                <div class="col-md-6">
                                    <label>Start Date</label>
                                    <input type="date" name="start" class="form-control" required="" value="<?php echo date('Y-m-d', strtotime($start)) ?>">
                                </div>
                                <div class="col-md-6">
                                    <label>End Date</label>
                                    <input type="date" name="end" class="form-control" required="" value="<?php echo date('Y-m-d', strtotime($end)) ?>">
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
                <div class="panel panel-bd print-div_process_flow table_one">
                    <div class="panel-heading">
                        <div class="panel-title">
                            <h4 class="product-totle">Order Report</h4><br>
                        </div>
                    </div>
                    <div class="panel-body">
                        <div class="table-responsive">
                            <table id="" class="table table-bordered table-striped table-hover" style="width: 100%;">
                                <thead>
                                    <tr>
                                        <th>S.NO</th>
                                        <th>Client</th>
                                        <th>Deliver Qty</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $con = 1; $grand = 0; foreach ($orders as $o) {?>
                                    <tr>
                                        <td><?php echo $con ?></td>
                                        <td><?php echo $o['name'] ?></td>
                                        <?php 
                                            $total = 0;
                                            $total_qty = explode(',', $o['qty']);
                                            $total_carton = explode(',', $o['carton']);
                                            for ($a=0; $a < sizeof($total_qty); $a++) { 
                                                $qty = explode('+', $total_qty[$a]);
                                                $carton = explode('+', $total_carton[$a]);
                                                for ($i=0; $i < sizeof($qty); $i++) { 
                                                    $total = $total + ($qty[$i] * $carton[$i]);
                                                }
                                            }
                                            $grand = $grand + $total;
                                        ?>
                                        <td><?php echo $total ?></td>
                                        <td><a href="<?php echo base_url() ?>client_order_report/view_orders/<?php echo $o["id"] ?>"><img src="<?php echo base_url() ?>assets/icons/view_plan.png" title="View Orders" alt="View Orders" width="25" height="25"></a></td>
                                    </tr>
                                    <?php $con++; } ?>
                                    
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th></th>
                                        <th>Grand Total</th>
                                        <th><?php echo $grand ?></th>
                                        <th></th>
                                    </tr>
                                </tfoot>
                            </table>

                        </div>
                    </div>
                </div>
                
            </div>
            
        </div>
    </div>
</div>