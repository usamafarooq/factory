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
                <h1>Add Work_orders</h1>
                <small></small>
                <ol class="breadcrumb">
                    <li><a href="<?php echo base_url() ?>"><i class="pe-7s-home"></i> Home</a></li>
                    <li class="active">Add Work_orders</li>
                </ol>
            </div>
        </div>
        <!-- /. Content Header (Page header) -->

        

            <div class="row">
                <div class="col-sm-12">
                    <div class="panel panel-bd ">
                        <div class="panel-heading">
                            <div class="panel-title">
                                <h4>Add Work_orders</h4>
                            </div>
                        </div>
                        <div class="panel-body">
                            <form method="post" action="<?php echo base_url() ?>work_orders/insert" enctype="multipart/form-data">

                                <div class="form-group row">
                                    <div class="form-group col-lg-6">
                                        <label for="example-text-input" class="col-sm-3 col-form-label">Client</label>
                                        <div class="col-sm-9">
                                            <select class="form-control" name="Client">
                                                <option>Select Client</option>
                                                <?php 
                                                    foreach ($clients as $c) {
                                                        echo '<option value="'.$c['id'].'">'.$c['client_Name'].'</option>';
                                                    }
                                                ?>
                                            </select>
                                            <!-- <input class="form-control" name="Client" type="text" value="" id="example-text-input" placeholder=""> -->
                                        </div>

                                    </div>
                                    <div class="form-group col-lg-6">
                                        <label for="example-text-input" class="col-sm-3 col-form-label">Item Code</label>
                                        <div class="col-sm-9">
                                            <select class="form-control" name="Item_Code">
                                                <option>Select Item</option>
                                            </select>
                                            <!-- <input class="form-control" name="Item_Code" type="text" value="" id="example-text-input" placeholder=""> -->
                                        </div>

                                    </div>
                                </div>

                                <div class="form-group row">

                                    <div class="form-group col-lg-6">
                                        <label for="example-text-input" class="col-sm-3 col-form-label">Quantity</label>
                                        <div class="col-sm-9">
                                            <input class="form-control" name="quantity" type="number" value="" id="example-text-input" placeholder="">
                                        </div>

                                    </div>
                                    <div class="form-group col-lg-6">
                                        <label for="example-text-input" class="col-sm-3 col-form-label">PO No</label>
                                        <div class="col-sm-9">
                                            <input class="form-control" name="PO_No" type="text" value="" id="example-text-input" placeholder="">
                                        </div>

                                    </div>
                                </div>

                                <div class="form-group row">

                                    <div class="form-group col-lg-6">
                                        <label for="example-text-input" class="col-sm-3 col-form-label">PO Date</label>
                                        <div class="col-sm-9">
                                            <input class="form-control" name="PO_Date" type="date" value="" id="example-text-input" placeholder="">
                                        </div>

                                    </div>
                                    <div class="form-group col-lg-6">
                                        <label for="example-text-input" class="col-sm-3 col-form-label">Batch No</label>
                                        <div class="col-sm-9">
                                            <input class="form-control" name="Batch_No" type="text" value="" id="example-text-input" placeholder="">
                                        </div>

                                    </div>
                                </div>

                                <div class="form-group row">

                                    <div class="form-group col-lg-6">
                                        <label for="example-text-input" class="col-sm-3 col-form-label">Delivery Date</label>
                                        <div class="col-sm-9">
                                            <input class="form-control" name="Delivery_Date" type="date" value="" id="example-text-input" placeholder="">

                                        </div>

                                    </div>
                                    
                                    <div class="form-group col-lg-6">
                                        <label for="example-text-input" class="col-sm-3 col-form-label">Delivery Status</label>
                                        <div class="col-sm-9">
                                            <div class="radio radio-info radio-inline">
                                                <input type="radio" id="inlineRadio3" value="N" name="Delivery_Status" checked="">
                                                <label for="inlineRadio3"> N </label>
                                            </div>
                                            <div class="radio radio-info radio-inline">
                                                <input type="radio" id="inlineRadio4" value="U" name="Delivery_Status">
                                                <label for="inlineRadio4"> U </label>
                                            </div>
                                            <div class="radio radio-info radio-inline">
                                                <input type="radio" id="inlineRadio5" value="M.U" name="Delivery_Status">
                                                <label for="inlineRadio5"> M.U. </label>
                                            </div>
                                        </div>

                                    </div>
                                    
                                </div>

                                <div class="form-group row">

                                    
                                    <div class="form-group col-lg-6">
                                        <label for="example-text-input" class="col-sm-3 col-form-label">Instruction Remarks</label>
                                        <div class="col-sm-9">
                                            <input class="form-control" name="Instruction_Remarks" type="textarea" value="" id="example-text-input" placeholder="">
                                        </div>

                                    </div>

                                    <div class="form-group col-lg-6">
                                        <label for="example-text-input" class="col-sm-3 col-form-label">Status</label>
                                        <div class="col-sm-9">
                                            <div class="radio radio-info radio-inline">
                                                <input type="radio" id="inlineRadio6" value="New" name="status" checked="">
                                                <label for="inlineRadio6"> New </label>
                                            </div>
                                            <div class="radio radio-info radio-inline">
                                                <input type="radio" id="inlineRadio7" value="Existing" name="status">
                                                <label for="inlineRadio7"> Existing </label>
                                            </div>
                                        </div>

                                    </div>
                                </div>

                                <div class="form-group row">

                                    <div class="col-sm-12">
                                        <button type="submit" class="btn btn-primary pull-right">Add</button>
                                    </div>
                                </div>
                            </form>
                            
                            
                            
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
<script type="text/javascript">
$(function() {
    $('.order_t').change(function() {
        var optiondata = $(this).val();
        var option = $(this).find('option:selected');
        $('#free1a').toggle(option.hasClass('show1'));
        $('#free2a').toggle(option.hasClass('show2'));
       
        $('#datavalueone').val(optiondata);
        $('#datavaluetwo').val(optiondata);
    }).change();
});
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





<!-- START CORE PLUGINS -->