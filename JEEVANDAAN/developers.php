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
<style>
body {
  font-family: Arial, Helvetica, sans-serif;
}

.flip-card {
  background-color: transparent;
  width: 300px;
  height: 300px;
  perspective: 1000px;
}

.flip-card-inner {
  position: relative;
  width: 100%;
  height: 100%;
  text-align: center;
  transition: transform 0.6s;
  transform-style: preserve-3d;
  box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
}

.flip-card:hover .flip-card-inner {
  transform: rotateY(180deg);
}

.flip-card-front, .flip-card-back {
  position: absolute;
  width: 100%;
  height: 100%;
  -webkit-backface-visibility: hidden;
  backface-visibility: hidden;
}

.flip-card-front {
  background-color: #bbb;
  color: black;
}

.flip-card-back {
    background-image: linear-gradient(-60deg, #ff5858 0%, #f09819 100%);
  color: white;
  transform: rotateY(180deg);
}
</style>
<body>


<?php 
$active ='why';
include('head.php');

?>


<div id="page-container" style="margin-top:20px; position: relative;min-height: 84vh;">
<h1 class="mt-4 mb-3"><center>Developers</center></h1>
<hr style="height:5px;border-width:0;color:tomato;background-color:tomato">
  <div class="container">
  <div id="content-wrap" style="padding-bottom:50px;">
<div class="row">
    <div class="col-lg-6"><center>
    <div class="flip-card">
  <div class="flip-card-inner">
    <div class="flip-card-front">
      <img src="image/jasleen.jpg" alt="jasleen" style="width:300px;height:300px;">
    </div>
    <div class="flip-card-back">
    <br>    
      <h1>Jasleen<br>Kaur</h1> 
      <p>Sec: 1</p> 
      <p>01111604421</p>
    </div>
  </div>
</div></center>
    </div>
    <div class="col-lg-6"><center>
    <div class="flip-card">
  <div class="flip-card-inner">
    <div class="flip-card-front">
      <img src="image/gauri.jpg" alt="gauri" style="width:300px;height:300px;">
    </div>
    <div class="flip-card-back">
        <br>
      <h1>Gauri<br>Shekhawat</h1> 
      <p>Sec: 1</p> 
      <p>03111604421</p>
    </div>
  </div>
</div><center>
    </div>
</div>
</div></div>

<?php include('footer.php')
?>
</div>
</body>

</html>
