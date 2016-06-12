<?php include_once 'header-login.php'; ?>

        <div class="wrapper-page">
            <?php include 'flash.php'; ?>
            <div class="panel panel-color panel-primary panel-pages">
                <div class="panel-heading bg-img"> 
                    <!-- <div class="bg-overlay"></div> -->
                    <h3 class="text-center m-t-10 text-white"> Sign In to <strong>Campaign Manager</strong> </h3>
                </div> 


                <div class="panel-body">
                <form class="form-horizontal m-t-20" action="<?php echo $host?>/" method="post">
                    
                    <div class="form-group">
                        <div class="col-xs-12">
                            <input class="form-control input-lg" name="email" type="email" required placeholder="Username">
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-xs-12">
                            <input class="form-control input-lg" name="password" type="password" required placeholder="Password">
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-xs-12">
                            <div class="checkbox checkbox-primary">
                                <input id="checkbox-signup" type="checkbox">
                                <label for="checkbox-signup">
                                    Remember me
                                </label>
                            </div>
                            
                        </div>
                    </div>
                    
                    <div class="form-group text-center m-t-40">
                        <div class="col-xs-12">
                            <button name="loginBtn" class="btn btn-primary btn-lg w-lg waves-effect waves-light" type="submit">Log In</button>
                        </div>
                    </div>

                    <div class="form-group m-t-30">
                        <div class="col-sm-12 text-center">
                            <a href="<?php echo $host?>/login/reset"><i class="fa fa-lock m-r-5"></i> Forgot your password?</a>
                        </div>
                    </div>
                </form> 
                </div>                                 
                
            </div>
        </div>

<?php include_once 'footer-login.php'; ?>