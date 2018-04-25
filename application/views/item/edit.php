
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
                <h1>Edit Item</h1>
                <small></small>
                <ol class="breadcrumb">
                    <li><a href="<?php echo base_url() ?>"><i class="pe-7s-home"></i> Home</a></li>
                    <li class="active">Edit Item</li>
                </ol>
            </div>
        </div>
        <!-- /. Content Header (Page header) -->

        <form method="post" action="<?php echo base_url() ?>item/update" enctype="multipart/form-data">
            <input type="hidden" name="id" value="<?php echo $item["id"] ?>">
            <div class="row">
                <div class="col-sm-12">
                    <div class="panel panel-bd ">
                        <div class="panel-heading">
                            <div class="panel-title">
                                <h4>Edit Item</h4>
                            </div>
                        </div>
                        <div class="panel-body"><div class="form-group row">

                                <label for="example-text-input" class="col-sm-3 col-form-label">Item Code<span class="required">*</span></label>
                                        <div class="col-sm-9">

                                        <input class="form-control" name="Item_Code" type="text" value="<?php echo $item["Item_Code"] ?>" id="example-text-input" placeholder="" required=""></div>

                                    </div><div class="form-group row">

                                <label for="example-text-input" class="col-sm-3 col-form-label">Description<span class="required">*</span></label>
                                        <div class="col-sm-9">

                                        <input class="form-control" name="Description" type="text" value="<?php echo $item["Description"] ?>" id="example-text-input" placeholder="" required=""></div>

                                    </div><div class="form-group row">

                                <label for="example-text-input" class="col-sm-3 col-form-label">Client<span class="required">*</span></label>
                                        <div class="col-sm-9">
                                            <select class="form-control" name="Client" required="">
                                                <option>Select Client</option><?php foreach ($table_clients as $t) {?>
                                                    <option value="<?php echo $t["id"] ?>" <?php if($t["id"] == $item["Client"]) echo "selected" ?>><?php echo $t["client_Name"] ?></option>
                                               <?php } ?></select>
                                        </div>

                                    </div><div class="form-group row">

                                <label for="example-text-input" class="col-sm-3 col-form-label">Work Type<span class="required">*</span></label>
                                        <div class="col-sm-9">

                                        <select class="form-control" name="Work_Type" required="">
        <option>Select Work Type</option><option value="Package Carton" <?php if("Package Carton" == $item["Work_Type"]) echo "selected" ?>>Package Carton</option><option value="LeafLet" <?php if("LeafLet" == $item["Work_Type"]) echo "selected" ?>>LeafLet</option><option value="Labels" <?php if("Labels" == $item["Work_Type"]) echo "selected" ?>>Labels</option><option value="Sticker Labels" <?php if("Sticker Labels" == $item["Work_Type"]) echo "selected" ?>>Sticker Labels</option></select></div>

                                    </div>
                            <div class="form-group row">
                                <label for="example-text-input" class="col-sm-3 col-form-label">Features<span class="required">*</span></label>
                                <div class="col-sm-9">
                                    <select class="form-control" multiple="" name="features[]" required="">
                                        <option>Select Features</option>

                                        <?php 
                                        $feature = explode(',', $item["features"]);
                                        foreach ($features as $f) {
                                            $key = array_search($f["id"], $feature);
                                            if ($key >= -1) {
                                                if (array_key_exists($key,$feature)) {
                                                    $checked = 'selected';
                                                }
                                                else{
                                                    $checked = '';
                                                }
                                            }
                                            else{
                                                $checked = '';
                                            }
                                        ?>
                                            <option value="<?php echo $f["id"] ?>" <?php echo $checked ?>>
                                                <?php echo $f["name"] ?>
                                            </option>
                                            <?php } ?>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="example-text-input" class="col-sm-3 col-form-label">Card Type<span class="required">*</span></label>
                                <div class="col-sm-9">
                                    <input class="form-control" name="type" type="text"  value="<?php echo $item["type"] ?>" id="example-text-input" placeholder="" required="">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="example-text-input" class="col-sm-3 col-form-label">Size<span class="required">*</span></label>
                                <div class="col-sm-9">
                                    <input class="form-control" name="size" type="text"  value="<?php echo $item["size"] ?>" id="example-text-input" placeholder="" required="">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="example-text-input" class="col-sm-3 col-form-label">Ups<span class="required">*</span></label>
                                <div class="col-sm-9">
                                    <input class="form-control" name="ups" type="text"  value="<?php echo $item["ups"] ?>" id="example-text-input" placeholder="" required="">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="example-text-input" class="col-sm-3 col-form-label">Gsm<span class="required">*</span></label>
                                <div class="col-sm-9">
                                    <input class="form-control" name="gsm" type="text" value="<?php echo $item["gsm"] ?>" id="example-text-input" placeholder="" required="">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="example-text-input" class="col-sm-3 col-form-label">Conversion<span class="required">*</span></label>
                                <div class="col-sm-9">
                                    <input class="form-control" name="conversion" type="text" value="<?php echo $item["conversion"] ?>" id="example-text-input" placeholder="" required="">
                                </div>
                            </div>
                            <?php 
                                $colors = explode(',', $item["colors"]);
                            ?>
                            <div class="form-group row">
                                <label for="example-text-input" class="col-sm-3 col-form-label">Colors<span class="required">*</span></label>
                                <div class="col-sm-9">
                                    <div class="checkbox checkbox-info checkbox-inline">
                                        <input type="checkbox" id="inlineCheckbox1" value="Black" name="colors[]" 
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
                                        <input type="checkbox" id="inlineCheckbox2" value="Cyan" name="colors[]"
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
                                        <input type="checkbox" id="inlineCheckbox3" value="Magenta" name="colors[]"
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
                                        <input type="checkbox" id="inlineCheckbox4" value="Yellow" name="colors[]"
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
                                        <input type="checkbox" id="inlineCheckbox5" value="SPL1" name="colors[]"
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
                                        <input type="checkbox" id="inlineCheckbox6" value="SPL2" name="colors[]"
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
                                        <input type="checkbox" id="inlineCheckbox7" value="SPL3" name="colors[]"
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
                                        <input type="checkbox" id="inlineCheckbox8" value="SPL4" name="colors[]"
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
                                    <div class="form-group row">

                                <div class="col-sm-12">
                                    <button type="submit" class="btn btn-primary pull-right">Update</button>
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
