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
                    <li><a href="index.html"><i class="pe-7s-home"></i> Home</a></li>
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
                                <div class="form-group col-md-6">
                                    <label>Product</label><br>
                                    <select name="product[]" class="form-control table">
                                        <option>Select Product</option>
                                        <?php 
                                            foreach ($products as $p) {
                                                echo '<option value="'.$p['id'].'">'.$p['Product_Name'].'</option>';
                                            }
                                        ?>
                                    </select>
                                </div>
                                <div class="form-group col-md-6">
                                    <label>Quantity</label><br>
                                    <input type="number" name="qty[]" class="form-control">
                                </div>
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
</script>