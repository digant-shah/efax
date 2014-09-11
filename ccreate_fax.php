
<!DOCTYPE html>
<!-- 
Template Name: Metronic - Responsive Admin Dashboard Template build with Twitter Bootstrap 3.0
Version: 1.5
Author: KeenThemes
Website: http://www.keenthemes.com/
Purchase: http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes
-->
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!--> <html lang="en" class="no-js"> <!--<![endif]-->
<!-- BEGIN HEAD -->
<head>
   <meta charset="utf-8" />
   <title>Create Fax</title>
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta content="width=device-width, initial-scale=1.0" name="viewport" />
   <meta content="" name="description" />
   <meta content="" name="author" />
   <meta name="MobileOptimized" content="320">
   <!-- BEGIN GLOBAL MANDATORY STYLES -->          
   <link href="assets/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
   <link href="assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
   <link href="assets/plugins/uniform/css/uniform.default.css" rel="stylesheet" type="text/css"/>
   <!-- END GLOBAL MANDATORY STYLES -->
   <!-- BEGIN PAGE LEVEL STYLES --> 
   <link rel="stylesheet" type="text/css" href="assets/plugins/bootstrap-fileupload/bootstrap-fileupload.css" />
 <link rel="stylesheet" type="text/css" href="assets/plugins/bootstrap-wysihtml5/bootstrap-wysihtml5.css" />

   <link rel="stylesheet" type="text/css" href="assets/plugins/select2/select2_metro.css" />
   <!-- END PAGE LEVEL SCRIPTS -->
   <!-- BEGIN THEME STYLES --> 
   <link href="assets/css/style-metronic.css" rel="stylesheet" type="text/css"/>
   <link href="assets/css/style.css" rel="stylesheet" type="text/css"/>
   <link href="assets/css/style-responsive.css" rel="stylesheet" type="text/css"/>
   <link href="assets/css/plugins.css" rel="stylesheet" type="text/css"/>
   <link href="assets/css/themes/default.css" rel="stylesheet" type="text/css" id="style_color"/>
   <link href="assets/css/custom.css" rel="stylesheet" type="text/css"/>
   <!-- END THEME STYLES -->
   <link rel="shortcut icon" href="favicon.ico" />
