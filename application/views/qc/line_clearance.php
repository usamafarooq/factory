<div class=control-sidebar-bg></div>
<div id=page-wrapper>
    <div class=content>
        <div class=content-header>
            <div class=header-icon style="margin-top: -9px;">
                <i class="pe-7s-note"></i>
            </div>
            <div class=header-title>
                <h1>Line Clearance Form</h1>
                <small></small>
                <ol class=breadcrumb>
                    <li><i class=pe-7s-home></i> Home</li>
                    <li class="active">Line Clearance Form</li>
                </ol>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <div class="panel panel-bd ">
                    <div class="panel-heading">
                        <div class="panel-title">
                            <h4>Line Clearance Form</h4>
                        </div>
                    </div>
                    <div class="panel-body">
                        <div class="row">
                            <form method="post" action="">
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
                                                <label for="example-text-input" class="col-sm-4">Previous Job No</label>
                                                <div class="col-sm-8">
                                                    <input type="text" name="previous" class="form-control" placeholder="">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="form-group col-lg-6">
                                                <label for="example-text-input" class="col-sm-4">Current Job No</label>
                                                <div class="col-sm-8">
                                                    <input type="text" class="form-control" placeholder="" value="<?php echo $wo_no ?>" readonly="">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="form-group col-lg-12">
                                                <div class="table-responsive" style="    margin-top: -11px;">
                                                    <table class="table table-striped ">
                                                        <thead>
                                                            <tr>
                                                                <th></th>
                                                                <th>Yes / No</th>
                                                                <th>Remarks</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td>Is there any material of previous Job</td>
                                                                <td>
                                                                    <div class="radio radio-info radio-circle radio-inline" style="margin-top: 1px;">
                                                                        <input type="radio" id="inlineradioo16" value="Yes" name="material" checked="">
                                                                        <label for="inlineradioo16"></label>
                                                                    </div>
                                                                    <div class="radio radio-info radio-circle radio-inline">
                                                                        <input type="radio" id="inlineradioo17" value="No" name="material">
                                                                        <label for="inlineradioo17"></label>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <textarea class="form-control" name="material_remarks" id="exampleTextarea" rows="1"></textarea>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>Is there any printed item of previous Job</td>
                                                                <td>
                                                                    <div class="radio radio-info radio-circle radio-inline" style="margin-top: 1px;">
                                                                        <input type="radio" id="inlineradioo18" value="Yes" name="printed" checked="">
                                                                        <label for="inlineradioo18"></label>
                                                                    </div>
                                                                    <div class="radio radio-info radio-circle radio-inline">
                                                                        <input type="radio" id="inlineradioo19" value="No" name="printed">
                                                                        <label for="inlineradioo19"></label>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <textarea class="form-control" name="printed_remarks" id="exampleTextarea" rows="1"></textarea>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>Is there any document of previous Job</td>
                                                                <td>
                                                                    <div class="radio radio-info radio-circle radio-inline" style="margin-top: 1px;">
                                                                        <input type="radio" id="inlineradioo6" value="Yes" name="document" checked="">
                                                                        <label for="inlineradioo6"></label>
                                                                    </div>
                                                                    <div class="radio radio-info radio-circle radio-inline">
                                                                        <input type="radio" id="inlineradioo7" value="No" name="document">
                                                                        <label for="inlineradioo7"></label>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <textarea class="form-control" name="document_remarks" id="exampleTextarea" rows="1"></textarea>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>Is there any waste near machine</td>
                                                                <td>
                                                                    <div class="radio radio-info radio-circle radio-inline" style="margin-top: 1px;">
                                                                        <input type="radio" id="inlineradioo8" value="Yes" name="waste" checked="">
                                                                        <label for="inlineradioo8"></label>
                                                                    </div>
                                                                    <div class="radio radio-info radio-circle radio-inline">
                                                                        <input type="radio" id="inlineradioo9" value="No" name="waste">
                                                                        <label for="inlineradioo9"></label>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <textarea class="form-control" name="waste_remarks" id="exampleTextarea" rows="1"></textarea>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>Is there any oil leakage</td>
                                                                <td>
                                                                    <div class="radio radio-info radio-circle radio-inline" style="margin-top: 1px;">
                                                                        <input type="radio" id="inlineradioo10" value="Yes" name="oil" checked="">
                                                                        <label for="inlineradioo10"></label>
                                                                    </div>
                                                                    <div class="radio radio-info radio-circle radio-inline">
                                                                        <input type="radio" id="inlineradioo11" value="No" name="oil">
                                                                        <label for="inlineradioo11"></label>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <textarea class="form-control" name="oil_remarks" id="exampleTextarea" rows="1"></textarea>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>Is the machine & area clean</td>
                                                                <td>
                                                                    <div class="radio radio-info radio-circle radio-inline" style="margin-top: 1px;">
                                                                        <input type="radio" id="inlineradioo12" value="Yes" name="clean" checked="">
                                                                        <label for="inlineradioo12"></label>
                                                                    </div>
                                                                    <div class="radio radio-info radio-circle radio-inline">
                                                                        <input type="radio" id="inlineradioo13" value="No" name="clean">
                                                                        <label for="inlineradioo13"></label>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <textarea class="form-control" name="clean_remarks" id="exampleTextarea" rows="1"></textarea>
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
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