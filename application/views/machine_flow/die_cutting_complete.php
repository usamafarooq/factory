<div class=control-sidebar-bg>
</div>
<div id=page-wrapper>
    <div class=content>
        <div class=content-header>
            <div class=header-icon style="margin-top: -9px;">
                <i class="pe-7s-note"></i>
            </div>
            <div class=header-title>
                <h1>Die Cutting Machine Form</h1>
                <small></small>
                <ol class=breadcrumb>
                    <li><i class=pe-7s-home></i> Home</li>
                    <li class="active">Die Cutting Machine Form</li>

                </ol>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <div class="panel panel-bd ">
                    <div class="panel-heading">
                        <div class="panel-title">
                            <h4>Die Cutting Machine Form</h4>
                        </div>
                    </div>
                    <div class="panel-body">
                        <div class="row">
                            <form method="post" action="">
                                <input type="hidden" name="die_cutting_id" value="<?php echo $detail['id'] ?>">
                                <div class="col-sm-12">
                                    <div class="panel-body">
                                        <div class="form-group row">
                                            <div class="form-group col-lg-6">
                                                <label for="" class="col-sm-3 col-form-label">Date</label>
                                                <div class="col-sm-9">
                                                    <input type="text" class="form-control" id="" value="<?php echo date("Y/m/d", strtotime($detail['created_at']))?>" placeholder="" readonly>
                                                </div>
                                            </div>
                                            <div class="form-group col-lg-6">
                                                <label for="" class="col-sm-3 col-form-label">Client</label>
                                                <div class="col-sm-9">
                                                    <input type="text" class="form-control" id="" placeholder="" value="<?php echo $job['client_Name'] ?>" readonly>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="form-group col-lg-6">
                                                <label for="" class="col-sm-3 col-form-label">W.O #</label>
                                                <div class="col-sm-9">
                                                    <input type="text" class="form-control" placeholder="" value="<?php echo $job['WO_no'] ?>" readonly>
                                                </div>
                                            </div>

                                            <div class="form-group col-lg-6">
                                                <label for="" class="col-sm-3 col-form-label">Job Name</label>
                                                <div class="col-sm-9">
                                                    <input type="text" class="form-control" placeholder="" value="<?php echo $job['Job_Description'] ?>" readonly>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="form-group col-lg-6">
                                                <label for="" class="col-sm-3 col-form-label">Machine</label>
                                                <div class="col-sm-9">
                                                    <input type="text" class="form-control" placeholder=""  value="<?php echo $job['machine_Name'] ?>" readonly>
                                                </div>
                                            </div>
                                            <div class="form-group col-lg-6">
                                                <label for="" class="col-sm-3 col-form-label">P.O. No.</label>
                                                <div class="col-sm-9">
                                                    <input type="text" class="form-control" placeholder="" value="<?php echo $job['PO_No'] ?>" readonly>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="form-group col-lg-6">
                                                <label for="" class="col-sm-3 col-form-label">Planned Qty</label>
                                                <div class="col-sm-9">
                                                    <input type="number" class="form-control" placeholder="" value="<?php echo $job['Planned_qty'] ?>" readonly>
                                                </div>
                                            </div>
                                            <div class="form-group col-lg-6">
                                                <label for="" class="col-sm-3 col-form-label">Operator</label>
                                                <div class="col-sm-9">
                                                    <input type="text" class="form-control" placeholder=""  value="<?php echo $detail['operator'] ?>" name="operator">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="form-group col-lg-6">
                                                <label for="" class="col-sm-3 col-form-label">Assistant</label>
                                                <div class="col-sm-9">
                                                    <input type="text" class="form-control" placeholder=""  value="<?php echo $detail['assistant'] ?>" name="assistant">
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <label for="example-color-input" class="col-sm-3 col-form-label">Process</label>
                                                <div class="col-sm-9">
                                                    <div class="radio radio-info radio-inline">

                                                        <input type="radio" id="inlineRadio1" value="Cutting" name="process" <?php if($detail['process'] == 'Cutting') echo 'checked' ?>>
                                                        <label for="inlineRadio1"> Cutting </label>
                                                    </div>

                                                    <div class="radio radio-info radio-inline">

                                                        <input type="radio" id="inlineRadio2" value="Embossing" name="process" <?php if($detail['process'] == 'Embossing') echo 'checked' ?>>
                                                        <label for="inlineRadio2"> Embossing </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <div class="form-group col-lg-6">
                                                <label for="" class="col-sm-3 col-form-label">Job (Opening)</label>
                                                <div class="col-sm-9">
                                                    <input type="number" class="form-control" placeholder=""  value="<?php echo $detail['opening'] ?>" name="opening">
                                                </div>
                                            </div>
                                            <div class="form-group col-lg-6">
                                                <label for="" class="col-sm-3 col-form-label">Job Closing</label>
                                                <div class="col-sm-9">
                                                    <input type="number" class="form-control" placeholder=""  value="<?php echo $detail['closing'] ?>" name="closing">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="form-group col-lg-6">
                                                <label for="" class="col-sm-3 col-form-label">Output</label>
                                                <div class="col-sm-9">
                                                    <input type="number" class="form-control" placeholder=""  value="<?php echo $detail['output'] ?>" name="output">
                                                </div>
                                            </div>
                                            <div class="form-group col-lg-6">
                                                <label for="" class="col-sm-3 col-form-label">Waste</label>
                                                <div class="col-sm-9">
                                                    <input type="number" class="form-control" placeholder=""  value="<?php echo $detail['waste'] ?>" name="waste">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row">

                                            <div class="form-group col-lg-6">
                                                <label for="" class="col-sm-3 col-form-label">Job Completed </label>
                                                <div class="col-sm-9">
                                                    <div class="radio radio-info radio-inline">
                                                        <input type="radio" id="inlineRadio7" value="Yes" name="completed" checked="">
                                                        <label for="inlineRadio7"> Yes </label>
                                                    </div>
                                                    <div class="radio radio-info radio-inline">
                                                        <input type="radio" id="inlineRadio8" value="No" name="completed">
                                                        <label for="inlineRadio8"> No </label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group col-lg-6">
                                                <label for="" class="col-sm-3 col-form-label">Feeder Set </label>
                                                <div class="col-sm-9">
                                                    <div class="radio radio-info radio-inline">
                                                        <input type="radio" id="inlineRadio9" value="Yes" name="feeder" checked="">
                                                        <label for="inlineRadio9"> Yes </label>
                                                    </div>
                                                    <div class="radio radio-info radio-inline">
                                                        <input type="radio" id="inlineRadio10" value="No" name="feeder">
                                                        <label for="inlineRadio10"> No </label>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                        <div class="form-group row">

                                            <div class="form-group col-lg-6">
                                                <label for="" class="col-sm-3 col-form-label">Delivery set</label>
                                                <div class="col-sm-9">
                                                    <div class="radio radio-info radio-inline">
                                                        <input type="radio" id="inlineRadio11" value="Yes" name="delivery" checked="">
                                                        <label for="inlineRadio11"> Yes </label>
                                                    </div>
                                                    <div class="radio radio-info radio-inline">
                                                        <input type="radio" id="inlineRadio12" value="No" name="delivery">
                                                        <label for="inlineRadio12"> No </label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group col-lg-6">
                                                <label for="" class="col-sm-3 col-form-label">Die set </label>
                                                <div class="col-sm-9">
                                                    <div class="radio radio-info radio-inline">
                                                        <input type="radio" id="inlineRadio13" value="Yes" name="die" checked="">
                                                        <label for="inlineRadio13"> Yes </label>
                                                    </div>
                                                    <div class="radio radio-info radio-inline">
                                                        <input type="radio" id="inlineRadio14" value="No" name="die">
                                                        <label for="inlineRadio14"> No </label>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                        <div class="form-group row">

                                            <div class="form-group col-lg-6">
                                                <label for="" class="col-sm-3 col-form-label">Plate se</label>
                                                <div class="col-sm-9">
                                                    <div class="radio radio-info radio-inline">
                                                        <input type="radio" id="inlineRadio15" value="Yes" name="plate" checked="">
                                                        <label for="inlineRadio15"> Yes </label>
                                                    </div>
                                                    <div class="radio radio-info radio-inline">
                                                        <input type="radio" id="inlineRadio16" value="No" name="plate">
                                                        <label for="inlineRadio14"> No </label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group col-lg-6">
                                                <label for="" class="col-sm-3 col-form-label">Make Ready </label>
                                                <div class="col-sm-9">
                                                    <div class="radio radio-info radio-inline">
                                                        <input type="radio" id="inlineRadio17" value="Yes" name="ready" checked="">
                                                        <label for="inlineRadio17"> Yes </label>
                                                    </div>
                                                    <div class="radio radio-info radio-inline">
                                                        <input type="radio" id="inlineRadio18" value="No" name="ready">
                                                        <label for="inlineRadio18"> No </label>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                            <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.4/angular.min.js"></script>
                                        <div class="" id='TextBoxesGroup'>
                                            <div class="form-group row">
                                                <div class="form-group col-lg-6">
                                                    <label for="" class="col-sm-4">Code</label>
                                                    <div class="col-sm-8">
                                                        <!-- <input type="text" class="form-control" data-id="" name="code[]" id="code1" placeholder=""> -->
                                                        <select class="form-control" name="code[]" id="code1">
                                                            <option value="">Select</option>
                                                            <option value="Cleaning">Cleaning</option>
                                                            <option value="Make Ready">Make Ready</option>
                                                            <option value="Die Rubberizing">Die Rubberizing</option>
                                                            <option value="Cutting sating">Cutting sating</option>
                                                            <option value="Board Problem">Board Problem</option>
                                                            <option value="Break down">Break down</option>
                                                            <option value="Lunnch/Dinner">Lunnch/Dinner</option>
                                                            <option value="Embossing settings">Embossing settings</option>
                                                            <option value="Waiting">Waiting</option>
                                                            <option value="Greasing & Oiling">Greasing & Oiling</option>
                                                            <option value="No Job">No Job</option>
                                                            <option value="Any other">Any other</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="form-group col-lg-6">
                                                    <label for="" class="col-sm-4">From</label>
                                                    <div class="col-sm-8">
                                                        <input type="time" class="form-control" data-id="" name="from[]" id="form1" placeholder="">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="form-group col-lg-6">
                                                    <label for="" class="col-sm-4">To</label>
                                                    <div class="col-sm-8">
                                                        <input type="time" class="form-control" data-id="" name="to[]" id="to1" placeholder="">
                                                    </div>
                                                </div>
                                                <div class="form-group col-lg-6">
                                                    <label for="" class="col-sm-4">Hours</label>
                                                    <div class="col-sm-8">

                                                        <select class="form-control" id="hours1" data-id="" name="hours[]" autocomplete="off">
                                                        <option>Pelease Select</option>
                                                        <option value="9 am/pm">9 am/pm</option>
                                                        <option value="10 am/pm">10 am/pm</option>
                                                        <option value="11 am/pm">11 am/pm</option>
                                                        <option value="12 am/pm">12 am/pm</option>
                                                        <option value="1 am/pm">1 am/pm</option>
                                                        <option value="2 am/pm">2 am/pm</option>
                                                        <option value="3 am/pm">3 am/pm</option>
                                                        <option value="4 am/pm">4 am/pm</option>
                                                        <option value="5 am/pm">5 am/pm</option>
                                                        <option value="6 am/pm">6 am/pm</option>
                                                        <option value="7 am/pm">7 am/pm</option>
                                                        <option value="8 am/pm">8 am/pm</option>
                                                        <option value="9 am/pm">9 am/pm</option>
                                                    </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="form-group col-lg-6">
                                                    <label for="" class="col-sm-4">Counter</label>
                                                    <div class="col-sm-8">
                                                        <input type="text" class="form-control" data-id="" name="counter[]" id="counter1" placeholder="">
                                                    </div>
                                                </div>
                                                <div class="form-group col-lg-6">
                                                    <label for="" class="col-sm-4">Remarks</label>
                                                    <div class="col-sm-8">
                                                        <input type="text" class="form-control" data-id="" name="remarks[]" id="remarks1" placeholder="">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <input type='button' class="btn btn-success pull-right " value='Add Button' id='addButton'>
                                    </div>
                           
                                        <div class="form-group row">
                                            <div class="form-group col-lg-12">
                                                <div class="table-responsive ">
                                                    <table class="table table-striped table table-bordered table-hover" id='Tableadd'>
                                                        <thead>
                                                            <tr>
                                                                <th>
                                                                    <center>Code</center>
                                                                </th>
                                                                <th>
                                                                    <center>Form</center>
                                                                </th>
                                                                <th>
                                                                    <center>To</center>
                                                                </th>
                                                                <th>
                                                                    <center>Hours</center>
                                                                </th>
                                                                <th>
                                                                    <center>Counter</center>
                                                                </th>
                                                                <th>
                                                                    <center>Remarks</center>
                                                                </th>
                                                            </tr>
                                                        </thead>
                                                        <tbody class="append-education">
                                                            <tr>
                                                                <td>
                                                                    <e class="code1_value"></e>
                                                                </td>
                                                                <td>
                                                                    <e class="form1_value"></e>
                                                                </td>
                                                                <td>
                                                                    <e class="to1_value"></e>
                                                                </td>
                                                                <td>
                                                                    <e class="hours1_value"></e>
                                                                </td>
                                                                <td>
                                                                    <e class="counter1_value"></e>
                                                                </td>
                                                                <td>
                                                                    <e class="remarks1_value"></e>
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-primary pull-right">Submit</button>
                            </form>

                            
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /.main content -->
</div>
<script type="text/javascript">
    $(document).ready(function() {
        var counter = 2;
        $("#addButton").click(function() {
            var newtableadd = $(document.createElement('tr'))
                .attr("id", 'tableadd' + counter);
            newtableadd.after().html('<table><tbody class="append-education"><tr><td>' +
                '<e class="code' + counter +
                '_value"></e></td><td>' +
                '<e class="from' + counter +
                '_value"></e></td><td>' +
                '<e class="to' + counter +
                '_value"></e></td><td>' +
                '<e class="hours' + counter +
                '_value"></e></td><td>' +
                '<e class="counter' + counter +
                '_value"></e></td><td>' +
                '<e class="remarks' + counter +
                '_value"></e></td></tr></tbody></table>');
            newtableadd.appendTo("#Tableadd");
            counter++;
        });
    });
