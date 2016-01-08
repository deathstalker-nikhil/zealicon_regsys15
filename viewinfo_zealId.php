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
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">View Info</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-9">

                            <div class="row">
                                    <form role="form" action="" method="post">
                                        <div class="form-group">
                                            <label>Zealicon-ID</label>
                                            <input class="form-control" type="text" name="zealicon_id">
                                        </div>
                              
                                        <button type="submit" name="submit" class="btn btn-danger">Search</button>
                                    </form>
                                 </div>
                            <!-- /.row (nested) -->
                        <!-- /.panel-body -->
                    </div>

                                <?php
                            $flag=0;
                            $num_rows0=0;
                        if (isset($_POST['submit'])) {
                                $zealicon_id = $_REQUEST['zealicon_id'];
                                  $query0 = "SELECT * FROM paid_registrations where `zealId`='$zealicon_id'";
                                $result0 = $conn->query($query0);
                                $num_rows0 = mysqli_num_rows($result0);
                                if ($num_rows0==1 ){
                                        while($row0 = $result0->fetch_array()){
                                            $zealId = $row0['zealId'];
                                            $name = $row0['name'];
                                            $email = $row0['email'];
                                            $mobile = $row0['mobile'];
                                            $course = $row0['course'];
                                            $paid = $row0['paid'];
                                            $college = $row0['collegeName'];
                                            $flag=1;  }
                                            }
                                if ($num_rows0==0){
                                  $query1 = "SELECT * FROM online_registrations where `zealId`='$zealicon_id'";
                                  $result1 = $conn->query($query1);
                                  $num_rows0 = mysqli_num_rows($result1);
                                       while($row1 = $result1->fetch_array()){
                                            $zealId = $row1['zealId'];
                                            $name = $row1['name'];
                                            $email = $row1['email'];
                                            $mobile = $row1['mobile'];
                                            $course = $row1['course'];
                                            $paid = $row1['paid'];
                                            $college = $row1['collegeName'];
                                            $flag=2;  }
                                }
                          if ($num_rows0==0){
                            $num_rows0=10;
                          }
                         
                                ?>
                      <div class="col-lg-6">

                            <div class="row">
                                    <form role="form">
                                      <div class="form-group"><p><b><?php if($flag==1){echo "Found in paid registrations";} if($flag==2){echo "Found in online registrations";} ?></b></p></div>
                                        <div class="form-group"><label>Zealicon-ID:</label><p><?php echo $zealId; ?></p></div>
                                        <input type="hidden" name="zealId" value="<?php echo $zealId; ?>">
                                        <div class="form-group"><label>Name:</label><p><?php echo $name; ?></p></div>
                                        <input type="hidden" name="name" value="<?php echo $name; ?>">
                                        <div class="form-group"><label>E-Mail:</label><p><?php echo $email; ?></p></div>
                                        <input type="hidden" name="email" value="<?php echo $email; ?>">
                                        <div class="form-group"><label>Mobile:</label><p><?php echo $mobile; ?></p></div>
                                      <input type="hidden" name="mobile" value="<?php echo $mobile; ?>">
                                        <div class="form-group"><label>Course:</label><p><?php echo $course; ?></p></div>
                                      <input type="hidden" name="course" value="<?php echo $course; ?>">
                                        <div class="form-group"><label>College:</label><p><?php echo $college; ?></p></div>
                                      <input type="hidden" name="college" value="<?php echo $college; ?>">
                                       
        
                                    </form>
                                 
                  <?php      
                       if($num_rows0==10){
                            echo "Zealicon ID not found!!";
                                          }
                        }
                                        ?>

</div>
                            <!-- /.row (nested) -->
                        <!-- /.panel-body -->
                    </div>

                                <!-- /.col-lg-6 (nested) -->

                                <!-- /.col-lg-6 (nested) -->

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
