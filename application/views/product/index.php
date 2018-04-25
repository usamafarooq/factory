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
                <h1>View Product</h1>
                <small> </small>
                <ol class="breadcrumb">
                    <li><a href="<?php echo base_url() ?>"><i class="pe-7s-home"></i> Home</a></li>

                    <li class="active">View Product</li>
                </ol>
            </div>
        </div>
        <!-- /. Content Header (Page header) -->

        <div class="row">
            <div class="col-sm-12">
                <div class="panel panel-bd">
                    <div class="panel-heading">
                        <div class="panel-title">
                            <h4>View Product</h4>
                            <?php 
											if ($permission["created"] == "1") {
										?>
                            <a href="<?php echo base_url("product/create") ?>"><button class="btn btn-info pull-right">Add Product</button></a>
                            <?php } ?>
                        </div>
                    </div>
                    <div class="panel-body">

                        <div class="table-responsive">
                            <table id="dataTableExample2" class="table table-bordered table-striped table-hover">
                                <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th>Product Name</th>
                                        <th>Product Code</th>
                                        <!-- <th>Barcode</th> -->
                                        <th>Category</th>
                                        <th>Sub Category</th>
                                        <th>Product Unit</th>
                                        <th>Product Cost</th>
                                        <th>Product Price</th>
                                        <!-- <th>Product Image</th>
                                        <th>Product Details</th>
                                        <th>Product details for invoice</th> -->
                                        <?php 
											if ($permission["edit"] == "1" || $permission["deleted"] == "1"){
										?>
                                        <th>Action</th>
                                        <?php } ?>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
							    		foreach ($product as $module) {
							    	?>
                                        <tr>
                                            <td>
                                                <?php echo $module["id"] ?>
                                            </td>
                                            <td>
                                                <?php echo $module["Product_Name"] ?>
                                            </td>
                                            <td>
                                                <?php echo $module["Product_Code"] ?>
                                            </td>
                                            <!-- <td>
                                                <?php echo $module["Barcode"] ?>
                                            </td> -->
                                            <td>
                                                <?php echo $module["category"] ?>
                                            </td>
                                            <td>
                                                <?php echo $module["sub_category"] ?>
                                            </td>
                                            <td>
                                                <?php echo $module["Product_Unit"] ?>
                                            </td>
                                            <td>
                                                <?php echo $module["Product_Cost"] ?>
                                            </td>
                                            <td>
                                                <?php echo $module["Product_Price"] ?>
                                            </td>
                                            
                                            <!-- <td><a href="<?php echo base_url() ?>/<?php echo $module["Product_Image"] ?>">View File</a></td>
                                            <td>
                                                <?php echo $module["Product_Details"] ?>
                                            </td>
                                            <td>
                                                <?php echo $module["Product_details_for_invoice"] ?>
                                            </td> -->
                                            <?php 
												if ($permission["edit"] == "1" || $permission["deleted"] == "1"){
											?>
                                            <td>
                                                <?php 
													if ($permission["edit"] == "1") {
												?>
                                                <a href="<?php echo base_url() ?>product/edit/<?php echo $module["id"] ?>"><img src="<?php echo base_url() ?>assets/icons/edit.png" title="Edit" alt="Edit" width="25" height="25"></a>
                                                <?php } ?>
                                                <?php 
													if ($permission["deleted"] == "1") {
												?>
                                                <a href="<?php echo base_url() ?>product/delete/<?php echo $module["id"] ?>"><img src="<?php echo base_url() ?>assets/d-icon.png" title="Delete" alt="Delete" width="25" height="25"></a>
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