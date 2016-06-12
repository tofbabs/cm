<?php include_once 'header.php'; ?>


<div class="wrapper">
    <div class="container">

        <!-- Page-Title -->
        <div class="row">
            <div class="col-sm-12">
                <div class="btn-group pull-right">
                    <a href="<?php echo $host?>/campaign/add" type="button" class="btn btn-primary dropdown-toggle waves-effect waves-light" >New Campaign <span class="m-l-5"><i class="fa fa-plus"></i></span></a>
                    
                </div>
                <h4 class="page-title"> All Campaigns</h4>
            </div>
        </div>


        <!--Campaign List-->

        <div id="campaigns">

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

                <div class="col-lg-12 text-center">

                    <div class="btn-group m-b-30">
                        <a type="button" id="all" class="active btn btn-primary waves-effect waves-light" >All Campaigns<span class="m-r-5"></span></a>

                        <a id="live" type="button" class="btn btn-success waves-effect waves-light" >Active <span class="m-l-5"><i class="fa fa-circle"></i></span></a>

                        <a id="pending" type="button" class="btn btn-warning waves-effect waves-light" >Pending <span class="m-l-5"><i class="fa fa-circle"></i></span></a>
                        
                    </div>

                </div>

            </div>
            
            <div class="row">

                <ul class="list">

                    <?php foreach ($campaigns as $key => $c) : ?>

                        <li class="col-md-6 col-sm-6 col-lg-6 <?php echo $c['campaign_status'] ?>">
                            
                            <div class="mini-stat clearfix bx-shadow bg-white">
                               
                                <div class="row">
                                    
                                    <div class="mini-stat-info text-dark col-lg-8">
                                        <!-- <span class="name text-dark"><u>Summary:</u></span> -->
                                        <div class="name"><b><i class="fa fa-user"></i> Campaign Owner:</b> <?php echo $c['campaign_owner'] ?> </div>
                                        <div><b><i class="fa fa-clock-o"></i> Start Time:</b> <?php echo $c['campaign_start'] ?> </br></div>
                                        <div><b><i class="fa fa-map"></i> Target State:</b> <?php echo $c['campaign_target'] ?></div>
                                        <div><b><i class="fa fa-users"></i> Total Reach:</b> <?php echo $c['total_reach']?> subscribers</div>
                                    </div>
                                    <div class="mini-stat-info col-lg-4 text-right">
                                        <?php dispCampaignStatus($c['campaign_status']) ?>
                                    </div>
                                    <br>
                                    
                                </div>
                                <hr class="m-t-10">
                                <?php createProgressBar($c['campaign_progress']); ?>
                                
                            </div>
                        </li>

                    <?php endforeach; ?>

                </ul>

            </div> <!-- End row-->

            <div class="row">
              <div class="col-sm-12">

                <ul class="pagination"></ul>

            </div>
        </div>

    </div>

    <script type="text/javascript">
      var options = {
        valueNames: [ 'name', 'abb' ],
        page: 6,
        plugins: [
        ListPagination({})
        ]
    };

    var userList = new List('campaigns', options);

    var $btns = $('.btn').click(function() {
      if (this.id == 'all') {
        $('#campaigns > div > ul > li').fadeIn(450);
    } else {
        var $el = $('.' + this.id).fadeIn(450);
        $('#campaigns > div > ul > li').not($el).hide();
    }
    $btns.removeClass('active');
    $(this).addClass('active');
})


</script>



<?php include 'footer.php';?>