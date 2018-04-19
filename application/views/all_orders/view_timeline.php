<!-- /.Navbar  Static Side -->

<div class="control-sidebar-bg"></div>
<!-- Page Content -->
<div id="page-wrapper">
    <!-- main content -->
    <div class="content">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="header-icon">
                <i class="pe-7s-box1"></i>
            </div>
            <div class="header-title">
                <h1>Job Detail</h1>
                <small> </small>
                <ol class="breadcrumb">
                    <li><a href="index.html"><i class="pe-7s-home"></i> Home</a></li>

                    <li class="active">Job Detail</li>
                </ol>
            </div>
        </div>
        <!-- /. Content Header (Page header) -->
        <div class="panel-body">
            <div class="row">
                <div class="col-sm-12">
                    <div class="panel panel-bd">
                        <div class="panel-heading">
                            <div class="panel-title">
                                <h4>Job Detail</h4>
                            </div>
                        </div>
                        <div class="panel-body">

                            <ul class="activity-list list-unstyled">
                                <?php 
                                    foreach ($timeline as $c) {
                                ?>
                                <li class="activity-purple">
                                    <small class="text-muted"><?php echo date('Y-m-d H:i:s', strtotime($c['start_date'])) ?></small>
                                    <p>
                                        Start <span class="label label-success label-pill"><?php echo $c['type'] ?></span> 
                                        <?php if($c['end_date']){ ?> End
                                        <span class="label label-success label-pill"><?php echo $c['type'] ?></span>
                                        <?php echo date('Y-m-d H:i:s', strtotime($c['end_date'])) ?>
                                        <?php } ?>
                                    </p>
                                </li>
                                <?php } ?>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /.main content -->
</div>
<!-- /#page-wrapper -->

</div>
<!-- /#wrapper -->
<!-- START CORE PLUGINS -->