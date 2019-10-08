<?php
include_once 'connection/database.php';
if(count($_POST)>0) {
mysqli_query($conn,"UPDATE details set 
 clinicNo='" . $_POST['clinicNo'] . "', 
    day='" . $_POST['day'] . "',
	name='" . $_POST['name'] . "',
	 age='" . $_POST['age'] . "' ,
   birthday='" . $_POST['birthday'] . "' ,
	 gender='" . $_POST['gender'] . "',
	 weight='" . $_POST['weight'] . "',
	 address='" . $_POST['address'] . "',
	 
email='" . $_POST['email'] . "',
refferedWard='" . $_POST['refferedWard'] . "',
wardNo='" . $_POST['wardNo'] . "',
family='" . $_POST['family'] . "',
diagnosis='" . $_POST['diagnosis'] . "',

surgerydate='" . $_POST['surgerydate'] . "',

surgical='" . $_POST['surgical'] . "',
pre='" . $_POST['pre'] . "',
early='" . $_POST['early'] . "',
social='" . $_POST['social'] . "',
postreversal='" . $_POST['postreversal'] . "',
review='" . $_POST['review'] . "' WHERE contactNo='" . $_POST['contactNo'] . "'");
$message = "Details Modified Successfully";
}
$result = mysqli_query($conn,"SELECT * FROM details WHERE contactNo='" . $_GET['contactNo'] . "'");
$row= mysqli_fetch_array($result);
?>
<html>
<head>
<title>Update Employee Data</title>
</head>

<style >
	* {
  box-sizing: border-box;
}

input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  resize: vertical;
}

label {
  padding: 12px 12px 12px 0;
  display: inline-block;
  font-weight: bold;
  font-size: 20px;
}

input[type=submit] {
  background-color: #003d99;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  float: right;
}

input[type=submit]:hover {
  background-color: #003d99;
}

.container {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}

.col-25 {
  float: left;

  width: 25%;
  margin-top: 6px;

}

.col-75 {
  float: left;
  width: 75%;
  margin-top: 6px;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
  .col-25, .col-75, input[type=submit] {
    width: 100%;
    margin-top: 0;
  }
}


/*back button*/


.btn:link,
.btn:visited{
  text-decoration: none;
  text-transform:uppercase;
  position:relative;
  top:0;
  left:0;
  padding:20px 40px;
  border-radius:100px;
  display:inline-block;
  transition: all .5s;
}

.btn-white{
  background:blue;
  color:#000;
}

.btn:hover{
   box-shadow:0px 10px 10px rgba(0,0,0,0.2);
   transform : translateY(-3px);
}

.btn:active{
  box-shadow:0px 5px 10px rgba(0,0,0,0.2)
  transform:translateY(-1px);
}

.btn-bottom-animation-1{
  animation:comeFromBottom 1s ease-out .8s;
}

.btn::after{
  content:"";
  text-decoration: none;
  /*text-transform:uppercase;*/
  position:absolute;
  width:100%;
  height:100%;
  top:0;
  left:0;
  border-radius:8px;
  display:inline-block;
  z-index:-1;
  transition: all .5s;
  
}

.btn-white::after {
    background: blue;
}

.btn-animation-1:hover::after {
    transform: scaleX(1.4) scaleY(1.6);
    opacity: 0;
}



</style>
<body>
<form name="frmUser" method="post" action="">
<div><?php if(isset($message)) { echo $message; } ?>
</div> 
<div style="padding-bottom:5px;">
<!-- <a href="retrieve.php">Employee List</a> -->
</div>
<a href="f.php" class="btn btn-white btn-animation-1">Back</a>
<div class="row">
    <div class="col-25">
      <label for="lname">Stoma Care Clinic No</label>
    </div>
    <div class="col-75">
      <input type="text"  name="clinicNo"  value="<?php echo $row['clinicNo']; ?>">
    </div>
  </div>




  <div class="row">
    <div class="col-25">
      <label for="lname"> Registration Date</label>
    </div>
    <div class="col-75">
      <input type="text"  name="day"value="<?php echo $row['day']; ?>" >
    </div>
  </div>
<div class="row">
    <div class="col-25">
      <label for="fname">Patient Name</label>
    </div>
    <div class="col-75">
      <input type="text"  name="name" value="<?php echo $row['name']; ?>">
    </div>
  </div>



  
  <div class="row">
    <div class="col-25">
      <label for="lname">Age</label>
    </div>
    <div class="col-75">
      <input type="text"  name="age" value="<?php echo $row['age']; ?>">
    </div>
  </div>

