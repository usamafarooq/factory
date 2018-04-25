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
                    <li><a href="<?php echo base_url() ?>"><i class="pe-7s-home"></i> Home</a></li>
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
                                                <?php 
                                                    $p_sheet = ($order['quantity'] / $order['ups']) + ($order['quantity'] / $order['ups']) * $order['order_Margin'] / 100;
                                                ?>
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
                                                    $ups = $order['conversion']; 
                                                    $ups = explode('/', $ups);
                                                    $ups = $ups[sizeof($ups) - 1];
                                                ?>
                                                <tr>
                                                    <td>Quantity : <u><?php echo $qty = $production_plan["Quantity"] ?></u></td>
                                                    <td colspan="2">Packet sheets : <u><?php echo $production_plan["pack_sheet"] ?></u></td>

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
                                        <option value="">Select Store</option>
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
                                    <select class="form-control change-product" disabled="">
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
                                                    <th>Avalible Quantity</th>
                                                    <th>Product Unit</th>
                                                    <th>Subtotal (USD)</th>
                                                    <th><i class="fa fa-trash-o" style="opacity:0.5; filter:alpha(opacity=50);"></i></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php foreach ($products as $p) {?>
                                                <tr>
                                                    <td><?php echo $p['Product_Name'] ?></td>
                                                    <td class="net_cost"><?php echo $p['Product_Cost'] ?></td>
                                                    <td><input type="hidden" name="product_id[]" value="<?php echo $p['id'] ?>"><input type="number" class="form-control" name="quantity[]" value="1"></td>
                                                    <td class="stock_qty">0</td>
                                                    <td><?php echo $p['Product_Unit'] ?></td>
                                                    <td class="sub_total"><?php echo $p['Product_Cost'] ?></td>
                                                    <td><i class="fa fa-trash-o remove" data-id="<?php echo $p['id'] ?>"></i></td>
                                                </tr>
                                                <?php } ?>
                                            </tbody>
                                            <tfoot>
                                                <tr>
                                                    <th>Total</th>
                                                    <th></th>
                                                    <th class="qty">0.00</th>
                                                    <th></th>
                                                    <th></th>
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
        </div>
    </div>

</div>
        </div>
    </div>

</div>
<!-- </form></tbody></table></div></div></form></div></div></div></div></div></div></div> -->
<!-- /.main content
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>-->

<!-- start chart 1 -->
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
        var store_id = $('[name="store_id"]').val()
        $.ajax({
            url: "<?php echo base_url() ?>purchases/get_product/"+id+'/'+parent+'/'+store_id,
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
        app.find('tr').last().append('<td class="stock_qty">'+ (data['stock'] - data['orders'])+'</td>')
        app.find('tr').last().append('<td>'+data['Product_Unit']+'</td>')
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
              window.location.href = '<?php echo base_url('production_plan') ?>'
            }
            else{
              alert('Data Not Insert')
            }
         }
      });
      e.preventDefault(); // avoid to execute the actual submit of the form.
    });
    $('[name="store_id"]').change(function() {
        $('.change-product').attr('disabled', true)
        if ($(this).val() != null && $(this).val() != '') {
            $('.change-product').attr('disabled', false)
        }
        var url = '<?php echo base_url('store_stock/get_product_stock') ?>'
        var data = $("#requisition").serialize()
        $.ajax({
            type: "POST",
            url: url,
            data: data, // serializes the form's elements.
            success: function(data)
            {
                data = JSON.parse(data)
                for (var i = 0; i < data.length; i++) {
                    //console.log(data[i])
                    //console.log($('[value="'+data[i].id+'"]').val())
                    $('[value="'+data[i].id+'"]').parent().parent().find('.stock_qty').text(data[i].stock - data[i].orders)
                }
            }
        });
    })
    count_qty()
    count_total()
    add_qty()
    remove_row()
</script>
