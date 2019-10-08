<?php
$user='';
$pass='';

if(isset($_POST['username']) && isset($_POST['password']))
{
$user=htmlentities($_POST['username']);
$pass=htmlentities($_POST['password']);

if($user=='leka'&& $pass=='leka123')
{
	header('Location: adminpanel.php');

}


else{
header('Location: index.php');


}


}



?>