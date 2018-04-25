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
                <h1>View Product release</h1>
                <small> </small>
                <ol class="breadcrumb">
                    <li><a href="<?php echo base_url() ?>"><i class="pe-7s-home"></i> Home</a></li>

                    <li class="active">View Product release</li>
                </ol>
            </div>
        </div>
        <!-- /. Content Header (Page header) -->

        <div class="row">
            <div class="col-sm-12">
                <div class="panel panel-bd">
                    <div class="panel-heading">
                        <div class="panel-title">
                            <h4>View Product release</h4>
                            <?php 
								if ($permission["created"] == "1") {
							?>
                            <a href="<?php echo base_url("product_release/create") ?>"><button class="btn btn-info pull-right">Add Product release</button></a>
                            <?php } ?>
                        </div>
                    </div>
                    <div class="panel-body">

                        <div class="table-responsive">
                            <table id="dataTableExample2" class="table table-bordered table-striped table-hover">
                                <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th>Date</th>
                                        <th>Reference No</th>
                                        <th>Name</th>
                                        <th>Status</th>
                                        <th>Note</th>
                                        <?php 
											if ($permission["edit"] == "1" || $permission["deleted"] == "1"){
										?>
                                        <th>Action</th>
                                        <?php } ?>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
							    		foreach ($product_release as $module) {
							    	?>
                                        <tr>
                                            <td>
                                                <?php echo $module["id"] ?>
                                            </td>
                                            <td>
                                                <?php echo $module["Date"] ?>
                                            </td>
                                            <td>
                                                <?php echo $module["Reference_No"] ?>
                                            </td>
                                            <td>
                                                <?php echo $module["Name"] ?>
                                            </td>
                                            <td>
                                                <?php echo $module["Status"] ?>
                                            </td>
                                            <td>
                                                <?php echo $module["Note"] ?>
                                            </td>
                                            <?php 
												if ($permission["edit"] == "1" || $permission["deleted"] == "1"){
											?>
                                            <td>
                                            	<?php 
                                            		if($module["Status"] != 'Complete'){
                                            	?>
                                            	<div class="dropdown">
												  <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Action
												  <span class="caret"></span></button>
												  <ul class="dropdown-menu">
												    <li><a href="<?php echo base_url('product_release/change_status/'.$module["id"].'/Pending') ?>">Pending</a></li>
                                                    <li><a href="#" data-toggle="modal" data-target="#myModal" onclick="get_id(<?php echo $module["id"] ?>)">Complete</a></li>
												    <!-- <li><a href="<?php echo base_url('product_release/change_status/'.$module["id"].'/Completed') ?>">Completed</a></li> -->
												  </ul>
												</div>
												<?php } ?>
                                                <?php 
													if ($permission["edit"] == "1") {
												?>
                                                <a href="<?php echo base_url() ?>product_release/edit/<?php echo $module["id"] ?>"><img src="<?php echo base_url() ?>assets/icons/edit.png" title="Edit" alt="Edit" width="25" height="25"></a>
                                                <?php } ?>
                                                <?php 
													if ($permission["deleted"] == "1") {
												?>
                                                <a href="<?php echo base_url() ?>product_release/delete/<?php echo $module["id"] ?>"><img src="<?php echo base_url() ?>assets/d-icon.png" title="Delete" alt="Delete" width="25" height="25"></a>
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
    </div>
    <!-- /.main content -->

</div>
<style type="text/css">
	ul.dropdown-menu {
    z-index:  999;
}
</style>
<form method="post" action="<?php echo base_url('product_release/received_order') ?>">
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
<script type="text/javascript">
    function get_id(id) {
        $('#order_id').val(id)
        $.ajax({
            url: "<?php echo base_url() ?>product_release/get_order/"+id,
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
                    tb.find('tr').last().append('<td><input type="hidden" name="detail_id[]" value="'+data['id']+'"><input type="number" class="form-control" name="received_quantity[]" value="'+data['quantity']+'"></td>')
                }
            }
        });
    }
</script>