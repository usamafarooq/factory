
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
                <h1>Add Order</h1>
                <small></small>
                <ol class="breadcrumb">
                    <li><a href="index.html"><i class="pe-7s-home"></i> Home</a></li>
                    <li class="active">Add Order</li>
                </ol>
            </div>
        </div>
        <!-- /. Content Header (Page header) -->
        
        <form method="post" id="requisition" action="<?php echo base_url() ?>requisition/insert" enctype="multipart/form-data">
            <input type="hidden" name="wo_id" value="<?php echo $id ?>">
            <input type="hidden" name="type" value="<?php echo str_replace('_', ' ', $type) ?>">
            <div class="row">
                <div class="col-sm-12">
                    <div class="panel panel-bd ">
                        <div class="panel-heading">
                            <div class="panel-title">
                                <h4>Add Order</h4>
                            </div>
                        </div>
                        <div class="panel-body">
                            <div class="form-group row">
                                <label for="example-text-input" class="col-sm-3 col-form-label">Store<span class="required">*</span></label>
                                <div class="col-sm-9">
                                    <select class="form-control" name="store_id" required="">
                                        <option>Select Store</option>
                                        <?php foreach ($table_store as $t) {?>
                                        <option value="<?php echo $t["id"] ?>"><?php echo $t["Name"] ?></option>
                                        <?php } ?>
                                    </select>
                                </div>
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
                                    <select class="form-control change-product" name="Product" >
                                        <option>Select Product</option>
                                   </select>
                                </div>
                            </div>
                            <div class="row form-group">
                                <label class="col-sm-12 col-form-label">Order Items</label>
                                <div class="col-md-12">
                                    <div class="table-responsive">
                                        <table class="table table-bordered table-striped table-hover product-table">
                                            <thead>
                                                <tr>
                                                    <th>Product Name (Product Code)</th>
                                                    <th>Net Unit Cost</th>
                                                    <th>Quantity</th>
                                                    <th>Subtotal (USD)</th>
                                                    <th><i class="fa fa-trash-o" style="opacity:0.5; filter:alpha(opacity=50);"></i></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                
                                            </tbody>
                                            <tfoot>
                                                <tr>
                                                    <th>Total</th>
                                                    <th></th>
                                                    <th class="qty">0.00</th>
                                                    <th class="total">0.00</th>
                                                    <th><i class="fa fa-trash-o" style="opacity:0.5; filter:alpha(opacity=50);"></i></th>
                                                </tr>
                                            </tfoot>
                                        </table>
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


<script type="text/javascript" src="http://defiantjs.com/defiant.js/dist/defiant-latest.min.js"></script>

<script type="text/javascript">
    
    function count_qty() {
        var con = 0;
        $('[name="quantity[]"]').each(function() {
            con = con + parseInt($(this).val())
        })
        $('.qty').text(con+'.00')
    }
    function count_total() {
        var con = 0;
        $('.sub_total').each(function() {
            con = con + parseInt($(this).text())
        })
        $('.total').text(con+'.00')
    }
    function add_qty() {
        $('[name="quantity[]"]').keyup(function() {
            var qty = parseInt($(this).val())
            var cost = $(this).parent().parent().find('.net_cost').text()
            cost = parseInt(cost)
            $(this).parent().parent().find('.sub_total').text(parseInt(qty*cost))
            count_qty()
            count_total()
        })
    }
    function remove_row() {
        $('.remove').click(function() {
            var id = $(this).attr('data-id')
            $(this).parent().parent().remove()
            $('.change-product option[value="'+id+'"]').css('display','block')
            count_qty()
            count_total()
        })
    }
    function change_price() {
        $('[name="price[]"]').keyup(function() {
            var cost = parseInt($(this).val())
            $(this).parent().parent().find('.net_cost').text(cost)
            var qty = $(this).parent().parent().find('[name="quantity[]"]').val()
            qty = parseInt(qty)
            $(this).parent().parent().find('.sub_total').text(parseInt(qty*cost))
            count_qty()
            count_total()
        })
    }
    var app = $('.product-table tbody');
    var product = [];
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
                product = res;
            }
        });
    })
    $('.change-product').change(function() {
        var id = $(this).val()
        res = JSON.search( product, '//*[id="'+id+'"]' );
        var data = res[0]
        app.append('<tr>')
        app.append('</tr>')
        app.find('tr').last().append('<td>'+data['Product_Name']+'</td>')
        app.find('tr').last().append('<td class="net_cost">'+data['Product_Cost']+'</td>')
        app.find('tr').last().append('<td><input type="hidden" name="product_id[]" value="'+id+'"><input type="number" class="form-control" name="quantity[]" value="1"></td>')
        app.find('tr').last().append('<td class="sub_total">'+data['Product_Cost']+'</td>')
        app.find('tr').last().append('<td><i class="fa fa-trash-o remove" data-id="'+data['id']+'"></i></td>')
        count_qty()
        count_total()
        add_qty()
        remove_row()
        $('.change-product').val('')
        $('.change-product option[value="'+id+'"]').css('display','none')
    })
    $("#requisition").submit(function(e) {
      var url = $(this).attr('action'); // the script where you handle the form input.
      $.ajax({
         type: "POST",
         url: url,
         data: $(this).serialize(), // serializes the form's elements.
         success: function(data)
         {
            if(data == 1){
              window.location.href= '<?php echo $url ?>';
            }
            else{
              alert('Data Not Insert')
            }
         }
      });
      e.preventDefault(); // avoid to execute the actual submit of the form.
    });
</script>