<?php
	if(isset($_POST['submit'])){
		$name=$_POST['name'];
		$email=$_POST['email'];
		$phone=$_POST['phone'];
		$msg=$_POST['msg'];

		$to="sagar.rishabh30@gmail.com"; 
		$subject='Lemon Chatka Contact Form Submission';
		$message="Name :".$name."\n"."Phone :".$phone."\n"."Wrote the following :"."\n\n".$msg;
		$headers="From: ".$email;

		if(mail($to, $subject, $message, $headers)){
			echo "Subscription success";
		}
		else{
			echo "<script type='text/javascript'>alert('failed!')</script>";
			echo "Subscription Failed";
		}
	}
?>