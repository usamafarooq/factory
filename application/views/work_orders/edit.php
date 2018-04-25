
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
                <h1>Edit Work_orders</h1>
                <small></small>
                <ol class="breadcrumb">
                    <li><a href="<?php echo base_url() ?>"><i class="pe-7s-home"></i> Home</a></li>
                    <li class="active">Edit Work_orders</li>
                </ol>
            </div>
        </div>
        <!-- /. Content Header (Page header) -->

        <form method="post" action="<?php echo base_url() ?>work_orders/update" enctype="multipart/form-data">
            <input type="hidden" name="id" value="<?php echo $work_orders["id"] ?>">
            <div class="row">
                <div class="col-sm-12">
                    <div class="panel panel-bd ">
                        <div class="panel-heading">
                            <div class="panel-title">
                                <h4>Edit Work_orders</h4>
                            </div>
                        </div>
                        <div class="panel-body">
                        </div>
                        <div class="form-group row">
                                    <div class="form-group col-lg-6">
                                <label for="example-text-input" class="col-sm-3 col-form-label">Client</label>
                                        <div class="col-sm-9">
                                            <select class="form-control" name="Client">
                                                <option>Select Client</option>
                                                <?php 
                                                    foreach ($clients as $c) {
                                                        $checked = '';
                                                        if ($work_orders["Client"] == $c['id']) {
                                                            $checked = 'selected';
                                                        }
                                                        echo '<option value="'.$c['id'].'" '.$checked.'>'.$c['client_Name'].'</option>';
                                                    }
                                                ?>
                                            </select>
                                            <!-- <input class="form-control" name="Client" type="text" value="<?php echo $work_orders["Client"] ?>" id="example-text-input" placeholder="" > -->
                                        </div>

                                    </div>
                                    <div class="form-group col-lg-6">
                                <label for="example-text-input" class="col-sm-3 col-form-label">Item Code</label>
                                        <div class="col-sm-9">
                                            <select class="form-control" name="Item_Code">
                                                <option>Select Item</option>
                                                <?php 
                                                    foreach ($item as $i) {
                                                        $checked = '';
                                                        if ($work_orders["Item_Code"] == $i['id']) {
                                                            $checked = 'selected';
                                                        }
                                                        echo '<option value="'.$i['id'].'" '.$checked.'>'.$i['Item_Code'].'</option>';
                                                    }
                                                ?>
                                            </select>
                                            <!-- <input class="form-control" name="Item_Code" type="text" value="<?php echo $work_orders["Item_Code"] ?>" id="example-text-input" placeholder="" > -->
                                        </div>

                                    </div>
                                </div>
                                                                
                                <div class="form-group row">

                                <div class="form-group col-lg-6">
                                <label for="example-text-input" class="col-sm-3 col-form-label">Quantity</label>
                                        <div class="col-sm-9">
                                            <input class="form-control" name="quantity" type="number" value="<?php echo $work_orders["quantity"] ?>" id="example-text-input" placeholder="" >
                                        </div>

                                    </div>
                                    <div class="form-group col-lg-6">
                                <label for="example-text-input" class="col-sm-3 col-form-label">PO No</label>
                                        <div class="col-sm-9">
                                            <input class="form-control" name="PO_No" type="text" value="<?php echo $work_orders["PO_No"] ?>" id="example-text-input" placeholder="" >
                                        </div>

                                    </div>
                                </div>
                                
                                <div class="form-group row">

                                <div class="form-group col-lg-6">
                                <label for="example-text-input" class="col-sm-3 col-form-label">PO Date</label>
                                        <div class="col-sm-9">
                                            <input class="form-control" name="PO_Date" type="date" value="<?php echo $work_orders["PO_Date"] ?>" id="example-text-input" placeholder="" >
                                        </div>

                                    </div>
                                    <div class="form-group col-lg-6">
                                <label for="example-text-input" class="col-sm-3 col-form-label">Batch No</label>
                                        <div class="col-sm-9">
                                            <input class="form-control" name="Batch_No" type="text" value="<?php echo $work_orders["Batch_No"] ?>" id="example-text-input" placeholder="" >
                                        </div>

                                    </div>
                                </div>
                                
                                <div class="form-group row">

                                <div class="form-group col-lg-6">
                                <label for="example-text-input" class="col-sm-3 col-form-label">Delivery Date</label>
                                        <div class="col-sm-9">
                                            <input class="form-control" name="Delivery_Date" type="date" value="<?php echo $work_orders["Delivery_Date"] ?>" id="example-text-input" placeholder="" >
                                        </div>

                                    </div>

                                    <div class="form-group col-lg-6">
                                    <label for="example-text-input" class="col-sm-3 col-form-label">Delivery Status</label>
                                        <div class="col-sm-9">
                                            <div class="radio radio-info radio-inline">
                                                <input type="radio" id="inlineRadio3" value="N" <?php if($work_orders["Delivery_Status"] == 'N') echo 'checked' ?> name="Delivery_Status" checked="">
                                                <label for="inlineRadio3"> N </label>
                                            </div>
                                            <div class="radio radio-info radio-inline">
                                                <input type="radio" id="inlineRadio4" value="U" <?php if($work_orders["Delivery_Status"] == 'U') echo 'checked' ?> name="Delivery_Status">
                                                <label for="inlineRadio4"> U </label>
                                            </div>
                                            <div class="radio radio-info radio-inline">
                                                <input type="radio" id="inlineRadio5" value="M.U" <?php if($work_orders["Delivery_Status"] == 'M.U') echo 'checked' ?> name="Delivery_Status">
                                                <label for="inlineRadio5"> M.U. </label>
                                            </div>
                                        </div>
                                        

                                </div>
                                    
                                </div>
                                
                                <div class="form-group row">

                                
                                    <div class="form-group col-lg-6">
                                <label for="example-text-input" class="col-sm-3 col-form-label">Instruction Remarks</label>
                                        <div class="col-sm-9">
                                            <input class="form-control" name="Instruction_Remarks" type="textarea" value="<?php echo $work_orders["Instruction_Remarks"] ?>" id="example-text-input" placeholder="" >
                                        </div>

                                    </div>

                                    <div class="form-group col-lg-6">
                                        <label for="example-text-input" class="col-sm-3 col-form-label">Status</label>
                                        <div class="col-sm-9">
                                            <div class="radio radio-info radio-inline">
                                                <input type="radio" id="inlineRadio6" value="New" name="status"  <?php if($work_orders["status"] == 'New') echo 'checked' ?>>
                                                <label for="inlineRadio6"> New </label>
                                            </div>
                                            <div class="radio radio-info radio-inline">
                                                <input type="radio" id="inlineRadio7" value="Existing" name="status" <?php if($work_orders["status"] == 'Existing') echo 'checked' ?>>
                                                <label for="inlineRadio7"> Existing </label>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                
                                <div class="form-group row">
                                     <div class="form-group col-lg-12">
                                <div class="col-sm-12">
                                    <button type="submit" class="btn btn-primary pull-right">Update</button>
                                </div>

                            </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
<script type="text/javascript">
$('[name="Client"]').change(function() {
    var value = $(this).val()
    $.ajax({
        url: "<?php echo base_url() ?>work_orders/get_item/"+value,
        type: 'GET',
        dataType: 'json', // added data type
        success: function(res) {
            $('[name="Item_Code"]').empty()
            $('[name="Item_Code"]').append('<option>Select Item</option>')
            for (var i = 0; i < res.length; i++) {
                $('[name="Item_Code"]').append('<option value="'+res[i].id+'">'+res[i].Item_Code+'</option>')
            }
        }
    });
})
</script>