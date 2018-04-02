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
							<h1>View Work_orders</h1>
							<small> </small>
							<ol class="breadcrumb">
								<li><a href="<?php echo base_url() ?>"><i class="pe-7s-home"></i> Home</a></li>

								<li class="active">View Work_orders</li>
							</ol>
						</div>
					</div> <!-- /. Content Header (Page header) -->

					<div class="row">
						<div class="col-sm-12">
							<div class="panel panel-bd">
								<div class="panel-heading">
									<div class="panel-title">
										<h4>View Work_orders</h4>
									</div>
								</div>
								<div class="panel-body">
									
									<div class="table-responsive">
										<table id="dataTableExample2" class="table table-bordered table-striped table-hover">
											<thead>
												<tr>
													<th>Id</th>
													<th>Client</th>
													<th>Item Code</th>
													<th>Quantity</th>
													<th>PO No</th>
													<th>PO Date</th>
													<th>Batch No</th>
													<th>Start Date</th>
													<th>Delivery Date</th>
													<th>Delivery Status</th>
													<th>Instruction Remarks</th>
													<?php 
														if ($permission["edit"] == "1"){
													?>
													<th>Action</th>
													<?php } ?>
												</tr>
											</thead>
										    <tbody>
										    	<?php
										    		foreach ($orders as $module) {
										    	?>
												<tr>
													<td><?php echo $module["id"] ?></td>
													<td><?php echo $module["Client"] ?></td>
													<td><?php echo $module["Item_Code"] ?></td>
													<td><?php echo $module["quantity"] ?></td>
													<td><?php echo $module["PO_No"] ?></td>
													<td><?php echo $module["PO_Date"] ?></td>
													<td><?php echo $module["Batch_No"] ?></td>
													<td><?php echo $module["created_at"] ?></td>
													<td><?php echo $module["Delivery_Date"] ?></td>
													<td><?php echo $module["Delivery_Status"] ?></td>
													<td><?php echo $module["Instruction_Remarks"] ?></td>
													<?php 
														if ($permission["edit"] == "1"){
													?>
													<td>
														<?php 
															if ($module['reports'] == 0) {
														?>
														<a href="<?php echo base_url() ?>printing/report_submit/<?php echo $module["id"] ?>"><img src="<?php echo base_url() ?>assets/record1.png" title="View Order" alt="View Order" width="35" height="35"></a>
														<?php 
															}
															else{
																echo 'Submit';
															}
														?>
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
					