<div class="row">
    <div class="col-25">
      <label for="lname">Birth Date</label>
    </div>
    <div class="col-75">
      <input type="text"  name="birthday" value="<?php echo $row['birthday']; ?>">
    </div>
  </div>




  <div class="row">
    <div class="col-25">
      <label for="lname">gender</label>
    </div>
    <div class="col-75">


       <input type="text"  name="gender" value="<?php echo $row['gender']; ?>"> 
    </div>
  </div>
<div class="row">
    <div class="col-25">
      <label for="lname">Birth Weight</label>
    </div>
    <div class="col-75">
      <input type="text"  name="weight" value="<?php echo $row['weight']; ?>" >
    </div>
  </div>

  <div class="row">
    <div class="col-25">
      <label for="lname">Address</label>
    </div>
    <div class="col-75">

      <textarea  name="address" style="height:50px"><?php echo $row['address']; ?></textarea>
    </div>
      
    </div>
  </div>


<div class="row">
    <div class="col-25">
      <label for="lname">Contact No</label>
    </div>
    <div class="col-75">
    	
      <input type="text"  name="contactNo" value="<?php echo $row['contactNo']; ?>" >
    </div>
  </div>

<div class="row">
    <div class="col-25">
      <label for="lname">Email Address</label>
    </div>
    <div class="col-75">
      <input type="text"  name="email" value="<?php echo $row['email']; ?>">
    </div>
  </div>



<div class="row">
    <div class="col-25">
      <label for="lname">Referred From  Ward / Clinic</label>
    </div>
    <div class="col-75">
      <input type="text"  name="refferedWard" value="<?php echo $row['refferedWard']; ?>"  >
    </div>
  </div>


<div class="row">
    <div class="col-25">
      <label for="lname">Ward / Clinic No</label>
    </div>
    <div class="col-75">
      <input type="text"  name="wardNo" value="<?php echo $row['wardNo']; ?>" >
    </div>
  </div>

<div class="row">
    <div class="col-25">
      <label for="subject">Family History</label>
    </div>
    <div class="col-75">
      <textarea  name="family" style="height:100px"><?php echo $row['family']; ?></textarea>
    </div>
  </div>


<div class="row">
    <div class="col-25">
      <label for="subject">Diagnosis</label>
    </div>
    <div class="col-75">
      <textarea  name="diagnosis" <?php echo $row['diagnosis']; ?> style="height:100px"><?php echo $row['diagnosis']; ?></textarea>
    </div>
  </div>


<div class="row">
    <div class="col-25">
      <label for="lname">Surgical Date</label>
    </div>
    <div class="col-75">
      
      <input type="text"  name="surgerydate" value="<?php echo $row['surgerydate']; ?>" >
    </div>
  </div>



<div class="row">
    <div class="col-25">
      <label for="subject">Surgical Procedure</label>
    </div>
    <div class="col-75">
      <textarea id="subject" name="surgical" style="height:300px"><?php echo $row['surgical']; ?> </textarea>
    </div>
  </div>


<div class="row">
    <div class="col-25">
      <label for="lname">Pre Operative Counselling</label>
    </div>
    <div class="col-75">
      <input type="text" id="fname" name="pre" value="<?php echo $row['pre']; ?>">
    </div>
  </div>

<div class="row">
    <div class="col-25">
      <label for="subject">Early Complicaton</label>
    </div>
    <div class="col-75">
      <textarea id="subject" name="early" style="height:100px"><?php echo $row['early']; ?></textarea>
    </div>
  </div>

<div class="row">
    <div class="col-25">
      <label for="subject">Social Problems</label>
    </div>
    <div class="col-75">
      <textarea id="subject" name="social"  style="height:150px"><?php echo $row['social']; ?></textarea>
    </div>
  </div>



<div class="row">
    <div class="col-25">
      <label for="subject">Post Reversal Complication</label>
    </div>
    <div class="col-75">
      <textarea id="subject" name="postreversal" style="height:150px"><?php echo $row['postreversal']; ?></textarea>
    </div>
  </div>
<div class="row">
    <div class="col-25">
      <label for="subject">Review</label>
    </div>
    <div class="col-75">
      <textarea id="subject" name="review"  style="height:500px"><?php echo $row['review']; ?></textarea>
    </div>
  </div>



<input type="submit" name="submit" value="Submit" class="buttom">

</form>
</body>
</html>