<html>

<head>


<style>

.header {
  overflow:hidden;
  background-color: tomato;
  top: 0;
  width:100%;
  padding: 10px 5px;
  color:white  ;
}

/* Style the header links */
.header a {
  float: left;
  color: white;
  text-align: center;
  padding: 12px;
  text-decoration: none;
  font-size: 18px;
  line-height: 25px;
  border-radius: 4px;
  font-weight:bold;
}

/* Style the logo link (notice that we set the same value of line-height and font-size to prevent the header to increase when the font gets bigger */
.header a.logo {
  font-size: 25px;
  font-weight: bold;
  color:white  ;
}

/* Change the background color on mouse-over */
.header a:hover {
  background-color: #ddd;
  color: black;
}




/* Float the link section to the right */
.header-right {
  float: right;
}

/* Add media queries for responsiveness - when the screen is 500px wide or less, stack the links on top of each other */
@media screen and (max-width: 500px) {
  .header a {
    float: none;
    display: block;
    text-align: left;
  }
  .header-right {
    float: none;
  }
}
/* Style the active/current link*/
a.act{
background: linear-gradient(to right, #fd746c 0%, #ff9068 100%);
color: white;
border-radius:30px;
}
a.logo2{
  background-color: tomato;
}
</style>
<script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>

</head>

<body>
  <div class="header">
    <a href="http://localhost/JeevanDaan/" class="logo"<?php if($active=='home') echo "class='logo2'"; ?>>JEEVAN DAAN</a>
    <div class="header-right">
    <a href="login.php"  <?php if($active=='login') echo "class='act'"; ?> >ADMIN</a>
    </a>
      
    </div>
  </div>

</body>
</html>
