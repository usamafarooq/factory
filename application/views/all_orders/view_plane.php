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
                <h1>View Orders Detail</h1>
                <small></small>
                <ol class="breadcrumb">
                    <li><a href="index.html"><i class="pe-7s-home"></i> Home</a></li>
                    <li class="active">View Orders Detail</li>
                </ol>
            </div>
        </div>
        <!-- /. Content Header (Page header) -->
        <!-- work order -->
        <div class="row">
            <div class="col-sm-12">
                <div class="panel panel-bd ">
                    <div class="panel-heading">
                        <div class="panel-title">
                            <h4>Work Orders</h4>
                        </div>
                    </div>
                    <div class="panel-body">
                    </div>
                    <div class="form-group row">
                        <div class="form-group col-lg-6">
                            <label for="example-text-input" class="col-sm-3 col-form-label">Client</label>
                            <div class="col-sm-9">
                                <select class="form-control" name="Client" disabled="">
                                    <option>Select Client</option>
                                    <?php 
                                        foreach ($clients as $c) {
                                            $checked = '';
                                            if ($work_orders["Client"] == $c['id']) {
                                                $checked = 'selected';
                                            }
                                            echo '<option value="'.$c['id'].'" '.$checked.'>'.$c['client_Name'].'</option>';
                                        }
                                    ?>
                                </select>
                            </div>

                        </div>
                        <div class="form-group col-lg-6">
                            <label for="example-text-input" class="col-sm-3 col-form-label">Item Code</label>
                            <div class="col-sm-9">
                                <select class="form-control" name="Item_Code" disabled="">
                                    <option>Select Item</option>
                                    <?php 
                                        foreach ($item as $i) {
                                            $checked = '';
                                            if ($work_orders["Item_Code"] == $i['id']) {
                                                $checked = 'selected';
                                            }
                                            echo '<option value="'.$i['id'].'" '.$checked.'>'.$i['Item_Code'].'</option>';
                                        }
                                    ?>
                                </select>
                            </div>

                        </div>
                    </div>

                    <div class="form-group row">

                        <div class="form-group col-lg-6">
                            <label for="example-text-input" class="col-sm-3 col-form-label">Quantity</label>
                            <div class="col-sm-9">
                                <input class="form-control" name="quantity" type="number" value="<?php echo $work_orders["quantity"] ?>" id="example-text-input" placeholder="" disabled="">
                            </div>

                        </div>
                        <div class="form-group col-lg-6">
                            <label for="example-text-input" class="col-sm-3 col-form-label">PO No</label>
                            <div class="col-sm-9">
                                <input class="form-control" name="PO_No" type="text" value="<?php echo $work_orders["PO_No"] ?>" id="example-text-input" placeholder="" disabled="">
                            </div>

                        </div>
                    </div>

                    <div class="form-group row">

                        <div class="form-group col-lg-6">
                            <label for="example-text-input" class="col-sm-3 col-form-label">PO Date</label>
                            <div class="col-sm-9">
                                <input class="form-control" name="PO_Date" type="date" value="<?php echo $work_orders["PO_Date"] ?>" id="example-text-input" placeholder="" disabled="">
                            </div>

                        </div>
                        <div class="form-group col-lg-6">
                            <label for="example-text-input" class="col-sm-3 col-form-label">Batch No</label>
                            <div class="col-sm-9">
                                <input class="form-control" name="Batch_No" type="text" value="<?php echo $work_orders["Batch_No"] ?>" id="example-text-input" placeholder="" disabled="">
                            </div>

                        </div>
                    </div>

                    <div class="form-group row">

                        <div class="form-group col-lg-6">
                            <label for="example-text-input" class="col-sm-3 col-form-label">Delivery Date</label>
                            <div class="col-sm-9">
                                <input class="form-control" name="Delivery_Date" type="date" value="<?php echo $work_orders["Delivery_Date"] ?>" id="example-text-input" placeholder="" disabled="">
                            </div>

                        </div>

                        <div class="form-group col-lg-6">
                            <label for="example-text-input" class="col-sm-3 col-form-label">Delivery Status</label>
                            <div class="col-sm-9">
                                <div class="radio radio-info radio-inline">
                                    <input type="radio" id="inlineRadio3" value="N" <?php if($work_orders["Delivery_Status"]=='N' ) echo 'checked' ?> name="Delivery_Status" checked="" disabled="">
                                    <label for="inlineRadio3"> N </label>
                                </div>
                                <div class="radio radio-info radio-inline">
                                    <input type="radio" id="inlineRadio4" value="U" <?php if($work_orders["Delivery_Status"]=='U' ) echo 'checked' ?> name="Delivery_Status" disabled="">
                                    <label for="inlineRadio4"> U </label>
                                </div>
                                <div class="radio radio-info radio-inline">
                                    <input type="radio" id="inlineRadio5" value="M.U" <?php if($work_orders["Delivery_Status"]=='M.U' ) echo 'checked' ?> name="Delivery_Status" disabled="">
                                    <label for="inlineRadio5"> M.U. </label>
                                </div>
                            </div>

                        </div>

                    </div>

                    <div class="form-group row">

                        <div class="form-group col-lg-6">
                            <label for="example-text-input" class="col-sm-3 col-form-label">Instruction Remarks</label>
                            <div class="col-sm-9">
                                <input class="form-control" name="Instruction_Remarks" type="textarea" value="<?php echo $work_orders["Instruction_Remarks"] ?>" id="example-text-input" placeholder="" disabled="">
                            </div>

                        </div>

                        <div class="form-group col-lg-6">
                            <label for="example-text-input" class="col-sm-3 col-form-label">Status</label>
                            <div class="col-sm-9">
                                <div class="radio radio-info radio-inline">
                                    <input type="radio" id="inlineRadio6" value="New" name="status" <?php if($work_orders["status"]=='New' ) echo 'checked' ?> disabled="">
                                    <label for="inlineRadio6"> New </label>
                                </div>
                                <div class="radio radio-info radio-inline">
                                    <input type="radio" id="inlineRadio7" value="Existing" name="status" <?php if($work_orders["status"]=='Existing' ) echo 'checked' ?> disabled="">
                                    <label for="inlineRadio7"> Existing </label>
                                </div>
                            </div>

                        </div>
                    </div>

                    

                </div>
            </div>
        </div>
        <!-- prodcution Plane -->
        <?php 
            if (isset($production_plan)) {
        ?>
        <div class="row">
            <div class="col-sm-12">
                <div class="panel panel-bd print-div ">
                    <div class="panel-heading">
                        <div class="panel-title">
                            <h4 class="product-totle">View Production Plan Form</h4><br>    
                            <small class="product-tital">DOC NO: PRD/FM/001-02A     REV# 00     Date:<?php echo date('d-m-Y',strtotime($production_plan["Date"])) ?></small>
                        </div>
                    </div>
                    <div class="panel-body">
                        <div class="row">
                            <form>
                                <div class="col-sm-12">
                                    <div class="panel-body ">
                                        <table class="minimalistBlack">
                                       
                                       
                                        <tbody>
                                        <tr>
                                            <td>Date : <u><?php echo date('d M Y',strtotime($production_plan["Date"])) ?></u></td>
                                            <td>W.O # : <u><?php echo $production_plan["WO_no"] ?></u></td>
                                            <td>MIS No : <u><?php echo $production_plan["MIS_no"] ?></u></td>
                                           
                                            
                                           
                                        </tr>
                                        <tr>
                                           
                                            <td colspan="3">Job Description : <u><?php echo $production_plan["Job_Description"] ?></u></td>
                                            
                                           
                                        </tr>
                                        <tr>
                                            <td>Board Name : <u><?php echo $production_plan["Board_Name"] ?></u></td>
                                            <td colspan="2">GSM : <u><?php echo $production_plan["Gsm"] ?></u></td>
                                        </tr>
                                        <tr>
                                            <td>Board Size : <u><?php echo $production_plan["Board_Size"] ?></u></td>
                                            <td colspan="2">Conversion : <u><?php echo $production_plan["Conversion"] ?></u></td>
                                            
                                        </tr> 
                                        <tr>
                                            <td>PO Qty : <u><?php echo $production_plan["PO_Qty"] ?></u></td>
                                            <td colspan="2">Planned Qty(sheets) : <u><?php echo $production_plan["Planned_qty_sheets"] ?></u></td>
                                            
                                        </tr>
                                        <tr>
                                            <td>Ups : <u><?php echo $production_plan["Ups"] ?></u></td>
                                            <td colspan="2">Planned Qty : <u><?php echo $production_plan["Planned_qty"] ?></u></td>
                                            
                                        </tr> 
                                        <?php 
                                            foreach ($plan_flows as $p) {
                                        ?>
                                        <tr>
                                            <td><?php echo $p['Name'] ?> Machine : <u><?php echo $p['machine_Name'] ?></u></td>
                                            <td colspan="2">Planned Date : <u><?php echo date("d M Y", strtotime($p['start_date'])) ?></u></td>
                                        </tr>
                                        
                                        <tr>
                                            <td colspan="3">Incharge <?php echo $p['Name'] ?> : ______________</td>
                                            
                                        </tr>
                                        <?php } ?>
                                         
                                        
                                        
                                        </table>
                                        <br>
                                         <div class="form-group row">
                                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                                <address>
                                                   <label for="example-text-input" class="col-sm-4">Production incharge</small> :</label>
                                                    <e class="aks_value">__________________</e>
                                                    <br>
                                                </address>
                                            </div>
                                           
                                            
                                        </div>
                                    <div>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php } ?>
        <!-- cutting -->
        <?php 
            if (isset($cutting_data)) {
        ?>
        <div class="row">
            <div class="col-sm-12">
                <div class="panel panel-bd print-div ">
                    <div class="panel-heading">
                        <div class="panel-title">
                          <h4 class="product-totle">BATCH MANUFACTURING REPORT <small>(Cutting)</small></h4><br>
                            <small class="product-tital">DOC NO: PRD/FM/001-02A     REV# 00     Date:<?php echo date('d-m-Y', strtotime($cutting_data['created_at'])) ?></small>
                        </div>
                    </div>
                    <div class="panel-body">
                        <div class="row">
                            <form>
                                <div class="col-sm-12">
                                    <div class="panel-body">
                                        <table class="minimalistBlack">
                                       
                                       
                                        <tbody>
                                        <tr>
                                            <td>Date :<u><?php echo date('d M Y', strtotime($cutting_data['created_at'])) ?></u></td>
                                            <td colspan="2">Shift : <div class="radio radio-inline">
                                                        <input type="radio" id="inlineradio1" value="option1">
                                                        <label for="inlineradio1"> G </label>
                                                    </div></e><e class="aks_value"><div style="margin-left: 11px;" class="radio radio-inline">
                                                        <input type="radio" id="inlineradio2" value="option2">
                                                        <label for="inlineradio2"> N </label>
                                                    </div></td>
                                            
                                           
                                        </tr>
                                        <tr>
                                            <td>W.O # : <u><?php echo $cutting_job['WO_no'] ?></u></td>
                                            <td colspan="2">Job Name : <u><?php echo $cutting_job['Job_Description'] ?></u></td>
                                            
                                           
                                        </tr>
                                        <tr>
                                            <td>Machine : <u><?php echo $cutting_job['machine_Name'] ?></u></td>
                                            <td>P.O. No. : <u><?php echo $cutting_job['PO_No'] ?></u></td>
                                            <td>Planned Qty : <u><?php echo $cutting_job['Planned_qty'] ?></u></td>
                                        </tr>
                                        <tr>
                                            <td>Operator : <u><?php echo $cutting_data['operator'] ?></u></td>
                                            <td colspan="2">Assistant : <u><?php echo $cutting_data['assistant'] ?></u></td>
                                            
                                        </tr>
                                        <tr>
                                            <td>Board Name : <u><?php echo $cutting_job['type'] ?></u></td>
                                            <td colspan="2">Gsm : <u><?php echo $cutting_job['gsm'] ?></u></td>
                                            
                                        </tr> 
                                        <tr>
                                            <td>Board size : <u><?php echo $cutting_job['size'] ?></u></td>
                                            <td >Quantity : <u><?php echo $cutting_data['quantity'] ?></u></td>
                                            <td >Conversion : <u><?php echo $cutting_data['conversion'] ?></u></td>
                                            
                                        </tr> 
                                        <tr>
                                            <td>Machine Cleaning : <div class="radio radio-inline">
                                                        <input type="radio" disabled="" id="inlineradio3" value="Yes" name="cleaning" <?php if($cutting_data['cleaning'] == 'Yes') echo 'checked' ?>>
                                                        <label for="inlineradio3"> Yes </label>
                                                    </div></e><e class="aks_value"><div style="margin-left: 11px;" class="radio radio-inline">
                                                        <input type="radio" disabled="" id="inlineradio4" value="No" name="cleaning" <?php if($cutting_data['cleaning'] == 'No') echo 'checked' ?>>
                                                        <label for="inlineradio4"> No </label>
                                                    </div></td>
                                            <td colspan="2">Size set : <div class="radio radio-inline">
                                                        <input type="radio" disabled="" id="inlineradio5" value="Yes" name="size" <?php if($cutting_data['size'] == 'Yes') echo 'checked' ?>>
                                                        <label for="inlineradio5"> Yes </label>
                                                    </div></e><e class="aks_value"><div style="margin-left: 11px;" class="radio radio-inline">
                                                        <input type="radio" disabled="" id="inlineradio6" value="No" name="size" <?php if($cutting_data['size'] == 'No') echo 'checked' ?>>
                                                        <label for="inlineradio6"> No </label>
                                                    </div></td>
                                            
                                        </tr> 
                                        <tr>
                                            <td>Start time : <u><?php echo $cutting_job['start_date'] ?></u></td>
                                            <td>End time : <u><?php echo $cutting_job['end_date'] ?></u></td>
                                            <td>Total Production : <u><?php echo $cutting_data['production'] ?></u></td>
                                            
                                        </tr>
                                        <tr>
                                            <td colspan="3">Remarks : <u><?php echo $cutting_data['remarks'] ?></u></td>
                                            
                                        </tr>
                                        
                                        </table>
                                        <br>
                                        <div class="form-group row">
                                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                                <address>
                                                   <label for="example-text-input" class="col-sm-4">Prepared By <small>(Operator)</small> :</label>
                                                    <e class="aks_value">__________________</e>
                                                    <br>
                                                </address>
                                            </div>
                                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                                <address>
                                                   <label for="example-text-input" class="col-sm-4">Examined By <small>(Incharge)</small> :</label>
                                                    <e class="aks_value">__________________</e>
                                                    <br>
                                                </address>
                                            </div>
                                            
                                        </div>
                                    </div>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php } ?>
        <!-- die cutting -->
        <?php 
            if (isset($die_cutting)) {
        ?>
        <div class="row">
            <div class="col-sm-12">
                <div class="panel panel-bd print-div ">
                    <div class="panel-heading">
                        <div class="panel-title">
                          <h4 class="product-totle">BATCH MANUFACTURING REPORT <small>(Die Cutting)</small></h4><br>
                            <small class="product-tital">DOC NO: PRD/FM/001-02A     REV# 00     Date:<?php echo date('d-m-Y', strtotime($die_cutting['created_at'])) ?></small>
                        </div>
                    </div>
                    <div class="panel-body">
                        <div class="row">
                            <form>
                                <div class="col-sm-12">
                                    <div class="panel-body">
                                        <table class="minimalistBlack">
                                       
                                       
                                        <tbody>
                                        <tr>
                                            <td>Date : <u><?php echo date('d M Y', strtotime($die_cutting['created_at'])) ?></u></td>
                                            <td colspan="2">Shift : <div class="radio radio-inline">
                                                        <input type="radio" disabled="" id="inlineradio1" value="option1">
                                                        <label for="inlineradio1"> G </label>
                                                    </div></e><e class="aks_value"><div style="margin-left: 11px;" class="radio radio-inline">
                                                        <input type="radio" disabled="" id="inlineradio2" value="option2">
                                                        <label for="inlineradio2"> N </label>
                                                    </div></td>
                                            
                                           
                                        </tr>
                                        <tr>
                                            <td>W.O # : <u><?php echo $die_cutting_job['WO_no'] ?></u></td>
                                            <td colspan="2">Job Name : <u><?php echo $die_cutting_job['Job_Description'] ?></u></td>
                                            
                                           
                                        </tr>
                                        <tr>
                                            <td>Machine : <u><?php echo $die_cutting_job['machine_Name'] ?></u></td>
                                            <td>P.O. No. : <u><?php echo $die_cutting_job['PO_No'] ?></u></td>
                                            <td>Planned Qty : <u><?php echo $die_cutting_job['Planned_qty'] ?></td>
                                        </tr>
                                        <tr>
                                            <td>Operator : <u><?php echo $die_cutting['operator'] ?></u></td>
                                            <td colspan="2">Assistant : <u><?php echo $die_cutting['assistant'] ?></u></td>
                                            
                                        </tr>
                                        <tr>
                                            <td colspan="3">Process : <div class="radio radio-inline">
                                                        <input type="radio" disabled=""  id="inlineradio3" name="process" value="Cutting" <?php if($die_cutting['process'] == 'Cutting') echo 'checked' ?>>
                                                        <label for="inlineradio3"> Cutting </label>
                                                    </div></e><e class="aks_value"><div style="margin-left: 11px;" class="radio radio-inline">
                                                        <input type="radio" disabled="" id="inlineradio4" name="process" value="Embossing" <?php if($die_cutting['process'] == 'Embossing') echo 'checked' ?>>
                                                        <label for="inlineradio4"> Embossing </label>
                                                    </div></td>
                                           
                                            
                                        </tr> 
                                        <tr>
                                            <td>Job Counter <small>Opening</small> : <u><?php echo $die_cutting['opening'] ?></u></td>
                                            <td>Job Counter <small>Closing</small> : <u><?php echo $die_cutting['closing'] ?></u></td>
                                            <td>Job Counter <small>Waste</small> : <u><?php echo $die_cutting['waste'] ?></u></td>
                                           
                                            
                                        </tr> 
                                        <tr>
                                            <td>Make Ready : <div class="radio radio-inline">
                                                        <input type="radio" disabled="" id="inlineradio5" value="Yes" name="ready" <?php if($die_cutting_complete['ready'] == 'Yes') echo 'checked' ?>>
                                                        <label for="inlineradio5"> Yes </label>
                                                    </div></e><e class="aks_value"><div style="margin-left: 11px;" class="radio radio-inline">
                                                        <input type="radio" disabled="" id="inlineradio6" value="No" name="ready" <?php if($die_cutting_complete['ready'] == 'No') echo 'checked' ?>>
                                                        <label for="inlineradio6"> No </label>
                                                    </div></td>
                                            <td colspan="2">Job Completed : <div class="radio radio-inline">
                                                        <input type="radio" disabled="" id="inlineradio7" value="Yes" name="completed" <?php if($die_cutting_complete['completed'] == 'Yes') echo 'checked' ?>>
                                                        <label for="inlineradio7"> Yes </label>
                                                    </div></e><e class="aks_value"><div style="margin-left: 11px;" class="radio radio-inline">
                                                        <input type="radio" disabled="" id="inlineradio8" value="No" name="completed" <?php if($die_cutting_complete['completed'] == 'No') echo 'checked' ?>>
                                                        <label for="inlineradio8"> No </label>
                                                    </div></td>
                                            
                                            
                                        </tr> 
                                        <tr>
                                            <td>Feeder Set : <div class="radio radio-inline">
                                                        <input type="radio" disabled="" id="inlineradio9" value="Yes" name="feeder" <?php if($die_cutting_complete['feeder'] == 'Yes') echo 'checked' ?>>
                                                        <label for="inlineradio9"> Yes </label>
                                                    </div></e><e class="aks_value"><div style="margin-left: 11px;" class="radio radio-inline">
                                                        <input type="radio" disabled="" id="inlineradio10" value="No" name="feeder" <?php if($die_cutting_complete['feeder'] == 'No') echo 'checked' ?>>
                                                        <label for="inlineradio10"> No </label>
                                                    </div></td>
                                            <td colspan="2">Die set : <div class="radio radio-inline">
                                                        <input type="radio" disabled="" id="inlineradio11" value="Yes" name="die" <?php if($die_cutting_complete['die'] == 'Yes') echo 'checked' ?>>
                                                        <label for="inlineradio11"> Yes </label>
                                                    </div></e><e class="aks_value"><div style="margin-left: 11px;" class="radio radio-inline">
                                                        <input type="radio" disabled="" id="inlineradio12" value="No" name="die" <?php if($die_cutting_complete['die'] == 'No') echo 'checked' ?>>
                                                        <label for="inlineradio12"> No </label>
                                                    </div></td>
                                            
                                        </tr> 
                                        <tr>
                                            <td>Delivery set : <div class="radio radio-inline">
                                                        <input type="radio" disabled="" id="inlineradio13" value="Yes" name="delivery" <?php if($die_cutting_complete['delivery'] == 'Yes') echo 'checked' ?>>
                                                        <label for="inlineradio13"> Yes </label>
                                                    </div></e><e class="aks_value"><div style="margin-left: 11px;" class="radio radio-inline">
                                                        <input type="radio" disabled="" id="inlineradio14" value="No" name="delivery" <?php if($die_cutting_complete['delivery'] == 'No') echo 'checked' ?>>
                                                        <label for="inlineradio14"> No </label>
                                                    </div></td>
                                            <td colspan="2">Plate set : <div class="radio radio-inline">
                                                        <input type="radio" disabled="" id="inlineradio15" value="Yes" name="plate" <?php if($die_cutting_complete['plate'] == 'Yes') echo 'checked' ?>>
                                                        <label for="inlineradio15"> Yes </label>
                                                    </div></e><e class="aks_value"><div style="margin-left: 11px;" class="radio radio-inline">
                                                        <input type="radio" disabled="" id="inlineradio6" value="No" name="plate" <?php if($die_cutting_complete['plate'] == 'No') echo 'checked' ?>>
                                                        <label for="inlineradio16"> No </label>
                                                    </div></td>
                                            
                                        </tr> 
                                        
                                        <tr>
                                            <td colspan="3">Remarks : ______________________________________________________</td>
                                            
                                        </tr>
                                        
                                        </table>
                                        <br>
                                        <table class="table table-bordered table-hover" cellpadding="10">
                                            <thead>
                                                <tr>
                                                    <th rowspan="2"><center>Code</center></th>
                                                    <th colspan="3"><center>Time</center></th>
                                                    <th rowspan="2"><center>Counter</center></th>
                                                    <th rowspan="2"><center>Remarks</center></th>
                                                    
                                                    
                                                </tr>
                                                <tr>
                                                    <th><center>From</center></th>
                                                    <th><center>To</center></th>
                                                    <th><center>Hours</center></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php 
                                                    foreach ($die_cutting_hourse as $d) {
                                                ?>
                                                <tr>
                                                    <th><?php echo $d['code'] ?></th>
                                                    <td><?php echo $d['froms'] ?></td>
                                                    <td><?php echo $d['tos'] ?></td>
                                                    <td><?php echo $d['hours'] ?></td>
                                                    <td><?php echo $d['counter'] ?></td>
                                                    <td><?php echo $d['remarks'] ?></td>
                                                </tr>
                                                <?php } ?>
                                            </tbody>
                                        </table>
                                        <br>
                                        <div class="form-group row">
                                            <table class="minimalistBlack">
                                                <tbody>
                                                    <tr>
                                            <td colspan="">Prepared By <small>(Operator) : ___________</td>
                                            <td colspan="">Prepared By <small>(Incharge) : ___________</td>
                                            <td colspan="">Prepared By <small>(Manager) : ___________</td>
                                            
                                        </tr> <tr style="visibility: hidden;">
                                            <td colspan="">Prepared By <small>(Operator) : ___________</td>
                                            <td colspan="">Prepared By <small>(Incharge) : ___________</td>
                                            <td colspan="">Prepared By <small>(Manager) : ___________</td>
                                            
                                        </tr><tr style="visibility: hidden;">
                                            <td colspan="">Prepared By <small>(Operator) : ___________</td>
                                            <td colspan="">Prepared By <small>(Incharge) : ___________</td>
                                            <td colspan="">Prepared By <small>(Manager) : ___________</td>
                                            
                                        </tr><tr style="visibility: hidden;">
                                            <td colspan="">Prepared By <small>(Operator) : ___________</td>
                                            <td colspan="">Prepared By <small>(Incharge) : ___________</td>
                                            <td colspan="">Prepared By <small>(Manager) : ___________</td>
                                            
                                        </tr><tr style="visibility: hidden;">
                                            <td colspan="">Prepared By <small>(Operator) : ___________</td>
                                            <td colspan="">Prepared By <small>(Incharge) : ___________</td>
                                            <td colspan="">Prepared By <small>(Manager) : ___________</td>
                                            
                                        </tr><tr style="visibility: hidden;">
                                            <td colspan="">Prepared By <small>(Operator) : ___________</td>
                                            <td colspan="">Prepared By <small>(Incharge) : ___________</td>
                                            <td colspan="">Prepared By <small>(Manager) : ___________</td>
                                            
                                        </tr><tr style="visibility: hidden;">
                                            <td colspan="">Prepared By <small>(Operator) : ___________</td>
                                            <td colspan="">Prepared By <small>(Incharge) : ___________</td>
                                            <td colspan="">Prepared By <small>(Manager) : ___________</td>
                                            
                                        </tr>
                                                </tbody>
                                        
                                            </table>
                                            
                                        </div>
                                    </div>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php } ?>
        <!-- leaflet cutting -->
        <?php 
            if (isset($leaflet_cutting)) {
        ?>
        <div class="row">
            <div class="col-sm-12">
                <div class="panel panel-bd print-div ">
                    <div class="panel-heading">
                        <div class="panel-title">
                            <h4 class="product-totle">View label & leaflet cutting Form</h4><br>
                             <small class="product-tital">DOC NO: PRD/FM/001-02A     REV# 00     Date:<?php echo date('d-m-Y', strtotime($leaflet_cutting['created_at'])) ?></small>
                        </div>
                    </div>
                    <div class="panel-body">
                        <div class="row">
                            <form>
                                <div class="col-sm-12">
                                    <div class="panel-body">
                                        <table class="minimalistBlack">
                                       
                                       
                                        <tbody>
                                        <tr>
                                            <td>Date : <u><?php echo date('d M Y', strtotime($leaflet_cutting['created_at'])) ?></u></td>
                                            <td colspan="2">Shift : <div class="radio radio-inline">
                                                        <input type="radio" disabled="" id="inlineradio1" value="G" name="shift" <?php if($leaflet_cutting['shift'] == 'G') echo 'checked' ?>>
                                                        <label for="inlineradio1"> G </label>
                                                    </div></e><e class="aks_value"><div style="margin-left: 11px;" class="radio radio-inline">
                                                        <input type="radio" disabled id="inlineradio2" value="N" name="shift" <?php if($leaflet_cutting['shift'] == 'N') echo 'checked' ?>>
                                                        <label for="inlineradio2"> N </label>
                                                    </div></td>
                                            
                                           
                                        </tr>
                                        <tr>
                                            <td>W.O # : <u><?php echo $leaflet_cutting_job['WO_no'] ?></u></td>
                                            <td colspan="2">Job Name : <u><?php echo $leaflet_cutting_job['Job_Description'] ?></u></td>
                                            
                                           
                                        </tr>
                                        <tr>
                                            <td>Machine : <u><?php echo $leaflet_cutting_job['machine_Name'] ?></u></td>
                                            <td>P.O. No. : <u><?php echo $leaflet_cutting_job['PO_No'] ?></u></td>
                                            <td>Planned Qty : <u><?php echo $leaflet_cutting_job['Planned_qty'] ?></td>
                                        </tr>
                                        <tr>
                                            <td>Operator : <u><?php echo $leaflet_cutting['operator'] ?></u></td>
                                            <td colspan="2">Assistant : <u><?php echo $leaflet_cutting['assistant'] ?></u></td>
                                            
                                        </tr>
                                        <tr>
                                            <td>Paper sizee : <u><?php echo $leaflet_cutting['paper'] ?></u></td>
                                            <td colspan="">Quantity : <u><?php echo $leaflet_cutting['quantity'] ?></u></td>
                                            <td colspan="">Conversion : <u><?php echo $leaflet_cutting['conversion'] ?></u></td>
                                            
                                        </tr> 
                                       
                                        <tr>
                                            <td>Machine Cleaning : <div class="radio radio-inline">
                                                        <input type="radio" disabled="" id="inlineradio3" value="Yes" name="cleaning" <?php if($leaflet_cutting['cleaning'] == 'Yes') echo 'checked' ?>>
                                                        <label for="inlineradio3"> Yes </label>
                                                    </div></e><e class="aks_value"><div style="margin-left: 11px;" class="radio radio-inline">
                                                        <input type="radio" disabled="" id="inlineradio4" value="No" name="cleaning" <?php if($leaflet_cutting['cleaning'] == 'No') echo 'checked' ?>>
                                                        <label for="inlineradio4"> No </label>
                                                    </div></td>
                                            <td colspan="2">Size set : <div class="radio radio-inline">
                                                        <input type="radio" disabled="" id="inlineradio5" value="Yes" name="size" <?php if($leaflet_cutting['size'] == 'Yes') echo 'checked' ?>>
                                                        <label for="inlineradio5"> Yes </label>
                                                    </div></e><e class="aks_value"><div style="margin-left: 11px;" class="radio radio-inline">
                                                        <input type="radio" disabled="" id="inlineradio6" value="No" name="size" <?php if($leaflet_cutting['size'] == 'No') echo 'checked' ?>>
                                                        <label for="inlineradio6"> No </label>
                                                    </div></td>
                                            
                                        </tr> 
                                        <tr>
                                            <td>Start time : <u><?php echo $leaflet_cutting_job['start_date'] ?></u></td>
                                            <td>End time : <u><?php echo $leaflet_cutting_job['end_date'] ?></u></td>
                                            <td>Total Production : <u><?php echo $leaflet_cutting['production'] ?></u></td>
                                            
                                        </tr>
                                        <tr>
                                            <td colspan="">Waste : <u><?php echo $leaflet_cutting['waste'] ?></u></td>
                                            <td colspan="2">Remarks : <u><?php echo $leaflet_cutting['remarks'] ?></u></td>
                                            
                                        </tr>
                                        
                                        </table>
                                        <br>
                                        <div class="form-group row">
                                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                                <address>
                                                   <label for="example-text-input" class="col-sm-4">Prepared By <small>(Operator)</small> :</label>
                                                    <e class="aks_value">__________________</e>
                                                    <br>
                                                </address>
                                            </div>
                                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                                <address>
                                                   <label for="example-text-input" class="col-sm-4">Examined By <small>(Incharge)</small> :</label>
                                                    <e class="aks_value">__________________</e>
                                                    <br>
                                                </address>
                                            </div>
                                            
                                        </div>
                                    </div>
                                </div>

                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php } ?>
        <!-- pasting -->
        <?php 
            if (isset($pasting)) {
        ?>
        <div class="row">
            <div class="col-sm-12">
                <div class="panel panel-bd print-div ">
                    <div class="panel-heading">
                        <div class="panel-title">
                          <h4 class="product-totle">BATCH MANUFACTURING REPORT <small>(Pasting)</small></h4><br>
                            <small class="product-tital">DOC NO: PRD/FM/001-02A     REV# 00     Date:<?php echo date('d-m-Y', strtotime($pasting['created_at'])) ?></small>
                        </div>
                    </div>
                    <div class="panel-body">
                        <div class="row">
                            <form>
                                <div class="col-sm-12">
                                    <div class="panel-body">
                                        <table class="minimalistBlack">
                                       
                                       
                                        <tbody>
                                        <tr>
                                            <td>Date : <u><?php echo date('d M Y', strtotime($pasting['created_at'])) ?></u></td>
                                            <td colspan="2">Shift : <div class="radio radio-inline">
                                                        <input type="radio" disabled="" id="inlineradio1" value="option1">
                                                        <label for="inlineradio1"> G </label>
                                                    </div></e><e class="aks_value"><div style="margin-left: 11px;" class="radio radio-inline">
                                                        <input type="radio" disabled="" id="inlineradio2" value="option2">
                                                        <label for="inlineradio2"> N </label>
                                                    </div></td>
                                            
                                           
                                        </tr>
                                        <tr>
                                            <td>W.O # : <u><?php echo $pasting_job['WO_no'] ?></u></td>
                                            <td colspan="2">Job Name : <u><?php echo $pasting_job['Job_Description'] ?></u></td>
                                            
                                           
                                        </tr>
                                        <tr>
                                            <td>Machine : <u><?php echo $pasting_job['machine_Name'] ?></u></td>
                                            <td>P.O. No. : <u><?php echo $pasting_job['PO_No'] ?></u></td>
                                            <td>Planned Qty : <u><?php echo $pasting_job['Planned_qty'] ?></td>
                                        </tr>
                                        <tr>
                                            <td>Operator : <u><?php echo $pasting['operator'] ?></u></td>
                                            <td colspan="2">Assistant : <u><?php echo $pasting['assistant'] ?></u></td>
                                            
                                        </tr>
                                        
                                        <tr>
                                            <td>Job Counter <small>Opening</small> : <u><?php echo $pasting['opening'] ?></u></td>
                                            <td>Job Counter <small>Closing</small> : <u><?php echo $pasting['closing'] ?></u></td>
                                            <td>Job Counter <small>Waste</small> : <u><?php echo $pasting['waste'] ?></u></td>
                                           
                                            
                                        </tr> 
                                        <tr>
                                            <td> Master carton: <u><?php echo $pasting['carton'] ?></u></td>
                                            <td> Packing Qty   : <u><?php echo $pasting['qty'] ?></u></td>
                                            <td> Weight: <u><?php echo $pasting['weight'] ?></u></td>
                                        </tr> 
                                        <tr>
                                            <td>Make Ready : <div class="radio radio-inline">
                                                        <input type="radio" disabled="" id="inlineradio5" value="Yes" name="ready" <?php if($pasting_complete['ready'] == 'Yes') echo 'checked' ?>>
                                                        <label for="inlineradio5"> Yes </label>
                                                    </div></e><e class="aks_value"><div style="margin-left: 11px;" class="radio radio-inline">
                                                        <input type="radio" disabled="" id="inlineradio6" value="No" name="ready" <?php if($pasting_complete['ready'] == 'No') echo 'checked' ?>>
                                                        <label for="inlineradio6"> No </label>
                                                    </div></td>
                                            <td colspan="2">Job Completed : <div class="radio radio-inline">
                                                        <input type="radio" disabled="" id="inlineradio7" value="Yes" name="completed" <?php if($pasting_complete['completed'] == 'Yes') echo 'checked' ?>>
                                                        <label for="inlineradio7"> Yes </label>
                                                    </div></e><e class="aks_value"><div style="margin-left: 11px;" class="radio radio-inline">
                                                        <input type="radio" disabled="" id="inlineradio8" value="No" name="completed" <?php if($pasting_complete['completed'] == 'No') echo 'checked' ?>>
                                                        <label for="inlineradio8"> No </label>
                                                    </div></td>
                                            
                                            
                                        </tr> 

                                        <tr>
                                            <td>Machine Cleaning : <div class="radio radio-inline">
                                                        <input type="radio" disabled="" id="inlineradio9" value="Yes" name="cleaning" <?php if($pasting_complete['cleaning'] == 'Yes') echo 'checked' ?>>
                                                        <label for="inlineradio9"> Yes </label>
                                                    </div></e><e class="aks_value"><div style="margin-left: 11px;" class="radio radio-inline">
                                                        <input type="radio" disabled="" id="inlineradio10" value="No" name="cleaning" <?php if($pasting_complete['cleaning'] == 'No') echo 'checked' ?>>
                                                        <label for="inlineradio10"> No </label>
                                                    </div></td>
                                            <td colspan="2">Guide set : <div class="radio radio-inline">
                                                        <input type="radio" disabled="" id="inlineradio11" value="Yes" name="guide" <?php if($pasting_complete['guide'] == 'Yes') echo 'checked' ?>>
                                                        <label for="inlineradio11"> Yes </label>
                                                    </div></e><e class="aks_value"><div style="margin-left: 11px;" class="radio radio-inline">
                                                        <input type="radio" disabled="" id="inlineradio12" value="No" name="guide" <?php if($pasting_complete['guide'] == 'No') echo 'checked' ?>>
                                                        <label for="inlineradio12"> No </label>
                                                    </div></td>
                                            
                                        </tr> 

                                        <tr>
                                            <td>Glue Set : <div class="radio radio-inline">
                                                        <input type="radio" disabled="" id="inlineradio9" value="Yes" name="glue" <?php if($pasting_complete['glue'] == 'Yes') echo 'checked' ?>>
                                                        <label for="inlineradio9"> Yes </label>
                                                    </div></e><e class="aks_value"><div style="margin-left: 11px;" class="radio radio-inline">
                                                        <input type="radio" disabled="" id="inlineradio10" value="No" name="glue" <?php if($pasting_complete['glue'] == 'No') echo 'checked' ?>>
                                                        <label for="inlineradio10"> No </label>
                                                    </div></td>
                                            <td colspan="2">Blanket set : <div class="radio radio-inline">
                                                        <input type="radio" disabled="" id="inlineradio11" value="Yes" name="blanket" <?php if($pasting_complete['blanket'] == 'Yes') echo 'checked' ?>>
                                                        <label for="inlineradio11"> Yes </label>
                                                    </div></e><e class="aks_value"><div style="margin-left: 11px;" class="radio radio-inline">
                                                        <input type="radio" disabled="" id="inlineradio12" value="No" name="blanket" <?php if($pasting_complete['blanket'] == 'No') echo 'checked' ?>>
                                                        <label for="inlineradio12"> No </label>
                                                    </div></td>
                                            
                                        </tr> 

                                       
                                        
                                        <tr>
                                            <td colspan="3">Remarks : ______________________________________________________</td>
                                            
                                        </tr>
                                        
                                        </table>
                                        
                                        <br>
                                        <table class="table table-bordered table-hover" cellpadding="10">
                                            <thead>
                                                <tr>
                                                    <th rowspan="2"><center>Code</center></th>
                                                    <th colspan="3"><center>Time</center></th>
                                                    <th rowspan="2"><center>Counter</center></th>
                                                    <th rowspan="2"><center>Remarks</center></th>
                                                    
                                                    
                                                </tr>
                                                <tr>
                                                    <th><center>From</center></th>
                                                    <th><center>To</center></th>
                                                    <th><center>Hours</center></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php 
                                                    foreach ($pasting_hourse as $d) {
                                                ?>
                                                <tr>
                                                    <th><?php echo $d['code'] ?></th>
                                                    <td><?php echo $d['froms'] ?></td>
                                                    <td><?php echo $d['tos'] ?></td>
                                                    <td><?php echo $d['hours'] ?></td>
                                                    <td><?php echo $d['counter'] ?></td>
                                                    <td><?php echo $d['remarks'] ?></td>
                                                </tr>
                                                <?php } ?>
                                               

                                            </tbody>
                                        </table>
                                        <br>
                                        <div class="form-group row">
                                            <table class="minimalistBlack">
                                                <tbody>
                                                    <tr>
                                            <td colspan="">Prepared By <small>(Operator) : ___________</td>
                                            <td colspan="">Prepared By <small>(Incharge) : ___________</td>
                                            <td colspan="">Prepared By <small>(Manager) : ___________</td>
                                            
                                        </tr> <tr style="visibility: hidden;">
                                            <td colspan="">Prepared By <small>(Operator) : ___________</td>
                                            <td colspan="">Prepared By <small>(Incharge) : ___________</td>
                                            <td colspan="">Prepared By <small>(Manager) : ___________</td>
                                            
                                        </tr><tr style="visibility: hidden;">
                                            <td colspan="">Prepared By <small>(Operator) : ___________</td>
                                            <td colspan="">Prepared By <small>(Incharge) : ___________</td>
                                            <td colspan="">Prepared By <small>(Manager) : ___________</td>
                                            
                                        </tr><tr style="visibility: hidden;">
                                            <td colspan="">Prepared By <small>(Operator) : ___________</td>
                                            <td colspan="">Prepared By <small>(Incharge) : ___________</td>
                                            <td colspan="">Prepared By <small>(Manager) : ___________</td>
                                            
                                        </tr><tr style="visibility: hidden;">
                                            <td colspan="">Prepared By <small>(Operator) : ___________</td>
                                            <td colspan="">Prepared By <small>(Incharge) : ___________</td>
                                            <td colspan="">Prepared By <small>(Manager) : ___________</td>
                                            
                                        </tr><tr style="visibility: hidden;">
                                            <td colspan="">Prepared By <small>(Operator) : ___________</td>
                                            <td colspan="">Prepared By <small>(Incharge) : ___________</td>
                                            <td colspan="">Prepared By <small>(Manager) : ___________</td>
                                            
                                        </tr><tr style="visibility: hidden;">
                                            <td colspan="">Prepared By <small>(Operator) : ___________</td>
                                            <td colspan="">Prepared By <small>(Incharge) : ___________</td>
                                            <td colspan="">Prepared By <small>(Manager) : ___________</td>
                                            
                                        </tr>
                                                </tbody>
                                        
                                            </table>
                                            
                                        </div>
                                    </div>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php } ?>
        <!-- printing -->
        <?php 
            if (isset($printing)) {
        ?>
        <div class="row">
            <div class="col-sm-12">
                <div class="panel panel-bd print-div ">
                    <div class="panel-heading">
                        <div class="panel-title">
                          <h4 class="product-totle">BATCH MANUFACTURING REPORT <small>(Printing)</small></h4><br>
                            <small class="product-tital">DOC NO: PRD/FM/001-02A   |   REV# 00    |  Date:<?php echo date('d-m-Y', strtotime($printing['created_at'])) ?></small>
                        </div>
                    </div>
                    <div class="panel-body">
                        <div class="row">
                            <form>
                                <div class="col-sm-12">
                                    <div class="panel-body">
                                        <table class="minimalistBlack">
                                       
                                       
                                        <tbody>
                                        <tr>
                                            <td>Date : <u><?php echo date('d M Y', strtotime($printing['created_at'])) ?></u></td>
                                            <td colspan="2">Shift : <div class="radio radio-inline">
                                                        <input type="radio" disabled="" id="inlineradio1" value="option1">
                                                        <label for="inlineradio1"> G </label>
                                                    </div></e><e class="aks_value"><div style="margin-left: 11px;" class="radio radio-inline">
                                                        <input type="radio" disabled="" id="inlineradio2" value="option2">
                                                        <label for="inlineradio2"> N </label>
                                                    </div></td>
                                            
                                           
                                        </tr>
                                        <tr>
                                            <td>W.O # : <u><?php echo $printing_job['WO_no'] ?></u></td>
                                            <td colspan="2">Job Name : <u><?php echo $printing_job['Job_Description'] ?></u></td>
                                            
                                           
                                        </tr>
                                        <tr>
                                            <td>Machine : <u><?php echo $printing_job['machine_Name'] ?></u></td>
                                            <td>P.O. No. : <u><?php echo $printing_job['PO_No'] ?></u></td>
                                            <td>Planned Qty : <u><?php echo $printing_job['Planned_qty'] ?></td>
                                        </tr>
                                        <tr>
                                            <td>Operator : <u><?php echo $printing['operator'] ?></u></td>
                                            <td colspan="2">Assistant : <u><?php echo $printing['assistant'] ?></u></td>
                                            
                                        </tr>

                                        <tr>
                                            <?php 
                                                $colors = explode(',', $printing_job["colors"]);
                                            ?>
                                            <td colspan="3">Colour(s) : &nbsp;<div class="checkbox checkbox-inline">
                                                        <input type="checkbox" disabled="" id="inlineCheckbox17" value="option17"<?php
                                                            $key = array_search('Black', $colors);
                                                            if ($key >= -1) { 
                                                                if (array_key_exists($key,$colors)) {
                                                                    echo 'checked'; 
                                                                } 
                                                            } 
                                                            ?>>
                                                        <label for="inlineCheckbox17"> Black </label>
                                                    </div></e><e class="aks_value"><div style="margin-left: 11px;" class="checkbox checkbox-inline">
                                                        <input type="checkbox" disabled="" id="inlineCheckbox18" value="option18"<?php
                                                            $key = array_search('Cyan', $colors);
                                                            if ($key >= -1) { 
                                                                if (array_key_exists($key,$colors)) {
                                                                    echo 'checked'; 
                                                                } 
                                                            } 
                                                            ?>>
                                                        <label for="inlineCheckbox18"> Cyan </label>
                                                    </div><div style="margin-left: 11px;" class="checkbox checkbox-inline">
                                                        <input type="checkbox" disabled="" id="inlineCheckbox19" value="option19"<?php
                                                            $key = array_search('Magenta', $colors);
                                                            if ($key >= -1) { 
                                                                if (array_key_exists($key,$colors)) {
                                                                    echo 'checked'; 
                                                                } 
                                                            } 
                                                            ?>>
                                                        <label for="inlineCheckbox19"> Magenta </label>
                                                    </div><div style="margin-left: 11px;" class="checkbox checkbox-inline">
                                                        <input type="checkbox" disabled="" id="inlineCheckbox20" value="option20"<?php
                                                            $key = array_search('Yellow', $colors);
                                                            if ($key >= -1) { 
                                                                if (array_key_exists($key,$colors)) {
                                                                    echo 'checked'; 
                                                                } 
                                                            } 
                                                            ?>>
                                                        <label for="inlineCheckbox20"> Yellow </label>
                                                    </div><div style="margin-left: 11px;" class="checkbox checkbox-inline">
                                                        <input type="checkbox" disabled="" id="inlineCheckbox21" value="option21"<?php
                                                            $key = array_search('SPL1', $colors);
                                                            if ($key >= -1) { 
                                                                if (array_key_exists($key,$colors)) {
                                                                    echo 'checked'; 
                                                                } 
                                                            } 
                                                            ?>>
                                                        <label for="inlineCheckbox21"> SPL </label>
                                                    </div><div style="margin-left: 11px;" class="checkbox checkbox-inline">
                                                        <input type="checkbox" disabled="" id="inlineCheckbox22" value="option22"<?php
                                                            $key = array_search('SPL2', $colors);
                                                            if ($key >= -1) { 
                                                                if (array_key_exists($key,$colors)) {
                                                                    echo 'checked'; 
                                                                } 
                                                            } 
                                                            ?>>
                                                        <label for="inlineCheckbox22"> SPL </label>
                                                    </div><div style="margin-left: 11px;" class="checkbox checkbox-inline">
                                                        <input type="checkbox" disabled="" id="inlineCheckbox23" value="option23"<?php
                                                            $key = array_search('SPL3', $colors);
                                                            if ($key >= -1) { 
                                                                if (array_key_exists($key,$colors)) {
                                                                    echo 'checked'; 
                                                                } 
                                                            } 
                                                            ?>>
                                                        <label for="inlineCheckbox23"> SPL </label>
                                                    </div><div style="margin-left: 11px;" class="checkbox checkbox-inline">
                                                        <input type="checkbox" disabled="" id="inlineCheckbox24" value="option24"<?php
                                                            $key = array_search('SPL4', $colors);
                                                            if ($key >= -1) { 
                                                                if (array_key_exists($key,$colors)) {
                                                                    echo 'checked'; 
                                                                } 
                                                            } 
                                                            ?>>
                                                        <label for="inlineCheckbox24"> SPL </label>
                                                    </div></td>
                                            
                                        </tr>
                                        
                                        <tr>
                                            <td colspan="3">Process : <div class="radio radio-inline">
                                                        <input type="radio" disabled=""  id="inlineradio3" name="process" value="Cutting" <?php if($printing['process'] == 'Printing') echo 'checked' ?>>
                                                        <label for="inlineradio3"> Printing </label>
                                                    </div></e><e class="aks_value"><div style="margin-left: 11px;" class="radio radio-inline">
                                                        <input type="radio" disabled="" id="inlineradio4" name="process" value="Coating" <?php if($printing['process'] == 'Coating') echo 'checked' ?>>
                                                        <label for="inlineradio4"> Embossing </label>
                                                    </div></td>
                                           
                                            
                                        </tr> 
                                        <tr>
                                            <td>Job Counter <small>Opening</small> : <u><?php echo $printing['opening'] ?></u></td>
                                            <td>Job Counter <small>Closing</small> : <u><?php echo $printing['closing'] ?></u></td>
                                            <td>Job Counter <small>Waste</small> : <u><?php echo $printing['waste'] ?></u></td>
                                           
                                            
                                        </tr>
                                       
                                        <tr>
                                            <td>Make Ready : <div class="radio radio-inline">
                                                        <input type="radio" disabled="" id="inlineradio5" value="Yes" name="ready" <?php if($printing_complete['ready'] == 'Yes') echo 'checked' ?>>
                                                        <label for="inlineradio5"> Yes </label>
                                                    </div></e><e class="aks_value"><div style="margin-left: 11px;" class="radio radio-inline">
                                                        <input type="radio" disabled="" id="inlineradio6" value="No" name="ready" <?php if($printing_complete['ready'] == 'No') echo 'checked' ?>>
                                                        <label for="inlineradio6"> No </label>
                                                    </div></td>
                                            <td colspan="2">Job Completed : <div class="radio radio-inline">
                                                        <input type="radio" disabled="" id="inlineradio7" value="Yes" name="completed" <?php if($printing_complete['completed'] == 'Yes') echo 'checked' ?>>
                                                        <label for="inlineradio7"> Yes </label>
                                                    </div></e><e class="aks_value"><div style="margin-left: 11px;" class="radio radio-inline">
                                                        <input type="radio" disabled="" id="inlineradio8" value="No" name="completed" <?php if($printing_complete['completed'] == 'No') echo 'checked' ?>>
                                                        <label for="inlineradio8"> No </label>
                                                    </div></td>
                                            
                                            
                                        </tr> 

                                        <tr>
                                            <td>Feeder Set : <div class="radio radio-inline">
                                                        <input type="radio" disabled="" id="inlineradio9" value="Yes" name="feeder" <?php if($printing_complete['feeder'] == 'Yes') echo 'checked' ?>>
                                                        <label for="inlineradio9"> Yes </label>
                                                    </div></e><e class="aks_value"><div style="margin-left: 11px;" class="radio radio-inline">
                                                        <input type="radio" disabled="" id="inlineradio10" value="No" name="feeder" <?php if($printing_complete['feeder'] == 'No') echo 'checked' ?>>
                                                        <label for="inlineradio10"> No </label>
                                                    </div></td>
                                            <td colspan="2">Check Paper Specs : <div class="radio radio-inline">
                                                        <input type="radio" disabled="" id="inlineradio11" value="Yes" name="specs" <?php if($printing_complete['specs'] == 'Yes') echo 'checked' ?>>
                                                        <label for="inlineradio11"> Yes </label>
                                                    </div></e><e class="aks_value"><div style="margin-left: 11px;" class="radio radio-inline">
                                                        <input type="radio" disabled="" id="inlineradio12" value="No" name="specs" <?php if($printing_complete['specs'] == 'No') echo 'checked' ?>>
                                                        <label for="inlineradio12"> No </label>
                                                    </div></td>
                                            
                                        </tr> 

                                        <tr>
                                            <td>Delivery set : <div class="radio radio-inline">
                                                        <input type="radio" disabled="" id="inlineradio13" value="Yes" name="delivery" <?php if($printing_complete['delivery'] == 'Yes') echo 'checked' ?>>
                                                        <label for="inlineradio13"> Yes </label>
                                                    </div></e><e class="aks_value"><div style="margin-left: 11px;" class="radio radio-inline">
                                                        <input type="radio" disabled="" id="inlineradio14" value="No" name="delivery" <?php if($printing_complete['delivery'] == 'No') echo 'checked' ?>>
                                                        <label for="inlineradio14"> No </label>
                                                    </div></td>
                                            <td colspan="2">Impression set : <div class="radio radio-inline">
                                                        <input type="radio" disabled="" id="inlineradio15" value="Yes" name="impression" <?php if($printing_complete['impression'] == 'Yes') echo 'checked' ?>>
                                                        <label for="inlineradio15"> Yes </label>
                                                    </div></e><e class="aks_value"><div style="margin-left: 11px;" class="radio radio-inline">
                                                        <input type="radio" disabled="" id="inlineradio6" value="No" name="impression" <?php if($printing_complete['impression'] == 'No') echo 'checked' ?>>
                                                        <label for="inlineradio16"> No </label>
                                                    </div></td>
                                            
                                        </tr> 


                                        <tr>
                                            <td>Cleaning : <div class="radio radio-inline">
                                                        <input type="radio" disabled="" id="inlineradio13" value="Yes" name="cleaning" <?php if($printing_complete['cleaning'] == 'Yes') echo 'checked' ?>>
                                                        <label for="inlineradio13"> Yes </label>
                                                    </div></e><e class="aks_value"><div style="margin-left: 11px;" class="radio radio-inline">
                                                        <input type="radio" disabled="" id="inlineradio14" value="No" name="cleaning" <?php if($printing_complete['cleaning'] == 'No') echo 'checked' ?>>
                                                        <label for="inlineradio14"> No </label>
                                                    </div></td>
                                            <td colspan="2">Gauge set : <div class="radio radio-inline">
                                                        <input type="radio" disabled="" id="inlineradio15" value="Yes" name="gauge" <?php if($printing_complete['gauge'] == 'Yes') echo 'checked' ?>>
                                                        <label for="inlineradio15"> Yes </label>
                                                    </div></e><e class="aks_value"><div style="margin-left: 11px;" class="radio radio-inline">
                                                        <input type="radio" disabled="" id="inlineradio6" value="No" name="gauge" <?php if($printing_complete['gauge'] == 'No') echo 'checked' ?>>
                                                        <label for="inlineradio16"> No </label>
                                                    </div></td>
                                            
                                        </tr> 

                                        
                                        <tr>
                                            <td colspan="3">Remarks : ______________________________________________________</td>
                                            
                                        </tr>
                                        
                                        </table>
                                        
                                        <br>
                                        <table class="table table-bordered table-hover" cellpadding="10">
                                            <thead>
                                                <tr>
                                                    <th rowspan="2"><center>Code</center></th>
                                                    <th colspan="3"><center>Time</center></th>
                                                    <th rowspan="2"><center>Counter</center></th>
                                                    <th rowspan="2"><center>Remarks</center></th>
                                                    
                                                    
                                                </tr>
                                                <tr>
                                                    <th><center>From</center></th>
                                                    <th><center>To</center></th>
                                                    <th><center>Hours</center></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                 <?php 
                                                    foreach ($printing_hourse as $d) {
                                                ?>
                                                <tr>
                                                    <th><?php echo $d['code'] ?></th>
                                                    <td><?php echo $d['froms'] ?></td>
                                                    <td><?php echo $d['tos'] ?></td>
                                                    <td><?php echo $d['hours'] ?></td>
                                                    <td><?php echo $d['counter'] ?></td>
                                                    <td><?php echo $d['remarks'] ?></td>
                                                </tr>
                                                <?php } ?>
                                            </tbody>
                                        </table>
                                        <br>
                                        <div class="form-group row">
                                            <table class="minimalistBlack">
                                                <tbody>
                                                    <tr>
                                            <td colspan="">Prepared By <small>(Operator) : ___________</td>
                                            <td colspan="">Prepared By <small>(Incharge) : ___________</td>
                                            <td colspan="">Prepared By <small>(Manager) : ___________</td>
                                            
                                        </tr> <tr style="visibility: hidden;">
                                            <td colspan="">Prepared By <small>(Operator) : ___________</td>
                                            <td colspan="">Prepared By <small>(Incharge) : ___________</td>
                                            <td colspan="">Prepared By <small>(Manager) : ___________</td>
                                            
                                        </tr><tr style="visibility: hidden;">
                                            <td colspan="">Prepared By <small>(Operator) : ___________</td>
                                            <td colspan="">Prepared By <small>(Incharge) : ___________</td>
                                            <td colspan="">Prepared By <small>(Manager) : ___________</td>
                                            
                                        </tr><tr style="visibility: hidden;">
                                            <td colspan="">Prepared By <small>(Operator) : ___________</td>
                                            <td colspan="">Prepared By <small>(Incharge) : ___________</td>
                                            <td colspan="">Prepared By <small>(Manager) : ___________</td>
                                            
                                        </tr><tr style="visibility: hidden;">
                                            <td colspan="">Prepared By <small>(Operator) : ___________</td>
                                            <td colspan="">Prepared By <small>(Incharge) : ___________</td>
                                            <td colspan="">Prepared By <small>(Manager) : ___________</td>
                                            
                                        </tr><tr style="visibility: hidden;">
                                            <td colspan="">Prepared By <small>(Operator) : ___________</td>
                                            <td colspan="">Prepared By <small>(Incharge) : ___________</td>
                                            <td colspan="">Prepared By <small>(Manager) : ___________</td>
                                            
                                        </tr><tr style="visibility: hidden;">
                                            <td colspan="">Prepared By <small>(Operator) : ___________</td>
                                            <td colspan="">Prepared By <small>(Incharge) : ___________</td>
                                            <td colspan="">Prepared By <small>(Manager) : ___________</td>
                                            
                                        </tr>
                                                </tbody>
                                        
                                            </table>
                                            
                                        </div>
                                    </div>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php } ?>
        <!-- line clearance -->
        <?php 
            if (isset($line_clearance)) {
                foreach ($line_clearance as $data) {
        ?>
        <div class="row">
            <div class="col-sm-12">
                <div class="panel panel-bd print-div ">
                    <div class="panel-heading">
                        <div class="panel-title">
                            <h4 class="product-totle">Line Clearance Form</h4><br>
                            <small class="product-tital">DOC NO: PRD/FM/001-02A  |    REV# 00   |  Date:<?php echo date('d-m-Y', strtotime($data['created_at'])) ?></small>
                        </div>
                    </div>
                    <div class="panel-body">
                        <div class="row">
                            <form>
                                <div class="col-sm-12">
                                    <div class="panel-body ">
                                        <table class="table table-bordered table-hover minimalistBlack">
                                            <tbody>
                                                <tr>
                                                    <td>Previous Job No : <u><?php echo $data['previous'] ?></u></td>
                                                    <td colspan="2">Date : <u><?php echo date('d M Y', strtotime($data['created_at'])) ?></u></td>
                                                </tr>
                                                <tr>
                                                    <td colspan="3">Crunt Job No : <u><?php echo $wo_no ?></u></td>

                                                </tr>
                                        </table>

                                        <table class="minimalistBlack table table-bordered table-hover" style="">
                                            <tbody>
                                                <tr>
                                                    <td></td>
                                                    <td colspan="">Yes</td>
                                                    <td colspan="">No</td>
                                                    <td colspan="">Remarks</td>

                                                </tr>
                                                <tr>
                                                    <td colspan="">Is there any material of previous Job</td>
                                                    <td colspan="">
                                                        <div class="radio radio-inline">
                                                            <input type="radio" disabled id="inlineradio1" name="material" value="Yes" <?php if($data['material'] == 'Yes') echo 'checked' ?>>
                                                            <label for="inlineradio1">  &nbsp;&nbsp; </label>
                                                        </div>
                                                    </td>
                                                    <td colspan="">
                                                        <div class="radio radio-inline">
                                                            <input type="radio" disabled id="inlineradio2" name="material" value="No" <?php if($data['material'] == 'No') echo 'checked' ?>>
                                                            <label for="inlineradio2">  &nbsp;&nbsp; &nbsp; </label>
                                                        </div>
                                                    </td>
                                                    <td colspan=""><?php echo $data['material_remarks'] ?></td>
                                                </tr>
                                                <tr>
                                                    <td colspan="">Is there any printed item of previous Job</td>
                                                    <td colspan="">
                                                        <div class="radio radio-inline">
                                                            <input type="radio" disabled id="inlineradio3" name="printed" value="Yes" <?php if($data['printed'] == 'Yes') echo 'checked' ?>>
                                                            <label for="inlineradio3">  &nbsp;&nbsp; </label>
                                                        </div>
                                                    </td>
                                                    <td colspan="">
                                                        <div class="radio radio-inline">
                                                            <input type="radio" disabled id="inlineradio4" name="printed" value="No" <?php if($data['printed'] == 'No') echo 'checked' ?>>
                                                            <label for="inlineradio4">  &nbsp;&nbsp; </label>
                                                        </div>
                                                    </td>
                                                    <td colspan=""><?php echo $data['printed_remarks'] ?></td>
                                                </tr>
                                                <tr>
                                                    <td colspan="">Is there any document of previous Job</td>
                                                    <td colspan="">
                                                        <div class="radio radio-inline">
                                                            <input type="radio" disabled id="inlineradio5" name="document" value="Yes" <?php if($data['document'] == 'Yes') echo 'checked' ?>>
                                                            <label for="inlineradio5">  &nbsp;&nbsp; </label>
                                                        </div>
                                                    </td>
                                                    <td colspan="">
                                                        <div class="radio radio-inline">
                                                            <input type="radio" disabled id="inlineradio6" name="document" value="No" <?php if($data['document'] == 'No') echo 'checked' ?>>
                                                            <label for="inlineradio6">  &nbsp;&nbsp; </label>
                                                        </div>
                                                    </td>
                                                    <td colspan=""><?php echo $data['document_remarks'] ?></td>
                                                </tr>
                                                <tr>
                                                    <td colspan="">Is there any waste near machine</td>
                                                    <td colspan="">
                                                        <div class="radio radio-inline">
                                                            <input type="radio" disabled id="inlineradio7" name="waste" value="Yes" <?php if($data['waste'] == 'Yes') echo 'checked' ?>>
                                                            <label for="inlineradio7">  &nbsp;&nbsp; </label>
                                                        </div>
                                                    </td>
                                                    <td colspan="">
                                                        <div class="radio radio-inline">
                                                            <input type="radio" disabled id="inlineradio8" name="waste" value="No" <?php if($data['waste'] == 'No') echo 'checked' ?>>
                                                            <label for="inlineradio8">  &nbsp;&nbsp; </label>
                                                        </div>
                                                    </td>
                                                    <td colspan=""><?php echo $data['waste_remarks'] ?></td>
                                                </tr>
                                                <tr>
                                                    <td colspan="">Is there any oil leakage</td>
                                                    <td colspan="">
                                                        <div class="radio radio-inline">
                                                            <input type="radio" disabled id="inlineradio9" name="oil" value="Yes" <?php if($data['oil'] == 'Yes') echo 'checked' ?>>
                                                            <label for="inlineradio9">  &nbsp;&nbsp; </label>
                                                        </div>
                                                    </td>
                                                    <td colspan="">
                                                        <div class="radio radio-inline">
                                                            <input type="radio" disabled id="inlineradio10" name="oil" value="No" <?php if($data['oil'] == 'No') echo 'checked' ?>>
                                                            <label for="inlineradio10">  &nbsp;&nbsp; </label>
                                                        </div>
                                                    </td>
                                                    <td colspan=""><?php echo $data['oil_remarks'] ?></td>
                                                </tr>
                                                <tr>
                                                    <td colspan="">Is the machine & area clean</td>
                                                    <td colspan="">
                                                        <div class="radio radio-inline">
                                                            <input type="radio" disabled id="inlineradio11" name="clean" value="Yes" <?php if($data['clean'] == 'Yes') echo 'checked' ?>>
                                                            <label for="inlineradio11">  &nbsp;&nbsp; </label>
                                                        </div>
                                                    </td>
                                                    <td colspan="">
                                                        <div class="radio radio-inline">
                                                            <input type="radio" disabled id="inlineradio12" name="clean" value="No" <?php if($data['clean'] == 'No') echo 'checked' ?>>
                                                            <label for="inlineradio12">  &nbsp;&nbsp; </label>
                                                        </div>
                                                    </td>
                                                    <td colspan=""><?php echo $data['clean_remarks'] ?></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                        <br>
                                        <div class="form-group row">
                                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                                <address>
                                                   <label for="example-text-input" class="col-sm-4">Checked by</small> :</label>
                                                    <e class="aks_value">__________________</e>
                                                    <br>
                                                </address>
                                            </div>
                                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                                <address>
                                                   <label for="example-text-input" class="col-sm-4">QC Inspector</small> :</label>
                                                    <e class="aks_value">__________________</e>
                                                    <br>
                                                </address>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <button id="btn" class="print-btn btn btn-info pull-right" role="button">Generate Print</button>
            </div>
        </div>
        <?php } } ?>
    </div>
</div>

<!-- cutting css -->
<style type="text/css">
    table.minimalistBlack {
  
  width: 100%;
  height: 200px;
  text-align: left;
  border-collapse: collapse;
}
table.minimalistBlack td, table.minimalistBlack th {
  border: 1px solid #000000;
  padding: 5px 4px;
}
table.minimalistBlack tbody td {
  font-size: 13px;
}
table.minimalistBlack thead {
  background: #CFCFCF;
  background: -moz-linear-gradient(top, #dbdbdb 0%, #d3d3d3 66%, #CFCFCF 100%);
  background: -webkit-linear-gradient(top, #dbdbdb 0%, #d3d3d3 66%, #CFCFCF 100%);
  background: linear-gradient(to bottom, #dbdbdb 0%, #d3d3d3 66%, #CFCFCF 100%);
  border-bottom: 3px solid #000000;
}
table.minimalistBlack thead th {
  font-size: 15px;
  font-weight: bold;
  color: #000000;
  text-align: left;
}
table.minimalistBlack tfoot {
  font-size: 14px;
  font-weight: bold;
  color: #000000;
  border-top: 3px solid #000000;
}
table.minimalistBlack tfoot td {
  font-size: 14px;
}
</style>