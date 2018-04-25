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
                <h1>Add Item</h1>
                <small></small>
                <ol class="breadcrumb">
                    <li><a href="<?php echo base_url() ?>"><i class="pe-7s-home"></i> Home</a></li>
                    <li class="active">Add Item</li>
                </ol>
            </div>
        </div>
        <!-- /. Content Header (Page header) -->

        <form method="post" action="<?php echo base_url() ?>item/insert" enctype="multipart/form-data">

            <div class="row">
                <div class="col-sm-12">
                    <div class="panel panel-bd ">
                        <div class="panel-heading">
                            <div class="panel-title">
                                <h4>Add Item</h4>
                            </div>
                        </div>
                        <div class="panel-body">
                            <div class="form-group row">

                                <label for="example-text-input" class="col-sm-3 col-form-label">Item Code<span class="required">*</span></label>
                                <div class="col-sm-9">
                                    <input class="form-control" name="Item_Code" type="text" value="" id="example-text-input" placeholder="" required="">
                                </div>

                            </div>
                            <div class="form-group row">
                                <label for="example-text-input" class="col-sm-3 col-form-label">Description<span class="required">*</span></label>
                                <div class="col-sm-9">
                                    <input class="form-control" name="Description" type="text" value="" id="example-text-input" placeholder="" required="">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="example-text-input" class="col-sm-3 col-form-label">Client<span class="required">*</span></label>
                                <div class="col-sm-9">
                                    <select class="form-control" name="Client" required="">
                                        <option>Select Client</option>
                                        <?php foreach ($table_clients as $t) {?>
                                            <option value="<?php echo $t["id"] ?>">
                                                <?php echo $t["client_Name"] ?>
                                            </option>
                                            <?php } ?>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">

                                <label for="example-text-input" class="col-sm-3 col-form-label">Work Type<span class="required">*</span></label>
                                <div class="col-sm-9">
                                    <select class="form-control" name="Work_Type" required="">
                                        <option>Select Work Type</option>
                                        <option value="Package Carton">Package Carton</option>
                                        <option value="LeafLet">LeafLet</option>
                                        <option value="Labels">Labels</option>
                                        <option value="Sticker Labels">Sticker Labels</option>
                                    </select>
                                </div>

                            </div>
                            <div class="form-group row">
                                <label for="example-text-input" class="col-sm-3 col-form-label">Features<span class="required">*</span></label>
                                <div class="col-sm-9">
                                    <select class="form-control" multiple="" name="features[]" required="">
                                        <option>Select Features</option>
                                        <?php foreach ($features as $f) {?>
                                            <option value="<?php echo $f["id"] ?>">
                                                <?php echo $f["name"] ?>
                                            </option>
                                            <?php } ?>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="example-text-input" class="col-sm-3 col-form-label">Card Type<span class="required">*</span></label>
                                <div class="col-sm-9">
                                    <input class="form-control" name="type" type="text" value="" id="example-text-input" placeholder="" required="">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="example-text-input" class="col-sm-3 col-form-label">Size<span class="required">*</span></label>
                                <div class="col-sm-9">
                                    <input class="form-control" name="size" type="text" value="" id="example-text-input" placeholder="" required="">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="example-text-input" class="col-sm-3 col-form-label">Ups<span class="required">*</span></label>
                                <div class="col-sm-9">
                                    <input class="form-control" name="ups" type="text" value="" id="example-text-input" placeholder="" required="">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="example-text-input" class="col-sm-3 col-form-label">Gsm<span class="required">*</span></label>
                                <div class="col-sm-9">
                                    <input class="form-control" name="gsm" type="text" value="" id="example-text-input" placeholder="" required="">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="example-text-input" class="col-sm-3 col-form-label">Conversion<span class="required">*</span></label>
                                <div class="col-sm-9">
                                    <input class="form-control" name="conversion" type="text" value="" id="example-text-input" placeholder="" required="">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="example-text-input" class="col-sm-3 col-form-label">Colors<span class="required">*</span></label>
                                <div class="col-sm-9">
                                    <div class="checkbox checkbox-info checkbox-inline">
                                        <input type="checkbox" id="inlineCheckbox1" value="Black" name="colors[]">
                                        <label for="inlineCheckbox1"> Black </label>
                                    </div>
                                    <div class="checkbox checkbox-info checkbox-inline">
                                        <input type="checkbox" id="inlineCheckbox2" value="Cyan" name="colors[]">
                                        <label for="inlineCheckbox2"> Cyan </label>
                                    </div>
                                    <div class="checkbox checkbox-info checkbox-inline">
                                        <input type="checkbox" id="inlineCheckbox3" value="Magenta" name="colors[]">
                                        <label for="inlineCheckbox3"> Magenta </label>
                                    </div>
                                    <div class="checkbox checkbox-info checkbox-inline">
                                        <input type="checkbox" id="inlineCheckbox4" value="Yellow" name="colors[]">
                                        <label for="inlineCheckbox4"> Yellow </label>
                                    </div>
                                    <div class="checkbox checkbox-info checkbox-inline">
                                        <input type="checkbox" id="inlineCheckbox5" class="show_text" value="SPL1" name="colors[]">
                                        <label for="inlineCheckbox5"> SPL </label>
                                    </div>
                                    <div class="checkbox checkbox-info checkbox-inline">
                                        <input type="checkbox" id="inlineCheckbox6" class="show_text" value="SPL2" name="colors[]">
                                        <label for="inlineCheckbox6"> SPL </label>
                                    </div>
                                    <div class="checkbox checkbox-info checkbox-inline">
                                        <input type="checkbox" id="inlineCheckbox7" class="show_text" value="SPL3" name="colors[]">
                                        <label for="inlineCheckbox7"> SPL </label>
                                    </div>
                                    <div class="checkbox checkbox-info checkbox-inline">
                                        <input type="checkbox" id="inlineCheckbox8" class="show_text" value="SPL4" name="colors[]">
                                        <label for="inlineCheckbox8"> SPL </label>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group row SPL1" style="display: none">
                                <label for="example-text-input" class="col-sm-3 col-form-label">SPL1<span class="required">*</span></label>
                                <div class="col-sm-9">
                                    <textarea class="form-control" name="spl1"></textarea>
                                </div>
                            </div>
                            <div class="form-group row SPL2" style="display: none">
                                <label for="example-text-input" class="col-sm-3 col-form-label">SPL2<span class="required">*</span></label>
                                <div class="col-sm-9">
                                    <textarea class="form-control" name="spl2"></textarea>
                                </div>
                            </div>
                            <div class="form-group row SPL3" style="display: none">
                                <label for="example-text-input" class="col-sm-3 col-form-label">SPL3<span class="required">*</span></label>
                                <div class="col-sm-9">
                                    <textarea class="form-control" name="spl3"></textarea>
                                </div>
                            </div>
                            <div class="form-group row SPL4" style="display: none">
                                <label for="example-text-input" class="col-sm-3 col-form-label">SPL4<span class="required">*</span></label>
                                <div class="col-sm-9">
                                    <textarea class="form-control" name="spl4"></textarea>
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

<script type="text/javascript">
    $('.show_text').change(function() {
        var val = $(this).val()
        $('.'+val).toggle()
    })
</script>