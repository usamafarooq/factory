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
<div class=control-sidebar-bg>
</div>
<div id=page-wrapper>
    <div class=content>
        <div class=content-header>
            <div class=header-icon style="margin-top: -9px;">
                <i class="pe-7s-note"></i>
            </div>
            <div class=header-title>
                <h1>View Pasting Machine</h1>
                <small></small>
                <ol class=breadcrumb>
                    <li>
                        <i class=pe-7s-home></i> Home</li>
                    <li class="active">View Pasting Machine</li>

                </ol>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <div class="panel panel-bd print-div ">
                    <div class="panel-heading">
                        <div class="panel-title">
                          <h4 class="product-totle">BATCH MANUFACTURING REPORT <small>(Pasting)</small></h4><br>
                            <small class="product-tital">DOC NO: PRD/FM/001-02A     REV# 00     Date:<?php echo date('d-m-Y', strtotime($data['created_at'])) ?></small>
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
                                            <td>Date : <u><?php echo date('d M Y', strtotime($data['created_at'])) ?></u></td>
                                            <td colspan="2">Shift : <div class="radio radio-inline">
                                                        <input type="radio" disabled="" id="inlineradio1" value="option1">
                                                        <label for="inlineradio1"> G </label>
                                                    </div></e><e class="aks_value"><div style="margin-left: 11px;" class="radio radio-inline">
                                                        <input type="radio" disabled="" id="inlineradio2" value="option2">
                                                        <label for="inlineradio2"> N </label>
                                                    </div></td>
                                            
                                           
                                        </tr>
                                        <tr>
                                            <td>W.O # : <u><?php echo $job['WO_no'] ?></u></td>
                                            <td colspan="2">Job Name : <u><?php echo $job['Job_Description'] ?></u></td>
                                            
                                           
                                        </tr>
                                        <tr>
                                            <td>Machine : <u><?php echo $job['machine_Name'] ?></u></td>
                                            <td>P.O. No. : <u><?php echo $job['PO_No'] ?></u></td>
                                            <td>Planned Qty : <u><?php echo $job['Planned_qty'] ?></td>
                                        </tr>
                                        <tr>
                                            <td>Operator : <u><?php echo $data['operator'] ?></u></td>
                                            <td colspan="2">Assistant : <u><?php echo $data['assistant'] ?></u></td>
                                            
                                        </tr>
                                        
                                        <tr>
                                            <td>Job Counter <small>Opening</small> : <u><?php echo $data['opening'] ?></u></td>
                                            <td>Job Counter <small>Closing</small> : <u><?php echo $data['closing'] ?></u></td>
                                            <td>Job Counter <small>Waste</small> : <u><?php echo $data['waste'] ?></u></td>
                                           
                                            
                                        </tr> 
                                        <tr>
                                            <td> Master carton: <u><?php echo $data['carton'] ?></u></td>
                                            <td> Packing Qty   : <u><?php echo $data['qty'] ?></u></td>
                                            <td> Weight: <u><?php echo $data['weight'] ?></u></td>
                                        </tr> 
                                        <tr>
                                            <td>Make Ready : <div class="radio radio-inline">
                                                        <input type="radio" disabled="" id="inlineradio5" value="Yes" name="ready" <?php if($data_complete['ready'] == 'Yes') echo 'checked' ?>>
                                                        <label for="inlineradio5"> Yes </label>
                                                    </div></e><e class="aks_value"><div style="margin-left: 11px;" class="radio radio-inline">
                                                        <input type="radio" disabled="" id="inlineradio6" value="No" name="ready" <?php if($data_complete['ready'] == 'No') echo 'checked' ?>>
                                                        <label for="inlineradio6"> No </label>
                                                    </div></td>
                                            <td colspan="2">Job Completed : <div class="radio radio-inline">
                                                        <input type="radio" disabled="" id="inlineradio7" value="Yes" name="completed" <?php if($data_complete['completed'] == 'Yes') echo 'checked' ?>>
                                                        <label for="inlineradio7"> Yes </label>
                                                    </div></e><e class="aks_value"><div style="margin-left: 11px;" class="radio radio-inline">
                                                        <input type="radio" disabled="" id="inlineradio8" value="No" name="completed" <?php if($data_complete['completed'] == 'No') echo 'checked' ?>>
                                                        <label for="inlineradio8"> No </label>
                                                    </div></td>
                                            
                                            
                                        </tr> 

                                        <tr>
                                            <td>Machine Cleaning : <div class="radio radio-inline">
                                                        <input type="radio" disabled="" id="inlineradio9" value="Yes" name="cleaning" <?php if($data_complete['cleaning'] == 'Yes') echo 'checked' ?>>
                                                        <label for="inlineradio9"> Yes </label>
                                                    </div></e><e class="aks_value"><div style="margin-left: 11px;" class="radio radio-inline">
                                                        <input type="radio" disabled="" id="inlineradio10" value="No" name="cleaning" <?php if($data_complete['cleaning'] == 'No') echo 'checked' ?>>
                                                        <label for="inlineradio10"> No </label>
                                                    </div></td>
                                            <td colspan="2">Guide set : <div class="radio radio-inline">
                                                        <input type="radio" disabled="" id="inlineradio11" value="Yes" name="guide" <?php if($data_complete['guide'] == 'Yes') echo 'checked' ?>>
                                                        <label for="inlineradio11"> Yes </label>
                                                    </div></e><e class="aks_value"><div style="margin-left: 11px;" class="radio radio-inline">
                                                        <input type="radio" disabled="" id="inlineradio12" value="No" name="guide" <?php if($data_complete['guide'] == 'No') echo 'checked' ?>>
                                                        <label for="inlineradio12"> No </label>
                                                    </div></td>
                                            
                                        </tr> 

                                        <tr>
                                            <td>Glue Set : <div class="radio radio-inline">
                                                        <input type="radio" disabled="" id="inlineradio9" value="Yes" name="glue" <?php if($data_complete['glue'] == 'Yes') echo 'checked' ?>>
                                                        <label for="inlineradio9"> Yes </label>
                                                    </div></e><e class="aks_value"><div style="margin-left: 11px;" class="radio radio-inline">
                                                        <input type="radio" disabled="" id="inlineradio10" value="No" name="glue" <?php if($data_complete['glue'] == 'No') echo 'checked' ?>>
                                                        <label for="inlineradio10"> No </label>
                                                    </div></td>
                                            <td colspan="2">Blanket set : <div class="radio radio-inline">
                                                        <input type="radio" disabled="" id="inlineradio11" value="Yes" name="blanket" <?php if($data_complete['blanket'] == 'Yes') echo 'checked' ?>>
                                                        <label for="inlineradio11"> Yes </label>
                                                    </div></e><e class="aks_value"><div style="margin-left: 11px;" class="radio radio-inline">
                                                        <input type="radio" disabled="" id="inlineradio12" value="No" name="blanket" <?php if($data_complete['blanket'] == 'No') echo 'checked' ?>>
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
                                                    foreach ($data_hourse as $d) {
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
                <button id="btn" class="print-btn btn btn-info pull-right" role="button">Generate Print</button>
            </div>
        </div>
        <div style="height: 440px;"></div>
    </div>
</div>
</div>
<!-- /.main content -->
</div>
<script type="text/javascript">
    $('.print-btn').click(function() {
        w = window.open();
        var ht = $('.print-div').html()
        var head = $('head').html()
        w.document.write('<html>');
        w.document.write('<head>');
        w.document.write(head);
        // w.document.write('<meta name="viewport" content="width=device-width, initial-scale=1.0">');
        // w.document.write('<link rel="stylesheet" type="text/css" href="' + url + '/assets/css/bootstrap.min.css">');
        // w.document.write('<link rel="stylesheet" type="text/css" href="' + url + '/assets/css/bootstrap-responsive.min.css">');
        // w.document.write('<link rel="stylesheet" type="text/css" href="' + url + '/assets/css/font-awesome.min.css">');
        // w.document.write('<link rel="stylesheet" type="text/css" href="' + url + '/assets/css/style.css">');
        // w.document.write('<link rel="stylesheet" type="text/css" href="' + url + '/assets/css/responsive.css">');
        w.document.write('<style>h4.product-totle{padding-left:150px}</style>')
        w.document.write('<style>.product-tital{padding-left:160px;position: fixed;margin-top: -30px;}</style>')
        w.document.write('<style>. table.minimalistBlack {width: 100%;height: 200px; text-align: left; border-collapse: collapse;}</style>')
         w.document.write('<style>table.minimalistBlack td, table.minimalistBlack th {border: 1px solid #000000;padding: 5px 4px;}</style>')
         w.document.write('<style>table.minimalistBlack tbody td {font-size: 13px;}</style>')
         w.document.write('<style>table.minimalistBlack thead {background: #CFCFCF;background: -moz-linear-gradient(top, #dbdbdb 0%, #d3d3d3 66%, #CFCFCF 100%);background: -webkit-linear-gradient(top, #dbdbdb 0%, #d3d3d3 66%, #CFCFCF 100%);background: linear-gradient(to bottom, #dbdbdb 0%, #d3d3d3 66%, #CFCFCF 100%);border-bottom: 3px solid #000000;}</style>')
         w.document.write('<style>table.minimalistBlack thead th {font-size: 15px;font-weight: bold;color: #000000;text-align: left;}</style>')
        w.document.write('</head>');
        w.document.write('<body>');
        w.document.write(ht);
        w.document.write('<body>');
        w.document.write('</html>');
        setTimeout(function() {
            w.print();
            w.close();
        }, 300);
    })
</script>