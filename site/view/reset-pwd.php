<?php include_once 'header-login.php'; ?>

        <div class="wrapper-page">
            <?php include 'flash.php'; ?>

            <div class="panel panel-color panel-primary panel-pages">
                <div class="panel-heading bg-img"> 
                    <!-- <div class="bg-overlay"></div> -->
                    <h3 class="text-center m-t-10 text-white">  <strong>Campaign Manager</strong></br> Change Password</h3>
                </div> 


                <div class="panel-body">
                <form class="form-horizontal m-t-20" action="<?php echo $host?>/login/reset" method="post">
                    
                    <input name="email" type="hidden" value="<?php echo $user_email ?>" />
                    <div class="form-group">
                        <div class="col-xs-12">
                            <input id="password" class="form-control input-lg" name="password" type="password" required placeholder="Enter Password">
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-xs-12">
                            <input id="cpassword" class="form-control input-lg" name="cpassword" type="password" required placeholder="Confirm Password">
                        </div>
                    </div>

                    
                    <div class="form-group text-center m-t-40">
                        <div class="col-xs-12">
                            <button class="btn btn-primary btn-lg w-lg waves-effect waves-light" name="changePwdBtn" type="submit">Change Password</button>
                        </div>
                    </div>

                </form> 
                </div>                                 
                
            </div>
        </div>

        <script type="text/javascript">

            pass1 = document.getElementById("password");
            pass2 = document.getElementById("cpassword");

              window.onload = function () {
                pass1.onchange = validatePassword;
                pass2.onchange = validatePassword;
              }

              function validatePassword(){
              var pass2=document.getElementById("password").value;
              var pass1=document.getElementById("cpassword").value;
              if(pass1!=pass2)
                document.getElementById("cpassword").setCustomValidity("Passwords Don't Match");
              else
                document.getElementById("cpassword").setCustomValidity('');  
              //empty string means no validation error
              }

        </script>

<?php include_once 'footer-login.php'; ?>