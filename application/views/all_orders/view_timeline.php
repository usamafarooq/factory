


    
     <div class=control-sidebar-bg></div>
<div id=page-wrapper>
    <div class=content>
        <div class="content-header">
            <div class="header-icon">
                <i class="pe-7s-box1"></i>
            </div>
            <div class="header-title">
                <h1>Job Detail</h1>
                <small> </small>
                <ol class="breadcrumb">
                    <li><a href="<?php echo base_url() ?>"><i class="pe-7s-home"></i> Home</a></li>
                    <li class="active">Job Detail</li>
                </ol>
            </div>
        </div>
        
        <div class=row>
            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-4">
                <div class="panel panel-bd lobidisable">
                    <div class=panel-heading>
                        <div class=panel-title> <i class=ti-stats-up></i>
                            <h4>Recent Activities</h4> </div>
                    </div>
                    <div class=panel-body style="overflow: scroll; height: 390px;     overflow-x: hidden;">
                        <ul class="activity-list list-unstyled">
                            <?php 
                                foreach ($timeline as $c) {
                            ?>
                            <li class="activity-purple">
                                <small class="text-muted"><?php echo get_single_difrreance($c['start_date']) ?> Ago</small>
                                <p>
                                    Start <span class="label label-success label-pill"><?php echo $c['type'] ?></span> 
                                    <?php if($c['end_date']){ ?> End
                                    <!-- <span class="label label-success label-pill"><?php echo $c['type'] ?></span> -->
                                    <?php echo get_single_difrreance($c['end_date']) ?> Ago
                                    <?php } ?>
                                </p>
                            </li>
                            <?php } ?>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-8">
                <div class="panel panel-bd lobidrag">
                    <div class=panel-heading>
                        <div class=panel-title> <i class=ti-stats-up></i>
                            <h4>Single Time Line Chart</h4> </div>
                    </div>
                    <div class=panel-body>
                        <div class=table-responsive>
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>Flow</th>
                                        <th>Start Date</th>
                                        <th>End Date</th>
                                        <th>TAT</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php 
                                        foreach ($timeline as $c) {
                                    ?>
                                    <tr>
                                        <td><?php echo $c['type'] ?></td>
                                        <td><?php echo $c['start_date'] ?></td>
                                        <td><?php echo $c['end_date'] ?></td>
                                        <td><?php echo get_single_difrreance($c['start_date'], $c['end_date']) ?></td>
                                    </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
        <div class="content">
            <!-- Content Header (Page header) -->
            <div class="row">
                <!-- Bar Chart -->
                <div class="col-sm-12 col-md-8">
                    <div class="panel panel-bd lobidisable">
                        <div class="panel-heading">
                            <div class="panel-title">
                                <h4>Product chart</h4> </div>
                        </div>
                        <div class="panel-body">
                            <canvas id="barChart" height="200"></canvas>
                        </div>
                    </div>
                </div>
                <!-- Radar Chart -->
                <!-- Line Chart -->
                <div class="col-sm-6 col-md-4">
                    <div class="panel panel-bd lobidisable">
                        <div class="panel-heading">
                            <div class="panel-title">
                                <h4>Pie chart</h4> </div>
                        </div>
                        <div class="panel-body">
                            <canvas id="pieChart" height="310"></canvas>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-12">
                    <div class="panel panel-bd lobidrag">
                        <div class="panel-heading">
                            <div class="panel-title">
                                <h4>Product chart</h4> </div>
                        </div>
                        <div class="panel-body">
                            <canvas id="lineChart" height="140"></canvas>
                        </div>
                    </div>
                </div>
                <!-- Pie Chart -->
                <!-- Doughnut Chart -->
                <!-- Polar Chart -->
                <!-- Single Bar Chart -->
                <!-- <div class="col-sm-6 col-md-6">
                    <div class="panel panel-bd lobidisable">
                        <div class="panel-heading">
                            <div class="panel-title">
                                <h4>Single Product Chart</h4> </div>
                        </div>
                        <div class="panel-body">
                            <canvas id="singelBarChart" height="310"></canvas>
                        </div>
                    </div>
                </div> -->
             
            </div>
           
            <div class="content">
                <!-- Content Header (Page header) -->
                <!-- /. Content Header (Page header) -->
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-12">
                        <div class="panel panel-bd">
                            <div class="panel-heading">
                                <div class="panel-title">
                                    <h4>Time Line Chart</h4> </div>
                            </div>
                            <div class="panel-body">
                                <!-- Column chart with images on top -->
                                <div id="chart_div"></div>
                            </div>
                        </div>
                    </div>
                </div>
               
            </div>
            <!-- <div class="content">
                
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-12">
                        <div class="panel panel-bd">
                            <div class="panel-heading">
                                <div class="panel-title">
                                    <h4>Time Line Chart</h4> </div>
                            </div>
                            <div class="panel-body">
                               
                                    <div id="example3.1" style="height: 180px;"></div>
                            </div>
                        </div>
                    </div>
                </div>
               
            </div> -->
            <!-- /.main content -->
        </div>
    </div>
</div>
<!-- Page Content -->
</div>
<!-- /#wrapper -->
<!-- Modal side fall effects -->
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

<script type="text/javascript">
  google.charts.load("current", {packages:["timeline"]});
  google.charts.setOnLoadCallback(drawChart);
  function drawChart() {

    var container = document.getElementById('example3.1');
    var chart = new google.visualization.Timeline(container);
    var dataTable = new google.visualization.DataTable();
    dataTable.addColumn({ type: 'string', id: 'Position' });
    dataTable.addColumn({ type: 'string', id: 'Name' });
    dataTable.addColumn({ type: 'date', id: 'Start' });
    dataTable.addColumn({ type: 'date', id: 'End' });
    dataTable.addRows([
      [ 'Job 1', 'Print', new Date(1789, 3, 30), new Date(1797, 2, 4) ],
      [ 'Job 1', 'Cutting', new Date(1797, 2, 4), new Date(1801, 2, 4) ],
      [ 'Job 1', 'Packing', new Date(1801, 2, 4), new Date(1809, 2, 4) ],
      [ 'JOb 2', 'Print', new Date(1789, 3, 21), new Date(1797, 2, 4)],
      [ 'JOb 2', 'Cutting', new Date(1797, 2, 4), new Date(1801, 2, 4)],
      [ 'JOb 2', 'Packing', new Date(1801, 2, 4), new Date(1805, 2, 4)],
      [ 'JOb 2', 'Dispatch', new Date(1805, 2, 4), new Date(1812, 3, 20)],
      [ 'JOb 3', 'Print', new Date(1789, 8, 25), new Date(1790, 2, 22)],
      [ 'JOb 3', 'Cutting', new Date(1790, 2, 22), new Date(1793, 11, 31)],
      [ 'JOb 3', 'Lable Cutting', new Date(1794, 0, 2), new Date(1795, 7, 20)],
      [ 'JOb 3', 'Lefet Cutting', new Date(1795, 7, 20), new Date(1800, 4, 12)],
      [ 'JOb 3', 'Ink Mixing', new Date(1800, 4, 13), new Date(1800, 5, 5)],
      [ 'JOb 3', 'Packing', new Date(1800, 5, 13), new Date(1801, 2, 4)],
      [ 'JOb 3', 'Dispatch', new Date(1801, 2, 5), new Date(1801, 4, 1)]  
      
    ]);

    chart.draw(dataTable);
  }
</script>
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script> 
<!-- start chart 1 --> 
<script type="text/javascript"> 
google.charts.load('current', {
    'packages': ['gantt']
}

);
google.charts.setOnLoadCallback(drawChart);
function drawChart() {
    var data=new google.visualization.DataTable();
    // data.addColumn('string', 'Task ID');
    // data.addColumn('string', 'Task Name');
    // data.addColumn('string', 'Resource');
    // data.addColumn('date', 'Start Date');
    // data.addColumn('date', 'End Date');
    // data.addColumn('number', 'Duration');
    // data.addColumn('number', 'Percent Complete');
    // data.addColumn('string', 'Dependencies');
    // data.addRows([ ['2014Spring', 'Job 1', 'Job 1', new Date(2015, 2, 22), new Date(2015, 5, 20), null, 90, null], ['2014Summer', 'Job 2', 'Job 2', new Date(2014, 5, 21), new Date(2014, 8, 20), null, 100, null], ['2014Autumn', 'Job 3', 'Job 3', new Date(2014, 8, 21), new Date(2014, 11, 20), null, 100, null], ['2014Winter', 'Job 4', 'Job 4', new Date(2014, 11, 21), new Date(2015, 2, 21), null, 100, null], ['2015Spring', 'Job 5', 'Job 5', new Date(2015, 2, 22), new Date(2015, 5, 20), null, 50, null], ['2015Summer', 'Job 6', 'Job 6', new Date(2015, 5, 21), new Date(2015, 8, 20), null, 0, null]]);
    var values = JSON.parse('<?php echo json_encode($timeline) ?>');
    //console.log(values)
    data.addColumn('string', 'Task ID');
    data.addColumn('string', 'Task Name');
    data.addColumn('date', 'Start Date');
    data.addColumn('date', 'End Date');
    data.addColumn('number', 'Duration');
    data.addColumn('number', 'Percent Complete')
    data.addColumn('string', 'Dependencies');
    data.addRows(values.length);
    for (var i = 0; i < values.length; i++) {
        data.setCell(i, 0, values[i].type);
        data.setCell(i, 1, values[i].type);
        data.setCell(i, 2, new Date(values[i].start_date));
        data.setCell(i, 3, new Date(values[i].end_date));
        data.setCell(i, 4, null);
        data.setCell(i, 5, 0);
        data.setCell(i, 6, null);
    }
    var options= {
        height: 230,
        gantt: {
            trackHeight: 30
        }
    };
    var chart=new google.visualization.Gantt(document.getElementById('chart_div'));
    chart.draw(data, options);
}

</script> <script> $(document).ready(function () {
    "use strict"; // Start of use strict
    //bar chart
    var ctx=document.getElementById("barChart");
    var myChart=new Chart(ctx, {
        type: 'bar', data: {
            labels: [
                <?php 
                    foreach ($product as $p) {
                        echo '"'.$p['name'].'",';
                    }
                ?>
            ], datasets: [ {
                label: "Order Quantity", data: [
                    <?php 
                        foreach ($product as $p) {
                            echo $p['order_qty'].',';
                        }
                    ?>
                ], borderColor: "rgba(85, 139, 47, 0.9)", borderWidth: "0", backgroundColor: "rgba(85, 139, 47, 0.5)"
            }
            , {
                label: "Deliver Quantity", data: [
                    <?php 
                        foreach ($product as $p) {
                            echo $p['deliver_qty'].',';
                        }
                    ?>
                ], borderColor: "rgba(0,0,0,0.09)", borderWidth: "0", backgroundColor: "rgba(0,0,0,0.07)"
            }
            ]
        }
        , options: {
            scales: {
                yAxes: [ {
                    ticks: {
                        beginAtZero: true
                    }
                }
                ]
            }
        }
    }
    );
    //radar chart
    //line chart
    var ctx=document.getElementById("lineChart");
    var myChart=new Chart(ctx, {
        type: 'line', data: {
            labels: [<?php 
                    foreach ($product as $p) {
                        echo '"'.$p['name'].'",';
                    }
                ?>], datasets: [ {
                label: "Deliver Quantity", borderColor: "rgba(0,0,0,.09)", borderWidth: "1", backgroundColor: "rgba(0,0,0,.07)", data: [<?php 
                        foreach ($product as $p) {
                            echo $p['deliver_qty'].',';
                        }
                    ?>]
            }
            , {
                label: "Use Quantity", borderColor: "rgba(85, 139, 47, 0.9)", borderWidth: "1", backgroundColor: "rgba(85, 139, 47, 0.5)", pointHighlightStroke: "rgba(26,179,148,1)", data: [<?php 
                        foreach ($product as $p) {
                            echo ($p['deliver_qty'] - $p['balance_qty']).',';
                        }
                    ?>]
            }
            ]
        }
        , options: {
            responsive: true, tooltips: {
                mode: 'index', intersect: false
            }
            , hover: {
                mode: 'nearest', intersect: true
            }
        }
    }
    );
    //pie chart
    var ctx=document.getElementById("pieChart");
    var myChart=new Chart(ctx, {
        type: 'pie', data: {
            datasets: [ {
                data: [<?php 
                        foreach ($product as $p) {
                            echo $p['deliver_qty'].',';
                        }
                    ?>], backgroundColor: [ "rgba(85, 139, 47, 0.9)", "rgba(85, 139, 47, 0.7)", "rgba(85, 139, 47, 0.5)", "rgba(0, 0, 0, 0.07)"], hoverBackgroundColor: [ "rgba(85, 139, 47, 0.9)", "rgba(85, 139, 47, 0.7)", "rgba(85, 139, 47, 0.5)", "rgba(0,0,0,0.07)"]
            }
            ], labels: [<?php 
                    foreach ($product as $p) {
                        echo '"'.$p['name'].'",';
                    }
                ?>]
        }
        , options: {
            responsive: true
        }
    }
    );
    //doughut chart
    //polar chart
    // single bar chart
    var ctx=document.getElementById("singelBarChart");
    var myChart=new Chart(ctx, {
        type: 'bar', data: {
            labels: ["Sun", "Mon", "Tu", "Wed", "Th", "Fri", "Sat"], datasets: [ {
                label: "My First dataset", data: [40, 55, 75, 81, 56, 55, 40], borderColor: "rgba(85, 139, 47, 0.9)", borderWidth: "0", backgroundColor: "rgba(85, 139, 47, 0.5)"
            }
            ]
        }
        , options: {
            scales: {
                yAxes: [ {
                    ticks: {
                        beginAtZero: true
                    }
                }
                ]
            }
        }
    }
    );
}

);
</script>
 <script> $(document).ready(function () {

    var chartData=[ {
        "date": "2017-01-01", "distance": 250, "townName": "Dhaka", "townName2": "Dhaka", "townSize": 25, "latitude": 40.71, "duration": 408
    }
    , {
        "date": "2017-01-02", "distance": 371, "townName": "Chittagong", "townSize": 14, "latitude": 38.89, "duration": 482
    }
    , {
        "date": "2017-01-03", "distance": 433, "townName": "Comilla", "townSize": 6, "latitude": 34.22, "duration": 562
    }
    , {
        "date": "2017-01-04", "distance": 345, "townName": "Jacksonville", "townSize": 7, "latitude": 30.35, "duration": 379
    }
    , {
        "date": "2017-01-05", "distance": 480, "townName": "Noakhali", "townName2": "Noakhali", "townSize": 10, "latitude": 25.83, "duration": 501
    }
    , {
        "date": "2017-01-06", "distance": 386, "townName": "Chadpur", "townSize": 7, "latitude": 30.46, "duration": 443
    }
    , {
        "date": "2017-01-07", "distance": 348, "townName": "Borishal", "townSize": 10, "latitude": 29.94, "duration": 405
    }
    , {
        "date": "2017-01-08", "distance": 238, "townName": "Feni", "townName2": "Feni", "townSize": 16, "latitude": 29.76, "duration": 309
    }
    , {
        "date": "2017-01-09", "distance": 218, "townName": "Dalas", "townSize": 17, "latitude": 32.8, "duration": 287
    }
    , {
        "date": "2017-01-10", "distance": 349, "townName": "Oklahoma City", "townSize": 11, "latitude": 35.49, "duration": 485
    }
    , {
        "date": "2017-01-11", "distance": 603, "townName": "Kansas City", "townSize": 10, "latitude": 39.1, "duration": 890
    }
    , {
        "date": "2017-01-12", "distance": 534, "townName": "Rangamati", "townName2": "Rangamati", "townSize": 18, "latitude": 39.74, "duration": 810
    }
    , {
        "date": "2017-01-13", "townName": "Salt Lake City", "townSize": 12, "distance": 425, "duration": 670, "latitude": 40.75, "alpha": 0.4
    }
    , {
        "date": "2017-01-14", "latitude": 36.1, "duration": 470, "townName": "Rongpur", "townName2": "Rongpur", "bulletClass": "lastBullet"
    }
    , {
        "date": "2017-01-15"
    }
    , {
        "date": "2017-01-16"
    }
    ];
    var chart=AmCharts.makeChart("chartdiv3", {
        "type": "serial", "theme": "light", "dataDateFormat": "YYYY-MM-DD", "dataProvider": chartData, "addClassNames": true, "startDuration": 1, //"color": "#FFFFFF",
        "marginLeft": 0, "categoryField": "date", "categoryAxis": {
            "parseDates": true, "minPeriod": "DD", "autoGridCount": false, "gridCount": 50, "gridAlpha": 0.1, "gridColor": "#FFFFFF", "axisColor": "#555555", "dateFormats": [ {
                "period": 'DD', "format": 'DD'
            }
            , {
                "period": 'WW', "format": 'MMM DD'
            }
            , {
                "period": 'MM', "format": 'MMM'
            }
            , {
                "period": 'YYYY', "format": 'YYYY'
            }
            ]
        }
        , "valueAxes": [ {
            "id": "a1", "title": "distance", "gridAlpha": 0, "axisAlpha": 0
        }
        , {
            "id": "a2", "position": "right", "gridAlpha": 0, "axisAlpha": 0, "labelsEnabled": false
        }
        , {
            "id": "a3", "title": "duration", "position": "right", "gridAlpha": 0, "axisAlpha": 0, "inside": true, "duration": "mm", "durationUnits": {
                "DD": "d. ", "hh": "h ", "mm": "min", "ss": ""
            }
        }
        ], "graphs": [ {
            "id": "g1", "valueField": "distance", "title": "distance", "type": "column", "fillAlphas": 0.9, "valueAxis": "a1", "balloonText": "[[value]] miles", "legendValueText": "[[value]] mi", "legendPeriodValueText": "total: [[value.sum]] mi", "lineColor": "#428bca", "alphaField": "alpha"
        }
        , {
            "id": "g2", "valueField": "latitude", "classNameField": "bulletClass", "title": "latitude/city", "type": "line", "valueAxis": "a2", "lineColor": "#558B2F", "lineThickness": 1, "legendValueText": "[[value]]/[[description]]", "descriptionField": "townName", "bullet": "round", "bulletSizeField": "townSize", "bulletBorderColor": "#558B2F", "bulletBorderAlpha": 1, "bulletBorderThickness": 2, "bulletColor": "#558B2F", "labelText": "[[townName2]]", "labelPosition": "right", "balloonText": "latitude:[[value]]", "showBalloon": true, "animationPlayed": true
        }
        , {
            "id": "g3", "title": "duration", "valueField": "duration", "type": "line", "valueAxis": "a3", "lineColor": "#E5343D", "balloonText": "[[value]]", "lineThickness": 1, "legendValueText": "[[value]]", "bullet": "square", "bulletBorderColor": "#E5343D", "bulletBorderThickness": 1, "bulletBorderAlpha": 1, "dashLengthField": "dashLength", "animationPlayed": true
        }
        ], "chartCursor": {
            "zoomable": false, "categoryBalloonDateFormat": "DD", "cursorAlpha": 0, "valueBalloonsEnabled": false
        }
        , "legend": {
            "bulletType": "round", "equalWidths": false, "valueWidth": 120, "useGraphSettings": true //"color": "#FFFFFF"
        }
    }
    );
    /**
                 * SVG path for target icon
                 */
    var targetSVG="M9,0C4.029,0,0,4.029,0,9s4.029,9,9,9s9-4.029,9-9S13.971,0,9,0z M9,15.93 c-3.83,0-6.93-3.1-6.93-6.93S5.17,2.07,9,2.07s6.93,3.1,6.93,6.93S12.83,15.93,9,15.93 M12.5,9c0,1.933-1.567,3.5-3.5,3.5S5.5,10.933,5.5,9S7.067,5.5,9,5.5 S12.5,7.067,12.5,9z";
    /**
                 * SVG path for plane icon
                 */
    var planeSVG="m2,106h28l24,30h72l-44,-133h35l80,132h98c21,0 21,34 0,34l-98,0 -80,134h-35l43,-133h-71l-24,30h-28l15,-47";
    /**
                 * Create the map
                 */
    var map=AmCharts.makeChart("chartMap", {
        "type": "map", "theme": "light", "projection": "winkel3", "dataProvider": {
            "map": "worldLow", "lines": [ {
                "id": "line1", "arc": -0.85, "alpha": 0.3, "latitudes": [23.684994, 48.8567, 43.8163, 34.3, 23, 61.524010, 20.593684, 33.223191], "longitudes": [90.356331, 2.3510, -79.4287, -118.15, -82, 105.318756, 78.962880, 43.679291]
            }
            , {
                "id": "line2", "alpha": 0, "color": "#E5343D", "latitudes": [23.684994, 48.8567, 43.8163, 34.3, 23, 61.524010, 20.593684, 33.223191], "longitudes": [90.356331, 2.3510, -79.4287, -118.15, -82, 105.318756, 78.962880, 43.679291]
            }
            ], "images": [ {
                "svgPath": targetSVG, "title": "Bangladesh", "latitude": 23.684994, "longitude": 90.356331
            }
            , {
                "svgPath": targetSVG, "title": "Paris", "latitude": 48.8567, "longitude": 2.3510
            }
            , {
                "svgPath": targetSVG, "title": "Toronto", "latitude": 43.8163, "longitude": -79.4287
            }
            , {
                "svgPath": targetSVG, "title": "Los Angeles", "latitude": 34.3, "longitude": -118.15
            }
            , {
                "svgPath": targetSVG, "title": "Havana", "latitude": 23, "longitude": -82
            }
            , {}
            , {
                "svgPath": targetSVG, "title": "Russia", "latitude": 61.524010, "longitude": 105.318756
            }
            , {}
            , {
                "svgPath": targetSVG, "title": "India", "latitude": 20.593684, "longitude": 78.962880
            }
            , {}
            , {
                "svgPath": targetSVG, "title": "Iraq", "latitude": 33.223191, "longitude": 43.679291
            }
            , {
                "svgPath": planeSVG, "positionOnLine": 0, "color": "#000000", "alpha": 0.1, "animateAlongLine": true, "lineId": "line2", "flipDirection": true, "loop": true, "scale": 0.03, "positionScale": 1.3
            }
            , {
                "svgPath": planeSVG, "positionOnLine": 0, "color": "#585869", "animateAlongLine": true, "lineId": "line1", "flipDirection": true, "loop": true, "scale": 0.03, "positionScale": 1.8
            }
            ]
        }
        , "areasSettings": {
            "unlistedAreasColor": "#5b69bc"
        }
        , "imagesSettings": {
            "color": "#E5343D", "rollOverColor": "#E5343D", "selectedColor": "#E5343D", "pauseDuration": 0.2, "animationDuration": 4, "adjustAnimationSpeed": true
        }
        , "linesSettings": {
            "color": "#E5343D", "alpha": 0.4
        }
        , "export": {
            "enabled": true
        }
    }
    );
    var chart=AmCharts.makeChart("chartPie", {
        "type": "pie", //                    "theme": "light",
        "addClassNames": true, "classNameField": "class", "dataProvider": [ {
            "value": 4852, "class": "color1"
        }
        , {
            "value": 9899, "class": "color2"
        }
        , {
            "value": 7789, "class": "color3"
        }
        ], "valueField": "value", "labelRadius": 5, "radius": "42%", "innerRadius": "60%", "labelText": "[[title]]", "export": {
            "enabled": true
        }
    }
    );
    //Column chart with images on top
    var chart=AmCharts.makeChart("column", {
        "type": "serial", "theme": "light", "dataProvider": [ {
            "name": "Salauddin", "points": 35654, "color": "#428bca", "bullet": "assets/plugins/amcharts/images/A04.png"
        }
        , {
            "name": "Tuhin", "points": 65456, "color": "#558B2F", "bullet": "assets/plugins/amcharts/images/C02.png"
        }
        , {
            "name": "Jahangir", "points": 45724, "color": "#FFB61E", "bullet": "assets/plugins/amcharts/images/D02.png"
        }
        , {
            "name": "Tanjil", "points": 13654, "color": "#62d0f1", "bullet": "assets/plugins/amcharts/images/E01.png"
        }
        , {
            "name": "Naeem", "points": 53654, "color": "#E5343D", "bullet": "assets/plugins/amcharts/images/A04.png"
        }
        ], "valueAxes": [ {
            "maximum": 80000, "minimum": 0, "axisAlpha": 0, "dashLength": 4, "position": "left"
        }
        ], "startDuration": 1, "graphs": [ {
            "balloonText": "<span style='font-size:13px;'>[[category]]: <b>[[value]]</b></span>", "bulletOffset": 10, "bulletSize": 52, "colorField": "color", "cornerRadiusTop": 8, "customBulletField": "bullet", "fillAlphas": 0.9, "lineAlpha": 0, "type": "column", "valueField": "points"
        }
        ], "marginTop": 0, "marginRight": 0, "marginLeft": 0, "marginBottom": 0, "autoMargins": false, "categoryField": "name", "categoryAxis": {
            "axisAlpha": 0, "gridAlpha": 0, "inside": true, "tickLength": 0
        }
        , "export": {
            "enabled": true
        }
    }
    );
    //Zoomable Value Axis
   
</script>
<script type="text/javascript">
  var chart = AmCharts.makeChart("chartdiv", {
  "type": "serial",
  "theme": "light",
  "marginTop": 50,
  "plotAreaBorderAlpha": 1,
  "plotAreaBorderColor": "#ed6c2d",
  "plotAreaFillrAlpha": 1,
  "plotAreaFillColors": "#ed6c2d",
  "dataProvider": [{
    // Need at least one empty data item
  }],
  "zoomOutText": "",
  "dataDateFormat": "YYYY-MM-DD",
  "valueAxes": [{
    "type": "date",
    "gridAlpha": 0,
    "axisColor": "#ed6c2d",
    "axisThickness": 2,
    "boldPeriodBeginning": false,
    "tickLength": 20,
    "minHorizontalGap": 70,
    "centerLabelOnFullPeriod": false,
    "minimumDate": "2016-01-01",
    "maximumDate": "2016-12-31",
    "dateFormats": [{
      period: 'DD',
      format: 'MMM DD'
    }, {
      period: 'WW',
      format: 'MMM DD'
    }, {
      period: 'MM',
      format: 'MMMM'
    }, {
      period: 'YYYY',
      format: 'YYYY'
    }],
    "guides": [{
      "value": new Date(2016, 2, 5),
      "label": "MILESTONE #1",
      "position": "top",
      "fontSize": 15,
      "tickLength": 15
    }, {
      "value": new Date(2016, 4, 1),
      "label": "MILESTONE #2",
      "position": "top",
      "fontSize": 15,
      "tickLength": 15
    }, {
      "value": new Date(2016, 6, 22),
      "label": "MILESTONE #3",
      "position": "top",
      "fontSize": 15,
      "tickLength": 15
    }, {
      "value": new Date(2016, 11, 1),
      "label": "PROJECT END",
      "position": "top",
      "fontSize": 15,
      "tickLength": 15,
      "color": "#ed6c2d"
    }]
  }],
  "startDuration": 1,
  "graphs": [{
    // Need to have at least one empty graph
  }],
  "rotate": true,
  "columnWidth": 1,
  "categoryField": "category",
  "categoryAxis": {
    "gridAlpha": 0,
    "position": "left",
    "labelsEnabled": false,
    "tickLength": 0
  },
  "creditsPosition": "bottom-left"
});
</script>
<script>
           
        </script>