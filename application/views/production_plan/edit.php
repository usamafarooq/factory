
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
                <h1>Edit Production plan</h1>
                <small></small>
                <ol class="breadcrumb">
                    <li><a href="<?php echo base_url() ?>"><i class="pe-7s-home"></i> Home</a></li>
                    <li class="active">Edit Production plan</li>
                </ol>
            </div>
        </div>
        <!-- /. Content Header (Page header) -->

        <form method="post" action="<?php echo base_url() ?>production_plan/update" enctype="multipart/form-data">
            <input type="hidden" name="id" value="<?php echo $production_plan["id"] ?>">
            <div class="row">
                <div class="col-sm-12">
                    <div class="panel panel-bd ">
                        <div class="panel-heading">
                            <div class="panel-title">
                                <h4>Edit Production plan</h4>
                            </div>
                        </div>
                        <div class="panel-body">

                            <div class="form-group row">

                                <div class="form-group col-lg-6">
                                <label for="example-text-input" class="col-sm-3 col-form-label">Date</label>
                                        <div class="col-sm-9">

                                        <input class="form-control" name="Date" type="date" value="<?php echo $production_plan["Date"] ?>" readonly="" id="example-text-input" placeholder="" ></div>

                                    </div>
                                     <div class="form-group col-lg-6">
                                <label for="example-text-input" class="col-sm-3 col-form-label">WO#</label>
                                        <div class="col-sm-9">
                                            <!-- <select class="form-control" name="WO_no" >
                                                <option>Select WO#</option><?php foreach ($table_work_orders as $t) {?>
                                                    <option value="<?php echo $t["id"] ?>" <?php if($t["id"] == $production_plan["WO_no"]) echo "selected" ?>><?php echo $t["Description"] ?></option>
                                               <?php } ?></select> -->
                                               <input type="text" name="WO_no" readonly="" class="form-control" value="<?php echo $production_plan["WO_no"] ?>">
                                        </div>

                                    </div>
                                </div>

                                    <div class="form-group row">

                               

                                    
                                <div class="form-group col-lg-6">
                                <label for="example-text-input" class="col-sm-3 col-form-label">MIS#</label>
                                        <div class="col-sm-9">

                                        <input class="form-control" name="MIS_no" type="text" value="<?php echo $production_plan["MIS_no"] ?>" id="example-text-input" placeholder="" ></div>

                                    </div>
                                    <div class="form-group row">

                                <div class="form-group col-lg-6">
                                <label for="example-text-input" class="col-sm-3 col-form-label">Job Description</label>
                                        <div class="col-sm-9">

                                        <input class="form-control" name="Job_Description" type="text" value="<?php echo $production_plan["Job_Description"] ?>" readonly="" id="example-text-input" placeholder="" ></div>

