<?php

$servername= "localhost";
$sws;
$conn=mysqli_connect();
$sn=$_POST['sn'];
$id=$_POST['id'];
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$Gender=$_POST['Gender'];
$father=$_POST['father'];
$mother=$_POST['mother'];
$Occupation=$_POST['Occupation'];
$income=$_POST['income'];
$contact=$_POST['contact'];
$email=$_POST['email'];
$password=$_POST['password'];
$details=$_POST['details'];
$amount=$_POST['amount']; 

$conn=mysqli_connect('localhost','root',' ');
if($conn->connect_error)
   {
	   die('Connection Failed : '.$conn->connect_error);
   }
   else{     
   
	   $stmt=$conn->prepare("INSERT Into registration(sn,id,fname,lname,Gender,father,mother,Occupation,income,contact,email,password,details,amount) 
values(?,?,?,?,?,?,?,?,?,?,?,?,?,?)");
		$stmt->bind_param("ssssssssidsssi",$sn,$id,$fname,$lname,$Gender,$father,$mother,$Occupation,$income,$contact,$email,$password,$details,$amount);
		$stmt->execute();
		echo "Registration Succesfull";
		$stmt->close();
		$conn->close();
		
   }
   
?>