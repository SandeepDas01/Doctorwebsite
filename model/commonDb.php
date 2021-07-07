<?php

function appoinment()
 {
    $name=$_REQUEST['name'];
    $email=$_REQUEST['email'];
    $phone=$_REQUEST['phone'];
	$message=$_REQUEST['message'];
	
	 $sql='INSERT INTO contactquery (cName,cEmailId,cPhone,message,cStatus) 
			VALUES("'.$name.'","'.$email.'","'.$phone.'","'.$message.'",1)';
	 
	 query($sql);
	 
 }

 
 function appoinmentDr()
   {
	   
	   
    $name=$_REQUEST['name'];
    $email=$_REQUEST['email'];
    $phone=$_REQUEST['phone'];
	 $date=$_REQUEST['date'];
    $gender=$_REQUEST['gender'];
	$dateOfbirth=$_REQUEST['dateOfBirth'];
	$message=$_REQUEST['message'];
    
	
	
	
	 $sql='INSERT INTO aptquery (name,email,phone,date,gender,dateOfbirth,message,Status) 
			VALUES("'.$name.'","'.$email.'","'.$phone.'","'.$date.'","'.$gender.'","'.$dateOfbirth.'","'.$message.'",1)';
	 
	 query($sql);
	 
	 //echo '$sql';
	 
 }
 
 


function enquiryCheckDB(){

if(isset($_POST['submit']))
{
    
//echo "6";    
    
$name=$_POST['first_name'];
$lname=$_POST['last_name'];
$number=$_POST['nuber'];
$email=$_POST['email'];
$address=$_POST['address'];
$pincode=$_POST['pin'];

$msg=0;
$j="name:-".$name."lname:-".$number."Phone:-".$number."email:-".$email."address:-".$address."pincode:-".$pincode;
$msg=mail("rahulsh8307@gmail.com","contactform",$j,"From:infocubeheap@gmail.com.\n");


echo $msg;

if($msg>0)
  {
  echo "mail sent";
  }
else
  {
   echo "error try agen later";
  }


}

}


if ( ! defined('ABSPATH')) exit('No direct script access allowed');

function signup()
{

		$name=$_REQUEST['name'];
        $email=$_REQUEST['email'];
        $password=$_REQUEST['password']; 
       
        $sql='insert into `signup`(`name`,`email`,`password`)
        values("'.$name.'","'.$email.'","'.$password.'")';
   
        $result=query($sql);

        $sql1="select * from signup";
         $result1=query($sql1);
		while($row=fetchArray($result1))
		{
			
			$_session['mid']=$row['id'];
		}
		
			
		
		
		
}

function login()
{

		
        $email=$_REQUEST['email'];
		$password=$_REQUEST['password']; 
		$sql="select * from signup where email='".$email."' and password='".$password."'";
		$result=query($sql);
		$i="";
		while($row=fetchArray($result))
		{
			$i++;
			$_session['mid']=$row['id'];
		

		}
		
				if($i>0)
		{
			echo "<script>window.location.href='?action=select_cat'</script>";
		}
		else
		{
			echo"<script>alert('no password match')</script>";
		}
		
		
}


?>
