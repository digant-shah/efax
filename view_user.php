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
   <title>View Fax Account</title>
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
      <?php
	  session_start();
	   include('admin_header.php'); 
	  include('config.php');
	  ?>
	  <!-- BEGIN PAGE -->
      <div class="page-content">
         <!-- BEGIN SAMPLE PORTLET CONFIGURATION MODAL FORM-->               
         
         <!-- /.modal -->
         <!-- END SAMPLE PORTLET CONFIGURATION MODAL FORM-->
         <!-- BEGIN STYLE CUSTOMIZER -->
                  <!-- END BEGIN STYLE CUSTOMIZER -->            
         <!-- BEGIN PAGE HEADER-->
         <div class="row">
            <div class="col-md-12">
               <!-- BEGIN PAGE TITLE & BREADCRUMB-->
               <h3 class="page-title">
                  View Fax Accounts
               </h3>
               <ul class="page-breadcrumb breadcrumb">
                  <li class="btn-group">
                     
                  </li>
                  <li>
                     <i class="icon-home"></i>
                     <a href="#">Home</a> 
                     <i class="icon-angle-right"></i>
                  </li>
                  
                  <li><a href="#">View Users</a></li>
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
                     <div class="caption"><i class="icon-edit"></i>View User</div>
                     
                  </div>
                  <div class="portlet-body">
                     
                     <table class="table table-striped table-hover table-bordered" id="sample_editable_1">
                        <thead>
                           <tr>
                              <th>Name</th>
                              <th>Email</th>
                              <th>Address</th>
                              <th>Phone</th>
                              <th>Date</th>
							  <th>Accept</th>
                              <th>Delete</th>
                           </tr>
                        </thead>
                        
                        <tbody>
                        <?php 
						$id = $_GET['id'];
						$sql = "SELECT * FROM users WHERE u_id = $id";
							$query = mysql_query($sql);
							
						while ($row = mysql_fetch_array($query))
						{	
						
						?>
						   <tr >
                              <td><?php echo $row['u_name']; ?></td>
                              <td><?php echo $row['u_email']; ?></td>
                              <td><?php echo $row['u_city'].' '.$row['u_state'].' '.$row['u_country']; ?></td>
                              <td class="center"><?php echo $row['u_phn']; ?></td>
                              <td><?php //echo $row['u_date']; ?></td>
							  <td><a href="#" id="accept" data-id="<?php echo $row['u_id']; ?>">Accept</a></td>
                              <td><a class="delete" href="javascript:;">Delete</a></td>
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
         2014 &copy; E-FAX.
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
   <script>
      jQuery(document).ready(function() {       
         App.init();
         TableEditable.init();
      });
   </script>
   <script>
$("#accept").click(function(e) {
  e.preventDefault();
  var data1 = $(this).data('id');
 
  var dataString = 'name1='+data1;
  $.ajax({
    type:'POST',
    data:dataString,
    url:'activateuser.php',
    success:function(data) {
      alert(data);
	  
    }
  });
});
</script>
   
</body>
<!-- END BODY -->
</html>