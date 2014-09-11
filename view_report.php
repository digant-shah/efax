<?php

include('config.php'); 
						$users = $_POST['users'];
						
					$dateto = $_POST['dateto'];
					$datefrom = $_POST['datefrom'];
				$type = $_POST['type'];
?>
  <link rel="stylesheet" href="assets/plugins/data-tables/DT_bootstrap.css" />
         <div class="row">
            <div class="col-md-12">
               <!-- BEGIN EXAMPLE TABLE PORTLET-->
               <div class="portlet box blue">
                  <div class="portlet-title">
                     <div class="caption"><i class="icon-edit"></i>Report</div>
                     
                  </div>
                  <div class="portlet-body">
                     
                     <table class="table table-striped table-hover table-bordered" id="sample_editable_1">
                        <thead>
                           <tr>
                              <th>Name</th>
                              <th>Email</th>
                              <th>Fax Number</th>
							  <th>To</th>
                              <th>Datetime</th>
                              <th>Status</th>
							  
                           </tr>
                        </thead>
                        
                        <tbody>
                        <?php
						
						foreach($users as $us)
						{
						$usr = $us;
						if($type == "sent")
						{
						$sql = "SELECT * FROM users INNER JOIN user_fax_number ON users.u_id = user_fax_number.user_id INNER JOIN fax_number ON user_fax_number.fax_id = fax_number.fax_id INNER JOIN sent_fax_details ON users.u_id = sent_fax_details.user_id WHERE u_id = '$usr'";
							$query = mysql_query($sql);
							}
							
							elseif($type == "recieve")
							{
							$sql = "SELECT * FROM users INNER JOIN user_fax_number ON users.u_id = user_fax_number.user_id INNER JOIN fax_number ON user_fax_number.fax_id = fax_number.fax_id WHERE u_id = '$usr'";
							$query = mysql_query($sql);
							}
							
							else
							{
							$sql = "SELECT * FROM users INNER JOIN user_fax_number ON users.u_id = user_fax_number.user_id INNER JOIN fax_number ON user_fax_number.fax_id = fax_number.fax_id WHERE u_id = '$usr'";
							$query = mysql_query($sql);
							}
							
						while ($row = mysql_fetch_array($query))
						{	
						
						?>
						   <tr >
                              <td><?php echo $row['u_name']; ?></td>
                              <td><?php echo $row['u_email']; ?></td>
                              <td><?php echo $row['fax_code'].$row['fax_number']; ?></td>
                              <td class="center">07945054779</td>
                              <td><?php //echo $row['u_date']; ?></td>
							  <td></td>
							 
                           </tr>
						   <?php  }} ?>
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
   <script type="text/javascript" src="assets/plugins/data-tables/jquery.dataTables.js"></script>
   <script type="text/javascript" src="assets/plugins/data-tables/DT_bootstrap.js"></script>
   <!-- END PAGE LEVEL PLUGINS -->
   <!-- BEGIN PAGE LEVEL SCRIPTS -->
   
   <script src="assets/scripts/table-editable.js"></script>    
   <script>
      jQuery(document).ready(function() {       
         
         TableEditable.init();
      });
   </script>
   
</body>
<!-- END BODY -->
</html>