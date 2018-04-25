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

