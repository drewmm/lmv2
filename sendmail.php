<?php
session_start();

include("include/config.php");

$validate = $_SESSION['validate'];
$no_spam = $_POST['no_spam'];
$your_name = $_POST['your_name'];
$email_address = $_POST['email_address'];
$your_subject = $_POST['your_subject'];
$your_comments = $_POST['your_comments'];

$subject = "Lauren Villegas - Contact";

$body = $subject."\r\n".
"Name: $your_name\r\n".
"Email: $email_address\r\n".
"Subject: $your_subject\r\n\r\n".
"Comments: $your_comments\r\n";

if($no_spam == "yay" || $no_spam == "Yay" $no_spam == "yay!" || $no_spam == "Yay!") {
	$mailsend = mail($Admin_Email,$subject,$body,$From_Email);
	header("Location:thanks.php");
	exit;
} else {
	header("Location:error.php");
	exit;
}
?>