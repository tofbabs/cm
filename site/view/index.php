<?php include_once 'header.php'; ?>

        <div class="wrapper">
            <div class="container">

                <!-- Page-Title -->
                <div class="row">
                    <div class="col-sm-12">
                        <div class="btn-group pull-right">
                            <button type="button" class="btn btn-primary dropdown-toggle waves-effect waves-light" data-toggle="dropdown" aria-expanded="false">Settings <span class="m-l-5"><i class="fa fa-cog"></i></span></button>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="#">Action</a></li>
                                <li><a href="#">Another action</a></li>
                                <li><a href="#">Something else here</a></li>
                                <li class="divider"></li>
                                <li><a href="#">Separated link</a></li>
                            </ul>
                        </div>
                        <h4 class="page-title">Welcome !</h4>
                    </div>
                </div>

                <div class="row text-center">
                    <div class="col-md-6 col-sm-6 col-lg-3">
                        <div class="panel panel-border panel-success widget-s-1">
                            <div class="panel-heading"> </div>
                            <div class="panel-body">
                            <div class="h2 counter">30</div>
                            <span class="text-muted">Active Campaigns</span>
                            <div class="text-right">
                              <i class="ion-speakerphone fa-2x text-purple"></i>
                            </div>
                        </div>
                        </div>
                    </div>

                    <div class="col-md-6 col-sm-6 col-lg-3">
                        <div class="panel panel-border panel-warning widget-s-1">
                            <div class="panel-heading"> </div>
                            <div class="panel-body">
                            <div class="h2 text-warning counter">20</div>
                            <span class="text-muted">Pending Campaign Request</span>
                            <div class="text-right">
                              <i class="ion-speakerphone fa-2x text-warning"></i>
                            </div>
                        </div>
                        </div>
                    </div>

                    <div class="col-md-6 col-sm-6 col-lg-3">
                        <div class="panel panel-border panel-primary widget-s-1">
                            <div class="panel-heading"> </div>
                            <div class="panel-body">
                            <div class="h2 text-primary">25m</div>
                            <span class="text-muted">Subscribers</span>
                            <div class="text-right">
                              <i class="ion-android-contacts fa-2x text-primary"></i>
                            </div>
                        </div>
                        </div>
                    </div>

                    <div class="col-md-6 col-sm-6 col-lg-3">
                        <div class="panel panel-border panel-purple widget-s-1">
                            <div class="panel-heading"> </div>
                            <div class="panel-body">
                            <div class="h2 text-purple counter">120</div>
                            <span class="text-muted">Providers</span>
                            <div class="text-right">
                              <i class="ion-android-contact fa-2x text-success"></i>
                            </div>
                        </div>
                        </div>
                    </div>

                </div>

                <div class="row">
                    <div class="col-lg-8">
                        <div class="portlet"><!-- /portlet heading -->
                            <div class="portlet-heading">
                                <h3 class="portlet-title text-dark text-uppercase">
                                    Active Campaign Stats
                                </h3>
                                <div class="portlet-widgets">
                                    <a href="javascript:;" data-toggle="reload"><i class="ion-refresh"></i></a>
                                    <span class="divider"></span>
                                    <a data-toggle="collapse" data-parent="#accordion1" href="#portlet1"><i class="ion-minus-round"></i></a>
                                    <span class="divider"></span>
                                    <a href="#" data-toggle="remove"><i class="ion-close-round"></i></a>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            <div id="portlet1" class="panel-collapse collapse in">
                                <div class="portlet-body">
                                    <div class="row">

                                        <div class="col-md-12">
                                            <!-- <div id="flotRealTime" style="position: relative;height: 320px" ></div> -->
                                            <div id="website-stats" style="position: relative;height: 320px"></div>

                                            <div class="row text-center m-t-30">
                                                <div class="col-sm-4">
                                                    <h4 class="counter">86,956</h4>
                                                    <small class="text-muted"> Weekly Report</small>
                                                </div>
                                                <div class="col-sm-4">
                                                    <h4 class="counter">86,69</h4>
                                                    <small class="text-muted">Monthly Report</small>
                                                </div>
                                                <div class="col-sm-4">
                                                    <h4 class="counter">948,16</h4>
                                                    <small class="text-muted">Yearly Report</small>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> <!-- /Portlet -->
                    </div> <!-- end col -->



                    <div class="col-lg-4">
                        <div class="portlet"><!-- /portlet heading -->
                            <div class="portlet-heading">
                                <h3 class="portlet-title text-dark text-uppercase">
                                    Campaign Stats
                                </h3>
                                <div class="portlet-widgets">
                                    <a href="javascript:;" data-toggle="reload"><i class="ion-refresh"></i></a>
                                    <span class="divider"></span>
                                    <a data-toggle="collapse" data-parent="#accordion1" href="#portlet2"><i class="ion-minus-round"></i></a>
                                    <span class="divider"></span>
                                    <a href="#" data-toggle="remove"><i class="ion-close-round"></i></a>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            <div id="portlet2" class="panel-collapse collapse in">
                                <div class="portlet-body">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div id="pie-chart">
                                                <div id="pie-chart-container" class="flot-chart" style="height: 320px">
                                                </div>
                                            </div>

                                            <div class="row text-center m-t-30">
                                                <div class="col-sm-6">
                                                    <h4 class="counter">86,956</h4>
                                                    <small class="text-muted"> Weekly Report</small>
                                                </div>
                                                <div class="col-sm-6">
                                                    <h4 class="counter">86,69</h4>
                                                    <small class="text-muted">Monthly Report</small>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> <!-- /Portlet -->
                    </div> <!-- end col -->
                </div> <!-- End row -->


<?php include_once 'footer.php' ?>                