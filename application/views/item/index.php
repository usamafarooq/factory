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
                <h1>View Item</h1>
                <small> </small>
                <ol class="breadcrumb">
                    <li><a href="<?php echo base_url() ?>"><i class="pe-7s-home"></i> Home</a></li>

                    <li class="active">View Item</li>
                </ol>
            </div>
        </div>
        <!-- /. Content Header (Page header) -->
        <div class="row">
            <div class="col-sm-12">
                <div class="panel panel-bd">
                    <div class="panel-heading">
                        <div class="panel-title">
                            <h4>View Item</h4>
                            <?php 
								if ($permission["created"] == "1") {
							?>
                            <a href="<?php echo base_url("item/create") ?>"><button class="btn btn-info pull-right">Add Item</button></a>
                            <?php } ?>
                        </div>
                    </div>
                    <div class="panel-body">

                        <div class="table-responsive">
                            <table id="dataTableExample2" class="table table-bordered table-striped table-hover">
                                <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th>Item Code</th>
                                        <th>Description</th>
                                        <th>Client Name</th>
                                        <th>Work Type</th>
                                        <?php 
											if ($permission["edit"] == "1" || $permission["deleted"] == "1"){
										?>
                                        <th>Action</th>
                                        <?php } ?>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
							    		foreach ($item as $module) {
							    	?>
                                        <tr>
                                            <td>
                                                <?php echo $module["id"] ?>
                                            </td>
                                            <td>
                                                <?php echo $module["Item_Code"] ?>
                                            </td>
                                            <td>
                                                <?php echo $module["Description"] ?>
                                            </td>
                                            <td>
                                                <?php echo $module["client_Name"] ?>
                                            </td>
                                            <td>
                                                <?php echo $module["Work_Type"] ?>
                                            </td>
                                            <?php 
												if ($permission["edit"] == "1" || $permission["deleted"] == "1"){
											?>
                                            <td>
                                                <?php 
													if ($permission["created"] == "1") {
												?>
                                                <?php if($module['bom'] == 0){ ?>
                                                <a href="<?php echo base_url() ?>item/create_bomb/<?php echo $module["id"] ?>"><img src="<?php echo base_url() ?>assets/icons/create_bom.png" title="Create Bomb" alt="Create Bomb" width="25" height="25"></a>
                                                <?php }else{ ?>
                                                <a href="<?php echo base_url() ?>item/view_bomb/<?php echo $module["id"] ?>"><img src="<?php echo base_url() ?>assets/icons/view_bomb.png" title="View Bomb" alt="View Bomb" width="25" height="25"></a>
                                                <?php } ?>
                                                <?php } ?>
                                                <?php 
													if ($permission["edit"] == "1") {
												?>
                                                <a href="<?php echo base_url() ?>item/edit/<?php echo $module["id"] ?>"><img src="<?php echo base_url() ?>assets/icons/edit.png" title="Edit" alt="Edit" width="25" height="25"></a>
                                                <?php } ?>
                                                <?php 
													if ($permission["deleted"] == "1") {
												?>
                                                <a href="<?php echo base_url() ?>item/delete/<?php echo $module["id"] ?>"><img src="<?php echo base_url() ?>assets/d-icon.png" title="Delete" alt="Delete" width="25" height="25"></a>
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
