
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
                <h1>Add Quantity adjustments</h1>
                <small></small>
                <ol class="breadcrumb">
                    <li><a href="<?php echo base_url() ?>"><i class="pe-7s-home"></i> Home</a></li>
                    <li class="active">Add Quantity adjustments</li>
                </ol>
            </div>
        </div>
        <!-- /. Content Header (Page header) -->

        <form method="post" action="<?php echo base_url() ?>quantity_adjustments/insert" enctype="multipart/form-data">

            <div class="row">
                <div class="col-sm-12">
                    <div class="panel panel-bd ">
                        <div class="panel-heading">
                            <div class="panel-title">
                                <h4>Add Quantity adjustments</h4>
                            </div>
                        </div>
                        <div class="panel-body"><div class="form-group row">

                                <label for="example-text-input" class="col-sm-3 col-form-label">Date<span class="required">*</span></label>
                                        <div class="col-sm-9"><input class="form-control" name="Date" type="date" value="" id="example-text-input" placeholder="" required=""></div>

                                    </div><div class="form-group row">

                                <label for="example-text-input" class="col-sm-3 col-form-label">Type<span class="required">*</span></label>
                                        <div class="col-sm-9"><select class="form-control" name="Type" required="">
        <option>Select Type</option><option value="Addition">Addition</option><option value="Subtraction">Subtraction</option></select></div>

                                    </div><div class="form-group row">

                                <label for="example-text-input" class="col-sm-3 col-form-label">Quantity<span class="required">*</span></label>
                                        <div class="col-sm-9"><input class="form-control" name="Quantity" type="number" value="" id="example-text-input" placeholder="" required=""></div>

                                    </div><div class="form-group row">

                                <label for="example-text-input" class="col-sm-3 col-form-label">Note<span class="required">*</span></label>
                                        <div class="col-sm-9"><textarea class="form-control" name="Note" required=""></textarea></div>

                                    </div>
<div class="form-group row">
                                <label for="example-text-input" class="col-sm-3 col-form-label">Category<span class="required">*</span></label>
                                <div class="col-sm-9">
                                    <select class="form-control category" required="">
                                        <option>Select Category</option>
                                        <?php foreach ($table_category as $t) {?>
                                        <option value="<?php echo $t["id"] ?>"><?php echo $t["Name"] ?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="example-text-input" class="col-sm-3 col-form-label">Sub Category<span class="required">*</span></label>
                                <div class="col-sm-9">
                                    <select class="form-control sub-category" name="">
                                        <option>Select Sub Category</option>
                                        
                                    </select>
                                </div>
                            </div>
                                    <div class="form-group row">

                                <label for="example-text-input" class="col-sm-3 col-form-label">Product<span class="required">*</span></label>
                                        <div class="col-sm-9">
                                            <select class="form-control change-product" name="Product" required="">
                                                <option>Select Product</option>
                                                
                                           </select>
                                        </div>

                                    </div><div class="form-group row">

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
    $('.category').change(function() {
        var id = $(this).val()
        $.ajax({
            url: "<?php echo base_url() ?>purchases/get_sub_category/"+id,
            type: 'GET',
            dataType: 'json', // added data type
            success: function(res) {
                $('.sub-category option').not('option:first').remove()
                for (var i = 0; i < res.length; i++) {
                    $('.sub-category').append('<option value="'+res[i]['id']+'">'+res[i]['Name']+'</option>')
                }
            }
        });
    })
    $('.sub-category').change(function() {
        var parent = $('.category').val()
        var id = $(this).val()
        $.ajax({
            url: "<?php echo base_url() ?>purchases/get_product/"+id+'/'+parent,
            type: 'GET',
            dataType: 'json', // added data type
            success: function(res) {
                //product = JSON.parse(res);
                console.log(res)
                $('.change-product option').not('option:first').remove()
                for (var i = 0; i < res.length; i++) {
                    $('.change-product').append('<option value="'+res[i]['id']+'">'+res[i]['Product_Name']+'</option>')
                }
            }
        });
    })
</script>