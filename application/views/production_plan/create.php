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
                <h1>Add Production plan</h1>
                <small></small>
                <ol class="breadcrumb">
                    <li><a href="<?php echo base_url() ?>"><i class="pe-7s-home"></i> Home</a></li>
                    <li class="active">Add Production plan</li>
                </ol>
            </div>
        </div>
        <!-- /. Content Header (Page header) -->

        <form method="post" action="<?php echo base_url() ?>production_plan/insert" enctype="multipart/form-data">
            <?php 
                $p_sheet = ($order['quantity'] / $order['ups']) + ($order['quantity'] / $order['ups']) * $order['order_Margin'] / 100;
            ?>
            <div class="row">
                <div class="col-sm-12">
                    <div class="panel panel-bd ">
                        <div class="panel-heading">
                            <div class="panel-title">
                                <h4>Add Production plan</h4>
                            </div>
                        </div>
                        <div class="panel-body">

                            <div class="form-group row">

                                <div class="form-group col-lg-6">
                                    <label for="example-text-input" class="col-sm-3 col-form-label">Date</label>
                                    <div class="col-sm-9">
                                        <input class="form-control" name="Date" type="date" value="<?php echo date('Y-m-d') ?>" id="example-text-input" readonly="" placeholder="">
                                    </div>

                                </div>
                                <div class="form-group col-lg-6">
                                    <label for="example-text-input" class="col-sm-3 col-form-label">WO#</label>
                                    <div class="col-sm-9">
                                        <!-- <select class="form-control" name="WO_no" >
                                            <option>Select WO#</option><?php foreach ($table_work_orders as $t) {?>
                                                <option value="<?php echo $t["id"] ?>"><?php echo $t["Description"] ?></option>
                                           <?php } ?></select> -->
                                        <input type="text" name="WO_no" class="form-control" value="<?php echo $order['id'] ?>" readonly>
                                    </div>

                                </div>

                            </div>
                            <div class="form-group row">

                                

                                <div class="form-group row">

                                    <div class="form-group col-lg-6">
                                        <label for="example-text-input" class="col-sm-3 col-form-label">MIS#</label>
                                        <div class="col-sm-9">
                                            <input class="form-control" name="MIS_no" type="text" value="" id="example-text-input" placeholder="">
                                        </div>

                                    </div>
                                    <div class="form-group col-lg-6">
                                        <label for="example-text-input" class="col-sm-3 col-form-label">Job Description</label>
                                        <div class="col-sm-9">
                                            <input class="form-control" name="Job_Description" type="text" value="<?php echo $order['Description'] ?>" readonly id="example-text-input" placeholder="">
                                        </div>

                                    </div>

                                </div>
                                

                                <div class="form-group row">

                                    <div class="form-group col-lg-6">
                                        <label for="example-text-input" class="col-sm-3 col-form-label">Board Name</label>
                                        <div class="col-sm-9">
                                            <input class="form-control" name="Board_Name" type="text" id="example-text-input" value="<?php echo $order['type'] ?>" readonly placeholder="">
                                        </div>

                                    </div>
                                     <div class="form-group col-lg-6">
                                        <label for="example-text-input" class="col-sm-3 col-form-label">Gsm</label>
                                        <div class="col-sm-9">
                                            <input class="form-control" name="Gsm" type="text" value="<?php echo $order['gsm'] ?>" readonly id="example-text-input" placeholder="">
                                        </div>

                                    </div>

                                </div>
                                <div class="form-group row">

                                   

                                </div>
                                <div class="form-group row">

                                    <div class="form-group col-lg-6">
                                        <label for="example-text-input" class="col-sm-3 col-form-label">Board Size</label>
                                        <div class="col-sm-9">
                                            <input class="form-control" name="Board_Size" type="text" readonly id="example-text-input" value="<?php echo $order['size'] ?>" placeholder="">
                                        </div>

                                    </div>
                                    <div class="form-group col-lg-6">
                                        <label for="example-text-input" class="col-sm-3 col-form-label">Quantity</label>
                                        <div class="col-sm-9">
                                            <?php 
                                                $ups = $order['conversion']; 
                                                $ups = explode('/', $ups);
                                                $ups = $ups[sizeof($ups) - 1];
                                            ?>
                                            <input class="form-control" name="Quantity" type="text" value="<?php echo $qty =  round($p_sheet / $ups) ?>" id="example-text-input" placeholder="" readonly>
                                        </div>

                                    </div>

                                </div>
                                <div class="form-group row">

                                    <div class="form-group col-lg-6">
                                        <label for="example-text-input" class="col-sm-3 col-form-label">Packet sheets</label>
                                        <div class="col-sm-9">
                                            <?php 
                                                $divid = 100;
                                                if ($sheet['divid']) {
                                                    $divid = $sheet['divid'];
                                                }
                                                $pac_sheet = $qty / $divid;
                                                $sp = str_split($pac_sheet);
                                                $key = array_search('.',$sp);
                                                if ($key) {
                                                    $pac_sheet = $sp[0] + 1;
                                                }
                                            ?>
                                            <input class="form-control" name="pack_sheet" type="text" value="<?php //echo round($qty / $sheet['divid']);
                                             echo $pac_sheet ?>" id="example-text-input" placeholder="" readonly>
                                        </div>

                                    </div>

                                </div>
                                <div class="form-group row">

                                    <div class="form-group col-lg-6">
                                        <label for="example-text-input" class="col-sm-3 col-form-label">Conversion</label>
                                        <div class="col-sm-9">
                                            <input class="form-control" name="Conversion" type="text" value="<?php echo $order['conversion'] ?>" id="example-text-input" placeholder="" readonly>
                                        </div>

                                    </div>
                                    <div class="form-group col-lg-6">
                                        <label for="example-text-input" class="col-sm-3 col-form-label">Planned sheet Size</label>
                                        <div class="col-sm-9">
                                            <input class="form-control" name="Planned_sheet_Size" type="text" id="example-text-input" value="" placeholder="">
                                        </div>

                                    </div>

                                </div>
                                

                                <div class="form-group row">

                                    <div class="form-group col-lg-6">
                                        <label for="example-text-input" class="col-sm-3 col-form-label">Balanced Offcut Size</label>
                                        <div class="col-sm-9">
                                            <input class="form-control" name="Balanced_Offcut_Size" type="text" value="" id="example-text-input" placeholder="">
                                        </div>

                                    </div>
                                    <div class="form-group col-lg-6">
                                        <label for="example-text-input" class="col-sm-3 col-form-label">Offcut Quantity</label>
                                        <div class="col-sm-9">
                                            <input class="form-control" name="Offcut_Quantity" type="text" value="" id="example-text-input" placeholder="">
                                        </div>

                                    </div>
                                </div>

                                

                                <div class="form-group row">

                                    <div class="form-group col-lg-6">
                                        <label for="example-text-input" class="col-sm-3 col-form-label">PO Qty</label>
                                        <div class="col-sm-9">
                                            <input class="form-control" name="PO_Qty" type="number" value="<?php echo $order['quantity'] ?>" readonly id="example-text-input" placeholder="">
                                        </div>

                                    </div>
                                     <div class="form-group col-lg-6">
                                        <label for="example-text-input" class="col-sm-3 col-form-label">Planned qty sheets</label>
                                        <div class="col-sm-9">
                                            
                                            <input class="form-control" name="Planned_qty_sheets" type="number" value="<?php echo $p_sheet ?>" id="example-text-input" placeholder="">
                                        </div>

                                    </div>

                                </div>
                                <div class="form-group row">

                                   
                                </div>

                                <div class="form-group row">

                                    <div class="form-group col-lg-6">
                                        <label for="example-text-input" class="col-sm-3 col-form-label">Ups</label>
                                        <div class="col-sm-9">
                                            <input class="form-control" name="Ups" type="text" readonly id="example-text-input" value="<?php echo $order['ups'] ?>" placeholder="">
                                        </div>

                                    </div>
                                    <div class="form-group col-lg-6">
                                        <label for="example-text-input" class="col-sm-3 col-form-label">Planned qty</label>
                                        <div class="col-sm-9">
                                            <input class="form-control" name="Planned_qty" type="number" value="<?php echo round($p_sheet * $order['ups']) ?>" id="example-text-input" placeholder="" readonly>
                                        </div>

                                    </div>

                                </div>


                                
                                

                                <div class="form-group row">

                                    <div class="col-sm-12">
                                        <button type="submit" class="btn btn-primary pull-right">Add</button>
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
<!-- /.main content -->
<script type="text/javascript">
    $('[name="Planned_qty_sheets"]').keyup(function() {
        var value = $(this).val();
        var ups = '<?php echo $order['ups'] ?>';
        var qty = value / ups;
        qty = Math.round(qty);
        var p_qty = value * ups;
        p_qty = Math.round(p_qty);
        $('[name="Quantity"]').val(qty)
        $('[name="Planned_qty"]').val(p_qty)
    })
</script>