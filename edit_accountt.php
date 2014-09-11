
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
                  <li><a href="#">Edit Account</a></li>
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
                              <div class="caption"><i class="icon-reorder"></i>Edit Account</div>
                              
                           </div>
						     <?php
							 //session_start();
							  $uid = $_GET["id"]; 
							  
							  $sql = "SELECT * FROM users WHERE u_id = '$uid'";
							  $query = mysql_query($sql);
							  while($row = mysql_fetch_array($query))
							  {
							  ?>
                           <div class="portlet-body form">
                              <!-- BEGIN FORM-->
                              <form action="edituserdb1.php" class="form-horizontal" method="post">
							<input type="text" class="form-control" placeholder="" name="uid" value="<?php echo $row['u_id'];?>" style="display:none;">
                                 <div class="form-body">
                                    <h3 class="form-section">Person Info</h3>
                                    
									
									
									<div class="row">
                                       <div class="col-md-6">
                                          <div class="form-group">
                                             <label class="control-label col-md-3">First Name</label>
                                             <div class="col-md-9">
                                                <input type="text" class="form-control" placeholder="" name="fname" value="<?php echo $row['u_name'];?>">
                                                <span class="help-block"></span>
                                             </div>
                                          </div>
                                       </div>
                                       <!--/span-->
                                       <div class="col-md-6">
                                          <div class="form-group">
                                             <label class="control-label col-md-3">Last Name</label>
                                             <div class="col-md-9">
                                                <input type="text" class="form-control" placeholder="" name="lname" value="<?php echo $row['u_lname'];?>">
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
                                                <input type="text" class="form-control" placeholder="" name="email1" value="<?php echo $row['u_email'];?>">
                                                <span class="help-block"></span>
                                             </div>
                                          </div>
                                       </div>
                                       <!--/span-->
                                       <div class="col-md-6">
                                          <div class="form-group">
                                             <label class="control-label col-md-3">Email-2</label>
                                             <div class="col-md-9">
                                                <input type="text" class="form-control" placeholder="" name="email2" value="<?php echo $row['u_email2'];?>">
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
                                                <input type="text" class="form-control" placeholder="" name="email3" value="<?php echo $row['u_email3'];?>">
                                                <span class="help-block"></span>
                                             </div>
                                          </div>
                                       </div>
                                       <!--/span-->
                                       <div class="col-md-6">
                                          <div class="form-group">
                                             <label class="control-label col-md-3">Email-4</label>
                                             <div class="col-md-9">
                                                <input type="text" class="form-control" placeholder="" name="email4" value="<?php echo $row['u_email4'];?>">
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
                                                <input type="text" class="form-control" name="address" value="<?php echo $row['u_address'];?>">
                                             </div>
                                          </div>
                                       </div>
                                       <div class="col-md-6">
                                          <div class="form-group">
                                             <label class="control-label col-md-3">Address 2</label>
                                             <div class="col-md-9">
                                                <input type="text" class="form-control" value="<?php echo $row[''];?>" >
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="row">
                                       <div class="col-md-6">
                                          <div class="form-group">
                                             <label class="control-label col-md-3">City</label>
                                             <div class="col-md-9">
                                                <input type="text" class="form-control" name="city" value="<?php echo $row['u_city'];?>"> 
                                             </div>
                                          </div>
                                       </div>
                                       <!--/span-->
                                       <div class="col-md-6">
                                          <div class="form-group">
                                             <label class="control-label col-md-3">State</label>
                                             <div class="col-md-9">
                                                <input type="text"  class="form-control" name="state" value="<?php echo $row['u_state'];?>"> 
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
                                                <input type="text" class="form-control" name="zip" value="<?php echo $row['u_zip'];?>"> 
                                             </div>
                                          </div>
                                       </div>
                                       <!--/span-->
                                       <div class="col-md-6">
                                          <div class="form-group">
                                             <label class="control-label col-md-3">Country</label>
                                             <div class="col-md-9">
                                                <select class="select2_category form-control" data-placeholder="Choose a Country" name="country">
													<option><?php echo $row['u_country'];?></option>
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
								 <?php $sql = "SELECT * FROM fax_number";
							$query = mysql_query($sql);
							
					
						
						?>
								 
                                    <div class="row">
                                       <div class="col-md-6">
                                          <div class="form-group">
                                             <label class="control-label col-md-3">Country</label>
                                             <div class="col-md-9">
                                                <select class="select2_category form-control"  data-placeholder="Choose a Country" tabindex="1" id="country">
												<?php $sql23 = "SELECT * FROM fax_number INNER JOIN user_fax_number ON fax_number.fax_id = user_fax_number.fax_id WHERE user_fax_number.fax_id = '$uid'";
												$query23 = mysql_query($sql23);
												while($row23 = mysql_fetch_array($query23))
												{
												?>
												<option value=""><?php echo $row23['fax_country']; }?></option>
												
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
                                                <select class="select2_category form-control" data-placeholder="Choose a City" id="city" >
												<?php
												while($row23 = mysql_fetch_array($query23))
												{
												?>
												<option value=""><?php echo $row23['fax_city']; }?></option>
                                                  <?php 
						$query1 = mysql_query($sql);	
						while ($row1 = mysql_fetch_array($query1))
						{	
						
						?>
                                                   <option ><?php echo $row1['fax_city']; }?></option>
                                                   
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
                                             <label class="control-label col-md-3">Number</label>
                                             <div class="col-md-9">
                                                <select class="select2_category form-control"  data-placeholder="Choose a Number" name="number" id="number">
												<?php
												while($row23 = mysql_fetch_array($query23))
												{
												?>
												<option value=""><?php echo $row23['fax_code']."&nbsp;".$row23['fax_number']; }?></option>
                                               
												   <?php 
						$query2 = mysql_query($sql);	
						while ($row2 = mysql_fetch_array($query2))
						{	
						
						?>
                                                   <option value="<?php echo $row2['fax_id'];?>" ><?php echo $row2['fax_code']."".$row2['fax_number']; }?></option>
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
                                             <button type="submit" class="btn green">Update</button>
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
						   <?php } ?>
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
         2014 &copy; Efax
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
      });
   </script>
   <!-- END JAVASCRIPTS -->   
</body>
<!-- END BODY -->
</html>