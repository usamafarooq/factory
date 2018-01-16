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
                    <li><a href="index.html"><i class="pe-7s-home"></i> Home</a></li>
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
                        <form>
                            <div class="form-group row">

                                <div class="form-group col-lg-12">
                                    <label for="example-text-input" class="col-sm-2 col-form-label">Select Type</label>
                                    <div class="col-sm-10">
                                        <select name="Order_Type" id="" class="select  order_t form-control test">
                                            <option value="">Select Type</option>
                                            <option value="new" class="show1">New</option>
                                            <option value="existing" class="show2">Existing</option>
                                        </select>
                                    </div>

                                </div>

                            </div>
                        </form>
                            <div class="new box datashow" id="free1a">
                            <form method="post" action="<?php echo base_url() ?>work_orders/insert" enctype="multipart/form-data">

                                <div class="form-group row">

                                    <div class="form-group col-lg-6">
                                        <label for="example-text-input" class="col-sm-3 col-form-label">Date1</label>
                                        <div class="col-sm-9">
                                            <input class="form-control" name="Date" type="date" value="" id="example-text-input" placeholder="">
                                        </div>

                                    </div>
                                    <div class="form-group col-lg-6">
                                        <label for="example-text-input" class="col-sm-3 col-form-label">Client</label>
                                        <div class="col-sm-9">
                                            <input class="form-control" name="Client" type="text" value="" id="example-text-input" placeholder="">
                                        </div>

                                    </div>
                                </div>

                                <div class="form-group row">

                                    <div class="form-group col-lg-6">
                                        <label for="example-text-input" class="col-sm-3 col-form-label">Description</label>
                                        <div class="col-sm-9">
                                            <input class="form-control" name="Description" type="text" value="" id="example-text-input" placeholder="">
                                        </div>

                                    </div>
                                    <div class="form-group col-lg-6">
                                        <label for="example-text-input" class="col-sm-3 col-form-label">Item Code</label>
                                        <div class="col-sm-9">
                                            <input class="form-control" name="Item_Code" type="text" value="" id="example-text-input" placeholder="">
                                        </div>

                                    </div>
                                </div>

                                <div class="form-group row">

                                    <div class="form-group col-lg-6">
                                        <label for="example-text-input" class="col-sm-3 col-form-label">Quantity</label>
                                        <div class="col-sm-9">
                                            <input class="form-control" name="quantity" type="text" value="" id="example-text-input" placeholder="">
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
                                            <input class="form-control" name="PO_Date" type="text" value="" id="example-text-input" placeholder="">
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
                                            <input class="form-control" name="Delivery_Date" type="text" value="" id="example-text-input" placeholder="">

                                            <input class="form-control" name="Order_Type" type="hidden" value="" id="datavalueone" placeholder="">
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
                                </div>

                                <div class="form-group row">

                                    <div class="col-sm-12">
                                        <button type="submit" class="btn btn-primary pull-right">Add</button>
                                    </div>
                            </div>
                            </form>
                            </div>
                            <div class="existing box datashow2" id="free2a" >
                            <form method="post" action="<?php echo base_url() ?>work_orders/insert" enctype="multipart/form-data">

                                <div class="form-group row">

                                    <div class="form-group col-lg-6">
                                        <label for="example-text-input" class="col-sm-3 col-form-label">Date</label>
                                        <div class="col-sm-9">
                                            <input class="form-control" name="Date" type="date" value="" id="example-text-input" placeholder="" >
                                        </div>

                                    </div>
                                    <div class="form-group col-lg-6">
                                        <label for="example-text-input" class="col-sm-3 col-form-label">Client</label>
                                        <div class="col-sm-9">
                                            <input class="form-control" name="Client" type="text" value="" id="example-text-input" placeholder="" >
                                        </div>

                                    </div>
                                </div>

                                <div class="form-group row">

                                    <div class="form-group col-lg-6">
                                        <label for="example-text-input" class="col-sm-3 col-form-label">Description</label>
                                        <div class="col-sm-9">
                                            <input class="form-control" name="Description" type="text" value="" id="example-text-input" placeholder="" >
                                        </div>

                                    </div>
                                    <div class="form-group col-lg-6">
                                        <label for="example-text-input" class="col-sm-3 col-form-label">Item Code</label>
                                        <div class="col-sm-9">
                                            <input style="background-image: url(https://www.w3schools.com//css/searchicon.png);background-position: 5px 6px; background-repeat: no-repeat; padding: 10px 15px 11px 32px;" class="form-control" name="Item_Code" type="text" value="" id="quicksearch" placeholder="">
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
                                            <input class="form-control" name="Order_Type" type="hidden" value="" id="datavaluetwo" placeholder="">
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
</script>





<!-- START CORE PLUGINS -->