</div>
                                    </div>
                                </div>

                                    

                                    <div class="form-group row">

                                <div class="form-group col-lg-6">
                                <label for="example-text-input" class="col-sm-3 col-form-label">Board Name</label>
                                        <div class="col-sm-9">

                                        <input class="form-control" name="Board_Name" type="text" value="<?php echo $production_plan["Board_Name"] ?>" readonly="" id="example-text-input" placeholder="" ></div>

                                    </div>
                                     <div class="form-group col-lg-6">
                                <label for="example-text-input" class="col-sm-3 col-form-label">Gsm</label>
                                        <div class="col-sm-9">

                                        <input class="form-control" name="Gsm" type="text" value="<?php echo $production_plan["Gsm"] ?>" id="example-text-input" placeholder="" ></div>

                                    </div>
                                </div>

                                  

                                    <div class="form-group row">

                                <div class="form-group col-lg-6">
                                <label for="example-text-input" class="col-sm-3 col-form-label">Board Size</label>
                                        <div class="col-sm-9">

                                        <input class="form-control" name="Board_Size" type="text" value="<?php echo $production_plan["Board_Size"] ?>" readonly="" id="example-text-input" placeholder="" ></div>

                                    </div>
                                    <div class="form-group col-lg-6">
                                <label for="example-text-input" class="col-sm-3 col-form-label">Quantity</label>
                                        <div class="col-sm-9">

                                        <input class="form-control" name="Quantity" type="text" value="<?php echo $production_plan["Quantity"] ?>" id="example-text-input" placeholder="" readonly></div>

                                    </div>
                                </div>

                                <div class="form-group row">

                                    <div class="form-group col-lg-6">
                                        <label for="example-text-input" class="col-sm-3 col-form-label">Packet sheets</label>
                                        <div class="col-sm-9">
                                            <input class="form-control" name="pack_sheet" type="text" value="<?php echo $production_plan["pack_sheet"] ?>" id="example-text-input" placeholder="" readonly>
                                        </div>

                                    </div>

                                </div>    

                                    <div class="form-group row">

                                <div class="form-group col-lg-6">
                                <label for="example-text-input" class="col-sm-3 col-form-label">Conversion</label>
                                        <div class="col-sm-9">

                                        <input class="form-control" name="Conversion" type="text" value="<?php echo $production_plan["Conversion"] ?>" id="example-text-input" placeholder="" ></div>

                                    </div>
                                    <div class="form-group col-lg-6">
                                <label for="example-text-input" class="col-sm-3 col-form-label">Planned sheet Size</label>
                                        <div class="col-sm-9">

                                        <input class="form-control" name="Planned_sheet_Size" readonly="" type="text" value="<?php echo $production_plan["Planned_sheet_Size"] ?>" id="example-text-input" placeholder="" ></div>

</div>
                                </div>

                                    

                                    <div class="form-group row">

                                <div class="form-group col-lg-6">
                                <label for="example-text-input" class="col-sm-3 col-form-label">Balanced Offcut Size</label>
                                        <div class="col-sm-9">

                                        <input class="form-control" name="Balanced_Offcut_Size" type="text" value="<?php echo $production_plan["Balanced_Offcut_Size"] ?>" id="example-text-input" placeholder="" ></div>

</div>
 <div class="form-group col-lg-6">
                                <label for="example-text-input" class="col-sm-3 col-form-label">Offcut Quantity</label>
                                        <div class="col-sm-9">

                                        <input class="form-control" name="Offcut_Quantity" type="text" value="<?php echo $production_plan["Offcut_Quantity"] ?>" id="example-text-input" placeholder="" ></div>

                                    </div>

                                    </div>

                                    <div class="form-group row">

                                <div class="form-group col-lg-6">
                                <label for="example-text-input" class="col-sm-3 col-form-label">PO Qty</label>
                                        <div class="col-sm-9">

                                        <input class="form-control" name="PO_Qty" type="number" value="<?php echo $production_plan["PO_Qty"] ?>" readonly="" id="example-text-input" placeholder="" ></div>

                                    </div>
                                    <div class="form-group col-lg-6">
                                <label for="example-text-input" class="col-sm-3 col-form-label">Planned qty sheets</label>
                                        <div class="col-sm-9">

                                        <input class="form-control" name="Planned_qty_sheets" type="number" value="<?php echo $production_plan["Planned_qty_sheets"] ?>" id="example-text-input" placeholder="" ></div>

</div>
                                </div>

                                    

                                    <div class="form-group row">

                                <div class="form-group col-lg-6">
                                <label for="example-text-input" class="col-sm-3 col-form-label">Ups</label>
                                        <div class="col-sm-9">

                                        <input class="form-control" name="Ups" type="text" value="<?php echo $production_plan["Ups"] ?>" readonly="" id="example-text-input" placeholder="" ></div>

                                    </div>
                                    <div class="form-group col-lg-6">
                                <label for="example-text-input" class="col-sm-3 col-form-label">Planned qty</label>
                                        <div class="col-sm-9">

                                        <input class="form-control" name="Planned_qty" type="number" value="<?php echo $production_plan["Planned_qty"] ?>" id="example-text-input" placeholder="" ></div>

</div>
                                </div>

                                    

                                    <div class="form-group row">

                                <div class="col-sm-12">
                                    <button type="submit" class="btn btn-primary pull-right">Update</button>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>


<!-- /#wrapper -->
<!-- START CORE PLUGINS -->
