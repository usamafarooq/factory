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
							<h1>View Production plan</h1>
							<small> </small>
							<ol class="breadcrumb">
								<li><a href="<?php echo base_url() ?>"><i class="pe-7s-home"></i> Home</a></li>

								<li class="active">View Production plan</li>
							</ol>
						</div>
					</div> <!-- /. Content Header (Page header) -->

					<div class="row">
						<div class="col-sm-12">
							<div class="panel panel-bd">
								<div class="panel-heading">
									<div class="panel-title">
										<h4>View Production plan</h4>
									</div>
								</div>
								<div class="panel-body">
									
									<div class="table-responsive">
										<!-- <table id="dataTableExample2" class="table table-bordered table-striped table-hover">
											<thead>
												<tr>
													<th>Id</th><th>Date</th><th>Description</th><th>Item Code</th><th>MIS no</th><th>Job Description</th><th>Board Name</th><th>Gsm</th><th>Board Size</th><th>Quantity</th><th>Conversion</th><th>Planned sheet Size</th><th>Balanced Offcut Size</th><th>Offcut Quantity</th><th>PO Qty</th><th>Planned qty sheets</th><th>Ups</th><th>Planned qty</th><?php 
														if ($permission["edit"] == "1" || $permission["deleted"] == "1"){
													?>
													<th>Action</th>
													<?php } ?>
												</tr>
											</thead>
										    <tbody>
										    	<?php
										    		foreach ($production_plan as $module) {
										    	?>
												<tr>
													<td><?php echo $module["id"] ?></td><td><?php echo $module["Date"] ?></td><td><?php echo $module["Description"] ?></td><td><?php echo $module["Item_Code"] ?></td><td><?php echo $module["MIS_no"] ?></td><td><?php echo $module["Job_Description"] ?></td><td><?php echo $module["Board_Name"] ?></td><td><?php echo $module["Gsm"] ?></td><td><?php echo $module["Board_Size"] ?></td><td><?php echo $module["Quantity"] ?></td><td><?php echo $module["Conversion"] ?></td><td><?php echo $module["Planned_sheet_Size"] ?></td><td><?php echo $module["Balanced_Offcut_Size"] ?></td><td><?php echo $module["Offcut_Quantity"] ?></td><td><?php echo $module["PO_Qty"] ?></td><td><?php echo $module["Planned_qty_sheets"] ?></td><td><?php echo $module["Ups"] ?></td><td><?php echo $module["Planned_qty"] ?></td><?php 
														if ($permission["edit"] == "1" || $permission["deleted"] == "1"){
													?>
													<td>
														<?php 
															if ($permission["edit"] == "1") {
														?>
														<a href="<?php echo base_url() ?>production_plan/edit/<?php echo $module["id"] ?>"><img src="<?php echo base_url() ?>assets/record1.png" title="View Order" alt="View Order" width="25" height="25"></a>
														<?php } ?>
														<?php 
															if ($permission["deleted"] == "1") {
														?>
		                                                <a href="<?php echo base_url() ?>production_plan/delete/<?php echo $module["id"] ?>"><img src="<?php echo base_url() ?>assets/d-icon.png" title="Delete" alt="Delete" width="25" height="25"></a>
		                                                <?php } ?>
	                                                </td>
	                                                <?php } ?>
												</tr>
												<?php } ?>
											</tbody>
										</table> -->
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
													<th>Delivery Date</th>
													<th>Delivery Status</th>
													<th>Instruction Remarks</th>
													<th>Status</th>
													<?php 
														if ($permission["created"] == "1"){
													?>
													<th>Action</th>
													<?php } ?>
												</tr>
											</thead>
										    <tbody>
										    	<?php
										    		foreach ($production_plan as $module) {
										    	?>
												<tr>
													<td><?php echo $module["id"] ?></td>
													<td><?php echo $module["Client"] ?></td>
													<td><?php echo $module["Item_Code"] ?></td>
													<td><?php echo $module["quantity"] ?></td>
													<td><?php echo $module["PO_No"] ?></td>
													<td><?php echo $module["PO_Date"] ?></td>
													<td><?php echo $module["Batch_No"] ?></td>
													<td><?php echo $module["Delivery_Date"] ?></td>
													<td><?php echo $module["Delivery_Status"] ?></td>
													<td><?php echo $module["Instruction_Remarks"] ?></td>
													<td>
														<?php 
															if ($module["approval"] == "1") {
														?>
														Approved
														<?php 
															}
															else {
														?>
		                                                panding
		                                                <?php } ?>
	                                                </td>
	                                                <?php 
														if ($permission["created"] == "1"){
													?>
	                                                <td>
	                                                	<?php 
	                                                		if ($module['p_id'] == 0) {
	                                                	?>
	                                                	<a href="<?php echo base_url() ?>production_plan/create/<?php echo $module["id"] ?>"><img src="<?php echo base_url() ?>assets/icons/create.png" title="Create Production Plane" alt="Create Production Plane" width="25" height="25"></a>
	                                                	<?php } else{?>
														<a href="<?php echo base_url() ?>production_plan/edit/<?php echo $module["id"] ?>"><img src="<?php echo base_url() ?>assets/icons/edit.png" title="Edit" alt="Edit" width="25" height="25"></a>
														<a href="<?php echo base_url() ?>production_plan/inventory/<?php echo $module["id"] ?>"><img src="<?php echo base_url() ?>assets/icons/create.png" title="Create Inventory" alt="Create Inventory" width="25" height="25"></a>
														<a href="<?php echo base_url() ?>production_plan/plan_flow/<?php echo $module["id"] ?>"><img src="<?php echo base_url() ?>assets/icons/production_flow.png" title="View Flow" alt="View Flow" width="25" height="25"></a>
														<a href="<?php echo base_url() ?>production_plan/view_plan/<?php echo $module["id"] ?>"><img src="<?php echo base_url() ?>assets/icons/view_plan.png" title="View Production Plane" alt="View Production Plane" width="25" height="25"></a>


														<a target="_blank" href="<?php echo base_url() ?>all_orders/view_plane/<?php echo $module["id"] ?>"><img src="<?php echo base_url() ?>assets/icons/view_flows.png" title="View Plan" alt="View Plan" width="25" height="25"></a>

														<a href="<?php echo base_url() ?>production_plan/flow/<?php echo $module["plane_id"] ?>"><img src="<?php echo base_url() ?>assets/icons/create.png" title="Create Production Flow" alt="Create Production Flow" width="25" height="25"></a>

														<a href="<?php echo base_url() ?>production_plan/edit_flow/<?php echo $module["plane_id"] ?>"><img src="<?php echo base_url() ?>assets/icons/edit.png" title="Edit Production Flow" alt="Edit Production Flow" width="25" height="25"></a>
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
		





