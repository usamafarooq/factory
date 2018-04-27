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
                            <h1>View Requisition</h1>
                            <small> </small>
                            <ol class="breadcrumb">
                                <li><a href="<?php echo base_url() ?>"><i class="pe-7s-home"></i> Home</a></li>

                                <li class="active">View Requisition</li>
                            </ol>
                        </div>
                    </div> <!-- /. Content Header (Page header) -->

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
                                                    <?php 
                                                        if ($permission["edit"] == "1" || $permission["deleted"] == "1"){
                                                    ?>
                                                    <th>Action</th>
                                                    <?php } ?>
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
                                                    <?php 
                                                        if ($permission["edit"] == "1" || $permission["deleted"] == "1"){
                                                    ?>
                                                    <td>
                                                        <img src="<?php echo base_url() ?>assets/icons/view_detail.png" data-toggle="modal" data-target="#myModal1" onclick="get_id_view(<?php echo $module["id"] ?>)" title="View Detail" alt="View Detail" width="25" height="25">
                                                        <?php 
                                                            if($module["status"] != 'Complete'){
                                                        ?>
                                                        <!-- <div class="dropdown">
                                                          <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Action
                                                          <span class="caret"></span></button>
                                                          <ul class="dropdown-menu">
                                                            <li><a href="<?php echo base_url('requisition/change_status/'.$module["id"].'/Pending') ?>">Pending</a></li>
                                                            <li><a href="#" data-toggle="modal" data-target="#myModal" onclick="get_id(<?php echo $module["id"] ?>)">Complete</a></li>
                                                            <li><a href="<?php echo base_url('product_release/change_status/'.$module["id"].'/Completed') ?>">Completed</a></li>
                                                          </ul>
                                                        </div> -->
                                                        <a href="#" data-toggle="modal" data-target="#myModal" onclick="get_id(<?php echo $module["id"] ?>)"><img src="<?php echo base_url() ?>assets/icons/complete_process.png" title="Completed" alt="View Plane" width="25" height="25"></a>
                                                        <?php } ?>
                                                        
                                                    </td>
                                                    <?php } ?>
                                                </tr>
                                                <?php } ?>
                                            </tbody>
                                        </table>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div style="height: 450px;"></div>
                </div> <!-- /.main content -->
            </div><!-- /#page-wrapper -->
        </div><!-- /#wrapper -->
        <!-- START CORE PLUGINS -->

<style type="text/css">
    ul.dropdown-menu {
    z-index:  999;
}
</style>
<div id="myModal1" class="modal fade" role="dialog">
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
                    <table class="table table-bordered table-striped table-hover product-table1">
                        <thead>
                            <tr>
                                <th>Product Name</th>
                                <th>Quantity</th>
                                <th>Received Quantity</th>
                                <th>Product Unit</th>
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
<form method="post" action="<?php echo base_url('requisition/received_order') ?>">
    <input type="hidden" name="id" id="order_id">
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
                                    <th>Avalible Quantity</th>
                                    <th>Product Unit</th>
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
            <button type="submit" class="btn btn-info">Submit</button>
          </div>
        </div>

      </div>
    </div>
</form>
<link href="<?php echo base_url('assets/assets/plugins/bootstrap3-editable-1.5.1/bootstrap3-editable/css/bootstrap-editable.css') ?>" rel="stylesheet" type="text/css"/>

<script type="text/javascript">
    function arrayLookup(searchValue,array,searchIndex,returnIndex) // Posted on Tathyika.com (also refer for more codes there)
{
  var returnVal = null;
  var i;
  for(i=0; i<array.length; i++)
  {
    if(array[i][searchIndex]==searchValue)
    {
      returnVal = array[i][returnIndex];
      break;
    }
  }
  
  return returnVal;
}
    function get_id(id) {
        $('#order_id').val(id)
        $.ajax({
            url: "<?php echo base_url() ?>requisition/get_order/"+id,
            type: 'GET',
            dataType: 'json', // added data type
            success: function(res) {
                //console.log(res)
                var tb  = $('.product-table tbody')
                tb.empty()
                for (var i = 0; i < res.length; i++) {
                    var arr = [];
                    var data = res[i]
                    var products = data['products']
                    products = products.split(',')
                    arr.push({
                        value: data['product_id'], 
                        text:  data['Product_Name'],
                        qty: (data['stock'] - data['orders'])
                    });
                    for (var a = 0; a < products.length; a++) {
                        products[a] = products[a].split(':')
                        arr.push({
                            value: products[a][2], 
                            text:  products[a][3],
                            qty: (products[a][0] - products[a][1])
                        });
                    }
                    //console.log(products)
                    tb.append('<tr>')
                    tb.append('</tr>')
                    tb.find('tr').last().append('<td><a href="#" id="'+data['product_id']+'" data-type="select" data-pk="1" data-value="'+data['product_id']+'" data-title="Change Product">'+data['Product_Name']+'</a></td>')
                    $('#'+data['product_id']).editable({
                        showbuttons: false,
                        //prepend: "not selected",
                        source: arr,
                        display: function (value, sourceData) {
                            //console.log(value)
                            //console.log(sourceData)
                            //console.log(arrayLookup(value,sourceData,'value','qty'))
                            var qty = arrayLookup(value,sourceData,'value','qty')
                            $(this).parent().parent().find('.stock_qty').text(qty)
                            $(this).parent().parent().find('.product_id').val(value)
                            var colors = {"": "gray", 1: "green", 2: "blue"},
                                    elem = $.grep(sourceData, function (o) {
                                        return o.value == value;
                                    });

                            if (elem.length) {
                                $(this).text(elem[0].text).css("color", colors[value]);
                            } else {
                                $(this).empty();
                            }
                        },
                        success: function(pro) {
                            //alert($(this).attr('data-value'))
                        }
                    });
                    tb.find('tr').last().append('<td>'+data['quantity']+'</td>')
                    tb.find('tr').last().append('<td><input type="hidden" name="detail_id[]" value="'+data['id']+'"><input type="hidden" class="product_id" name="product_id[]" value="'+data['product_id']+'"><input type="number" class="form-control" name="received_quantity[]" value="'+data['quantity']+'"></td>')
                    tb.find('tr').last().append('<td class="stock_qty">'+(data['stock'] - data['orders'])+'</td>')
                    tb.find('tr').last().append('<td>'+data['Product_Unit']+'</td>')
                    tb.find('tr').last().append('<td><input type="text" class="form-control" name="remarks[]" value=""></td>')
                }
            }
        });
    }
</script>

<script type="text/javascript">
    function get_id_view(id) {
        $.ajax({
            url: "<?php echo base_url() ?>requisition/get_order/"+id,
            type: 'GET',
            dataType: 'json', // added data type
            success: function(res) {
                console.log(res)
                var tb  = $('.product-table1 tbody')
                tb.empty()
                for (var i = 0; i < res.length; i++) {
                    var data = res[i]
                    tb.append('<tr>')
                    tb.append('</tr>')
                    tb.find('tr').last().append('<td>'+data['Product_Name']+'</td>')
                    tb.find('tr').last().append('<td>'+data['quantity']+'</td>')
                    tb.find('tr').last().append('<td>'+data['received_quantity']+'</td>')
                    tb.find('tr').last().append('<td>'+data['Product_Unit']+'</td>')
                    tb.find('tr').last().append('<td>'+data['remarks']+'</td>')
                }
            }
        });
    }
</script>


