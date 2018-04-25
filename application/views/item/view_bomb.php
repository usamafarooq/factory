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
                <h1>View BOM</h1>
                <small></small>
                <ol class="breadcrumb">
                    <li><a href="<?php echo base_url() ?>"><i class="pe-7s-home"></i> Home</a></li>
                    <li class="active">View BOM</li>
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
                                <h4>View BOM</h4>
                            </div>
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                            <table id="dataTableExample2" class="table table-bordered table-striped table-hover">
                                <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th>Category</th>
                                        <th>Sub Category</th>
                                        <th>Product</th>
                                        
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        foreach ($bom as $b) {
                                    ?>
                                        <tr>
                                            <td>
                                                <?php echo $b["id"] ?>
                                            </td>
                                            <td>
                                                <?php echo $b["category"] ?>
                                            </td>
                                            <td>
                                                <?php echo $b["sub_category"] ?>
                                            </td>
                                            <td>
                                                <?php echo $b["Product_Name"] ?>
                                            </td>
                                        </tr>
                                        <?php } ?>
                                </tbody>
                            </table>

                        </div>
                            <?php foreach ($bom as $b) {?>
                            <!-- <div class="after-add-sub row">
                                <div class="form-group  col-md-6">
                                    <label for="example-text-input" class="col-form-label">Category<span class="required">*</span></label>
                                    <input type="text" name="qty[]" class="form-control" value="<?php echo $b['category'] ?>" disabled="">
                                </div>
                                <div class="form-group  col-md-6">
                                    <label for="example-text-input" class="col-form-label">Sub Category<span class="required">*</span></label>
                                    <input type="text" name="qty[]" class="form-control" value="<?php echo $b['sub_category'] ?>" disabled="">
                                </div>
                                <div class="form-group col-md-6">
                                    <label>Product</label><br>
                                    <input type="text" name="qty[]" class="form-control" value="<?php echo $b['Product_Name'] ?>" disabled="">
                                </div>
                                
                            </div> -->
                            <?php } ?>
                            <!-- <div class="form-group row">
                                <div class="col-sm-12">
                                    <button type="submit" class="btn btn-primary pull-right">Add</button>
                                </div>
                            </div> -->

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