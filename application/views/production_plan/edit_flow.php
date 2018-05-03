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
                                            </tbody>
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
        
        <form method="post" action="" enctype="multipart/form-data">
            <div class="row">
                <div class="col-sm-12">
                    <div class="panel panel-bd ">
                        <div class="panel-heading">
                            <div class="panel-title">
                                <h4>Edit Production Flow</h4>
                            </div>
                        </div>
                        <div class="panel-body">
                            <?php foreach ($production_flow as $p) {?>
                            <input type="hidden" name="ids[]" value="<?php echo $p['id'] ?>">
                            <div class="add-div row">
                                <div class="form-group row">
                                    <div class="form-group col-lg-6">
                                        <label for="example-text-input" class="col-sm-3 col-form-label">Type</label>
                                        <div class="col-sm-9">
                                            <select class="form-control" name="type[]">
                                        <option>Select Type</option>
                                        <?php 
                                          foreach ($flows as $f) {
                                            $selected= '';
                                            if ($p['type'] == $f['id']) {
                                                $selected = 'selected';
                                            }
                                            echo '<option value="'.$f['id'].'" '.$selected.'>'.$f['Name'].'</option>';
                                          }
                                        ?>
                                    </select>
                                        </div>

                                    </div>
                                    <div class="form-group col-lg-6">
                                        <label for="example-text-input" class="col-sm-3 col-form-label">Machine</label>
                                        <div class="col-sm-9">
                                            <select class="form-control sel" data-id="<?php echo $p['machine'] ?>" name="machine[]">
                                        <option>Select Machine</option>
                                    </select>
                                        </div>

                                    </div>

                                </div>
                                <div class="form-group row">

                                    <div class="form-group col-lg-6">
                                        <label for="example-text-input" class="col-sm-3 col-form-label">Priority</label>
                                        <div class="col-sm-9">
                                            <select class="form-control" name="priority[]">
                                      <option>Select Priority</option>
                                      <option value="Hi" <?php if ($p['priority'] == 'Hi') echo 'selected' ?>>Hi</option>
                                      <option value="Low" <?php if ($p['priority'] == 'Low') echo 'selected' ?>>Low</option>
                                    </select>
                                        </div>

                                    </div>
                                    <div class="form-group col-lg-6">
                                        <label for="example-text-input" class="col-sm-3 col-form-label">Parent</label>
                                        <div class="col-sm-9">
                                            <select class="form-control" name="parent[]">
                                        <option>Select Parent</option>
                                        <?php 
                                          foreach ($flows as $f) {
                                            $selected= '';
                                            if ($p['parent_id'] == $f['id']) {
                                                $selected = 'selected';
                                            }
                                            echo '<option value="'.$f['id'].'" '.$selected.'>'.$f['Name'].'</option>';
                                          }
                                        ?>
                                    </select>
                                        </div>

                                    </div>

                                </div>
                                <div class="form-group row">

                                    <div class="form-group col-lg-6">
                                        <label for="example-text-input" class="col-sm-3 col-form-label">Start Date</label>
                                        <div class="col-sm-9">
                                            <input class="form-control start" name="start_date[]" type="datetime-local" id="example-text-input" placeholder="" value="<?php echo date('Y-m-d\TH:i', strtotime($p['start_date'])) ?>">
                                        </div>

                                    </div>
                                    <div class="form-group col-lg-6">
                                        <label for="example-text-input" class="col-sm-3 col-form-label">End Date</label>
                                        <div class="col-sm-9">
                                            <input class="form-control end" name="end_date[]" type="datetime-local" id="example-text-input" placeholder="" value="<?php echo date('Y-m-d\TH:i', strtotime($p['end_date'])) ?>">
                                        </div>

                                    </div>

                                </div>
                            </div>
                            <hr>
                            <?php } ?>
                            <div class="form-group row">

                                <div class="col-sm-12">
                                    <button type="submit" class="btn btn-primary pull-right">Update</button>
                                </div>
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

</div>
<button type="button" style="display: none;" class="btn btn-info btn-lg click-btn" data-toggle="modal" data-target="#dialog-modal">Open Modal</button>

<div class="modal fade" id="dialog-modal" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Modal Header</h4>
            </div>
            <div class="modal-body">
                <div class=row>
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 statistic-box  border" style="  background-color: #fcfdff ">
                        <h5 style="color: black;"><strong>1 : Cutting Machine Detail</strong></h5>
                        <div id="chart_div3"></div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>

    </div>
</div>
<!-- </form></tbody></table></div></div></form></div></div></div></div></div></div></div> -->
<!-- /.main content-->
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

