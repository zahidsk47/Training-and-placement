
<!DOCTYPE html>
<html>
<head>
  <title></title>
  <link rel="stylesheet" type="text/css" href="style3.css">
</head>
<body>
  
  <div class="header">

    
    <h2>freshersHub</h2>
    <div class="absolute">
      


      <div class="absolute2">
        <h3>Already a Member?</h3>
       
        <input type="button" class="btn2" value="Sign in Here" onclick="window.location.href='studentlogin.html'" />
      </div>





    </div>
</div>
    
  </div>
  
   
  <form action="" method="POST">
    <div class="header2">
    <h3>Upload Resume on freshersHub Now!</h3>
    
    <h3>----------------------------------------------------------------------------------------</h3>

  
 

    <div class="input-group">

      <input type="text" name="f_name" placeholder="First Name" required >
    </div>
    <div class="input-group2">
      <input type="text" name="l_name" placeholder="Last Name" >
    </div>
    <br>
    <br>

    <div class="input-group">

      <input type="text" name="email" placeholder="Email" required>
    </div>
    <div class="input-group2">
      <input type="text" name="mobile" placeholder="Mobile" required>
    </div>
    <br>
    <br>
    <div class="input-group">

      <input type="password" name="password" placeholder="Password" required>
    </div>
    <div class="input-group2">
      <input type="password" name="conf_password" placeholder="Confirm Password"  required >
    </div>
    


    <h3>----------------------------------------------------------------------------------------</h3>
    
    <h4>Carrier Object</h4>

    <div class="input-group">

      <textarea rows="4" cols="90" name="carrier" placeholder="Write Here Your Carrier Object"></textarea>
    </div>
    
  
    
    <h3>----------------------------------------------------------------------------------------</h3>
<h4>Education Qualification</h4>

    <div class="input-group">

      <input type="text" name="course" placeholder="Course" required>
    </div>
    <div class="input-group2">
      <input type="text" name="university" placeholder="University"  >
    </div>
    <br>
    <br>
    <div class="input-group">

      <input type="text" name="college" placeholder="College" required>
    </div>
    <div class="input-group2">
      <select style="width: 150px; height: 40px;" name="year_from" required>
        <option>Year From</option>
        <option>2015</option>
        <option>2015</option>
        <option>2015</option>
        <option>2015</option>
        <option>2015</option>
        <option>2015</option>
        v
      </select>
      <select style="width: 140px; height: 40px;" name="year_until" required> 
        <option>Year Untill</option>
        <option>2015</option>
        <option>2015</option>
        <option>2015</option>
        <option>2015</option>
        <option>2015</option>
        <option>2015</option>
      </select>
      

<div class="input-group">

      <input type="text" name="percentage" placeholder="Percentage" required>
    </div><br>
    <br>
<h3>----------------------------------------------------------------------------------------</h3>
    <h4>Skil</h4>


<div class="input-group">

      <textarea rows="4" cols="90" name="skill" placeholder="ex.1].............."></textarea>
    </div>
<h3>----------------------------------------------------------------------------------------</h3>
</div>


<h4>Project Undertaken</h4>
<div class="input-group">

      <input type="text" name="pro_name" placeholder="Project Name" >
    </div>
    <div class="input-group2">
      <input type="text" name="role" placeholder="Role" >
    </div>
    <br>
  <br>
  <div class="input-group">

      <input type="text" name="tech_use" placeholder="Technology Use" >
    </div>
    <div class="input-group2">
      <input type="text" name="description" placeholder="Description in Short">
    </div>
    <br>
  <br>
  <h3>----------------------------------------------------------------------------------------</h3>

<h4>Extra Curricular</h4>
<div class="input-group">

      <input type="text" name="com_lang_known" placeholder="Computer Language Known">
    </div>
    <div class="input-group2">
      <input type="text" name="osy_lang_known" placeholder="Operating System Known" >
    </div>
    <br>
  <br>
  
  <h3>---------------------------------------------------------------------------------------</h3>

