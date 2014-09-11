
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
   <title>Add Account</title>
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
   <?php include('admin_header.php'); 
   include('config.php');
   ?>
      <!-- END TOP NAVIGATION BAR -->
   <!-- END HEADER -->
      <!-- END SIDEBAR -->
      <!-- BEGIN PAGE -->  
      <div class="page-content">
         
         <div class="row">
            <div class="col-md-12">
               <!-- BEGIN PAGE TITLE & BREADCRUMB-->
               <h3 class="page-title">
                  Add Account <small></small>
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
                     <a href="#">Account</a>
                     <i class="icon-angle-right"></i>
                  </li>
                  <li><a href="#">Add Account</a></li>
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
                              <div class="caption"><i class="icon-reorder"></i>Add Account</div>
                              
                           </div>
                           <div class="portlet-body form">
                              <!-- BEGIN FORM-->
                              <form action="admininsert.php" class="form-horizontal" method="post">
                                 <div class="form-body">
                                    <h3 class="form-section">Person Info</h3>
                                    <div class="row">
                                       <div class="col-md-6">
                                          <div class="form-group">
                                             <label class="control-label col-md-3">User Name</label>
                                             <div class="col-md-9">
                                                <input type="text" class="form-control" placeholder="" name="username">
                                                <span class="help-block"></span>
                                             </div>
                                          </div>
                                       </div>
                                       <!--/span-->
                                       <div class="col-md-6">
                                          <div class="form-group">
                                             <label class="control-label col-md-3">Password</label>
                                             <div class="col-md-9">
                                                <input type="password" class="form-control" placeholder="" name="password">
                                                <span class="help-block"></span>
                                             </div>
                                          </div>
                                       </div>
                                       <!--/span-->
                                    </div>
									
									
									<div class="row">
                                       <div class="col-md-6">
                                          <div class="form-group">
                                             <label class="control-label col-md-3">First Name</label>
                                             <div class="col-md-9">
                                                <input type="text" class="form-control" placeholder="" name="fname">
                                                <span class="help-block"></span>
                                             </div>
                                          </div>
                                       </div>
                                       <!--/span-->
                                       <div class="col-md-6">
                                          <div class="form-group">
                                             <label class="control-label col-md-3">Last Name</label>
                                             <div class="col-md-9">
                                                <input type="text" class="form-control" placeholder="" name="lname">
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
                                             <label class="control-label col-md-3">Email-1</label>
                                             <div class="col-md-9">
                                                <input type="text" class="form-control" placeholder="" name="email1">
                                                <span class="help-block"></span>
                                             </div>
                                          </div>
                                       </div>
                                       <!--/span-->
                                       <div class="col-md-6">
                                          <div class="form-group">
                                             <label class="control-label col-md-3">Email-2</label>
                                             <div class="col-md-9">
                                                <input type="text" class="form-control" placeholder="" name="email2">
                                             </div>
                                          </div>
                                       </div>
                                       <!--/span-->
                                    </div>
                                    <!--/row-->    
									<div class="row">
                                       <div class="col-md-6">
                                          <div class="form-group">
                                             <label class="control-label col-md-3">Email-3</label>
                                             <div class="col-md-9">
                                                <input type="text" class="form-control" placeholder="" name="email3">
                                                <span class="help-block"></span>
                                             </div>
                                          </div>
                                       </div>
                                       <!--/span-->
                                       <div class="col-md-6">
                                          <div class="form-group">
                                             <label class="control-label col-md-3">Email-4</label>
                                             <div class="col-md-9">
                                                <input type="text" class="form-control" placeholder="" name="email4">
                                             </div>
                                          </div>
                                       </div>
                                       <!--/span-->
                                    </div>    
                                    
                                    <h3 class="form-section">Address</h3>
                                    <!--/row-->                   
                                    <div class="row">
                                       <div class="col-md-6">
                                          <div class="form-group">
                                             <label class="control-label col-md-3">Address 1</label>
                                             <div class="col-md-9">
                                                <input type="text" class="form-control" name="address" >
                                             </div>
                                          </div>
                                       </div>
                                       <div class="col-md-6">
                                          <div class="form-group">
                                             <label class="control-label col-md-3">Address 2</label>
                                             <div class="col-md-9">
                                                <input type="text" class="form-control" >
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="row">
                                       <div class="col-md-6">
                                          <div class="form-group">
                                             <label class="control-label col-md-3">City</label>
                                             <div class="col-md-9">
                                                <input type="text" class="form-control" name="city"> 
                                             </div>
                                          </div>
                                       </div>
                                       <!--/span-->
                                       <div class="col-md-6">
                                          <div class="form-group">
                                             <label class="control-label col-md-3">State</label>
                                             <div class="col-md-9">
                                                <input type="text"  class="form-control" name="state"> 
                                             </div>
                                          </div>
                                       </div>
                                       <!--/span-->
                                    </div>
                                    <!--/row-->           
                                    <div class="row">
                                       <div class="col-md-6">
                                          <div class="form-group">
                                             <label class="control-label col-md-3">Post Code</label>
                                             <div class="col-md-9">
                                                <input type="text" class="form-control" name="zip"> 
                                             </div>
                                          </div>
                                       </div>
                                       <!--/span-->
                                       <div class="col-md-6">
                                          <div class="form-group">
                                             <label class="control-label col-md-3">Country</label>
                                             <div class="col-md-9">
                                                <select class="select2_category form-control" data-placeholder="Choose a Country" name="country">
													<option></option>
                                                   <option>Country 1</option>
                                                   <option>Country 2</option>
                                                </select>
                                             </div>
                                          </div>
                                       </div>
                                       <!--/span-->
                                    </div>
                                    <!--/row-->
									<h3 class="form-section">Fax Number</h3>
                                 </div>
								 <?php $sql = "SELECT * FROM fax_number GROUP BY fax_country";
							$query = mysql_query($sql);
							
					
						
						?>
								 
                                    <div class="row">
                                       <div class="col-md-6">
                                          <div class="form-group">
                                             <label class="control-label col-md-3">Country</label>
                                             <div class="col-md-9">
                                                <select class="select2_category form-control" id="country"  data-placeholder="Choose a Country" tabindex="1">
												
												<option value=""></option>
												<?php 
							
						while ($row = mysql_fetch_array($query))
						{	
						
						?>
                                                   <option ><?php echo $row['fax_country']; }?></option>
                                                   
                                                </select>
                                             </div>
                                          </div>
                                       </div>
                                       <!--/span-->
                                       </div>
                                       <!--/span-->
                                   
                                    <div class="row">
                                       <div class="col-md-6">
                                          <div class="form-group">
                                             <label class="control-label col-md-3">City</label>
                                             <div class="col-md-9">
                                                <select class="select2_category form-control" id="city" data-placeholder="Choose a City" >
												<option value="" ></option>
                                                 
                                                  
                                                   
                                                </select>
                                                
                                             </div>
                                          </div>
                                       </div>
                                       <!--/span-->
                                       
                                       <!--/span-->
                                    </div>
                                    <!--/row-->        
                                    <div class="row">
                                       <div class="col-md-6">
                                          <div class="form-group">
                                             <label class="control-label col-md-3">Category</label>
                                             <div class="col-md-9">
                                                <select class="select2_category form-control" id="number"  data-placeholder="Choose a Number" name="number">
                                                  <option value="" ></option>
												  
                                                </select>
                                             </div>
                                          </div>
                                       </div>
                                       <!--/span-->
                                      
                                       <!--/span-->
                                    </div>
                                 <div class="form-actions fluid">
                                    <div class="row">
                                       <div class="col-md-6">
                                          <div class="col-md-offset-3 col-md-9">
                                             <button type="submit" class="btn green">Submit</button>
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
         2014 &copy; Efax.
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
   <script src="assets/plugins/jquery-ui/jquery-ui-1.10.1.custom.min.js" type="text/javascript"></script>      
   <script src="assets/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
   <script src="assets/plugins/bootstrap-hover-dropdown/twitter-bootstrap-hover-dropdown.min.js" type="text/javascript" ></script>
   <script src="assets/plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
   <script src="assets/plugins/jquery.blockui.min.js" type="text/javascript"></script>  
   <script src="assets/plugins/jquery.cookie.min.js" type="text/javascript"></script>
   <script src="assets/plugins/uniform/jquery.uniform.min.js" type="text/javascript" ></script>
   <!-- END CORE PLUGINS -->
   <!-- BEGIN PAGE LEVEL PLUGINS -->
   <script type="text/javascript" src="assets/plugins/select2/select2.min.js"></script>
   <!-- END PAGE LEVEL PLUGINS -->
   <!-- BEGIN PAGE LEVEL SCRIPTS -->
   <script src="assets/scripts/app.js"></script>
   <script src="assets/scripts/form-samples.js"></script>   
   <!-- END PAGE LEVEL SCRIPTS -->
   <script>
      jQuery(document).ready(function() {    
         // initiate layout and plugins
         App.init();
         FormSamples.init();
		 
		 
		  $("#country").on('click', function() {
        
		data1 = $(this).val();
           var dataString = 'name1='+data1;
			$.ajax({
    			type:'POST',
    			data:dataString,
    			url:'country.php',
    			success:function(data) {
      			$( "#city" ).html(data);
				}
  			});
         });
		 
		 
		  $("#city").on('change', function() {
		 	data2 = $(this).val();
      		var dataString1 = 'name2='+data2;
			$.ajax({
    			type:'POST',
    			data:dataString1,
    			url:'number.php',
    			success:function(data) {
      			$( "#number" ).html(data);
				}
  			});
         });
		 
		 data3 = $("#uid").val();
		 var dataString3 = 'name2='+data3;
		 $.ajax({
    			type:'POST',
    			data:dataString3,
    			url:'verify.php',
    			success:function(data) {
				if(data == "yes")
				{
      			$("#info").html('<div class="alert alert-warning">You Already Have Configured Account</div>');
				$("#tab_2").hide();
				}
				}
  			});
		 
		 
      });
   </script>
   <!-- END JAVASCRIPTS -->   
</body>
<!-- END BODY -->
</html>