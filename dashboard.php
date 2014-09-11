
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
   <title>Dashboard</title>
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
   <!-- BEGIN PAGE LEVEL PLUGIN STYLES --> 
   <link href="assets/plugins/gritter/css/jquery.gritter.css" rel="stylesheet" type="text/css"/>
   <link href="assets/plugins/bootstrap-daterangepicker/daterangepicker-bs3.css" rel="stylesheet" type="text/css" />
   <link href="assets/plugins/fullcalendar/fullcalendar/fullcalendar.css" rel="stylesheet" type="text/css"/>
   <link href="assets/plugins/jqvmap/jqvmap/jqvmap.css" rel="stylesheet" type="text/css"/>
   <link href="assets/plugins/jquery-easy-pie-chart/jquery.easy-pie-chart.css" rel="stylesheet" type="text/css"/>
   <!-- END PAGE LEVEL PLUGIN STYLES -->
   <!-- BEGIN THEME STYLES --> 
   <link href="assets/css/style-metronic.css" rel="stylesheet" type="text/css"/>
   <link href="assets/css/style.css" rel="stylesheet" type="text/css"/>
   <link href="assets/css/style-responsive.css" rel="stylesheet" type="text/css"/>
   <link href="assets/css/plugins.css" rel="stylesheet" type="text/css"/>
   <link href="assets/css/pages/tasks.css" rel="stylesheet" type="text/css"/>
   <link href="assets/css/themes/default.css" rel="stylesheet" type="text/css" id="style_color"/>
   <link href="assets/css/custom.css" rel="stylesheet" type="text/css"/>
   <!-- END THEME STYLES -->
   <link rel="shortcut icon" href="favicon.ico" />
