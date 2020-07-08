
<html>
<head>
<title>freshersHub</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="style4.css" rel="stylesheet" type="text/css" />
<script language="javascript" type="text/javascript">
function clearText(field) {
    if (field.defaultValue == field.value) field.value = '';
    else if (field.value == '') field.value = field.defaultValue;
}
</script>
</head>
<body>
<div id="site_title_bar_wrapper">
  <div id="site_title_bar">
    <div id="menu">
     <ul>
        <li><a href="index.html" class="current"><span></span>Home</a></li>
        <li><a href="Login.html"><span></span>Login</a>

          
        </li>
        <li><a href="Register.html" class="dropdown"><span></span>Register</a></li>
            
            
       
        <li><a href="jobs.html"><span></span>Jobs</a></li>
        <li><a href="contact.html"><span></span>Contact Us</a></li>
      </ul>
    </div>
    <!-- end of menu -->
    <div class="site_title_left">
      <div id="site_title">
        <h1><a href="#">freshersHub <span>Job For Freshers</span> </a></h1>
      </div>
    </div>
    <div class="site_title_right">
      <h2><a href="#">Trinity Polytechnic,Pune</a></h2>
      <p>This website is made by Trinity polytechnic pune students of this college.
           This website will be used only for Trinity polytechnic,Pune college.</p>
    </div>
    <div class="cleaner"></div>
    <div id="search_box">
      <form action="#" method="get">
        <input type="text" value="Enter keyword here..." name="q" size="10" id="searchfield" onfocus="clearText(this)" onblur="clearText(this)" />
        <input type="submit" name="Search" value="" alt="Search" id="searchbutton" />
      </form>
    </div>
  </div>
  <!-- end of site_title_bar -->
</div>
<!-- end of site_title_bar_wrapper -->

  <div class="login">
    <h2>Recruiter Registration</h2>

    <form>
    <input type="text" name="compny_name" placeholder="Enter Your Company Name">
    <input type="text" name="compny_address" placeholder="Enter Your Company Address">
    <input type="text" name="compny_user" placeholder="Enter Your username">

    <input type="password" name="password" placeholder="Enter Your Password">
    <input type="password" name="conf_password" placeholder="Enter Your Confirm Password">
    <input type="text" name="compny_web" placeholder="Enter Your Website">
    <input type="file" name="upload" value="Upload Logo" placeholder="Company Logo"></h4>

    <input type="submit" name="submit" value="SignUp">


    </form>
  


  </div>




<!-- end of content -->
<div id="footer_wrapper">
  <div id="footer">
    <div class="section_w280">
      <h3>College Address</h3>
      <div class="sub_content">
        <p> Trinity Polytechnic,Pune<br />
          Near Khadimachine Chowk, Kondhwa Annexe, Pune 411 048 <br />
          <br />
          Email :officekjcoemr@gmail.com / kj.pg.office@gmail.com </p>
      </div>
    </div>
    <div class="section_w280">
      <h3>Partners</h3>
      <div class="sub_content">
        <ul class="footer_list">
          
        </ul>
      </div>
    </div>
    <div class="section_w280">
      <h3>Privacy Policy</h3>
      <div class="sub_content">
        <p></p>
      </div>
    </div>
    <div class="cleaner_h40"></div>
    <center>
      Copyright &copy; 2018 <a href="#">Trinity Polytechic,Pune</a> | Designed by <a target="_blank" rel="nofollow" href="http://www.templatemo.com">Students</a>
    </center>
  </div>
  <!-- end of footer -->
</div>
</body>
</html>


<?php

include('server3.php');
if (isset($_POST)) {
  $compny_name = $_POST['compny_name'];
  $compny_address  = $_POST['compny_address'];
  $compny_user  = $_POST['compny_user'];
  $password  = $_POST['password'];
  $compny_web = $_POST['compny_web'];
  
  
  

$sql = "INSERT INTO  Recruiter ()
VALUES ('$compny_name', '$compny_address', '$compny_user', '$password', '$compny_web')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
}
?>
