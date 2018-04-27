<div class=control-sidebar-bg>
</div>
<div id=page-wrapper>
    <div class=content>
        <div class=content-header>
            <div class=header-icon style="margin-top: -9px;">
                <i class="pe-7s-note"></i>
            </div>
            <div class=header-title>
                <h1>Printing Machine Form</h1>
                <small></small>
                <ol class=breadcrumb>
                    <li><i class=pe-7s-home></i> Home</li>
                    <li class="active">Printing Machine Form</li>

                </ol>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <div class="panel panel-bd ">
                    <div class="panel-heading">
                        <div class="panel-title">
                            <h4>Printing Machine Form</h4>
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
                                                    <input type="number" class="form-control" placeholder="" value="<?php echo $job['Planned_qty'] ?>" readonly>
                                                </div>
                                            </div>
                                            <div class="form-group col-lg-6">
                                                <label for="" class="col-sm-3 col-form-label">Operator</label>
                                                <div class="col-sm-9">
                                                    <input type="text" name="operator" class="form-control" placeholder="">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-lg-12">
                                                <label for="example-text-input" class="col-sm-3 col-form-label">Colors<span class="required">*</span></label>
                                                <?php 
                                                    $colors = explode(',', $job["colors"]);
                                                ?>
                                                <div class="col-sm-9">
                                                    <div class="checkbox checkbox-info checkbox-inline">
                                                        <input type="checkbox" id="inlineCheckbox1" value="Black" name="colors[]" disabled 
                                                            <?php
                                                            $key = array_search('Black', $colors);
                                                            if ($key >= -1) { 
                                                                if (array_key_exists($key,$colors)) {
                                                                    echo 'checked'; 
                                                                } 
                                                            } 
                                                            ?>>
                                                        <label for="inlineCheckbox1"> Black </label>
                                                    </div>
                                                    <div class="checkbox checkbox-info checkbox-inline">
                                                        <input type="checkbox" id="inlineCheckbox2" value="Cyan" name="colors[]" disabled
                                                        <?php
                                                            $key = array_search('Cyan', $colors);
                                                            if ($key >= -1) { 
                                                                if (array_key_exists($key,$colors)) {
                                                                    echo 'checked'; 
                                                                } 
                                                            } 
                                                            ?>>
                                                        <label for="inlineCheckbox2"> Cyan </label>
                                                    </div>
                                                    <div class="checkbox checkbox-info checkbox-inline">
                                                        <input type="checkbox" id="inlineCheckbox3" value="Magenta" name="colors[]" disabled
                                                        <?php
                                                            $key = array_search('Magenta', $colors);
                                                            if ($key >= -1) { 
                                                                if (array_key_exists($key,$colors)) {
                                                                    echo 'checked'; 
                                                                } 
                                                            } 
                                                            ?>>
                                                        <label for="inlineCheckbox3"> Magenta </label>
                                                    </div>
                                                    <div class="checkbox checkbox-info checkbox-inline">
                                                        <input type="checkbox" id="inlineCheckbox4" value="Yellow" name="colors[]" disabled
                                                        <?php
                                                            $key = array_search('Yellow', $colors);
                                                            if ($key >= -1) { 
                                                                if (array_key_exists($key,$colors)) {
                                                                    echo 'checked'; 
                                                                } 
                                                            } 
                                                            ?>>
                                                        <label for="inlineCheckbox4"> Yellow </label>
                                                    </div>
                                                    <div class="checkbox checkbox-info checkbox-inline">
                                                        <input type="checkbox" id="inlineCheckbox5" value="SPL1" name="colors[]" disabled
                                                        <?php
                                                            $key = array_search('SPL1', $colors);
                                                            if ($key >= -1) { 
                                                                if (array_key_exists($key,$colors)) {
                                                                    echo 'checked'; 
                                                                } 
                                                            } 
                                                            ?>>
                                                        <label for="inlineCheckbox5"> SPL </label>
                                                    </div>
                                                    <div class="checkbox checkbox-info checkbox-inline">
                                                        <input type="checkbox" id="inlineCheckbox6" value="SPL2" name="colors[]" disabled
                                                        <?php
                                                            $key = array_search('SPL2', $colors);
                                                            if ($key >= -1) { 
                                                                if (array_key_exists($key,$colors)) {
                                                                    echo 'checked'; 
                                                                } 
                                                            } 
                                                            ?>>
                                                        <label for="inlineCheckbox6"> SPL </label>
                                                    </div>
                                                    <div class="checkbox checkbox-info checkbox-inline">
                                                        <input type="checkbox" id="inlineCheckbox7" value="SPL3" name="colors[]" disabled
                                                        <?php
                                                            $key = array_search('SPL3', $colors);
                                                            if ($key >= -1) { 
                                                                if (array_key_exists($key,$colors)) {
                                                                    echo 'checked'; 
                                                                } 
                                                            } 
                                                            ?>>
                                                        <label for="inlineCheckbox7"> SPL </label>
                                                    </div>
                                                    <div class="checkbox checkbox-info checkbox-inline">
                                                        <input type="checkbox" id="inlineCheckbox8" value="SPL4" name="colors[]" disabled
                                                        <?php
                                                            $key = array_search('SPL4', $colors);
                                                            if ($key >= -1) { 
                                                                if (array_key_exists($key,$colors)) {
                                                                    echo 'checked'; 
                                                                } 
                                                            } 
                                                            ?>>
                                                        <label for="inlineCheckbox8"> SPL </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <?php if($job['spl1']){ ?>
                                        <div class="form-group row">
                                            <div class="form-group col-lg-12">
                                                <label for="" class="col-sm-3 col-form-label">SPL1</label>
                                                <div class="col-sm-9">
                                                    <textarea readonly="" class="form-control" value="<?php echo $job["spl1"] ?>"><?php echo $job["spl1"] ?></textarea>
                                                </div>
                                            </div>
                                        </div>
                                        <?php } ?>
                                        <?php if($job['spl1']){ ?>
                                        <div class="form-group row">
                                            <div class="form-group col-lg-12">
                                                <label for="" class="col-sm-3 col-form-label">SPL2</label>
                                                <div class="col-sm-9">
                                                    <textarea readonly="" class="form-control" value="<?php echo $job["spl2"] ?>"><?php echo $job["spl2"] ?></textarea>
                                                </div>
                                            </div>
                                        </div>
                                        <?php } ?>
                                        <?php if($job['spl1']){ ?>
                                        <div class="form-group row">
                                            <div class="form-group col-lg-12">
                                                <label for="" class="col-sm-3 col-form-label">SPL3</label>
                                                <div class="col-sm-9">
                                                    <textarea readonly="" class="form-control" value="<?php echo $job["spl3"] ?>"><?php echo $job["spl3"] ?></textarea>
                                                </div>
                                            </div>
                                        </div>
                                        <?php } ?>
                                        <?php if($job['spl1']){ ?>
                                        <div class="form-group row">
                                            <div class="form-group col-lg-12">
                                                <label for="" class="col-sm-3 col-form-label">SPL4</label>
                                                <div class="col-sm-9">
                                                    <textarea readonly="" class="form-control" value="<?php echo $job["spl4"] ?>"><?php echo $job["spl4"] ?></textarea>
                                                </div>
                                            </div>
                                        </div>
                                        <?php } ?>



                                        <div class="form-group row">
                                            <div class="form-group col-lg-6">
                                                <label for="" class="col-sm-3 col-form-label">Assistant</label>
                                                <div class="col-sm-9">
                                                    <input type="text" name="assistant" class="form-control" placeholder="">
                                                </div>
                                            </div>
                                            <div class="form-group col-lg-6">
                                                <label for="" class="col-sm-3 col-form-label">Process</label>
                                                <div class="col-sm-9">
                                                    <select class="form-control" name="process">
                                                        <option>Select Process</option>
                                                        <option value="Printing">Printing</option>
                                                        <option value="Coating">Coating</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="form-group col-lg-6">
                                                <label for="" class="col-sm-3 col-form-label">Job (Opening)</label>
                                                <div class="col-sm-9">
                                                    <input type="number" name="opening" class="form-control" placeholder="">
                                                </div>
                                            </div>
                                            <div class="form-group col-lg-6">
                                                <label for="" class="col-sm-3 col-form-label">Job Closing</label>
                                                <div class="col-sm-9">
                                                    <input type="number" name="closing" class="form-control" placeholder="">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="form-group col-lg-6">
                                                <label for="" class="col-sm-3 col-form-label">Output</label>
                                                <div class="col-sm-9">
                                                    <input type="text" name="output" class="form-control" placeholder="">
                                                </div>
                                            </div>
                                            <div class="form-group col-lg-6">
                                                <label for="" class="col-sm-3 col-form-label">Waste</label>
                                                <div class="col-sm-9">
                                                    <input type="text" name="waste" class="form-control" placeholder="">
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