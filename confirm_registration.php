<?php
include('common-code/login.php');
  if(!LoggedIn())
    header("location:login.php");
$conn = dbConnect();
?>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Zealicon 2015</title>

    <!-- Core CSS - Include with every page -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.css" rel="stylesheet">

    <!-- Page-Level Plugin CSS - Tables -->
    <link href="css/plugins/dataTables/dataTables.bootstrap.css" rel="stylesheet">

    <!-- SB Admin CSS - Include with every page -->
    <link href="css/sb-admin.css" rel="stylesheet">
  
</head>

<body>

    <div id="wrapper">

        <nav class="navbar navbar-default navbar-fixed-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="events.php">Zealicon-2015</a>
            </div>
            <!-- /.navbar-header -->
            <ul class="nav navbar-top-links navbar-right">
          
            
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i>  <i class="fa fa-caret-down"></i>
                    </a>
                     <?php include_once "common-code/topbar.php"; ?>
                
             </li>  
    </ul>

            <!-- /.navbar-top-links -->

            <div class="navbar-default navbar-static-side" role="navigation">
                <div class="sidebar-collapse">
                    <?php include_once "common-code/left-sidebar.php"; ?>
                    <!-- /#side-menu -->
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>

       <div id="page-wrapper">
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                  
                            <div class="row">
                                   
                                
                            <?php 
		addStudent();

	function addStudent(){
		$conn = dbConnect();
    $amount= 150;
    $flag = 0;
		$name='';$email='';$course='';$college='';$mobile='';$zealId='';
		if(isset($_POST['name'])) $name = $conn->real_escape_string($_POST['name']);
		if(isset($_POST['zealId'])) $zealId = $conn->real_escape_string($_POST['zealId']);
		if(isset($_POST['email'])) $email = $conn->real_escape_string($_POST['email']);
		if(isset($_POST['college'])) $college = $conn->real_escape_string($_POST['college']);
		if(isset($_POST['course'])) $course = $conn->real_escape_string($_POST['course']);
		if(isset($_POST['mobile'])) $mobile = $conn->real_escape_string($_POST['mobile']);
    if(isset($_POST['checkjss'])){
		  $amount=200;}
    
    $select_query = "SELECT * from paid_registrations";
    $run_select_query = $conn->query($select_query);
    while($row = $run_select_query->fetch_array())
    if($mobile == $row['mobile']){
      $flag=1;
      header("Location: display.php?id=2");  }
    if($flag==0){
?>
                               <div class="col-lg-12">
                    <h1 class="page-header">Confirm Registration</h1>
                                               <div class="form-group">
                                               <label>Name</label>
                                                  <?php echo $name; ?>
                                               </div>
                                                <div class="form-group">
                                               <label>E-Mail</label>
                                                   <?php echo $email; ?>
                                               </div>
                                                <div class="form-group">
                                               <label>Mobile</label>
                                                   <?php echo $mobile ?>
                                               </div>
                                                   
                                                    <div class="form-group">
                                               <label>Course</label>
                                                   <?php echo $course; ?>
                                               </div>
                                                <div class="form-group">
                                               <label>College</label>
                                                  <?php echo $college; ?>
                                               </div>
                                  <div class="form-group">
                                               <label>Amount</label>
                                                  <?php echo $amount; ?>
                                               </div>
                                  
                                             
                                          
                </div>
                              <form action="register.php" method="post">
                                
                              <input type="hidden" name="confirm_name" value="<?php echo $name; ?>">
                              <input type="hidden" name="confirm_zealId" value="<?php echo $zealId; ?>">
                              <input type="hidden" name="confirm_email" value="<?php echo $email; ?>">
                              <input type="hidden" name="confirm_mobile" value="<?php echo $mobile; ?>">
                              <input type="hidden" name="confirm_course" value="<?php echo $course; ?>">
                              <input type="hidden" name="confirm_college" value="<?php echo $college; ?>">
                              <input type="hidden" name="amount" value="<?php echo $amount; ?>">
                             
                                            <button type="Confirm" class="btn btn-primary">Confirm</button></form>
                              <?php } }?>
                              
                                <!-- /.col-lg-6 (nested) -->
                                
                                <!-- /.col-lg-6 (nested) -->
                            </div>
                            <!-- /.row (nested) -->
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->


    <!-- Core Scripts - Include with every page -->
    <script src="js/jquery-1.10.2.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/plugins/metisMenu/jquery.metisMenu.js"></script>

    <!-- Page-Level Plugin Scripts - Tables -->
    <script src="js/plugins/dataTables/jquery.dataTables.js"></script>
    <script src="js/plugins/dataTables/dataTables.bootstrap.js"></script>

    <!-- SB Admin Scripts - Include with every page -->
    <script src="js/sb-admin.js"></script>

    <!-- Page-Level Demo Scripts - Tables - Use for reference -->
    <script>
    $(document).ready(function() {
        $('#dataTables-example').dataTable();
    });
    </script>

</body>

</html>
