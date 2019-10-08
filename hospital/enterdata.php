<!DOCTYPE html>
<html>
<head>
    <title>patient details adding</title>
</head>
<body>
<!DOCTYPE html>
<html>
<head>
<style>
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
  border-radius: 8px;
  cursor: pointer;
  float: right;
}

input[type=submit]:hover {
  background-color: #003d99;
}

.container {
  border-radius: 8px;
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
  padding:20px 20px;
  border-radius:50px;
  display:inline-block;
  transition: all .5s;
  margin-left: 20px;
}

.btn-white{
  background:white;
  color:#000;
  font-weight: bold;
  font-size: 25px;
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
  text-transform:uppercase;
  position:absolute;
  width:100%;
  height:100%;
  top:0;
  left:0;
  border-radius:100px;
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
</head>
<body>


<a href="adminpanel.php" class="btn btn-white btn-animation-1">Go Back</a> 

<h2><center>Patient Details Form</center></h2>


<div class="container">
  <form method="post" action="enterprocess.php">


<div class="row">
    <div class="col-25">
      <label for="lname">Stoma Care Clinic No</label>
    </div>
    <div class="col-75">
      <input type="text"  name="clinicNo" placeholder="Clinic No.." >
    </div>
  </div>



<div class="row">
    <div class="col-25">
      <label for="lname"> Registration Date</label>
    </div>
    <div class="col-75">
      <input type="text"  name="day" placeholder="01/01/2020" >
    </div>
  </div>

  <div class="row">
    <div class="col-25">
      <label for="fname">Patient Name</label>
    </div>
    <div class="col-75">
      <input type="text"  name="name" placeholder="Patient name.." >
    </div>
  </div>

  <div class="row">
    <div class="col-25">
      <label for="lname">Age</label>
    </div>
    <div class="col-75">
      <input type="text"  name="age" placeholder="Patient Age.." >
    </div>
  </div>
  

  <div class="row">
    <div class="col-25">
      <label for="lname">Birth Day</label>
    </div>
    <div class="col-75">
      <input type="text"  name="birthday" placeholder="Patient Birth Day.." >
    </div>
  </div>


<div class="row">
    <div class="col-25">
      <label for="lname">Gender</label>
    </div>
    <div class="col-75">
      <input type="text"  name="gender" placeholder="Patient gender Female/Male.." >
    </div>
  </div> 

<div class="row">
    <div class="col-25">
      <label for="lname">Birth Weight</label>
    </div>
    <div class="col-75">
      <input type="text"  name="weight" placeholder="Patient Birth Weight.." >
    </div>
  </div>

<div class="row">
    <div class="col-25">
      <label for="lname">Address</label>
    </div>
    <div class="col-75">
      <textarea  name="address" placeholder="Address.." style="height:50px" ></textarea>
    </div>
  </div>





<div class="row">
    <div class="col-25">
      <label for="lname">Contact No</label>
    </div>
    <div class="col-75">
      <input type="text"  name="contactNo" placeholder="Contact Number.." >
    </div>
  </div>
  
  <div class="row">
    <div class="col-25">
      <label for="lname">Email Address</label>
    </div>
    <div class="col-75">
      <input type="text"  name="email" placeholder="Email Address..">
    </div>
  </div>


<div class="row">
    <div class="col-25">
      <label for="lname">Referred From  Ward / Clinic</label>
    </div>
    <div class="col-75">
      <input type="text"  name="refferedWard" placeholder="Referred Ward No.." >
    </div>
  </div>






<div class="row">
    <div class="col-25">
      <label for="lname">Ward / Clinic No</label>
    </div>
    <div class="col-75">
      <input type="text"  name="wardNo" placeholder="Ward or Clinic Number.." >
    </div>
  </div>



<div class="row">
    <div class="col-25">
      <label for="subject">Family History</label>
    </div>
    <div class="col-75">
      <textarea  name="family" placeholder="Write Something About Family.." style="height:100px"></textarea>
    </div>
  </div>


<div class="row">
    <div class="col-25">
      <label for="subject">Diagnosis</label>
    </div>
    <div class="col-75">
      <textarea  name="diagnosis" placeholder="Write About Diagnosis.." style="height:100px" ></textarea>
    </div>
  </div>




  <div class="row">
    <div class="col-25">
      <label for="lname">Surgery date</label>
    </div>
    <div class="col-75">
      <input type="text"  name="surgerydate" placeholder="surgery date.." >
    </div>
  </div>






  <div class="row">
    <div class="col-25">
      <label for="subject">Surgical Procedure</label>
    </div>
    <div class="col-75">
      <textarea id="subject" name="surgical" placeholder="Write About Surgical Procedure.." style="height:300px"></textarea>
    </div>
  </div>





<div class="row">
    <div class="col-25">
      <label for="lname">Pre Operative Counselling</label>
    </div>
    <div class="col-75">
      <input type="text" id="fname" name="pre" placeholder="Pre Operative Counselling..">
    </div>
  </div>





  <div class="row">
    <div class="col-25">
      <label for="subject">Early Complicaton</label>
    </div>
    <div class="col-75">
      <textarea id="subject" name="early" placeholder="Write something.." style="height:100px"></textarea>
    </div>
  </div>


  <div class="row">
    <div class="col-25">
      <label for="subject">Social Problems</label>
    </div>
    <div class="col-75">
      <textarea id="subject" name="social" placeholder="Write something.." style="height:150px"></textarea>
    </div>
  </div>




  <div class="row">
    <div class="col-25">
      <label for="subject">Post Reversal Complication</label>
    </div>
    <div class="col-75">
      <textarea id="subject" name="postreversal" placeholder="Write something.." style="height:150px"></textarea>
    </div>
  </div>


<!-- <div class="row">
    <div class="col-25">
      <label for="lname">Upload A Photo</label>
    </div>
    <div class="col-75">
      
<input type="file" name="photo" class="inp"> 



    </div>
  </div>
 -->


  <div class="row">
    <div class="col-25">
      <label for="subject">Review</label>
    </div>
    <div class="col-75">
      <textarea id="subject" name="review" placeholder="Write something.." style="height:500px"></textarea>
    </div>
  </div>

  <div class="row">
    <input type="submit" name="save" value="Submit">
  </div>
  
   <!-- <a href="filter.php" class="btn btn-white btn-animation-1">View Details</a> -->
  </form>

</div>
<!-- 
<a href="adminpanel.php" class="btn btn-white btn-animation-1">Go Back</a>  -->

</body>
</html>

</body>
</html>











