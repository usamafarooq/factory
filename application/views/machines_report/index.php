<style type="text/css">
  .raphael-group-15-caption{
    display: none;
  }
  .raphael-group-168-creditgroup{
    display: none;
  }
</style>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap-wizard/1.2/jquery.bootstrap.wizard.js"></script> 
<script type="text/javascript" src="https://static.fusioncharts.com/code/latest/fusioncharts.js"></script> <script type="text/javascript" src="https://static.fusioncharts.com/code/latest/fusioncharts.widgets.js"></script> <script type="text/javascript" src="https://static.fusioncharts.com/code/latest/themes/fusioncharts.theme.fint.js"></script> 
<div class=control-sidebar-bg></div>
<div id=page-wrapper>
    <div class=content>
        <div class=content-header>
            <div class=header-icon style="margin-top: -9px;">
                <i class="pe-7s-note"></i>
            </div>
            <div class=header-title>
                <h1>Production Plan</h1>
                <small></small>
                <ol class=breadcrumb>
                    <li><i class=pe-7s-home></i> Home</li>
                    <li class="active">Production Plan</li>

                </ol>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <div class="panel panel-bd ">
                    <div class="panel-heading">
                        <div class="panel-title">
                            <h4>Production Plan Form</h4>
                        </div>
                    </div>
                    <div class="panel-body">
                        <div class="row">
                                <div class="col-sm-12">
                                    <div class="panel-body">
                                      <?php 
                                        $con = 0;
                                        foreach ($detail as $d) {
                                          $con++;
                                      ?>  
                                      <div class=row>
                                          <div class="col-xs-12 col-sm-6 col-md-6 col-lg-12 statistic-box  border"  style=" box-shadow: 10px 10px 5px #888888; background-color: #fcfdff ">
                                              <h5 style="color: black;"><strong><?php echo $con ?> : <?php echo $d['machine_Name'] ?></strong></h5>
                                                 <div id="chart_div<?php echo $con ?>"></div>
                                          </div>
                                      </div>  
                                      <?php } ?>
                                    </div>
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
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

  <!-- start chart 1 -->
<?php 
  $con = 0;
  foreach ($detail as $d) {
    $con++;
?>  
<script type="text/javascript">
    google.charts.load('current', {'packages':['gantt']});
    google.charts.setOnLoadCallback(drawChart<?php echo $con ?>);

    function drawChart<?php echo $con ?>() {
      var values = <?php echo json_encode($d['works']) ?>;
      //console.log(values)
      var data = new google.visualization.DataTable();
      data.addColumn('string', 'Task ID');
      data.addColumn('string', 'Task Name');
      //data.addColumn('string', 'Resource');
      data.addColumn('date', 'Start Date');
      data.addColumn('date', 'End Date');
      data.addColumn('number', 'Duration');
      data.addColumn('number', 'Percent Complete');
      data.addColumn('string', 'Dependencies');
      data.addRows(values.length);
      for (var i = 0; i < values.length; i++) {
        data.setCell(i, 0, values[i].id);
        data.setCell(i, 1, values[i].Job_Description);
        data.setCell(i, 2, new Date(values[i].start_date));
        data.setCell(i, 3, new Date(values[i].end_date));
        data.setCell(i, 4, null);
        data.setCell(i, 5, 0);
        data.setCell(i, 6, null);
      }
      // data.addRows([
      //   ['2014Spring', 'Job 1', 'Job 1',
      //    new Date(2015, 2, 22), new Date(2015, 5, 20), null, 90, null],
      //   ['2014Summer', 'Job 2', 'Job 2',
      //    new Date(2014, 5, 21), new Date(2014, 8, 20), null, 100, null],
      //   ['2014Autumn', 'Job 3', 'Job 3',
      //    new Date(2014, 8, 21), new Date(2014, 11, 20), null, 100, null],
      //   ['2014Winter', 'Job 4', 'Job 4',
      //    new Date(2014, 11, 21), new Date(2015, 2, 21), null, 100, null],
      //   ['2015Spring', 'Job 5', 'Job 5',
      //    new Date(2015, 2, 22), new Date(2015, 5, 20), null, 50, null],
      //   ['2015Summer', 'Job 6', 'Job 6',
      //    new Date(2015, 5, 21), new Date(2015, 8, 20), null, 0, null]
      // ]);

      var options = {
        height: 230,
        gantt: {
          trackHeight: 30
        }
      };

      var chart = new google.visualization.Gantt(document.getElementById('chart_div<?php echo $con ?>'));

      chart.draw(data, options);
    }
</script>
<?php } ?>