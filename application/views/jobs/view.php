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
                <h1>View Jobs</h1>
                <small> </small>
                <ol class="breadcrumb">
                    <li><a href="<?php echo base_url() ?>"><i class="pe-7s-home"></i> Home</a></li>

                    <li class="active">View Jobs</li>
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
        <!-- flows -->
        <div class="row">
            <div class="col-sm-12">
                <div class="panel panel-bd">
                    <div class="panel-heading">
                        <div class="panel-title">
                            <h4>View Flows</h4>

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
                                        </tr>
                                    <?php } ?>
                                </tbody>
                            </table>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- flow chart -->
        <div class="row">
            <div class="col-sm-12">
                <div class="panel panel-bd ">
                    <div class="panel-heading">
                        <div class="panel-title">
                            <h4>Production Plan Flows Chart</h4>
                        </div>
                    </div>
                    <div class="panel-body">
                        <div class="row">
                                <div class="col-sm-12">
                                    <div class="panel-body">
                                        
                                      <div class=row>
                                          <div class="col-xs-12 col-sm-6 col-md-6 col-lg-12 statistic-box  border"  style=" box-shadow: 10px 10px 5px #888888; background-color: #fcfdff ">
                                                <div id="chart_div3"></div>
                                          </div>
                                      </div>  
                                    
                                    </div>
                                </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> 
        <!-- requsition -->
        <div class="row">
            <div class="col-sm-12">
                <div class="panel panel-bd">
                    <div class="panel-heading">
                        <div class="panel-title">
                            <h4>View Requisition</h4>
                        </div>
                    </div>
                    <div class="panel-body">
                        
                        <div class="table-responsive">
                            <table id="dataTableExample2" class="table table-bordered table-striped table-hover">
                                <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th>Wo_no</th>
                                        <th>Sender</th>
                                        <th>Store</th>
                                        <th>Status</th>
                                        <th>Detail</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        foreach ($requisition as $module) {
                                    ?>
                                    <tr>
                                        <td><?php echo $module['id'] ?></td>
                                        <td><?php echo $module['wo_id'] ?></td>
                                        <td><?php echo $module['type'] ?></td>
                                        <td><?php echo $module['Name'] ?></td>
                                        <td><?php echo $module['status'] ?></td>
                                        <td><button class="btn btn-info" data-toggle="modal" data-target="#myModal" onclick="get_id(<?php echo $module["id"] ?>)">Detail</button></td>
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
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

  <!-- start chart 1 -->
<script type="text/javascript">
    google.charts.load('current', {'packages':['gantt']});
    google.charts.setOnLoadCallback(drawChart);

    function drawChart() {
      var values = <?php echo json_encode($plane) ?>;
      //console.log(values)
      var data = new google.visualization.DataTable();
      data.addColumn('string', 'Task ID');
      data.addColumn('string', 'Task Name');
      data.addColumn('string', 'Resource');
      data.addColumn('date', 'Start Date');
      data.addColumn('date', 'End Date');
      data.addColumn('number', 'Duration');
      data.addColumn('number', 'Percent Complete');
      data.addColumn('string', 'Dependencies');
      data.addRows(values.length);
      for (var i = 0; i < values.length; i++) {
        data.setCell(i, 0, values[i].Name);
        data.setCell(i, 1, values[i].Name);
        data.setCell(i, 2, values[i].machine);
        data.setCell(i, 3, new Date(values[i].start_date));
        data.setCell(i, 4, new Date(values[i].end_date));
        data.setCell(i, 5, null);
        data.setCell(i, 6, 0);
        data.setCell(i, 7, null);
      }
      // data.addRows([
      //   ['2014Spring', 'Job 1', 'Job 1',
      //    new Date(2015, 2, 22), new Date(2015, 5, 20), null, 90, null],
      //   ['2014Summer', 'Job 2', 'Job 2',
      //    new Date(2014, 5, 21), new Date(2014, 8, 20), null, 100, null],
      //   ['2014Autumn', 'Job 3', 'Job 3',
      //    new Date(2014, 8, 21), new Date(2014, 11, 20), null, 100, null],
      //   ['2014Winter', 'Job 4', 'Job 4',
      //    new Date(2014, 11, 21), new Date(2015, 2, 21), null, 100, null],
      //   ['2015Spring', 'Job 5', 'Job 5',
      //    new Date(2015, 2, 22), new Date(2015, 5, 20), null, 50, null],
      //   ['2015Summer', 'Job 6', 'Job 6',
      //    new Date(2015, 5, 21), new Date(2015, 8, 20), null, 0, null]
      // ]);

      var options = {
        height: 230,
        gantt: {
          trackHeight: 30
        }
      };

      var chart = new google.visualization.Gantt(document.getElementById('chart_div3'));

      chart.draw(data, options);
    }
</script>
<style type="text/css">
    ul.dropdown-menu {
    z-index:  999;
}
</style>
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Order Received</h4>
      </div>
      <div class="modal-body">
        <div class="row form-group">
            <label class="col-sm-12 col-form-label">Order Items</label>
            <div class="col-md-12">
                <div class="table-responsive">
                    <table class="table table-bordered table-striped table-hover product-table">
                        <thead>
                            <tr>
                                <th>Product Name</th>
                                <th>Quantity</th>
                                <th>Received Quantity</th>
                                <th>Remarks</th>
                            </tr>
                        </thead>
                        <tbody></tbody>
                    </table>
                </div>
            </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>
<script type="text/javascript">
    function get_id(id) {
        $.ajax({
            url: "<?php echo base_url() ?>requisition/get_order/"+id,
            type: 'GET',
            dataType: 'json', // added data type
            success: function(res) {
                console.log(res)
                var tb  = $('.product-table tbody')
                tb.empty()
                for (var i = 0; i < res.length; i++) {
                    var data = res[i]
                    tb.append('<tr>')
                    tb.append('</tr>')
                    tb.find('tr').last().append('<td>'+data['Product_Name']+'</td>')
                    tb.find('tr').last().append('<td>'+data['quantity']+'</td>')
                    tb.find('tr').last().append('<td>'+data['received_quantity']+'</td>')
                    tb.find('tr').last().append('<td>'+data['remarks']+'</td>')
                }
            }
        });
    }
</script>

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