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
                <h1>Add BOM</h1>
                <small></small>
                <ol class="breadcrumb">
                    <li><a href="<?php echo base_url() ?>"><i class="pe-7s-home"></i> Home</a></li>
                    <li class="active">Add BOM</li>
                </ol>
            </div>
        </div>
        <!-- /. Content Header (Page header) -->
        <form method="post" action="" enctype="multipart/form-data">

            <div class="row">
                <div class="col-sm-12">
                    <div class="panel panel-bd ">
                        <div class="panel-heading">
                            <div class="panel-title">
                                <h4>Add BOM</h4>
                            </div>
                        </div>
                        <div class="panel-body">
                            <div class="after-add-sub row">
                                <div class="form-group  col-md-6">
                                    <label for="example-text-input" class="col-form-label">Category<span class="required">*</span></label>
                                    <select class="form-control category" required="">
                                        <option>Select Category</option>
                                        <?php foreach ($table_category as $t) {?>
                                        <option value="<?php echo $t["id"] ?>"><?php echo $t["Name"] ?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                                <div class="form-group  col-md-6">
                                    <label for="example-text-input" class="col-form-label">Sub Category<span class="required">*</span></label>
                                    <select class="form-control sub-category" name="">
                                        <option>Select Sub Category</option>
                                    </select>
                                </div>
                                <div class="form-group col-md-6">
                                    <label>Product</label><br>
                                    <select name="product[]" class="form-control table change-product">
                                        <option>Select Product</option>
                                        <?php 
                                            foreach ($products as $p) {
                                                echo '<option value="'.$p['id'].'">'.$p['Product_Name'].'</option>';
                                            }
                                        ?>
                                    </select>
                                </div>
                                <!-- <div class="form-group col-md-6">
                                    <label>Quantity</label><br>
                                    <input type="number" name="qty[]" class="form-control">
                                </div> -->
                                <div class="form-group row">
                                    <div class="col-lg-2 delet pull-right">
                                        <button type="button" class="add-relation btn btn-success ">Add More</button>
                                    </div>
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
    $("body").on("click",".add-relation",function(){
        var html = $(".after-add-sub").first().clone();
        $(html).find(".delet").html("<a class='btn btn-danger remove'><i class='fa fa-trash-o' aria-hidden='true'></i> </a> "+' <a class="btn btn-success add-sub"><strong> + </strong> </a>');
        $(".after-add-sub").last().after(html);
        $(".after-add-sub").last().find('input,select').not('input[type="checkbox"]').val('')
        $(".after-add-sub").last().find('input[type="checkbox"]').removeAttr('checked')
        $(".after-add-sub").last().find('.hide-div').hide()
        $(".after-add-sub").last().find('.sub-category option').not('option:first').remove()
        $(".after-add-sub").last().find('.change-product option').not('option:first').remove()
        $(".after-add-sub").last().find('.add-sub').addClass('add-relation')
        var con = 0
        $(".after-add-sub").each(function() {
            $(this).find('input[type="checkbox"]').attr('name','required['+con+']')
            con++
        })
    });
    $("body").on("click",".remove",function(){
        $(this).parents(".after-add-sub").remove();
        var con = 0
        $(".after-add-sub").each(function() {
            $(this).find('input[type="checkbox"]').attr('name','required['+con+']')
            con++
        })
    });

    //$('.category').change(function() {
    $("body").on("change",".category",function(){
        var id = $(this).val()
        var pa = $(this).parent().parent()
        $.ajax({
            url: "<?php echo base_url() ?>purchases/get_sub_category/"+id,
            type: 'GET',
            dataType: 'json', // added data type
            success: function(res) {
                pa.find('.sub-category option').not('option:first').remove()
                for (var i = 0; i < res.length; i++) {
                    pa.find('.sub-category').append('<option value="'+res[i]['id']+'">'+res[i]['Name']+'</option>')
                }
            }
        });
    })
    //$('.sub-category').change(function() {
    $("body").on("change",".sub-category",function(){
        
        var id = $(this).val()
        var pa = $(this).parent().parent()
        var parent = pa.find('.category').val()
        $.ajax({
            url: "<?php echo base_url() ?>purchases/get_product/"+id+'/'+parent,
            type: 'GET',
            dataType: 'json', // added data type
            success: function(res) {
                //product = JSON.parse(res);
                console.log(res)
                pa.find('.change-product option').not('option:first').remove()
                for (var i = 0; i < res.length; i++) {
                    pa.find('.change-product').append('<option value="'+res[i]['id']+'">'+res[i]['Product_Name']+'</option>')
                }
                product = res;
            }
        });
    })
</script>