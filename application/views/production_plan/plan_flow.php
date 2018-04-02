<?php
// $new_tree = array();
// $tree = array();
// foreach($departments as $row)
//     adj_tree($tree, $row);
// function adj_tree(&$tree, $item) {
//     $i = $item['id'];
//     $p = $item['parent_id'];
//     $tree[$i] = isset($tree[$i]) ? $item + $tree[$i] : $item;
//     $tree[$p]['_children'][] = &$tree[$i];
// }
// $con = 1;
// foreach($tree as $row){
// 	if ($row['parent_id'] == '0') {
// 		$new_tree[] =$row;
// 	}
// }

$data=[];
foreach ($flows as $d) {
	if ($d['parent_id'] == 0) {
		$data[] = "[{v:'".$d['id']."', f:'<b>".$d['Name'] . "</b>'}, '', '']";
	}
	else{
		$data[] = "[{v:'".$d['id']."', f:'<b>".$d['Name'] . "</b>'}, '".$d['parent_id']."', '']";
	}
}

$data = '[' . implode(',', $data) . ']';
//print_r($data);die;
//print_r($new_tree);die;

?>
<div class=control-sidebar-bg></div>
<div id=page-wrapper>
    <div class=content>
        <div class=content-header>
            <div class=header-icon style="margin-top: -9px;">
                <i class="pe-7s-note"></i>
            </div>
            <div class=header-title>
                <h1>Production PLan Flow</h1>
                <small></small>
                <ol class=breadcrumb>
                    <li><i class=pe-7s-home></i> Home</li>
                    <li class="active">Production PLan Flow</li>

                </ol>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <div class="panel panel-bd ">
                    <div class="panel-heading">
                        <div class="panel-title">
                            <h4>Production PLan Flow</h4>
                        </div>
                    </div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="panel-body">
                                	<div id="chart_div"></div>
                                </div>
                              </div>
                            </div>        
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div style="height: 80px;"></div>
    </div>
</div>
<!-- /.main content -->

</div>
<!-- <style type="text/css">
	.orgchart table{ border-collapse:collapse; padding:0; margin:0; top:0; /*background:#FFFFE8;*/ width:100% }
.orgchart td{ vertical-align:top; text-align:center }
.orgchart th{ height:20px; }
.orgchart td .right{ border-right:1px solid #000; }
.orgchart td .top{   border-top:1px solid #000;  }
.orgchart .width-50{   width:50%  }
.orgchart .charttext{border:1px solid #000; color: #fff; padding:10px; background:#3e454c; display:inline-block;font-size:12px;}

</style> -->
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<script>
    google.charts.load('current', {packages:["orgchart"]});
    google.charts.setOnLoadCallback(drawChart);

    function drawChart() {
      var data = new google.visualization.DataTable();
      data.addColumn('string', 'Name');
      data.addColumn('string', 'Manager');
      data.addColumn('string', 'ToolTip');

      // For each orgchart box, provide the name, manager, and tooltip to show.
      data.addRows(<?php echo $data;?>);

      // Create the chart.
      var chart = new google.visualization.OrgChart(document.getElementById('chart_div'));
      // Draw the chart, setting the allowHtml option to true for the tooltips.
      chart.draw(data, {
          allowHtml:true,
          nodeClass:"myNodeClass",
          selectedNodeClass:"mySelectedNodeClass",
          size:"medium"
        });
    }
</script>
<style>
        .designation {
            color: red;
            font-style: italic;
        }
        .myNodeClass {
        	padding:10px;
            color: #fff;
          text-align: center;
          vertical-align: middle;
          font-family: arial,helvetica;
          cursor: default;
          font-size: 12px;
         /* -moz-border-radius: 5px;
          -webkit-border-radius: 5px;
          -webkit-box-shadow: rgba(0, 0, 0, 0.5) 3px 3px 3px;
          -moz-box-shadow: rgba(0, 0, 0, 0.5) 3px 3px 3px;*/
          background-color: #3e454c;
          background: #3e454c;
        }
        /*.mySelectedNodeClass {
            color: #000;
          text-align: center;
          vertical-align: middle;
          font-family: arial,helvetica;
          cursor: default;
          -moz-border-radius: 5px;
          -webkit-border-radius: 5px;
          -webkit-box-shadow: rgba(0, 0, 0, 0.5) 3px 3px 3px;
          -moz-box-shadow: rgba(0, 0, 0, 0.5) 3px 3px 3px;
          background-color: #fff7ae;
          background: -webkit-gradient(linear, left top, left bottom, from(#fff7ae), to(#eee79e));
        }*/
        #chart_div {
            overflow:hidden;
            overflow: scroll;
        }
        #chart_div:hover {
            /*overflow: scroll;*/
        }
        .google-visualization-orgchart-linenode{
        	border-color:#3e454c;
        }
    </style>