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
                <h1>Add Production plan</h1>
                <small></small>
                <ol class="breadcrumb">
                    <li><a href="index.html"><i class="pe-7s-home"></i> Home</a></li>
                    <li class="active">Add Production plan</li>
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
        <form method="post" id="requisition" action="<?php echo base_url() ?>requisition/insert" enctype="multipart/form-data">
            <input type="hidden" name="wo_id" value="<?php echo $production_plan["WO_no"] ?>">
            <input type="hidden" name="type" value="Production Plan">
            <div class="row">
                <div class="col-sm-12">
                    <div class="panel panel-bd ">
                        <div class="panel-heading">
                            <div class="panel-title">
                                <h4>Add Order</h4>
                            </div>
                        </div>
                        <div class="panel-body">
                            <div class="form-group row">
                                <label for="example-text-input" class="col-sm-3 col-form-label">Store<span class="required">*</span></label>
                                <div class="col-sm-9">
                                    <select class="form-control" name="store_id" required="">
                                        <option>Select Store</option>
                                        <?php foreach ($table_store as $t) {?>
                                        <option value="<?php echo $t["id"] ?>"><?php echo $t["Name"] ?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="example-text-input" class="col-sm-3 col-form-label">Category<span class="required">*</span></label>
                                <div class="col-sm-9">
                                    <select class="form-control category" required="">
                                        <option>Select Category</option>
                                        <?php foreach ($table_category as $t) {?>
                                        <option value="<?php echo $t["id"] ?>"><?php echo $t["Name"] ?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="example-text-input" class="col-sm-3 col-form-label">Sub Category<span class="required">*</span></label>
                                <div class="col-sm-9">
                                    <select class="form-control sub-category" name="">
                                        <option>Select Sub Category</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="example-text-input" class="col-sm-3 col-form-label">Product<span class="required">*</span></label>
                                <div class="col-sm-9">
                                    <select class="form-control change-product" name="Product" >
                                        <option>Select Product</option>
                                   </select>
                                </div>
                            </div>
                            <div class="row form-group">
                                <label class="col-sm-12 col-form-label">Order Items</label>
                                <div class="col-md-12">
                                    <div class="table-responsive">
                                        <table class="table table-bordered table-striped table-hover product-table">
                                            <thead>
                                                <tr>
                                                    <th>Product Name (Product Code)</th>
                                                    <th>Net Unit Cost</th>
                                                    <th>Quantity</th>
                                                    <th>Subtotal (USD)</th>
                                                    <th><i class="fa fa-trash-o" style="opacity:0.5; filter:alpha(opacity=50);"></i></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                
                                            </tbody>
                                            <tfoot>
                                                <tr>
                                                    <th>Total</th>
                                                    <th></th>
                                                    <th class="qty">0.00</th>
                                                    <th class="total">0.00</th>
                                                    <th><i class="fa fa-trash-o" style="opacity:0.5; filter:alpha(opacity=50);"></i></th>
                                                </tr>
                                            </tfoot>
                                        </table>
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
        <form method="post" action="" enctype="multipart/form-data">
            <div class="row">
                <div class="col-sm-12">
                    <div class="panel panel-bd ">
                        <div class="panel-heading">
                            <div class="panel-title">
                                <h4>Add Production plan</h4>
                            </div>
                        </div>
                        <div class="panel-body">
                            <div class="add-div row">
                                <div class="form-group row">
                                    <div class="form-group col-lg-6">
                                        <label for="example-text-input" class="col-sm-3 col-form-label">Type</label>
                                        <div class="col-sm-9">
                                            <select class="form-control" name="type[]">
                                        <option>Select Type</option>
                                        <?php 
                                          foreach ($flows as $f) {
                                            echo '<option value="'.$f['id'].'">'.$f['Name'].'</option>';
                                          }
                                        ?>
                                    </select>
                                        </div>

                                    </div>
                                    <div class="form-group col-lg-6">
                                        <label for="example-text-input" class="col-sm-3 col-form-label">Machine</label>
                                        <div class="col-sm-9">
                                            <select class="form-control sel" name="machine[]">
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
                                      <option value="Hi">Hi</option>
                                      <option value="Low">Low</option>
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
                                            echo '<option value="'.$f['id'].'">'.$f['Name'].'</option>';
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
                                            <input class="form-control" name="start_date[]" type="date" id="example-text-input" placeholder="">
                                        </div>

                                    </div>
                                    <div class="form-group col-lg-6">
                                        <label for="example-text-input" class="col-sm-3 col-form-label">End Date</label>
                                        <div class="col-sm-9">
                                            <input class="form-control" name="end_date[]" type="date" value="" id="example-text-input" placeholder="">
                                        </div>

                                    </div>

                                </div>
                                <div class="form-group row">
                                    <div class="col-lg-2 delet pull-right">
                                        <button type="button" class="add-sub btn btn-success ">Add More</button>
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
        </form>
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
<!-- </form></tbody></table></div></div></form></div></div></div></div></div></div></div>
 --><!-- /.main content -->
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
        chart.clearChart();
        chart.draw(data, options);
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
</script>
<script type="text/javascript" src="http://defiantjs.com/defiant.js/dist/defiant-latest.min.js"></script>

<script type="text/javascript">
    
    function count_qty() {
        var con = 0;
        $('[name="quantity[]"]').each(function() {
            con = con + parseInt($(this).val())
        })
        $('.qty').text(con+'.00')
    }
    function count_total() {
        var con = 0;
        $('.sub_total').each(function() {
            con = con + parseInt($(this).text())
        })
        $('.total').text(con+'.00')
    }
    function add_qty() {
        $('[name="quantity[]"]').keyup(function() {
            var qty = parseInt($(this).val())
            var cost = $(this).parent().parent().find('.net_cost').text()
            cost = parseInt(cost)
            $(this).parent().parent().find('.sub_total').text(parseInt(qty*cost))
            count_qty()
            count_total()
        })
    }
    function remove_row() {
        $('.remove').click(function() {
            var id = $(this).attr('data-id')
            $(this).parent().parent().remove()
            $('.change-product option[value="'+id+'"]').css('display','block')
            count_qty()
            count_total()
        })
    }
    function change_price() {
        $('[name="price[]"]').keyup(function() {
            var cost = parseInt($(this).val())
            $(this).parent().parent().find('.net_cost').text(cost)
            var qty = $(this).parent().parent().find('[name="quantity[]"]').val()
            qty = parseInt(qty)
            $(this).parent().parent().find('.sub_total').text(parseInt(qty*cost))
            count_qty()
            count_total()
        })
    }
    var app = $('.product-table tbody');
    var product = [];
    $('.category').change(function() {
        var id = $(this).val()
        $.ajax({
            url: "<?php echo base_url() ?>purchases/get_sub_category/"+id,
            type: 'GET',
            dataType: 'json', // added data type
            success: function(res) {
                $('.sub-category option').not('option:first').remove()
                for (var i = 0; i < res.length; i++) {
                    $('.sub-category').append('<option value="'+res[i]['id']+'">'+res[i]['Name']+'</option>')
                }
            }
        });
    })
    $('.sub-category').change(function() {
        var parent = $('.category').val()
        var id = $(this).val()
        $.ajax({
            url: "<?php echo base_url() ?>purchases/get_product/"+id+'/'+parent,
            type: 'GET',
            dataType: 'json', // added data type
            success: function(res) {
                //product = JSON.parse(res);
                console.log(res)
                $('.change-product option').not('option:first').remove()
                for (var i = 0; i < res.length; i++) {
                    $('.change-product').append('<option value="'+res[i]['id']+'">'+res[i]['Product_Name']+'</option>')
                }
                product = res;
            }
        });
    })
    $('.change-product').change(function() {
        var id = $(this).val()
        res = JSON.search( product, '//*[id="'+id+'"]' );
        var data = res[0]
        app.append('<tr>')
        app.append('</tr>')
        app.find('tr').last().append('<td>'+data['Product_Name']+'</td>')
        app.find('tr').last().append('<td class="net_cost">'+data['Product_Cost']+'</td>')
        app.find('tr').last().append('<td><input type="hidden" name="product_id[]" value="'+id+'"><input type="number" class="form-control" name="quantity[]" value="1"></td>')
        app.find('tr').last().append('<td class="sub_total">'+data['Product_Cost']+'</td>')
        app.find('tr').last().append('<td><i class="fa fa-trash-o remove" data-id="'+data['id']+'"></i></td>')
        count_qty()
        count_total()
        add_qty()
        remove_row()
        $('.change-product').val('')
        $('.change-product option[value="'+id+'"]').css('display','none')
    })
    $("#requisition").submit(function(e) {
      var url = $(this).attr('action'); // the script where you handle the form input.
      $.ajax({
         type: "POST",
         url: url,
         data: $(this).serialize(), // serializes the form's elements.
         success: function(data)
         {
            if(data == 1){
              $("#requisition").hide()
            }
            else{
              alert('Data Not Insert')
            }
         }
      });
      e.preventDefault(); // avoid to execute the actual submit of the form.
    });
</script>