</script>
<script type="text/javascript">
    $(document).ready(function() {
        var counter = 2;
        $("#addButton").click(function() {
            var newTextBoxDiv = $(document.createElement('div'))
                .attr("id", 'TextBoxDiv' + counter);
            newTextBoxDiv.after().html('<hr><div class="form-group row"><div class="form-group col-lg-6"><label class="col-sm-4" >Code </label> <div class="col-sm-8">' +
                '<select class="form-control" name="code[]" id="code' + counter + '"><option value="">Select</option><option value="Cleaning">Cleaning</option><option value="Make Ready">Make Ready</option><option value="Die Rubberizing">Die Rubberizing</option><option value="Cutting sating">Cutting sating</option><option value="Board Problem">Board Problem</option><option value="Break down">Break down</option><option value="Lunnch/Dinner">Lunnch/Dinner</option><option value="Embossing settings">Embossing settings</option><option value="Waiting">Waiting</option><option value="Greasing & Oiling">Greasing & Oiling</option><option value="No Job">No Job</option><option value="Any other">Any other</option></select></div></div><div class="form-group col-lg-6"><label class="col-sm-4" >From </label> <div class="col-sm-8">' +
                '<input type="time" class="form-control" name="from[]" id="from' + counter + '" value="" ></div></div></div><div class="form-group row"><div class="form-group col-lg-6"><label class="col-sm-4" >To </label> <div class="col-sm-8">' +
                '<input type="time" class="form-control" name="to[]" id="to' + counter + '" value="" ></div></div><div class="form-group col-lg-6"><label class="col-sm-4" >Hours </label> <div class="col-sm-8">' +
                '<select class="form-control" name="hours[]" id="hours' + counter + '" autocomplete="off"><option>Pelease Select</option><option value="9 am/pm">9 am/pm</option><option value="10 am/pm">10 am/pm</option><option value="11 am/pm">11 am/pm</option><option value="12 am/pm">12 am/pm</option><option value="1 am/pm">1 am/pm</option><option value="2 am/pm">2 am/pm</option><option value="3 am/pm">3 am/pm</option><option value="4 am/pm">4 am/pm</option><option value="5 am/pm">5 am/pm</option><option value="6 am/pm">6 am/pm</option><option value="7 am/pm">7 am/pm</option><option value="8 am/pm">8 am/pm</option><option value="9 am/pm">9 am/pm</option></select></div></div></div><div class="form-group row"><div class="form-group col-lg-6"><label class="col-sm-4" >Counter </label> <div class="col-sm-8">' +
                '<input type="text" class="form-control" name="counter[]" id="counter' + counter + '" value="" ></div></div><div class="form-group col-lg-6"><label class="col-sm-4" >Remarks </label> <div class="col-sm-8">' +
                '<input type="text" class="form-control" name="remarks[]" id="remarks' + counter + '" value="" ></div></div></div>');
            newTextBoxDiv.appendTo("#TextBoxesGroup");
            counter++;
        });
    });
