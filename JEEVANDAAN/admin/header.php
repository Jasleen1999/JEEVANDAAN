<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <style>
  .navbar {
    background-color: tomato  ;
    padding: 10px 10px;
    color:white  ;
  }
  .navbar a {
    float: left;
    color: white;
    text-align: center;
    padding: 12px;
    text-decoration: none;
    font-size: 18px;
    line-height: 25px;
  }
  .navbar-brand {
    font-size: 25px;
    font-weight: bold;

  }
  .navbar a {
    float: none;
    display: block;
    text-align: left;
  }
  .navbar-right {
    float: none;
  }
   #qq:hover{
    background-color:#D9DDDC ;
    border-radius: 5px;
    color: black; 
  }
  #qw:hover{
    background-color:#D9DDDC ;
    border-radius: 5px;
    color: black; 
  }
  </style>
</head>
<body>

<nav class="navbar">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" id="qq" href="dashboard.php">JEEVAN DAAN</a>
    </div>
    <ul class="nav navbar-nav navbar-right">

      <li class="dropdown"><a class="dropdown-toggle" id="qw" data-toggle="dropdown" href="#" style="font-weight:bold;"> <span class="glyphicon glyphicon-user"></span>&nbsp&nbsp
        <?php
        include 'conn.php';
        $username=$_SESSION['username'];
        $sql="select * from admin_info where admin_username='$username'";
        $result=mysqli_query($conn,$sql) or die("query failed.");
        $row=mysqli_fetch_assoc($result);
        echo "Hello ".$row['admin_name'];
       ?><span class="caret"></span></a>
        <ul class="dropdown-menu" style="background-color:#D6EAF8;">
          <li><a href="change_password.php" style="color:black  ">Change Password </a></li>
          <li><a href="logout.php" style="color:black ;">Logout</a></li>
        </ul>
    </li>
    </ul>

  </div>

</nav>
</body></html>
