
<div class=control-sidebar-bg></div>
<div id=page-wrapper>
    <div class=content>
        <div class=content-header>
            <div class=header-icon style="margin-top: -9px;">
                <i class="pe-7s-note"></i>
            </div>
            <div class=header-title>
                <h1>Cutting Machine Form</h1>
                <small></small>
                <ol class=breadcrumb>
                    <li><i class=pe-7s-home></i> Home</li>
                    <li class="active">Cutting Machine Form</li>

                </ol>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <div class="panel panel-bd ">
                    <div class="panel-heading">
                        <div class="panel-title">
                            <h4>Cutting Machine Form</h4>
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
                                                <input type="text" class="form-control" placeholder="" value="<?php echo $job['machine_Name'] ?>" readonly>
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
                                                <input type="number" class="form-control" placeholder="" value="<?php echo $job['qty'] ?>" readonly>
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
                                            <div class="form-group col-lg-6">
                                                <label for="" class="col-sm-3 col-form-label">Board Name</label>
                                                <div class="col-sm-9">
                                                <input type="text" class="form-control" placeholder="" value="<?php echo $job['type'] ?>" readonly>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="form-group col-lg-6">
                                                <label for="" class="col-sm-3 col-form-label">Gsm</label>
                                                <div class="col-sm-9">
                                                <input type="text" class="form-control" placeholder="" value="<?php echo $job['gsm'] ?>" readonly>
                                                </div>
                                            </div>
                                            <div class="form-group col-lg-6">
                                                <label for="" class="col-sm-3 col-form-label">Board size</label>
                                                <div class="col-sm-9">
                                                <input type="text" class="form-control" placeholder="" value="<?php echo $job['size'] ?>" readonly>
                                                </div>
                                            </div>
                                            
                                        </div>
                                        <div class="form-group row">
                                            <div class="form-group col-lg-6">
                                                <label for="" class="col-sm-3 col-form-label">Quantity</label>
                                                <div class="col-sm-9">
                                                <input type="text" class="form-control" placeholder="" name="quantity">
                                                </div>
                                            </div>
                                            <div class="form-group col-lg-6">
                                                <label for="" class="col-sm-3 col-form-label">Conversion</label>
                                                <div class="col-sm-9">
                                                <input type="text" class="form-control" placeholder="" name="conversion" value="<?php echo $job['Conversion'] ?>" readonly>
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <div class="form-group row">
                                            
                                            <div class="col-lg-6">
                                            <label for="example-color-input" class="col-sm-3 col-form-label">Machine Cleaning</label>
                                            <div class="col-sm-9">
                                                <div class="radio radio-info radio-inline">
                                                        <input type="radio" id="inlineRadio7" value="Yes" name="cleaning" checked="">
                                                        <label for="inlineRadio7"> Yes </label>
                                                    </div>
                                                    <div class="radio radio-info radio-inline">
                                                        <input type="radio" id="inlineRadio8" value="No" name="cleaning">
                                                        <label for="inlineRadio8"> No </label>
                                                    </div>
                                            </div>

                                        </div>
                                         <div class="col-lg-6">
                                            <label for="example-color-input" class="col-sm-3 col-form-label">Size set</label>
                                            <div class="col-sm-9">
                                                <div class="radio radio-info radio-inline">
                                                        <input type="radio" id="inlineRadio9" value="Yes" name="size" checked="">
                                                        <label for="inlineRadio9"> Yes </label>
                                                    </div>
                                                    <div class="radio radio-info radio-inline">
                                                        <input type="radio" id="inlineRadio10" value="No" name="size">
                                                        <label for="inlineRadio10"> No </label>
                                                    </div>
                                            </div>
                                        </div>   
                                        </div>
                                        <div class="form-group row">
                                            
                                            <div class="form-group col-lg-6">
                                                <label for="" class="col-sm-3 col-form-label">Start time</label>
                                                <div class="col-sm-9">
                                                <input type="datetime-local" class="form-control" placeholder="" value="<?php echo date('Y-m-d\TH:i', strtotime($job['start_date'])) ?>" readonly>
                                                </div>
                                            </div> 
                                            <div class="form-group col-lg-6">
                                                <label for="" class="col-sm-3 col-form-label">End time</label>
                                                <div class="col-sm-9">
                                                <input type="datetime-local" class="form-control" placeholder="" value="<?php echo date('Y-m-d\TH:i', strtotime($job['end_date'])) ?>" readonly>
                                                </div>
                                            </div> 
                                        </div>
                                        <div class="form-group row">
                                           
                                            
                                            <div class="form-group col-lg-12">
                                                <label for="" class="col-sm-3 col-form-label">Total Production</label>
                                                <div class="col-sm-9">
                                                <input type="text" class="form-control" placeholder="" name="production">
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
<!-- /.main content -->
</div>
