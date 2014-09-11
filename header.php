
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
 </head>
<!-- END HEAD -->
<!-- BEGIN BODY -->
<body class="page-header-fixed">
   <!-- BEGIN HEADER -->   
   <div class="header navbar navbar-inverse navbar-fixed-top">
      <!-- BEGIN TOP NAVIGATION BAR -->
      <div class="header-inner">
         <!-- BEGIN LOGO -->  
         <a class="navbar-brand" href="#">
         <img src="assets/img/logo_myfax_400x400.jpg" alt="logo" class="img-responsive" />
         </a>
         <!-- END LOGO -->
         <!-- BEGIN RESPONSIVE MENU TOGGLER --> 
         <a href="javascript:;" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
         <img src="assets/img/menu-toggler.png" alt="" />
         </a> 
         <!-- END RESPONSIVE MENU TOGGLER -->
         <!-- BEGIN TOP NAVIGATION MENU -->
         <ul class="nav navbar-nav pull-right">
            <!-- BEGIN NOTIFICATION DROPDOWN -->
                        <!-- BEGIN INBOX DROPDOWN -->
            
            <!-- BEGIN USER LOGIN DROPDOWN -->
            <li class="dropdown user">
               <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
               <img alt="" src="assets/img/avatar1_small.jpg"/>
			   
               <span class="username"><?php session_start(); echo $_SESSION['name']; ?></span>
               <i class="icon-angle-down"></i>
               </a>
               <ul class="dropdown-menu">
                  <li><a href="changepassword.php"><i class="icon-user"></i> Change Password</a>
                  </li>
                  
                  <!--<li><a href="#"><i class="icon-envelope"></i> My Inbox <span class="badge badge-danger">3</span></a>
                  </li>
                  <li><a href="#"><i class="icon-tasks"></i> My Tasks <span class="badge badge-success">7</span></a>
                  </li>-->
                  <li class="divider"></li>
                 
                  
                  <li><a href="index.php"><i class="icon-key"></i> Log Out</a>
                  </li>
               </ul>
            </li>
            <!-- END USER LOGIN DROPDOWN -->
         </ul>
         <!-- END TOP NAVIGATION MENU -->
      </div>
      <!-- END TOP NAVIGATION BAR -->
   </div>
   <!-- END HEADER -->
   <div class="clearfix"></div>
   <!-- BEGIN CONTAINER -->
   <div class="page-container">
      <!-- BEGIN SIDEBAR -->
      <div class="page-sidebar navbar-collapse collapse">
         <!-- BEGIN SIDEBAR MENU -->        
         <ul class="page-sidebar-menu">
            <li>
               <!-- BEGIN SIDEBAR TOGGLER BUTTON -->
               <div class="sidebar-toggler hidden-phone"></div>
               <!-- BEGIN SIDEBAR TOGGLER BUTTON -->
            </li>
            <li>
               <!-- BEGIN RESPONSIVE QUICK SEARCH FORM -->
               <form class="sidebar-search" action="#" method="POST">
                  <div class="form-container">
                    
                  </div>
               </form>
               <!-- END RESPONSIVE QUICK SEARCH FORM -->
            </li>
            <li class="start active ">
               <a href="dashboard.php">
               <i class="icon-home"></i> 
               <span class="title">Dashboard</span>
               <span class="selected"></span>
               </a>
            </li>
            <li class="">
               <a href="javascript:;">
               <i class="icon-cogs"></i> 
               <span class="title">Account</span>
               <span class="arrow "></span>
               </a>
               <ul class="sub-menu">
                  <li >
                     <a href="add_faxaccount.php">
                     Create New</a>
                  </li>
                  <li >
                     <a href="view_account.php">
                     View</a>
                  </li>
               </ul>
            </li>
            <li class="">
               <a href="javascript:;">
               <i class="icon-cogs"></i> 
               <span class="title">Fax</span>
               <span class="arrow "></span>
               </a>
               <ul class="sub-menu">
                  <li >
                     <a href="create_fax.php">
                     Create New</a>
                  </li>
                  <li >
                     <a href="inbox.php">
                     Inbox</a>
                  </li>
				  <li >
                     <a href="outbox.php">
                     Outbox</a>
                  </li>
               </ul>
            </li>
            <li class="">
               <a href="#">
               <i class="icon-bar-chart"></i> 
               <span class="title">Reports</span>
               <span class="selected"></span>
               </a>
            </li>
         </ul>
         <!-- END SIDEBAR MENU -->
      </div>
      <!-- END SIDEBAR -->
      
      </div>
      <!-- END PAGE -->
   </div>
   <!-- END CONTAINER -->
 
   <!-- END FOOTER -->
   <!-- BEGIN JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) -->
   <!-- BEGIN CORE PLUGINS -->   
   <!--[if lt IE 9]>
   <script src="assets/plugins/respond.min.js"></script>
   <script src="assets/plugins/excanvas.min.js"></script> 
   <![endif]-->   
   
</body>
<!-- END BODY -->
</html>