<!-- start chart 1 -->
<script type="text/javascript">
    var values = []
    google.charts.load('current', {
        'packages': ['gantt']
    });
    google.charts.setOnLoadCallback(drawChart);

    function drawChart(values) {
        //console.log(values)
        var data = new google.visualization.DataTable();
        /*data.addColumn('string', 'Task ID');
        data.addColumn('string', 'Task Name');
        data.addColumn('date', 'Start Date');
        data.addColumn('date', 'End Date');
        data.addColumn('number', 'Duration');
        data.addColumn('number', 'Percent Complete');
        data.addColumn('string', 'Dependencies');*/
        data.addColumn('string', 'Task ID');
        data.addColumn('string', 'Task Name');
        data.addColumn('date', 'Start Date');
        data.addColumn('date', 'End Date');
        data.addColumn('number', 'Duration');
        data.addColumn('number', 'Percent Complete')
        data.addColumn('string', 'Dependencies');
        data.addRows(values.length);
        for (var i = 0; i < values.length; i++) {
            data.setCell(i, 0, values[i].id);
            data.setCell(i, 1, values[i].Job_Description);
            data.setCell(i, 2, new Date(values[i].start_date));
            data.setCell(i, 3, new Date(values[i].end_date));
            data.setCell(i, 4, null);
            data.setCell(i, 5, 0);
            data.setCell(i, 6, null);
        }
        /*data.addRows([
          ['2014Spring', 'Job 1',
           new Date(2015, 2, 22), new Date(2015, 5, 20), null, 90, null],
          ['2014Summer', 'Job 2',
           new Date(2014, 5, 21), new Date(2014, 8, 20), null, 100, null],
          ['2014Autumn', 'Job 3',
           new Date(2014, 8, 21), new Date(2014, 11, 20), null, 100, null],
          ['2014Winter', 'Job 4',
           new Date(2014, 11, 21), new Date(2015, 2, 21), null, 100, null],
          ['2015Spring', 'Job 5',
           new Date(2015, 2, 22), new Date(2015, 5, 20), null, 50, null],
          ['2015Summer', 'Job 6',
           new Date(2015, 5, 21), new Date(2015, 8, 20), null, 0, null]
        ]);*/
        var options = {
            height: 190,
            width: 550,
            gantt: {
                trackHeight: 30
            }
        };
        var chart = new google.visualization.Gantt(document.getElementById('chart_div3'));
        google.visualization.events.addListener(chart, 'ready', afterDraw);
        chart.clearChart();
        chart.draw(data, options);
        setTimeout(function() {
            if (typeof $("g").length !== undefined) {
        if ($("g").length >= 1) {
            //alert('1')
            $('#chart_div3').css('opacity',0);
            $('.loader').css('opacity',1);
            $('#chart_div3 svg g').last().prev().prev().prev().addClass('hover');
            $('.hover').hover(function(){$('#chart_div3').css('opacity',1)});
        }
        else{
            //alert('2')
            $('#chart_div3').css('opacity',1);
            $('.loader').css('opacity',0);
        }
       }
       else{
        //alert('3')
        $('#chart_div3').css('opacity',1);
        $('.loader').css('opacity',0);
       }
        }, 300)
    }
    function afterDraw(){

    }
</script>
<script type="text/javascript">
    $("body").on("click", ".add-sub", function() {
        var html = $(".add-div").first().clone();
        $(html).find(".delet").html("<a class='btn btn-danger remove'><i class='fa fa-trash-o' aria-hidden='true'></i> </a> " + ' <a class="btn btn-success add-sub"><strong> + </strong> </a>');
        $(".add-div").last().after(html);
        $(".add-div").last().find('input,select').val('')
        get_machines()
    });
    $("body").on("click", ".remove", function() {
        $(this).parents(".add-div").remove();
    });

    function get_machines() {
        $('[name="type[]"]').change(function() {
            var th = $(this).parent().parent().parent()
            console.log(th)
            var val = $(this).val()
            $.ajax({
                url: "<?php echo base_url('production_plan/get_machines/') ?>" + val,
                type: 'GET',
                dataType: 'json', // added data type
                success: function(res) {
                    th.find('[name="machine[]"] option').not('[name="machine[]"] option:first-child').remove()
                    for (var i = 0; i < res.length; i++) {
                        th.find('[name="machine[]"]').append('<option value="' + res[i].id + '">' + res[i].machine_Name + '</option>')
                    }
                }
            });
        })
        $('.sel').change(function() {
            var val = $(this).val()
            $.ajax({
                url: "<?php echo base_url('production_plan/get_machine_detail/') ?>" + val,
                type: 'GET',
                dataType: 'json', // added data type
                success: function(res) {
                    $('.click-btn').click();
                    drawChart(res)
                }
            });
        });
    }
    get_machines()
    $('body').on('change', '.start', function() {
        var start = $(this).val()
        var myDate = new Date(start);
        myDate.setDate(myDate.getDate() + 1);
        var todaydate = myDate
        var dd = todaydate.getDate();
        var mm = todaydate.getMonth()+1; //January is 0!
        if(dd<10){  dd='0'+dd } 
        if(mm<10){  mm='0'+mm } 
        var yyyy = todaydate.getFullYear();
        var date = yyyy+'-'+mm+'-'+dd;
        $(this).parent().parent().parent().find('.end').attr('min',date)
        //alert(date)
    })
    $('[name="type[]"]').each(function() {
            var th = $(this).parent().parent().parent()
            console.log(th)
            var val = $(this).val()
            $.ajax({
                url: "<?php echo base_url('production_plan/get_machines/') ?>" + val,
                type: 'GET',
                dataType: 'json', // added data type
                success: function(res) {
                    th.find('[name="machine[]"] option').not('[name="machine[]"] option:first-child').remove()
                    for (var i = 0; i < res.length; i++) {
                        th.find('[name="machine[]"]').append('<option value="' + res[i].id + '">' + res[i].machine_Name + '</option>')
                    }
                    th.find('[name="machine[]"]').val(th.find('[name="machine[]"]').attr('data-id'))
                }
            });
        })
</script>
