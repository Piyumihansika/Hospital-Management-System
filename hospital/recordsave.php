<!DOCTYPE html>
<html>
<head>
	<title>success</title>
</head>
<body style="background:url('img/e.jpg')no-repeat; background-size: cover;">



<style type="text/css">
	
.btn:link,
.btn:visited{
  text-decoration: none;
  text-transform:uppercase;
  position:relative;
  top:0;
  left:0;
  padding:20px 20px;
  border-radius:100px;
  display:inline-block;
  transition: all .5s;
  margin-left: 250px;
}

.btn-white{
  background:white;
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

 <h1 style="margin-top: 50px;margin-left: 30%">Patient Details Added Successfully!</h1>

<br><br><br><br><br><br><br><br>
<a href="adminpanel.php" class="btn btn-white btn-animation-1">Go To Main Page</a>
<a href="enterdata.php" class="btn btn-white btn-animation-1">Add Another Record</a>
	


</body>
</html>