<?php include_once 'header.php' ?>


        <div class="wrapper">
            <div class="container">

                <!-- Vertical Steps Example -->
                <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title">Create New User</h3>
                            </div>
                            <form id="user" method="post">
                                <div class="panel-body">
                                    <div id="wizard-vertical">
                                        <h3>Basic Info</h3>
                                        <section>
                                            <div class="form-group clearfix">
                                                <label class="col-lg-2 control-label" for="userName1">Name *</label>
                                                <div class="col-lg-6">
                                                    <input class="form-control" id="user_name" name="user_name" type="text" required>
                                                </div>
                                            </div>

                                            <div class="form-group clearfix">
                                                <label class="col-lg-2 control-label" for="userName1">Email *</label>
                                                <div class="col-lg-6">
                                                    <input class="form-control" name="user_email" type="email" required>
                                                </div>
                                            </div>

                                            <div class="form-group clearfix">
                                                <label class="col-lg-2 control-label" for="userName1">Phone *</label>
                                                <div class="col-lg-4">
                                                    <input class="form-control" id="user_phone" name="user_phone" type="text" required>
                                                </div>
                                            </div>

                                            <div class="form-group clearfix">
                                                
                                                <label class="col-sm-2 control-label">Role</label>
                                                <div class="col-sm-4">
                                                    <select class="form-control" name="user_role">
                                                        <option value="provider">Service Provider</option>
                                                        <option value="admin">Administrator</option>
                                                    </select>
                                                </div>

                                            </div>

                                        </section>

                                        <h3>Campaign Settings</h3>
                                        <section>

                                            <div class="form-group clearfix">
                                                <label for="range_07" class="col-lg-3 control-label"><b>Daily Maximum Target</b></label>
                                                <div class="col-lg-9">
                                                    <input type="text" name="daily_max" id="range_07">
                                                </div>
                                            </div>

                                            <div class="form-group clearfix">
                                                <label for="range_07" class="col-lg-3 control-label"><b>Allowable TPS</b></label>
                                                <div class="col-lg-5">
                                                    <input type="text" id="range_01" name="allowable_tps">
                                                </div>
                                            </div>


                                            <div class="form-group clearfix">
                                                <label class="col-sm-3 control-label">Demography Selection</label>
                                                <div class="col-sm-6 control-label">
                                                    <div class="toggle toggle-default">
                                                        
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-group clearfix">
                                                <label class="col-sm-3 control-label">Shortcode</label>
                                                <div class="col-sm-5">
                                                    <input name="shortcode" id="tags" class="form-control" value="55032,50432,2345">
                                                </div>
                                            </div><!-- form-group -->

                                        </section>

                                    
                                        <h3>Summary</h3>
                                        <section>
                                            <div class="form-group clearfix">
                                                <div class="col-lg-12">
                                                    <h3>Confirm Your Selection</h3>
                                                    <ul id="confirm">
                                                       <!--  <li><b>Name: </b>Jonathan Smith </li>
                                                        <li><b>Email: </b>This is a test campaign sms</li>
                                                        <li><b>Shortcode: </b>55594</li>
                                                        <li><b>Location: </b>Lagos, Oyo, Osun</li>
                                                        <li><b>Target Size: </b>Lagos, Oyo, Osun</li> -->
                                                    </ul>
                                                </div>
                                                <div class="col-lg-12">
                                                    <div class="checkbox checkbox-primary">
                                                        <input id="confirm-selection" type="checkbox">
                                                        <label for="checkbox-v">
                                                            I have verified my selection for a new user
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </section>
                                    </div> <!-- End #wizard-vertical -->
                                </div>  <!-- End panel-body -->
                            </form>
                        </div> <!-- End panel -->

                    </div> <!-- end col -->

                </div> <!-- End row -->

                


                <!-- Footer -->
                <footer class="footer text-right">
                    <div class="container">
                        <div class="row">
                            <div class="col-xs-6">
                                2016 © Campaign Manager.
                            </div>
                            <div class="col-xs-6">
                                <ul class="pull-right list-inline m-b-0">
                                    <li>
                                        <a href="#">About</a>
                                    </li>
                                    <li>
                                        <a href="#">Help</a>
                                    </li>
                                    <li>
                                        <a href="#">Contact</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </footer>
                <!-- End Footer -->

            </div>
            <!-- end container -->

        </div>
        <!-- end wrapper -->



        <!-- jQuery  -->
        <script src="<?php echo $host ?>/site/assets/js/config.js"></script>
        <script src="<?php echo $host ?>/site/assets/js/jquery.min.js"></script>
        <script src="<?php echo $host ?>/site/assets/js/bootstrap.min.js"></script>
        <script src="<?php echo $host ?>/site/assets/js/detect.js"></script>
        <script src="<?php echo $host ?>/site/assets/js/fastclick.js"></script>
        <script src="<?php echo $host ?>/site/assets/js/jquery.blockUI.js"></script>
        <script src="<?php echo $host ?>/site/assets/js/waves.js"></script>
        <script src="<?php echo $host ?>/site/assets/js/wow.min.js"></script>
        <script src="<?php echo $host ?>/site/assets/js/jquery.nicescroll.js"></script>
        <script src="<?php echo $host ?>/site/assets/js/jquery.scrollTo.min.js"></script>
        <script src="<?php echo $host ?>/site/assets/plugins/tagsinput/jquery.tagsinput.min.js"></script>

        <!-- App js -->
        <script src="<?php echo $host ?>/site/assets/js/jquery.app.js"></script>

        <!--Form Validation-->
        <script src="<?php echo $host ?>/site/assets/plugins/bootstrapvalidator/dist/js/bootstrapValidator.js" type="text/javascript"></script>

        <!--Form Wizard-->
        <script src="<?php echo $host ?>/site/assets/plugins/jquery.steps/build/jquery.steps.min.js" type="text/javascript"></script>
        <script type="text/javascript" src="<?php echo $host ?>/site/assets/plugins/jquery-validation/dist/jquery.validate.min.js"></script>

        <!-- Slider -->
        <script src="<?php echo $host ?>/site/assets/plugins/ion-rangeslider/ion.rangeSlider.min.js"></script>
        <script src="<?php echo $host ?>/site/assets/pages/jquery.ui-sliders.js"></script>

        <!-- Multi Select  -->
        <script type="text/javascript" src="<?php echo $host ?>/site/assets/plugins/jquery-multi-select/jquery.multi-select.js"></script>
        <script type="text/javascript" src="<?php echo $host ?>/site/assets/plugins/jquery-multi-select/jquery.quicksearch.js"></script>

        <!-- Date/Time Picker -->
        <script src="<?php echo $host ?>/site/assets/plugins/timepicker/bootstrap-timepicker.min.js"></script>
        <script type="text/javascript" src="<?php echo $host ?>/site/assets/plugins/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>

        <!--wizard initialization-->
        <script src="<?php echo $host ?>/site/assets/pages/jquery.wizard-init.js" type="text/javascript"></script>

        <!-- Tags Input -->
        <script src="<?php echo $host ?>/site/assets/plugins/tagsinput/jquery.tagsinput.min.js"></script>

        <!-- Toggle -->
        <script src="<?php echo $host ?>/site/assets/plugins/toggles/toggles.min.js"></script>


        <script src="<?php echo $host ?>/site/assets/plugins/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.min.js" type="text/javascript"></script>

       <script>
            jQuery(document).ready(function() {

                // Tags Input
                jQuery('#tags').tagsInput({width:'auto'});

                // Form Toggles
                jQuery('.toggle').toggles({on: true});

                // Time Picker
                jQuery('#timepicker').timepicker({defaultTIme: false});
                jQuery('#timepicker2').timepicker({showMeridian: false});
                jQuery('#timepicker3').timepicker({minuteStep: 15});

                // Date Picker
                jQuery('#datepicker').datepicker();
                jQuery('#datepicker-inline').datepicker();
                jQuery('#datepicker-multiple').datepicker({
                    numberOfMonths: 3,
                    showButtonPanel: true
                });


                //multiselect start

                $('#my_multi_select1').multiSelect();
                $('#my_multi_select2').multiSelect({
                    selectableOptgroup: true
                });

                $('#my_multi_select3').multiSelect({
                    selectableHeader: "<input type='text' class='form-control search-input' autocomplete='off' placeholder='search...'>",
                    selectionHeader: "<input type='text' class='form-control search-input' autocomplete='off' placeholder='search...'>",
                    afterInit: function (ms) {
                        var that = this,
                            $selectableSearch = that.$selectableUl.prev(),
                            $selectionSearch = that.$selectionUl.prev(),
                            selectableSearchString = '#' + that.$container.attr('id') + ' .ms-elem-selectable:not(.ms-selected)',
                            selectionSearchString = '#' + that.$container.attr('id') + ' .ms-elem-selection.ms-selected';

                        that.qs1 = $selectableSearch.quicksearch(selectableSearchString)
                            .on('keydown', function (e) {
                                if (e.which === 40) {
                                    that.$selectableUl.focus();
                                    return false;
                                }
                            });

                        that.qs2 = $selectionSearch.quicksearch(selectionSearchString)
                            .on('keydown', function (e) {
                                if (e.which == 40) {
                                    that.$selectionUl.focus();
                                    return false;
                                }
                            });
                    },
                    afterSelect: function () {
                        this.qs1.cache();
                        this.qs2.cache();
                    },
                    afterDeselect: function () {
                        this.qs1.cache();
                        this.qs2.cache();
                    }
                });



                // Select2
                // jQuery(".select2").select2({
                //     width: '100%'
                // });

                //Bootstrap-TouchSpin
                $(".vertical-spin").TouchSpin({
                    verticalbuttons: true,
                    verticalupclass: 'ion-plus-round',
                    verticaldownclass: 'ion-minus-round'
                });
                var vspinTrue = $(".vertical-spin").TouchSpin({
                    verticalbuttons: true
                });
                if (vspinTrue) {
                    $('.vertical-spin').prev('.bootstrap-touchspin-prefix').remove();
                }

                $("input[name='demo1']").TouchSpin({
                    min: 0,
                    max: 100,
                    step: 0.1,
                    decimals: 2,
                    boostat: 5,
                    maxboostedstep: 10,
                    postfix: '%'
                });
                $("input[name='demo2']").TouchSpin({
                    min: -1000000000,
                    max: 1000000000,
                    stepinterval: 50,
                    maxboostedstep: 10000000,
                    prefix: '$'
                });
                $("input[name='demo3']").TouchSpin();
                $("input[name='demo3_21']").TouchSpin({
                    initval: 40
                });
                $("input[name='demo3_22']").TouchSpin({
                    initval: 40
                });

                $("input[name='demo0']").TouchSpin({});
            });
        </script>


        <script type="text/javascript">
            
            $('a[href="#finish"]').click(function (){

                // Request User to Confirm Selection before creating new user
                // $('#confirm-selection:checked').length <= 0 ? alert('Kindly confirm your selection') : sendRequest;

                
                console.log($('#user').serialize());

                $.ajax({

                    url: options.host + 'user/_addNewUser', 
                    data: $('#user').serialize() + '&newUserBtn=button',
                    type: 'post',
                    success: function (data) {
                        // body...
                        console.log('Return Data' + data);
                        window.location.replace(options.host + '/user');

                    }
                    
                });
                
            });

            function sendRequest(){


            }

            selectionList = function(pref){

                // var demo_toggle = $('.toggle-on active').text();
                console.log('Preference: ' , pref);
                $.each(pref, function (index, elem){

                    $('#confirm').append('<li><b>' + elem.name + ': </b>' + elem.value + '</li>');

                });
            }

            /*
            **  Onclick of last elmeent, do the following 
            **  Generate List of all Selection By user
            */

            $('a[href="#next"]').click(function(){
                $('#confirm').html('');
                selectionList(
                    $('#user').serializeArray()
                );
            }); 



        </script>

    </body>

<!-- Mirrored from moltran.coderthemes.com/menu_2/form-wizard.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 22 Mar 2016 11:10:21 GMT -->
</html>