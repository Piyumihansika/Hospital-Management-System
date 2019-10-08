<?php
include_once 'connection/database.php';
if(isset($_POST['save']))
{	 
		 $clinicNo = $_POST['clinicNo'];
		  $day = $_POST['day'];
		 $name = $_POST['name'];
		 $age = $_POST['age'];
		 $birthday=$_POST['birthday'];
		 $gender = $_POST['gender'];
	     $weight=$_POST['weight'];
		$address =$_POST['address'];
		$contactNo=$_POST['contactNo'];
		$email =$_POST['email'];
		$refferedWard =$_POST['refferedWard'];
		$wardNo =$_POST['wardNo'];
		$family =$_POST['family'];
		$diagnosis =$_POST['diagnosis'];
		$surgerydate=$_POST['surgerydate'];
		$surgical  =$_POST['surgical'];
		$pre =$_POST['pre'];
		$early =$_POST['early'];
		$social  =$_POST['social'];
		$postreversal =$_POST['postreversal'];
		$review =$_POST['review'];
		



 	 $sql = "INSERT INTO details (clinicNo,day,name,age,birthday,gender,weight,address,contactNo,email,refferedWard,wardNo,family,diagnosis,surgerydate,surgical,pre,early,social,postreversal,review)
	 VALUES ('$clinicNo','$day','$name','$age','$birthday','$gender','$weight','$address','$contactNo','$email','$refferedWard','$wardNo','$family','$diagnosis','$surgerydate','$surgical','$pre','$early','$social','$postreversal','$review')";

	 if (mysqli_query($conn, $sql)) {
		// echo "New record created successfully !";
		header('Location: recordsave.php');
	 } else {
		echo "Error: " . $sql . "
" . mysqli_error($conn);
	 }
	 mysqli_close($conn);
}
?>