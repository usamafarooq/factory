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
                <h1>Add Clients</h1>
                <small></small>
                <ol class="breadcrumb">
                    <li><a href="<?php echo base_url() ?>"><i class="pe-7s-home"></i> Home</a></li>
                    <li class="active">Add Clients</li>
                </ol>
            </div>
        </div>
        <!-- /. Content Header (Page header) -->

        <form method="post" action="<?php echo base_url() ?>clients/insert" enctype="multipart/form-data">

            <div class="row">
                <div class="col-sm-12">
                    <div class="panel panel-bd ">
                        <div class="panel-heading">
                            <div class="panel-title">
                                <h4>Add Clients</h4>
                            </div>
                        </div>
                        <div class="panel-body">
                            <div class="form-group row">

                                <div class="form-group col-lg-6">
                                    <label for="example-text-input" class="col-sm-3 col-form-label">Client Name</label>
                                    <div class="col-sm-9">
                                        <input class="form-control" name="client_Name" type="text" value="" id="example-text-input" placeholder="">
                                    </div>

                                </div>
                                <div class="form-group col-lg-6">
                                    <label for="example-text-input" class="col-sm-3 col-form-label">Detail</label>
                                    <div class="col-sm-9">
                                        <textarea class="form-control" rows="1" name="Detail"></textarea>
                                    </div>

                                </div>
                            </div>
                            
                            <div class="form-group row">

                                <div class="form-group col-lg-6">
                                    <label for="example-text-input" class="col-sm-3 col-form-label">Order Margin</label>
                                    <div class="col-sm-9">
                                        <input class="form-control" name="order_Margin" type="number" value="" id="example-text-input" placeholder="">
                                    </div>

                                </div>
                                <div class="form-group col-lg-6">
                                    <label for="example-text-input" class="col-sm-3 col-form-label">Contact Person</label>
                                    <div class="col-sm-9">
                                        <input class="form-control" name="Contact_Person" type="text" value="" id="example-text-input" placeholder="">
                                    </div>

                                </div>
                            </div>
                            
                            <div class="form-group row">

                                <div class="form-group col-lg-6">
                                    <label for="example-text-input" class="col-sm-3 col-form-label">Contact Number</label>
                                    <div class="col-sm-9">
                                        <input class="form-control" name="Contact_Number" type="text" value="" id="example-text-input" placeholder="">
                                    </div>

                                </div>
                                <div class="form-group col-lg-6">
                                    <label for="example-text-input" class="col-sm-3 col-form-label">Email</label>
                                    <div class="col-sm-9">
                                        <input class="form-control" name="Email" type="text" value="" id="example-text-input" placeholder="">
                                    </div>

                                </div>
                            </div>
                            
                            <div class="form-group row">

                                <div class="form-group col-lg-6">
                                    <label for="example-text-input" class="col-sm-3 col-form-label">Address</label>
                                    <div class="col-sm-9">
                                        <textarea class="form-control" rows="1" name="Address"></textarea>
                                    </div>

                                </div>
                                <div class="form-group col-lg-6">
                                    <label for="example-text-input" class="col-sm-3 col-form-label">Company Name</label>
                                    <div class="col-sm-9">
                                        <input class="form-control" name="Company_Name" type="text" value="" id="example-text-input" placeholder="">
                                    </div>

                                </div>
                            </div>

                            <div class="form-group row">

                                <div class="form-group col-lg-6">
                                    <label for="example-text-input" class="col-sm-3 col-form-label">Type</label>
                                    <div class="col-sm-9">
                                        <select class="form-control" name="type">
                                            <option>Select Type</option>
                                            <option value="Gold">Gold</option>
                                            <option value="Silver">Silver</option>
                                            <option value="Platinum">Platinum</option>
                                        </select>
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
<!-- /.main content -->
</div>
<!-- /#page-wrapper -->
</div>
<!-- /#wrapper -->
<!-- START CORE PLUGINS -->