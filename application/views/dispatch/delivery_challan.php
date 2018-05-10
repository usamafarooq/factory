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
            <form method="post" action="">
            <div class="col-sm-12">
                <div class="panel panel-bd print-div_process_flow table_one">
                    <div class="panel-heading">
                        <div class="panel-title">
                            <h4 class="product-totle">Delivery Challan</h4><br>
                        </div>
                    </div>
                    <div class="panel-body">
                        <?php 
                            $qty = explode('+', $challan['qty_per_mc']);
                            $carton = explode('+', $challan['total_carton']);
                            $total = 0;
                            for ($i=0; $i < sizeof($qty); $i++) { 
                                $total = $total + ($qty[$i] * $carton[$i]);
                            }
                        ?>
                        <span class="pull-right">Date <u><?php echo date('d-M-y', strtotime($challan['date'])) ?></u></span><br><br>
                        <div class="row">
                            <div class="col-md-7">
                                <span>MESSERS</span>
                                <u><strong><?php echo $challan['client_Name'] ?></strong></u><br>
                                <span style="opacity: 0">MESSERS</span>
                                <u><strong><?php echo $challan['Address'] ?></strong></u><br>
                            </div>
                            <div class="col-md-5" style="text-align: right;">
                                <span>DELIVERY CHALLAN NO.</span>
                                <input type="text" name="delivery_challan"><br>
                                <span>YOUR ORDER NO.</span>
                                <u><strong><?php echo $challan['id'] ?></strong></u><br>
                                <span>Line NO.</span>
                                <input type="text" name="line_no"><br>
                            </div>
                        </div>
                        <div class="table-responsive">
                            <table id="" class="table table-bordered table-striped table-hover" style="width: 100%;">
                                <thead>
                                    <tr>
                                        <th><center>S.NO<center></th>
                                        <th><center>DESCRIPTION<center></th>
                                        <th><center>QUANTITY<center></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td><?php echo $challan['Description'] ?></td>
                                        <td><center><?php echo $total ?><center></td>

                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td>Code &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<strong><?php echo $challan['Item_code'] ?></strong></td>
                                        <td></td>

                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td>Batch No &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<strong><?php echo $challan['id'] ?> / <?php echo date('y',strtotime($challan['created_at'])) ?></td>
                                        <td></td>

                                    </tr>

                                    <?php 
                                        for ($i=0; $i < sizeof($qty); $i++) { 
                                    ?>
                                    <tr>
                                        <td></td>
                                        <td><?php echo $carton[$i] ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Cartons Of &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $qty[$i] ?></td>
                                        <td></td>

                                    </tr>       
                                    <?php
                                        }
                                    ?>



                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th></th>
                                        <th><center>Total</center></th>
                                        <th><center><?php echo $total ?><center></th>
                                    </tr>
                                </tfoot>
                            </table>

                        </div>
                    </div>
                </div>
                
            </div>
            <div class="form-group row">
                <button class="btn btn-info pull-right">Submit</button>
            </div>
            </form>
        </div>
    </div>
</div>