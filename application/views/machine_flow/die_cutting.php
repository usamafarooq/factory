<div class=control-sidebar-bg>
</div>
<div id=page-wrapper>
    <div class=content>
        <div class=content-header>
            <div class=header-icon style="margin-top: -9px;">
                <i class="pe-7s-note"></i>
            </div>
            <div class=header-title>
                <h1>Die Cutting Machine Form</h1>
                <small></small>
                <ol class=breadcrumb>
                    <li><i class=pe-7s-home></i> Home</li>
                    <li class="active">Die Cutting Machine Form</li>

                </ol>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <div class="panel panel-bd ">
                    <div class="panel-heading">
                        <div class="panel-title">
                            <h4>Die Cutting Machine Form</h4>
                        </div>
                    </div>
                    <div class="panel-body">
                        <div class="row">
                             <form method="post" action="">
                                <input type="hidden" name="plane_id" value="<?php echo $job['id'] ?>">
                                <input type="hidden" name="flow_id" value="<?php echo $job['flow'] ?>">
                                <div class="col-sm-12">
                                    <div class="panel-body">
                                        <div class="form-group row">
                                            <div class="form-group col-lg-6">
                                                <label for="" class="col-sm-3 col-form-label">Date</label>
                                                <div class="col-sm-9">
                                                    <input type="text" class="form-control" id="" value="<?php echo date("Y/m/d")?>" placeholder="" readonly="">
                                                </div>
                                            </div>
                                            <div class="form-group col-lg-6">
                                                <label for="" class="col-sm-3 col-form-label">Client</label>
                                                <div class="col-sm-9">
                                                    <input type="text" class="form-control" id="" placeholder="" value="<?php echo $job['client_Name'] ?>" readonly>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="form-group col-lg-6">
                                                <label for="" class="col-sm-3 col-form-label">W.O #</label>
                                                <div class="col-sm-9">
                                                    <input type="text" class="form-control" placeholder="" value="<?php echo $job['WO_no'] ?>" readonly>
                                                </div>
                                            </div>

                                            <div class="form-group col-lg-6">
                                                <label for="" class="col-sm-3 col-form-label">Job Name</label>
                                                <div class="col-sm-9">
                                                    <input type="text" class="form-control" placeholder="" value="<?php echo $job['Job_Description'] ?>" readonly>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="form-group col-lg-6">
                                                <label for="" class="col-sm-3 col-form-label">Machine</label>
                                                <div class="col-sm-9">
                                                    <input type="text" class="form-control" placeholder=""  value="<?php echo $job['machine_Name'] ?>" readonly>
                                                </div>
                                            </div>
                                            <div class="form-group col-lg-6">
                                                <label for="" class="col-sm-3 col-form-label">P.O. No.</label>
                                                <div class="col-sm-9">
                                                    <input type="text" class="form-control" placeholder="" value="<?php echo $job['PO_No'] ?>" readonly>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="form-group col-lg-6">
                                                <label for="" class="col-sm-3 col-form-label">Planned Qty</label>
                                                <div class="col-sm-9">
                                                    <input type="number" class="form-control" placeholder="" value="<?php echo $job['Planned_qty'] ?>" readonly>
                                                </div>
                                            </div>
                                            <div class="form-group col-lg-6">
                                                <label for="" class="col-sm-3 col-form-label">Operator</label>
                                                <div class="col-sm-9">
                                                    <input type="text" class="form-control" placeholder="" name="operator">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="form-group col-lg-6">
                                                <label for="" class="col-sm-3 col-form-label">Assistant</label>
                                                <div class="col-sm-9">
                                                    <input type="text" class="form-control" placeholder="" name="assistant">
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <label for="example-color-input" class="col-sm-3 col-form-label">Process</label>
                                                <div class="col-sm-9">
                                                    <div class="radio radio-info radio-inline">

                                                        <input type="radio" id="inlineRadio1" value="Cutting" name="process" checked="">
                                                        <label for="inlineRadio1"> Cutting </label>
                                                    </div>

                                                    <div class="radio radio-info radio-inline">

                                                        <input type="radio" id="inlineRadio2" value="Embossing" name="process">
                                                        <label for="inlineRadio2"> Embossing </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <div class="form-group col-lg-6">
                                                <label for="" class="col-sm-3 col-form-label">Job (Opening)</label>
                                                <div class="col-sm-9">
                                                    <input type="number" class="form-control" placeholder="" name="opening">
                                                </div>
                                            </div>
                                            <div class="form-group col-lg-6">
                                                <label for="" class="col-sm-3 col-form-label">Job Closing</label>
                                                <div class="col-sm-9">
                                                    <input type="number" class="form-control" placeholder="" name="closing">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="form-group col-lg-6">
                                                <label for="" class="col-sm-3 col-form-label">Output</label>
                                                <div class="col-sm-9">
                                                    <input type="number" class="form-control" placeholder="" name="output">
                                                </div>
                                            </div>
                                            <div class="form-group col-lg-6">
                                                <label for="" class="col-sm-3 col-form-label">Waste</label>
                                                <div class="col-sm-9">
                                                    <input type="number" class="form-control" placeholder="" name="waste">
                                                </div>
                                            </div>
                                            
                                        </div>
                                        
                                    </div>
                                    <button type="submit" class="btn btn-primary pull-right">Submit</button>
                            </form>

                            
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /.main content -->
</div>