<?php include_once 'header-login.php'; ?>
        
        <div class="wrapper-page">
            <?php include 'flash.php'; ?>

            <div class="panel panel-color panel-primary panel-pages">

                <div class="panel-heading bg-img"> 
                    <div class="bg-overlay"></div>
                    <h3 class="text-center m-t-10 text-white"> Reset Password </h3>
                </div> 

                <div class="panel-body">
                 <form method="post" action="<?php echo $host?>/login/reset" method="post" role="form" class="text-center"> 
                    <div class="alert alert-info alert-dismissable">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                        Enter your <b>Email</b> and instructions will be sent to you!
                    </div>
                    <div class="form-group m-b-0"> 
                        <div class="input-group"> 
                            <input type="email" name="email" class="form-control input-lg" placeholder="Enter Email" required> 
                            <span class="input-group-btn"> <button type="submit" class="btn btn-lg btn-primary waves-effect waves-light">Reset</button> </span> 
                        </div> 
                    </div> 
                    
                </form>

                </div>                                 
                
            </div>
        </div>

<?php include_once 'footer-login.php'; ?>