</script>

<script type="text/javascript">
    $(document).ready(function() {
        $("body").on("click", ".add-k", function() {
            var html = $(".after-add-k").first().clone();
            $(html).find(".del").html("<a class='btn btn-danger remove'><i class='fa fa-trash-o' aria-hidden='true'></i> </a> " + ' <a class="btn btn-success add-k"><strong> + </strong> </a>');
            $(".after-add-k").last().after(html);
            $(".after-add-k").last().find('input').not('input[type="radio"]').val('')
            var con = 0;
            $('.select-multi').each(function() {
                $(this).find('input.city-zin').attr('data-id', 'privious_citizen' + con)
                $(this).find('#inlineRadio').attr('id', 'inlineRadio' + con)
                con++
            })
        });
        $("body").on("click", ".remove", function() {
            $(this).parents(".after-add-k").remove();
        });
        $('body').on('keyup', 'input', function() {
            var id = $(this).attr('id')
            $('.' + id + '_value').text($(this).val())
        })
        $('body').on('change', 'input', function() {
            var id = $(this).attr('id')
            $('.' + id + '_value').text($(this).val())
        })
        $('input').not('input[type="radio"],input[type="checkbox"]').change(function() {
            var id = $(this).attr('id')
            $('.' + id + '_value').text($(this).val())
        })
        $('body').on('change', 'select', function() {
            var id = $(this).attr('id')
            $('.' + id + '_value').text($(this).val())
        })
        $('input[type="radio"]').click(function() {
            var id = $(this).attr('data-id')
            if ($(this).val() == '1') {
                $('.' + id + '_value').text("Yes")
            } else if ($(this).val() == '0') {
                $('.' + id + '_value').text("No")
            } else {
                $('.' + id + '_value').text($(this).val())
            }
        })
        $('input[type="checkbox"]').click(function() {
            var id = $(this).attr('data-id')
            if ($(this).val() == '1') {
                $('.' + id + '_value').text("Yes")
            } else if ($(this).val() == '0') {
                $('.' + id + '_value').text("No")
            } else {
                $('.' + id + '_value').text($(this).val())
            }
        })
    });
</script>