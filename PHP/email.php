<?php
	$to="snehakaliyath@gmail.com";
	$subject="Test Email";
	$message="Hello,this is a test email from PHP!";
	$headers="From:9listal@gmail.com";
	if (mail($to,$subject,$message,$headers)){
		echo "Email sent successfully.";
		}else{
			echo "Failed to send email.";
		}
?>