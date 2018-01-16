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
							<h1>View Orders</h1>
							<small> </small>
							<ol class="breadcrumb">
								<li><a href="<?php echo base_url() ?>"><i class="pe-7s-home"></i> Home</a></li>

								<li class="active">View Orders</li>
							</ol>
						</div>
					</div> <!-- /. Content Header (Page header) -->

					<div class="row">
						<div class="col-sm-12">
							<div class="panel panel-bd">
								<div class="panel-heading">
									<div class="panel-title">
										<h4>View Orders</h4>
										<?php 
											if ($permission["created"] == "1") {
										?>
										<a href="<?php echo base_url("orders/create") ?>"><button class="btn btn-info pull-right">Add Orders</button></a>
										<?php } ?>
									</div>
								</div>
								<div class="panel-body">
									
									<div class="table-responsive">
										<table id="dataTableExample2" class="table table-bordered table-striped table-hover">
											<thead>
												<tr>
													<th>Date</th><th>Name</th><th>Designation</th><th>Quantity</th><th>Order Type</th><th>Remarks</th><?php 
														if ($permission["edit"] == "1" || $permission["deleted"] == "1"){
													?>
													<th>Action</th>
													<?php } ?>
												</tr>
											</thead>
										    <tbody>
										    	<?php
										    		foreach ($all_orders as $module) {
										    	?>
												<tr>
													<td><?php echo $module["Date"] ?></td><td><?php echo $module["Name"] ?></td><td><?php echo $module["Designation"] ?></td><td><?php echo $module["quantity"] ?></td><td><?php echo $module["Order_Type"] ?></td><td><?php echo $module["Remarks"] ?></td><?php 
														if ($permission["edit"] == "1" || $permission["deleted"] == "1"){
													?>
													<td>
														<?php 
															if ($permission["edit"] == "1") {
														?>


														<div class="btn-group  m-b-5">
					                                        <button type="button" class="btn btn-success">Action</button>
					                                        <button type="button" data-toggle="dropdown" class="btn dropdown-toggle btn-success" aria-expanded="true">
					                                            <span class="caret"></span>
					                                            <span class="sr-only">success</span>
					                                        </button>
					                                        <ul role="menu" class="dropdown-menu" style="z-index: 999;">
					                                            <li><a href="

					                                            	<?php echo base_url() ?>all_orders/cutting_machine/<?php echo $module["id"] ?>


					                                            	">Cutting</a></li>
					                                            <li class="divider"></li>
					                                            <li><a href="http://localhost/new_pro/admin/printing_machine">Printing</a></li>
					                                            <li class="divider"></li>
					                                            <li><a href="http://localhost/new_pro/admin/die_cutting_machine">Die Cutting</a></li>
					                                            <li class="divider"></li>
					                                            <li><a href="http://localhost/new_pro/admin/pasting_machine">Pasting</a></li>
					                                        </ul>
					                                    </div>







														<a href="<?php echo base_url() ?>orders/edit/<?php echo $module["id"] ?>"><img src="<?php echo base_url() ?>assets/record1.png" title="View Order" alt="View Order" width="35" height="35"></a>
														<?php } ?>
														<?php 
															if ($permission["deleted"] == "1") {
														?>
		                                                <a href="<?php echo base_url() ?>orders/delete/<?php echo $module["id"] ?>"><img src="<?php echo base_url() ?>assets/d-icon.png" title="Delete" alt="Delete" width="35" height="35"></a>

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
					</div>
					</div>
					
		<!-- START CORE PLUGINS -->






