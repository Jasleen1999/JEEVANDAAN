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
<?php $active ='need';
include 'head.php'; ?>
<?php
if(isset($_POST["send"])){
  $name=$_POST['fullname'];
$number=$_POST['contactno'];
$email=$_POST['email'];
$blood=$_POST['blood'];
$age = $_POST['age'];
$gender = $_POST['gender'];
$address = $_POST['address'];
$message=$_POST['message'];
$conn=mysqli_connect("localhost:3307","root","","blood_donation") or die("Connection error");
$sql= "insert into receiver (r_name,r_number,r_mail,r_blood,r_age,r_gender,r_address,r_message) values('{$name}','{$number}','{$email}','{$blood}','{$age}','{$gender}','{$address}','{$message}')";
$result=mysqli_query($conn,$sql) or die("query unsuccessful.");
  echo '<div class="alert alert-success alert_dismissible"><b><button type="button" class="close" data-dismiss="alert">&times;</button></b><b>Request Sent, We will contact you shortly. </b></div>';
}?>

<div id="page-container" style="margin-top:20px; position: relative;min-height: 84vh;">
  <div class="container">
  <div id="content-wrap" style="padding-bottom:50px;">
    <h1 class="mt-4 mb-3">Receiver</h1>
    <hr style="height:5px;border-width:0;color:tomato;background-color:tomato">
    <div class="row">
      <div class="col-lg-10 mb-4">
        <h3>Please Fill this!</h3>
        <form name="sentMessage"  method="post">
            <div class="control-group form-group">
                <div class="controls">
                    <label>Full Name:<span style="color:red">*</span></label>
                    <input type="text" class="form-control" id="name" name="fullname" required>
                    <p class="help-block"></p>
                </div>
            </div>
            <div class="control-group form-group">
                <div class="controls">
                    <label>Email Address:</label>
                    <input type="email" class="form-control" id="email" name="email">
                </div>
            </div>
            <div class="control-group form-group">
                <div class="controls">
                    <label>Phone Number:<span style="color:red">*</span></label>
                    <input type="tel" class="form-control" id="phone" name="contactno"  required >
                </div>
            </div>
            
            <div class="control-group form-group">
                <div class="controls">
                    <label>Blood Group Needed:<span style="color:red">*</span></label>
                    <input type="blood" class="form-control" id="blood" name="blood" required>
                </div>
            </div>
            <div class="control-group form-group">
                <div class="controls">
                    <label>Age:<span style="color:red">*</span></label>
                    <input type="age" class="form-control" id="age" name="age" required>
                </div>
            </div>
            <div class="control-group form-group">
                <div class="controls">
                    <label>Gender:<span style="color:red">*</span></label>
                    <input type="gender" class="form-control" id="gender" name="gender" required>
                </div>
            </div>
            <div class="control-group form-group">
                <div class="controls">
                    <label>Address:<span style="color:red">*</span></label>
                    <input type="address" class="form-control" id="address" name="address" required>
                </div>
            </div>
            <div class="control-group form-group">
                <div class="controls">
                    <label>Message:</label>
                    <textarea rows="10" cols="100" class="form-control" id="message" name="message"  maxlength="999" style="resize:none"></textarea>
                </div>
            </div>
            <button type="submit" name="send"  class="btn btn-primary">Submit</button>
        </form>
    </div>
</div>


</div>
</div>
<?php include 'footer.php' ?>
</div>
</body>

</html>
