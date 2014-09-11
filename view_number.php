
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
   <title>Fax Number</title>
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
   <link rel="stylesheet" href="assets/plugins/data-tables/DT_bootstrap.css" />
   <!-- END PAGE LEVEL STYLES -->
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
      <!-- END SIDEBAR -->
      <?php include('admin_header.php');
	  include('config.php');
	   ?>
	  <!-- BEGIN PAGE -->
      <div class="page-content">
         <!-- BEGIN SAMPLE PORTLET CONFIGURATION MODAL FORM-->               
         <div class="modal fade" id="portlet-config" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
               <div class="modal-content">
                  <div class="modal-header">
                     <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                     <h4 class="modal-title">New Fax Number</h4>
                  </div>
                  <div class="modal-body">
				  <form action="insert_fax_num.php" class="form-horizontal" method="post">
                                 <div class="form-body">
                                    <div class="row">
                                       <div class="col-md-9">
                                          <div class="form-group">
                                             <label class="control-label col-md-4">Select Country</label>
                                             <div class="col-md-6">
                                                <select name="country" class="form-control">
												<option></option>
												<option>India</option>
												<option>Saudi Arabia</option>
												</select>
                                             </div>
                                          </div>
                                       </div>
									 </div>
									<div class="row">
                                       <div class="col-md-9">
                                          <div class="form-group">
                                             <label class="control-label col-md-4">Enter City</label>
                                             <div class="col-md-6">
                                                <input type="text" class="form-control" placeholder="" name="city">
                                             </div>
                                          </div>
                                       </div>
									 </div> 
                                    <div class="row">
                                       <div class="col-md-9">
                                          <div class="form-group">
                                             <label class="control-label col-md-4">New Number</label>
                                             <div class="col-md-3">
                                                <input type="text" class="form-control" placeholder="code" name="code">
                                             </div>
											 <div class="col-md-4">
                                                <input type="text" class="form-control" placeholder="number" name="phn_num">
                                                
                                             </div>
											 
                                          </div>
                                       </div>
									 </div>
								
								</div>
									 
                  </div>
                  <div class="modal-footer">
                     <input type="submit" class="btn blue" value="Save">
                     <button type="button" class="btn default" data-dismiss="modal">Close</button>
                  </div>
				  </form>
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
                  Fax Number 
               </h3>
               <ul class="page-breadcrumb breadcrumb">
                  <li class="btn-group">
                     
                  </li>
                  <li>
                     <i class="icon-home"></i>
                     <a href="#">Home</a> 
                     <i class="icon-angle-right"></i>
                  </li>
                 
                  <li><a href="#">Fax Number</a></li>
               </ul>
               <!-- END PAGE TITLE & BREADCRUMB-->
            </div>
         </div>
         <!-- END PAGE HEADER-->
         <!-- BEGIN PAGE CONTENT-->
         <div class="row">
            <div class="col-md-12">
               <!-- BEGIN EXAMPLE TABLE PORTLET-->
               <div class="portlet box blue">
                  <div class="portlet-title">
                     <div class="caption"><i class="icon-edit"></i>Fax Number</div>
                     
                  </div>
                  <div class="portlet-body">
                     <div class="table-toolbar">
                        <div class="btn-group">
                          <a href="#portlet-config" data-toggle="modal" class="config" style="color:#FFFFFF"> <button id="sample_editable_1_new1" class="btn green">
                           Add New <i class="icon-plus"></i></a>
                           </button>
                        </div>
                        
                     </div>
                     <table class="table table-striped table-hover table-bordered" id="sample_editable_1">
                        <thead>
                           <tr>
                              <th>Fax Number</th>
                              <th>Country</th>
                              <th>City</th>
                              <th>Status</th>
							  <th>Assigned User</th>
                              <th>Edit</th>
                              <th>Delete</th>
                           </tr>
                        </thead>
						
                        <tbody>
						
						<?php $sql = "SELECT * FROM fax_number";
							$query = mysql_query($sql);
							
						while ($row = mysql_fetch_array($query))
						{	
						$faxid = $row['fax_id'];
						$st = $row['fax_number_status'];
						?>
                           <tr >
                              <td><?php echo $row['fax_code']." ".$row['fax_number']; ?></td>
                              <td><?php echo $row['fax_country']; ?></td>
                              <td><?php echo $row['fax_city']; ?></td>
                              <td><?php if($st==0){echo "Not is use";}else{ echo "in use";} ?></td>
							  <?php $sql1 = "SELECT * FROM user_fax_number INNER JOIN users ON user_fax_number.user_id = users.u_id WHERE user_fax_number.fax_id='$faxid'";
							$query1 = mysql_query($sql1);
						if (mysql_num_rows($query1)){	
						while ($row1 = mysql_fetch_array($query1))
						{	
						
						?>
							  <td><?php echo $row1['u_name']; ?></td>
							   <td><a class="edit" href="javascript:;">Edit</a></td>
                              <td><a class="delete" href="javascript:;" ></a></td>
							  <?php }} else { ?>
							  <td>-</td>
							   <td><a class="edit" href="javascript:;">Edit</a></td>
                              <td><a class="delete" href="javascript:;" >Delete</a></td>
							  <?php } ?>
                             
                           </tr>
						   <?php } ?>
                          
                        </tbody>
                     </table>
                  </div>
               </div>
               <!-- END EXAMPLE TABLE PORTLET-->
            </div>
         </div>
         <!-- END PAGE CONTENT -->
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
   <script src="assets/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
   <script src="assets/plugins/bootstrap-hover-dropdown/twitter-bootstrap-hover-dropdown.min.js" type="text/javascript" ></script>
   <script src="assets/plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
   <script src="assets/plugins/jquery.blockui.min.js" type="text/javascript"></script>  
   <script src="assets/plugins/jquery.cookie.min.js" type="text/javascript"></script>
   <script src="assets/plugins/uniform/jquery.uniform.min.js" type="text/javascript" ></script>
   <!-- END CORE PLUGINS -->
   <!-- BEGIN PAGE LEVEL PLUGINS -->
   <script type="text/javascript" src="assets/plugins/select2/select2.min.js"></script>
   <script type="text/javascript" src="assets/plugins/data-tables/jquery.dataTables.js"></script>
   <script type="text/javascript" src="assets/plugins/data-tables/DT_bootstrap.js"></script>
   <!-- END PAGE LEVEL PLUGINS -->
   <!-- BEGIN PAGE LEVEL SCRIPTS -->
   <script src="assets/scripts/app.js"></script>
   <script src="assets/scripts/table-editable.js"></script>    
   <script src="assets/scripts/form-samples.js"></script>
   <script>
      jQuery(document).ready(function() {       
         App.init();
         TableEditable.init();
		 FormSamples.init();
      });
   </script>
</body>
<!-- END BODY -->
</html>