</head>
<!-- END HEAD -->
<!-- BEGIN BODY -->
<body class="page-header-fixed">
   <!-- BEGIN HEADER -->   
   <?php include('admin_header.php'); ?>
      <!-- END TOP NAVIGATION BAR -->
   <!-- END HEADER -->
      <!-- END SIDEBAR -->
      <!-- BEGIN PAGE -->  
      <div class="page-content">
         <!-- BEGIN SAMPLE PORTLET CONFIGURATION MODAL FORM-->               
         <div class="modal fade" id="portlet-config" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
               <div class="modal-content">
                  <div class="modal-header">
                     <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                     <h4 class="modal-title">Modal title</h4>
                  </div>
                  <div class="modal-body">
                     Widget settings form goes here
                  </div>
                  <div class="modal-footer">
                     <button type="button" class="btn blue">Save changes</button>
                     <button type="button" class="btn default" data-dismiss="modal">Close</button>
                  </div>
               </div>
               <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
         </div>
         <!-- /.modal -->
         <!-- END SAMPLE PORTLET CONFIGURATION MODAL FORM-->
         <!-- BEGIN STYLE CUSTOMIZER -->
         
         <!-- END BEGIN STYLE CUSTOMIZER -->            
         <!-- BEGIN PAGE HEADER-->   
         <div class="row">
            <div class="col-md-12">
               <!-- BEGIN PAGE TITLE & BREADCRUMB-->
               <h3 class="page-title">
                  Send Fax <small>send fax online</small>
               </h3>
               <ul class="page-breadcrumb breadcrumb">
                  <li class="btn-group">
                     
                  </li>
                  <li>
                     <i class="icon-home"></i>
                     <a href="#">Home</a> 
                     <i class="icon-angle-right"></i>
                  </li>
                  <li>
                     <a href="#">Fax</a>
                     <i class="icon-angle-right"></i>
                  </li>
                  <li><a href="#">Create Fax</a></li>
               </ul>
               <!-- END PAGE TITLE & BREADCRUMB-->
            </div>
         </div>
         <!-- END PAGE HEADER-->
         <!-- BEGIN PAGE CONTENT-->
         <div class="row">
            <div class="col-md-12">
               <div class="tabbable tabbable-custom boxless">
                  
                  
                     <div class="tab-pane " id="tab_2">
                        <div class="portlet box green">
                           <div class="portlet-title">
                              <div class="caption"><i class="icon-reorder"></i>Create Fax</div>
                              
                           </div>
                           <div class="portlet-body form">
                              <!-- BEGIN FORM-->
                              <form action="#" class="form-horizontal">
                                 <div class="form-body">
                                    <h3 class="form-section">Reciever's Details</h3>
                                    <div class="row">
                                       <div class="col-md-6">
                                          <div class="form-group">
                                             <label class="control-label col-md-3">First Name</label>
                                             <div class="col-md-9">
                                                <input type="text" class="form-control" placeholder="Chee Kin">
                                                <span class="help-block">This is inline help</span>
                                             </div>
                                          </div>
                                       </div>
                                       <!--/span-->
                                       <div class="col-md-6">
                                          <div class="form-group">
                                             <label class="control-label col-md-3">Last Name</label>
                                             <div class="col-md-9">
                                                <input type="text" class="form-control" placeholder="Lim">
                                                <span class="help-block"></span>
                                             </div>
                                          </div>
                                       </div>
                                       <!--/span-->
                                    </div>
                                    <!--/row-->
                                    <div class="row">
                                       <div class="col-md-6">
                                          <div class="form-group">
                                             <label class="control-label col-md-3">Email</label>
                                             <div class="col-md-9">
                                                 <input type="text" class="form-control" placeholder="">
                                                <span class="help-block"></span>
                                             </div>
                                          </div>
                                       </div>
                                       <!--/span-->
                                       <div class="col-md-6">
                                          <div class="form-group">
                                             <label class="control-label col-md-3">Fax Number to Send</label>
                                             <div class="col-md-9">
                                                 <input type="text" class="form-control" placeholder="">
                                             </div>
                                          </div>
                                       </div>
                                       <!--/span-->
                                    </div>
                                    <!--/row-->        
                                    <div class="row">
                                       
                                       <!--/span-->
                                       
                                       <!--/span-->
                                    </div>
                                    <h3 class="form-section">Message</h3>
                                    <!--/row-->  
									<div class="row">
									<div class="col-md-9">
                                          <div class="form-group">
                                             <label class="control-label col-md-3">Subject</label>
                                             <div class="col-md-9">
                                                 <input type="text" class="form-control" placeholder="Subject">
                                             </div>
                                          </div>
									</div>
									</div>
									                 
                                    <div class="row">
                                       <div class="col-md-9">
                                          <div class="form-group">
                              <label class="control-label col-md-3">Attachment</label>
                              <div class="col-md-9">
                                 <div class="fileupload fileupload-new" data-provides="fileupload">
                                    <div class="input-group">
                                       <span class="input-group-btn">
                                       <span class="uneditable-input">
                                       <i class="icon-file fileupload-exists"></i> 
                                       <span class="fileupload-preview"></span>
                                       </span>
                                       </span>
                                       <span class="btn default btn-file">
                                       <span class="fileupload-new"><i class="icon-paper-clip"></i> Select file</span>
                                       <span class="fileupload-exists"><i class="icon-undo"></i> Change</span>
                                       <input type="file" class="default" />
                                       </span>
                                       <a href="#" class="btn red fileupload-exists" data-dismiss="fileupload"><i class="icon-trash"></i> Remove</a>
                                    </div>
                                 </div>
                              </div>
                           </div>

                                       </div>
                                       
                                    </div>
                                    <div class="row">
                                       <div class="col-md-9">
                                          <div class="form-group">
                              <label class="control-label col-md-3">Message</label>
                              <div class="col-md-9">
                                 <textarea class="wysihtml5 form-control" rows="6"></textarea>
                              </div>
                           </div>

                                       </div>
                                       <!--/span-->
                                       
                                       <!--/span-->
                                    </div>
                                    <!--/row-->           
                                    
                                 <div class="form-actions fluid">
                                    <div class="row">
                                       <div class="col-md-6">
                                          <div class="col-md-offset-3 col-md-9">
                                             <button type="submit" class="btn green">Send Fax</button>
                                             <button type="button" class="btn default">Cancel</button>                              
                                          </div>
                                       </div>
                                       <div class="col-md-6">
                                       </div>
                                    </div>
                                 </div>
                              </form>
                              <!-- END FORM-->                
                           </div>
                        </div>
                     </div>
                    
                  </div>
               </div>
            </div>
         </div>
         <!-- END PAGE CONTENT-->    
      </div>
      <!-- END PAGE -->  
   </div>
   <!-- END CONTAINER -->
   <!-- BEGIN FOOTER -->
   <div class="footer">
      <div class="footer-inner">
         2014 &copy; E-fax.
      </div>
      <div class="footer-tools">
         <span class="go-top">
         <i class="icon-angle-up"></i>
         </span>
      </div>
   </div>
   <!-- END FOOTER -->
   <!-- BEGIN JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) -->
   <!-- BEGIN CORE PLUGINS -->   
   <!--[if lt IE 9]>
   <script src="assets/plugins/respond.min.js"></script>
   <script src="assets/plugins/excanvas.min.js"></script> 
   <![endif]-->   
   <script src="assets/plugins/jquery-1.10.2.min.js" type="text/javascript"></script>
   <script src="assets/plugins/jquery-migrate-1.2.1.min.js" type="text/javascript"></script>
   <!-- IMPORTANT! Load jquery-ui-1.10.1.custom.min.js before bootstrap.min.js to fix bootstrap tooltip conflict with jquery ui tooltip -->
   <script src="assets/plugins/jquery-ui/jquery-ui-1.10.3.custom.min.js" type="text/javascript"></script>      
   <script src="assets/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
   <script src="assets/plugins/bootstrap-hover-dropdown/twitter-bootstrap-hover-dropdown.min.js" type="text/javascript" ></script>
   <script src="assets/plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
   <script src="assets/plugins/jquery.blockui.min.js" type="text/javascript"></script>  
   <script src="assets/plugins/jquery.cookie.min.js" type="text/javascript"></script>
   <script src="assets/plugins/uniform/jquery.uniform.min.js" type="text/javascript" ></script>
   <!-- END CORE PLUGINS -->
   <!-- BEGIN PAGE LEVEL PLUGINS -->
   <script type="text/javascript" src="assets/plugins/select2/select2.min.js"></script>
   <script type="text/javascript" src="assets/plugins/bootstrap-fileupload/bootstrap-fileupload.js"></script>
   <script type="text/javascript" src="assets/plugins/bootstrap-wysihtml5/wysihtml5-0.3.0.js"></script> 
   <script type="text/javascript" src="assets/plugins/bootstrap-wysihtml5/bootstrap-wysihtml5.js"></script>


   <!-- END PAGE LEVEL PLUGINS -->
   <!-- BEGIN PAGE LEVEL SCRIPTS -->
   <script src="assets/scripts/app.js"></script>
   <script src="assets/scripts/form-samples.js"></script>  
   <script src="assets/scripts/form-components.js"></script> 
   <!-- END PAGE LEVEL SCRIPTS -->
   <script>
      jQuery(document).ready(function() {    
         // initiate layout and plugins
         App.init();
         FormSamples.init();
		 FormComponents.init();

      });
   </script>
   <!-- END JAVASCRIPTS -->   
</body>
<!-- END BODY -->
</html>