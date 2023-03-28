<html>

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

<style>

#sidebar{position:relative;margin-top:-20px}
#content{position:relative;margin-left:210px}
@media screen and (max-width: 600px) {
  #content {
    position:relative;margin-left:auto;margin-right:auto;
  }
}


.block-anchor {
            color:red;

            cursor: pointer;
        }
</style>
</head>

<body style="color:black;" >

  <?php
  include 'conn.php';
    include 'session.php';
    if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
    ?>

<div id="header">
<?php include 'header.php';
?>
</div>
<div id="sidebar">
<?php
$active="dashboard";
include 'sidebar.php'; ?>

</div>
<div id="content">

  <div class="content-wrapper">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12 lg-12 sm-12">
          <h1 class="page-title">Dashboard</h1>
          
        </div>
      </div>
      <hr>
      <div class="row">
        <div class="col-md-12">
          <div class="row">
            <div class="col-md-4">
              <div class="panel panel-default panel-info" style="border-radius:50px;">
                <div class="panel-body panel-info bk-primary text-light" style="background-color: orange; color: white ;border-radius:50px">
                  <div class="stat-panel text-center">
                    <?php
                      $sql =" SELECT * from donor_details ";
                      $result=mysqli_query($conn,$sql) or die("query failed.");
                      $row=mysqli_num_rows($result);

                    ?>


                    <div class="stat-panel-number h1"><?php echo $row?></div>
                    <div class="stat-panel-title text-uppercase">Donors</div>
                    <br>
                      <button style="color: black" onclick="window.location.href = 'donor_list.php';">
                        Details <i class="fa fa-arrow-circle-o-right"></i>
                      </button>


                  </div>
                </div>

              </div>
            </div>

            <div class="col-md-4">
              <div class="panel panel-default panel-info" style="border-radius:50px;">
                <div class="panel-body panel-info bk-primary text-light" style="background-color:limegreen; color: white ;border-radius:50px;">
                  <div class="stat-panel text-center">
                    <?php
                      $sql1 =" SELECT * from contact_query ";
                      $result1=mysqli_query($conn,$sql1) or die("query failed.");
                      $row1=mysqli_num_rows($result1);

                    ?>


                    <div class="stat-panel-number h1 "><?php echo $row1?></div>
                    <div class="stat-panel-title text-uppercase"> Queries </div>
                    <br>
                    <button style="color: black" onclick="window.location.href = 'query.php';">
                      Details <i class="fa fa-arrow-circle-o-right"></i>
                    </button>
                  </div>
                </div>

              </div>
            </div>

            <div class="col-md-4">
              <div class="panel panel-default panel-info" style="border-radius:50px;">
                <div class="panel-body panel-info bk-primary text-light" style="background-color:blueviolet ; color: white ;border-radius:50px; ">
                  <div class="stat-panel text-center">
                    <?php
                      $sql2 ="SELECT * from receiver ";
                      $result2=mysqli_query($conn,$sql2) or die("query failed.");
                      $row2=mysqli_num_rows($result2);

                    ?>


                    <div class="stat-panel-number h1 "><?php echo $row2 ?></div>
                    <div class="stat-panel-title text-uppercase"> Receivers </div>
                    <br>
                    <button style="color: black" onclick="window.location.href = 'receiver_list.php';">
                      Details <i class="fa fa-arrow-circle-o-right"></i>
                    </button>
                  </div>
                </div>

              </div>
            </div>



        </div>
      </div>
    </div>
  <?php
 } else {
     echo '<div class="alert alert-danger"><b> Please Login First To Access Admin Portal.</b></div>';
     ?>
     <form method="post" name="" action="login.php" class="form-horizontal">
       <div class="form-group">
         <div class="col-sm-8 col-sm-offset-4" style="float:left">

           <button class="btn btn-primary" name="submit" type="submit">Go to Login Page</button>
         </div>
       </div>
     </form>
 <?php }
  ?>

</body>
</html>
