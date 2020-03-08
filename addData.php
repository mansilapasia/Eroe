<?php
    include 'dbconnect.php';
    

	$email=$_POST["email"];
	$name=$_POST["name"];
	$phone=$_POST["phone"];
	$age=$_POST["age"];
	$aadhar=$_POST["aadhar"];
	$address=$_POST["address"];
	$gender=$_POST["gender"];
    $count=mysqli_query($conn,"SELECT * from users where email='".$email."'");

	if($count->num_rows>0){
		$count=mysqli_query($conn,"DELETE from users where email='".$email."'");
	}
	
    $sql="Insert into users values('".$email."','".$name."','".$phone."',".$age.",".$aadhar.",'".$address."','".$gender."')";
	if(mysqli_query($conn, $sql)){
		echo "Now start your journey";
	}else{
		echo mysql_error($conn);
	}
?>