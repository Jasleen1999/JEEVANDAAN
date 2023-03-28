<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</head>

<body>


<?php 
$active ='why';
include('head.php');
?>

<div id="page-container" style="margin-top:25px; position: relative;min-height: 84vh;">
  <div class="container">
  <div id="content-wrap" style="padding-bottom:50px;">
<div class="row">
    <div class="col-lg-6">
        <h1 class="mt-4 mb-3">BLOOD GROUPS</h1>
        <hr style="height:5px;border-width:0;color:tomato;background-color:tomato">
        <p>
          <?php
            include 'conn.php';
            $sql=$sql= "select * from pages where page_type='donor'";
            $result=mysqli_query($conn,$sql);
            if(mysqli_num_rows($result)>0)   {
                while($row = mysqli_fetch_assoc($result)) {
                  echo $row['page_data'];
                }
              }

           ?>
         
      </p>

    </div>
    <div class="col-lg-6">
    <h1 class="mt-4 mb-3">UNIVERSAL DONOR</h1>
    <hr style="height:5px;border-width:0;color:tomato;background-color:tomato">
        <p>
        <?php
                include 'conn.php';
                $sql=$sql= "select * from pages where page_type='universal'";
                $result=mysqli_query($conn,$sql);
                if(mysqli_num_rows($result)>0)   {
                    while($row = mysqli_fetch_assoc($result)) {
                      echo $row['page_data'];
                    }
                  }

               ?></p>
      </p>
    </div>
</div>
</div>

</div>

<?php include('footer.php')
?>
</div>
</body>

</html>
