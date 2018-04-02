<div class=control-sidebar-bg></div>
<div id=page-wrapper>
    <div class=content>
        <div class=content-header>
            <div class=header-icon style="margin-top: -9px;">
                <i class="pe-7s-note"></i>
            </div>
            <div class=header-title>
                <h1>label & leaflet cutting</h1>
                <small></small>
                <ol class=breadcrumb>
                    <li><i class=pe-7s-home></i> Home</li>
                    <li class="active">label & leaflet cutting</li>

                </ol>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <div class="panel panel-bd ">
                    <div class="panel-heading">
                        <div class="panel-title">
                            <h4>label & leaflet cutting</h4>
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
                                                <label for="example-text-input" class="col-sm-4">Date</label>
                                                <div class="col-sm-8">
                                                    <input type="text" class="form-control" id="" value="<?php echo date("Y/m/d")?>" placeholder="" readonly="">
                                                </div>
                                            </div>
                                            <div class="form-group col-lg-6">
                                                <label for="example-text-input" class="col-sm-4">Shift</label>
                                                <div class="col-sm-8">
                                                     <div class="col-sm-9">
                                                    <div class="radio radio-info radio-inline">
                                                        <input type="radio" id="inlineRadio7" value="G" name="shift" checked="">
                                                        <label for="inlineRadio7"> G </label>
                                                    </div>
                                                    <div class="radio radio-info radio-inline">
                                                        <input type="radio" id="inlineRadio8" value="N" name="shift">
                                                        <label for="inlineRadio8"> N </label>
                                                    </div>
                                                </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="form-group col-lg-6">
                                                <label for="example-text-input" class="col-sm-4">W.O #</label>
                                                <div class="col-sm-8">
                                                    <input type="text" class="form-control" placeholder="" value="<?php echo $job['WO_no'] ?>" readonly>
                                                </div>
                                            </div>

                                            <div class="form-group col-lg-6">
                                                <label for="example-text-input" class="col-sm-4">Job Name</label>
                                                <div class="col-sm-8">
                                                    <input type="text" class="form-control" placeholder=""  value="<?php echo $job['Job_Description'] ?>" readonly>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="form-group col-lg-6">
                                                <label for="example-text-input" class="col-sm-4">Machine</label>
                                                <div class="col-sm-8">
                                                    <input type="number" class="form-control" placeholder="" value="<?php echo $job['machine_Name'] ?>" readonly>
                                                </div>
                                            </div>
                                            <div class="form-group col-lg-6">
                                                <label for="example-text-input" class="col-sm-4">P.O. No.</label>
                                                <div class="col-sm-8">
                                                    <input type="text" class="form-control" placeholder="" value="<?php echo $job['PO_No'] ?>" readonly>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="form-group col-lg-6">
                                                <label for="example-text-input" class="col-sm-4">Planned Qty</label>
                                                <div class="col-sm-8">
                                                    <input type="number" class="form-control" placeholder="" value="<?php echo $job['Planned_qty'] ?>" readonly>
                                                </div>
                                            </div>
                                            <div class="form-group col-lg-6">
                                                <label for="example-text-input" class="col-sm-4">Operator</label>
                                                <div class="col-sm-8">
                                                    <input type="text" class="form-control" placeholder="" name="operator">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="form-group col-lg-6">
                                                <label for="example-text-input" class="col-sm-4">Assistant</label>
                                                <div class="col-sm-8">
                                                    <input type="text" class="form-control" placeholder="" name="assistant">
                                                </div>
                                            </div>
                                            <div class="form-group col-lg-6">
                                                <label for="example-text-input" class="col-sm-4">Paper size </label>
                                                <div class="col-sm-8">
                                                    <input type="text" class="form-control" placeholder="" name="paper">
                                                </div>
                                            </div>

                                        </div>
                                        <div class="form-group row">
                                            <div class="form-group col-lg-6">
                                                <label for="example-text-input" class="col-sm-4">Quantity</label>
                                                <div class="col-sm-8">
                                                    <input type="text" class="form-control" placeholder="" name="quantity">
                                                </div>
                                            </div>
                                            <div class="form-group col-lg-6">
                                                <label for="example-text-input" class="col-sm-4">Conversion </label>
                                                <div class="col-sm-8">
                                                    <input type="text" class="form-control" placeholder="" name="conversion">
                                                </div>
                                            </div>

                                        </div>
                                         <div class="form-group row">
                                            <div class="form-group col-lg-6">
                                                <label for="example-text-input" class="col-sm-4">Machine Cleaning</label>
                                                <div class="col-sm-8">
                                               <div class="col-sm-9">
                                                    <div class="radio radio-info radio-inline">
                                                        <input type="radio" id="inlineRadio9" value="Yes" name="cleaning" checked="">
                                                        <label for="inlineRadio9"> Yes </label>
                                                    </div>
                                                    <div class="radio radio-info radio-inline">
                                                        <input type="radio" id="inlineRadio10" value="No" name="cleaning">
                                                        <label for="inlineRadio10"> No </label>
                                                    </div>
                                                </div>
                                            </div>
                                            </div>
                                            <div class="form-group col-lg-6">
                                                <label for="example-text-input" class="col-sm-4">Size set </label>
                                                <div class="col-sm-8">
                                               <div class="col-sm-9">
                                                    <div class="radio radio-info radio-inline">
                                                        <input type="radio" id="inlineRadio11" value="Yes" name="size" checked="">
                                                        <label for="inlineRadio11"> Yes </label>
                                                    </div>
                                                    <div class="radio radio-info radio-inline">
                                                        <input type="radio" id="inlineRadio12" value="No" name="size">
                                                        <label for="inlineRadio12"> No </label>
                                                    </div>
                                                </div>
                                            </div>
                                            </div>
                                        </div>
                                            <div class="form-group row">
                                            <div class="form-group col-lg-6">
                                                <label for="example-text-input" class="col-sm-4">Start time</label>
                                                <div class="col-sm-8">
                                                    <input type="date" class="form-control" placeholder="" value="<?php echo $job['start_date'] ?>" readonly>
                                                </div>
                                            </div>
                                            <div class="form-group col-lg-6">
                                                <label for="example-text-input" class="col-sm-4">End time </label>
                                                <div class="col-sm-8">
                                                    <input type="date" class="form-control" placeholder="" value="<?php echo $job['end_date'] ?>" readonly>
                                                </div>
                                            </div>

                                        </div>
                                        <div class="form-group row">
                                            <div class="form-group col-lg-6">
                                                <label for="example-text-input" class="col-sm-4">Total Production</label>
                                                <div class="col-sm-8">
                                                    <input type="text" class="form-control" placeholder="" name="production">
                                                </div>
                                            </div>
                                            <div class="form-group col-lg-6">
                                                <label for="example-text-input" class="col-sm-4">Waste </label>
                                                <div class="col-sm-8">
                                                    <input type="text" class="form-control" placeholder="" name="waste">
                                                </div>
                                            </div>

                                        </div>
                                        <div class="form-group row">
                                           
                                            <div class="form-group col-lg-12">
                                                <label for="" class="col-sm-3 col-form-label">Remarks</label>
                                                <div class="col-sm-9">
                                                <textarea class="form-control" id="exampleTextarea" name="remarks" style="    margin-left: -115px;     width: 766px;" rows="2"></textarea>
                                                </div>
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
</div>
<!-- /.main content -->
</div>