</head>
<!-- END HEAD -->
<!-- BEGIN BODY -->
<?php include('header.php'); 
include('config.php');
session_start();
$uid = $_SESSION["userid"];
?>
<body class="page-header-fixed">
   <!-- BEGIN HEADER -->   
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
                  Dashboard <small>statistics and more</small>
               </h3>
               <ul class="page-breadcrumb breadcrumb">
                  <li>
                     <i class="icon-home"></i>
                     <a href="#">Home</a> 
                     <i class="icon-angle-right"></i>
                  </li>
                  <li><a href="#">Dashboard</a></li>
                  
               </ul>
               <!-- END PAGE TITLE & BREADCRUMB-->
            </div>
         </div>
         <!-- END PAGE HEADER-->
         <!-- BEGIN DASHBOARD STATS -->
         <div class="row">
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
               <div class="dashboard-stat blue">
			   <a href="add_faxaccount.php">
                  <div class="visual">
                     <i class="icon-comments"></i>
                  </div>
				  
                  <div class="details">
                     <div class="number">
                        New Fax <br> Account
                     </div>
                     <div class="desc">                           
                        
                    </div>
                  </div></a>
                  <a class="more" href="#">
			<?php $sql_user = "SELECT COUNT(*) as total from users";
			 $query_user = mysql_query($sql_user);
			 while($row_user = mysql_fetch_array($query_user))
			 {
			 }
			 ?>	  
                  View more <i class="m-icon-swapright m-icon-white"></i>
                  </a>                 
               </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
               <div class="dashboard-stat green">
                  <a href="view_account.php">
				  <div class="visual">
                     <i class="icon-shopping-cart"></i>
                  </div>
				  
                  <div class="details">
                     <div class="number">View Fax <br> Account</div>
                     <div class="desc"></div>
                  </div></a>
                  <a class="more" href="#">
                  View more <i class="m-icon-swapright m-icon-white"></i>
                  </a>                 
               </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
               <div class="dashboard-stat purple">
			   <a href="inbox.php">
                  <div class="visual">
                     <i class="icon-globe"></i>
                  </div>
                  <div class="details">
                     <div class="number">Inbox</div>
                     <div class="desc">Check Your Inbox</div>
                  </div></a>
                  <a class="more" href="#">
                  View more <i class="m-icon-swapright m-icon-white"></i>
                  </a>                 
               </div>
            </div>
            
         </div>
         <!-- END DASHBOARD STATS -->
         <div class="clearfix"></div>
         <div class="row">
            <div class="col-md-6 col-sm-6">
              
            </div>
            <div class="col-md-6 col-sm-6">
              
            </div>
         </div>
         <div class="clearfix"></div>
         <div class="row">
            <div class="col-md-6 col-sm-6">
               <div class="portlet box blue">
                  <div class="portlet-title">
                     <div class="caption"><i class="icon-bell"></i>Recent Activities</div>
                     
                  </div>
                  <div class="portlet-body">
                     <div class="scroller" style="height: 150px;" data-always-visible="1" data-rail-visible="0">
                        <ul class="feeds">
                           <li>
                              <div class="col1">
                                 <div class="cont">
                                    <div class="cont-col1">
                                       <div class="label label-sm label-info">                        
                                          <i class="icon-check"></i>
                                       </div>
                                    </div>
                                    <div class="cont-col2">
                                       <div class="desc">
                                          You have 4 pending tasks.
                                          <span class="label label-sm label-warning ">
                                          Take action 
                                          <i class="icon-share-alt"></i>
                                          </span>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="col2">
                                 <div class="date">
                                    Just now
                                 </div>
                              </div>
                           </li>
                           <li>
                              <a href="#">
                                 <div class="col1">
                                    <div class="cont">
                                       <div class="cont-col1">
                                          <div class="label label-sm label-success">                        
                                             <i class="icon-bar-chart"></i>
                                          </div>
                                       </div>
                                       <div class="cont-col2">
                                          <div class="desc">
                                             Finance Report for year 2013 has been released.   
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="col2">
                                    <div class="date">
                                       20 mins
                                    </div>
                                 </div>
                              </a>
                           </li>
                            
                            
                           <li>
                              <a href="#">
                                 <div class="col1">
                                    <div class="cont">
                                       <div class="cont-col1">
                                          <div class="label label-sm label-info">                        
                                             <i class="icon-briefcase"></i>
                                          </div>
                                       </div>
                                       <div class="cont-col2">
                                          <div class="desc">
                                             IPO Report for year 2013 has been released.   
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="col2">
                                    <div class="date">
                                       20 mins
                                    </div>
                                 </div>
                              </a>
                           </li>
                        </ul>
                     </div>
                     <div class="scroller-footer">
                        <div class="pull-right">
                           <a href="#">See All Records <i class="m-icon-swapright m-icon-gray"></i></a> &nbsp;
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="col-md-6 col-sm-6">
               <div class="portlet box purple">
                  <div class="portlet-title">
                     <div class="caption"><i class="icon-calendar"></i>General Stats</div>
                     
                  </div>
                  <div class="portlet-body" style="height:150px;">
                     <div class="row">
                        <div class="col-md-4">
                           <div class="easy-pie-chart">
						   <?php $sql1 = "SELECT count(*) as count1 FROM sent_fax_details WHERE user_id = '$uid'";
							$query1 = mysql_query($sql1);
							
						while ($row1 = mysql_fetch_array($query1))
						{	
						
						?>
                              <div class="number transactions" data-percent="<?php echo $row1['count1']; ?>"><span><?php echo $row1['count1']; }?></span></div>
                              <a class="title" href="#">Send Fax <i class="m-icon-swapright"></i></a>
                           </div>
                        </div>
                        <div class="margin-bottom-10 visible-sm"></div>
                        <div class="col-md-4">
                           <div class="easy-pie-chart">
						    <?php $sql2 = "SELECT count(*) as count1 FROM incoming_fax_details WHERE user_id = '$uid'";
							$query2 = mysql_query($sql2);
							
						while ($row2 = mysql_fetch_array($query2))
						{	
						
						?>
                              <div class="number visits" data-percent="<?php echo $row2['count1']; ?>"><span><?php echo $row2['count1']; }?></span></div>
                              <a class="title" href="#">Recieve Fax <i class="m-icon-swapright"></i></a>
                           </div>
                        </div>
                        <div class="margin-bottom-10 visible-sm"></div>
                        <div class="col-md-4">
                           <div class="easy-pie-chart">
                              <div class="number bounce" data-percent="1"><span>1</span></div>
                              <a class="title" href="#">Registered Accounts <i class="m-icon-swapright"></i></a>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
                  
                  
              
            </div>
         </div>
         <div class="clearfix"></div>
         
         <div class="clearfix"></div>
                  <div class="clearfix"></div>
         
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
   <!-- IMPORTANT! Load jquery-ui-1.10.3.custom.min.js before bootstrap.min.js to fix bootstrap tooltip conflict with jquery ui tooltip -->
   <script src="assets/plugins/jquery-ui/jquery-ui-1.10.3.custom.min.js" type="text/javascript"></script>
   <script src="assets/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
   <script src="assets/plugins/bootstrap-hover-dropdown/twitter-bootstrap-hover-dropdown.min.js" type="text/javascript" ></script>
   <script src="assets/plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
   <script src="assets/plugins/jquery.blockui.min.js" type="text/javascript"></script>  
   <script src="assets/plugins/jquery.cookie.min.js" type="text/javascript"></script>
   <script src="assets/plugins/uniform/jquery.uniform.min.js" type="text/javascript" ></script>
   <!-- END CORE PLUGINS -->
   <!-- BEGIN PAGE LEVEL PLUGINS -->
  
   <script src="assets/plugins/flot/jquery.flot.js" type="text/javascript"></script>
   <script src="assets/plugins/flot/jquery.flot.resize.js" type="text/javascript"></script>
   <script src="assets/plugins/jquery.pulsate.min.js" type="text/javascript"></script>
   
   <!-- IMPORTANT! fullcalendar depends on jquery-ui-1.10.3.custom.min.js for drag & drop support -->
   
   <script src="assets/plugins/jquery-easy-pie-chart/jquery.easy-pie-chart.js" type="text/javascript"></script>
   <script src="assets/plugins/jquery.sparkline.min.js" type="text/javascript"></script>  
   <!-- END PAGE LEVEL PLUGINS -->
   <!-- BEGIN PAGE LEVEL SCRIPTS -->
   <script src="assets/scripts/app.js" type="text/javascript"></script>
   <script src="assets/scripts/index.js" type="text/javascript"></script>
       
   <!-- END PAGE LEVEL SCRIPTS -->  
   <script>
      jQuery(document).ready(function() {    
         App.init(); // initlayout and core plugins
         Index.init();
          // init index page's custom scripts
         Index.initCharts(); // init index page's custom scripts
         
         Index.initMiniCharts();
         
         
        
      });
   </script>
   <!-- END JAVASCRIPTS -->
</body>
<!-- END BODY -->
</html>