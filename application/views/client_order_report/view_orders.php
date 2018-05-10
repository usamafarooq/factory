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
										
									</div>
								</div>
								<div class="panel-body">
									
									<div class="table-responsive">
										<table id="dataTableExample2" class="table table-bordered table-striped table-hover">
											<thead>
												<tr>
													<th>Wo No</th>
													<th>Item Code</th>
													<th>Item Name</th>
													<th>Client</th>
													<th>Deliver Qty</th>
												</tr>
											</thead>
										    <tbody>
										    	<?php
										    		foreach ($order as $o) {
										    	?>
												<tr>
													<td><?php echo $o['wo_id'] ?></td>
													<td><?php echo $o['Item_Code'] ?></td>
													<td><?php echo $o['Description'] ?></td>
													<td><?php echo $o['name'] ?></td>
													<td>
														<?php 
															$total = 0;
															$qty = explode('+', $o['qty']);
			                                                $carton = explode('+', $o['carton']);
			                                                for ($i=0; $i < sizeof($qty); $i++) { 
			                                                    $total = $total + ($qty[$i] * $carton[$i]);
			                                                }
			                                                echo $total;
														?>
													</td>
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






