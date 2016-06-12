<?php include_once 'header.php' ?>


        <div class="wrapper">
            <div class="container">

                <!-- Vertical Steps Example -->
                <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title">Create New Campaign</h3>
                            </div>
                            <form id="campaign">

                                <!-- Retrieve Campaign ID -->
                                <?php echo ($isEdit) ? '<input type="hidden" name="campaign_id" value="'. $campaign->getId() .'" >' : '' ?>

                                <div class="panel-body">
                                    <div id="wizard-vertical">
                                        <h3>Basic Info</h3>
                                        <section>
                                            <div class="form-group clearfix">
                                                <label class="col-lg-2 control-label" for="userName1">Campaign Title</label>
                                                <div class="col-lg-8">
                                                    <input class="form-control required" id="campaign_title" name="campaign_title" type="text" value="<?php echo ($isEdit) ? $campaign->getTitle() : '' ?>">
                                                </div>
                                            </div>

                                             <div class="form-group clearfix">
                                                 <label class="col-md-2 control-label">Campaign Type</label>
                                                 <div class="col-md-3">
                                                     <select class="form-control">
                                                         <option value="sms">SMS</option>
                                                         <option disabled="disabled">IVR</option>
                                                         <option disabled="disabled">USSD</option>
                                                     </select>
                                                     
                                                 </div>
                                             </div>

                                            <div class="form-group clearfix">
                                                <label class="col-md-2 control-label">Campaign Message</label>
                                                <div class="col-md-10">
                                                    <textarea name="campaign_message" class="form-control required" rows="5">
                                                        <?php echo ($isEdit) ? $campaign->getMsg() : '' ?>
                                                    </textarea>
                                                </div>
                                            </div>

                                            <div class="form-group clearfix">
                                                <label class="col-lg-2 control-label" for="userName1">Shortcode</label>
                                                <div class="col-lg-3">
                                                    <input class="form-control required" id="shortcode" name="shortcode" type="text">
                                                </div>
                                            </div>

                                        </section>
                                        <h3>Demography</h3>
                                        <section>

                                            <div class="form-group clearfix">
                                                 <label class="control-label col-lg-3">Location</label>
                                                 <div class="col-lg-9">
                                                    <select name="state[]" class="multi-select" multiple="multiple" id="my_multi_select3" required>
                                                        <?php ($isEdit) ? show_select_location($campaign->getTargetLocation()) : show_select_location() ?>
                                                    </select>
                                                 </div>
                                             </div>

                                            <div class="form-group  clearfix">
                                                <label for="range_07" class="col-lg-2 control-label"><b>Target Size</b></label>
                                                <div class="col-lg-9">
                                                    <input name="target_size" type="text" id="range_07">
                                                </div>
                                            </div>

                                             <div class="form-group clearfix">
                                                 <label class="col-lg-2 control-label">Religion</label>
                                                 <div class="col-lg-3">
                                                     <select class="form-control" name="religion">
                                                         <option value="islam">Islam</option>
                                                         <option value="christian">Christian</option>
                                                         <option value="others">Unspecified</option>
                                                     </select>
                                                 </div>
                                             </div>

                                            <div class="form-group">
                                                <label for="range_01" class="col-lg-2 control-label">Sex Ratio</label>
                                                <div class="col-lg-9">
                                                    <input type="text" name="sex_ratio" id="range_01">
                                                </div>
                                            </div>

                                        </section>
                                        <h3>Schedule</h3>
                                        <section>

                                            <div class="form-group clearfix">
                                                <label for="datepicker" class="col-lg-3 control-label">Date:</label>
                                                <!-- <div class="col-sm-3"> -->
                                                    <div class="input-group m-b-15 col-lg-3">
                                                        <div class="bootstrap-datepicker"><input name="start_date" id="datepicker" type="text" class="form-control inputmask" required></div>
                                                        <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
                                                    </div>
                                                <!-- </div> -->
                                            </div>

                                            <div class="form-group clearfix">
                                                <label for="timepicker" class="col-lg-3 control-label">Select Time:</label>
                                                <div class="input-group m-b-30 col-lg-3">
                                                    <div class="bootstrap-timepicker"><input id="timepicker" name="start_time" type="text" class="form-control"></div>
                                                    <span class="input-group-addon"><i class="glyphicon glyphicon-time"></i></span>
                                                </div><!-- input-group -->
                                            </div>

                                        </section>
                                        <h3>Summary</h3>
                                        <section>
                                            <div class="form-group clearfix">
                                                <div class="col-lg-12">
                                                    <h4>Confirm Your Selection</h4>
                                                    <ul id="confirm">
                                                        <!-- <li><b>Campaign Title: </b>Jonathan Smith </li>
                                                        <li><b>Campaign Message: </b>This is a test campaign sms</li>
                                                        <li><b>Shortcode: </b>55594</li>
                                                        <li><b>Location: </b>Lagos, Oyo, Osun</li>
                                                        <li><b>Target Size: </b>Lagos, Oyo, Osun</li>
                                                        <li><b>Sex Ratio</b>10% Men - 90% Women</li> -->
                                                    </ul>
                                                </div>
                                                <div class="col-lg-12">
                                                    <div class="checkbox checkbox-primary">
                                                        <input id="checkbox-v" type="checkbox">
                                                        <label for="checkbox-v">
                                                            I agree with the Terms & Conditions. I have verified my selection for campaign request
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
                                2016 © Moltran.
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


        <script src="<?php echo $host ?>/site/assets/plugins/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.min.js" type="text/javascript"></script>

        <script>
            jQuery(document).ready(function() {

                // Tags Input
                jQuery('#tags').tagsInput({width:'auto'});
                
                // Form Toggles
                // jQuery('.toggle').toggles({on: true});

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


            $('a[href="#finish"]').click(function (){

                console.log($('#campaign').serialize());
                console.log(options.host + 'campaign/send');

                $.ajax({

                    url: options.host + 'campaign/send', 
                    data: $('#campaign').serialize(),
                    type: 'post',
                    success: function (data) {
                        // body...
                        console.log('Return Data' + data);
                        window.location.replace(options.host + '/campaign');

                    }
                    
                });
            });

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
                    $('#campaign').serializeArray()
                );
            });

        </script>

          


    </body>

<!-- Mirrored from moltran.coderthemes.com/menu_2/form-wizard.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 22 Mar 2016 11:10:21 GMT -->
</html>