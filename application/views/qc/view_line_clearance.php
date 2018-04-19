<style type="text/css">
    table.minimalistBlack {

        width: 100%;
        height: 200px;
        text-align: left;
        border-collapse: collapse;
    }

    table.minimalistBlack td,
    table.minimalistBlack th {
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
                <h1>Line Clearance</h1>
                <small></small>
                <ol class=breadcrumb>
                    <li><i class=pe-7s-home></i> Home</li>
                    <li class="active">Line Clearance</li>
                </ol>
            </div>
        </div>
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
        
        w.document.write('<style>. table.minimalistBlack {width: 100%;height: 200px; text-align: left; border-collapse: collapse;}</style>')
w.document.write('<style>.panel-title {    text-align: center;}</style>')
 w.document.write('<style>.radio-inline input[type="radio"]:checked + label:before {content: "*";order: 1;}</style>')
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