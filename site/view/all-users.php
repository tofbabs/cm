<?php include_once 'header.php'; ?>

<script src="<?php echo $host ?>/site/assets/js/list.min.js"></script>
<script src="<?php echo $host ?>/site/assets/js/list.pagination.min.js"></script>

      <div class="wrapper">
          <div class="container">


              <!-- Page-Title -->
              <div class="row">
                  <div class="col-sm-12">
                      <div class="btn-group pull-right">
                          <a href="<?php echo $host?>/user/add" type="button" class="btn btn-primary waves-effect waves-light" data-toggle="dropdown" aria-expanded="false">New User <span class="m-l-5"><i class="fa fa-plus"></i></span></a>

                          
                      </div>
                      <h4 class="page-title">Users </h4>
                  </div>
              </div>


              

              <div id="users">

                <div class="row">

                    <div class="col-lg-12">
                        <div class="panel panel-default">
                            <div class="panel-body">
                                <div class="input-group">
                                    <input type="text" id="example-input1-group2" name="example-input1-group2" class="search form-control input-lg" placeholder="Search">

                                    <span class="input-group-btn">
                                        <button type="button" data-sort="name" class="sort btn-lg btn waves-effect waves-light btn-success w-md"><i class="fa fa-search"></i></button>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

                <!-- <div class="row"> -->
                  
                  <ul class="list">
                  
                    <?php foreach ($users as $key => $u) : ?>

                      <li class="col-sm-6 col-lg-4">
                          <div class="panel">
                              <div class="panel-body">

                                  <div class="media-main">
                                      <div class="pull-left">
                                          <span class="thumb-user abb"><?php getAbb($u->getName()); ?></span>
                                      </div>

                                      <div class="pull-right btn-group-sm">
                                          <a href="#" class="btn btn-success waves-effect waves-light tooltips" data-placement="top" data-toggle="tooltip" data-original-title="Edit">
                                              <i class="fa fa-pencil"></i>
                                          </a>
                                          <a href="#" class="btn btn-danger waves-effect waves-light tooltips" data-placement="top" data-toggle="tooltip" data-original-title="Delete">
                                              <i class="fa fa-close"></i>
                                          </a>
                                      </div>

                                      <div class="text-center info">
                                          <h4 class="name"><?php echo $u->getName() ?></h4>
                                          <p class="text-muted padding-bt-10">Active Campaign </br>200,000 subscribers</p>
                                          
                                      </div>

                                      <?php createProgressBar(30); ?>
                                  </div>

                                  <div class="clearfix"></div>

                              </div> <!-- panel-body -->
                          </div> <!-- panel -->
                      </li> <!-- end col -->

                    <?php endforeach ?>

                  </ul>

                <!-- </div>  -->
                <!-- End row -->

              <div class="row">
                <div class="col-sm-12">

                  <ul class="pagination"></ul>

                </div>
              </div>

            </div>




              
              

              <!-- <div class="row">
                  <div class="col-sm-12">
                      <ul class="pagination pull-right">
                          <li>
                            <a href="#" aria-label="Previous">
                              <i class="fa fa-angle-left"></i>
                            </a>
                          </li>
                          <li><a href="#">1</a></li>
                          <li class="active"><a href="#">2</a></li>
                          <li><a href="#">3</a></li>
                          <li class="disabled"><a href="#">4</a></li>
                          <li><a href="#">5</a></li>
                          <li>
                            <a href="#" aria-label="Next">
                              <i class="fa fa-angle-right"></i>
                            </a>
                          </li>
                      </ul>
                  </div>
              </div> -->

             

             <!--  <div id="users">

                <input class="search" placeholder="Search" />
                <button class="sort" data-sort="name">
                  Sort
                </button>

                <ul class="list">
                  <li>
                    <h3 class="name">Jonny Stromberg</h3>
                    <p class="born">1986</p>
                  </li>
                  <li>
                    <h3 class="name">Jonas Arnklint</h3>
                    <p class="born">1985</p>
                  </li>
                  <li>
                    <h3 class="name">Martina Elm</h3>
                    <p class="born">1986</p>
                  </li>
                  <li>
                    <h3 class="name">Gustaf Lindqvist</h3>
                    <p class="born">1983</p>
                  </li>
                </ul>

                <ul class="pagination"></ul>


              </div> -->

              <script type="text/javascript">
                var options = {
                  valueNames: [ 'name', 'abb' ],
                  page: 2,
                  plugins: [
                    ListPagination({})
                  ]
                };

                var userList = new List('users', options);

              </script>



<?php include_once 'footer.php' ?>                