<h4>Personal Details</h4>
<div class="input-group">
<label>Date Of Birth</label>
      <input type="Date" name="dob" placeholder="Date Of Birth" required>
    </div>
    <div class="input-group2">
<select style="width: 140px; height: 40px;" name="maritial" required>
  <option>Maritial Status</option>
  <option>Married</option>
  <option>Unmarried</option>
</select>
<select style="width: 140px; height: 40px;" name="gender" required> 
  <option>Gender</option>
  <option>Male</option>
  <option>Female</option>

</select>

    </div>
    

  <div class="input-group">

 


      <input type="text" name="nationality" placeholder="Nationality" required>
    </div>
    <div class="input-group2">
     <textarea rows="3" cols="40" name="per_add" placeholder="Permant Address" required></textarea>
    </div>

    <div class="input-group">
      <input type="text" name="hobbies" placeholder="Hobbies"></div>
      <div class="input-group2">
        <input type="text" name="lang_known" placeholder="Language Known" required>
      </div><br>
      <br>
      <br>
      <div class="input-group2">
        <select style="width: 140px; height: 40px;" name="blood" required>
          <option>Blood Group</option>
          <option>A+</option>
          <option>A-</option>
          <option>B+</option>
          <option>B-</option>
          <option>AB+</option>
          <option>AB-</option>
          <option>O+</option>
          <option>O-</option>

        </select>

      </div>
    <br>
  <br>
  <h3>----------------------------------------------------------------------------------------</h3>
<div class="input-group">

      <input type="text" name="place" placeholder="Place" required>
    </div>
    <div class="input-group2">
      <input type="text" name="yourname" placeholder="Your Name" required>
      
  

    </div>
    <br>
  <br>
  <br>
 
<input type="submit" name="submit" class="btn2" value="Signin Here" >

</div></div>
  </form>
  </body>
</html>

<?php

include('server3.php');
if (isset($_POST)) {
  $first_name = $_POST['f_name'];
  $last_name = $_POST['l_name'];
  $email  = $_POST['email'];
  $mobile = $_POST['mobile'];
  $password = $_POST['password'];
  $carrier = $_POST['carrier'];
  $course = $_POST['course'];
  $University = $_POST['university'];
  $college = $_POST['college'];
  $year_from = $_POST['year_from'];
  $year_until = $_POST['year_until'];
  $percentage = $_POST['percentage'];
  $skill = $_POST['skill'];
  $pro_name = $_POST['pro_name'];
  $role = $_POST['role'];
  $tech_use = $_POST['tech_use'];
  $description = $_POST['description'];
  $com_lang_known = $_POST['com_lang_known'];
  $osy_lang_known = $_POST['osy_lang_known'];
  $dob = $_POST['dob'];
  $maritial = $_POST['maritial'];
  $gender = $_POST['gender'];
  $nationality = $_POST['nationality'];
  $per_add = $_POST['per_add'];
  $hobbies = $_POST['hobbies'];
  $lang_known = $_POST['lang_known'];
  $blood = $_POST['blood'];
  $place = $_POST['place'];
  $your_name = $_POST['yourname'];
  

$sql = "INSERT INTO  resume (f_name, l_name, email, mobile, password, carrier, course, university, college, year_from, year_until, percentage, skill, pro_name, role, tech_use, description, com_lang_known, osy_lang_known, dob, maritial, gender, nationality, per_add, hobbies, lang_known, blood, place, yourname)
VALUES ('$first_name', '$last_name', '$email', '$mobile', '$password', '$carrier', '$course', 
'$University', '$college', '$year_from', '$year_until', '$percentage', '$skill', '$pro_name', '$role', '$tech_use', '$description', '$com_lang_known', '$osy_lang_known', '$dob', '$maritial', '$gender', '$nationality', '$per_add', '$hobbies', '$lang_known', '$blood', '$place', '$your_name' )";

if($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

}
?>


