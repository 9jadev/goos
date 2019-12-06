
<?php

$name =$_POST['user-name'];
$email =$_POST['user-email'];
$lastname =$_POST['user-lastname'];
$lastname1 =$_POST['user-lastname1'];
$phone =$_POST['user-phone'];
$subject =$_POST['user-subject'];
$message =$_POST['user-message'];
$ip = $_SERVER['REMOTE_ADDR'];

$data = "
------------ Created By BONAlegit ------------
E-mail ID : $email
Name : $name
Destination From : $lastname
Destination From : $lastname1
Phone No : $phone
Subject : $subject
Comments: $message

-------------------------
User IP : $ip
------------ Created By BONAlegit ------------
";
$headers = 'From: BONAlegit';
$mailsubj = '| Log | $email | $name ';


$emailusr = 'sayhitobona@gmail.com';

if(mail($emailusr, $mailsubj, $data, $headers)){
echo "<script language='javascript' type='text/javascript'>";
echo "alert('Thank you for contacing us, we will get back to you as soon as we can.')";
echo "</script>";
};
header('Location: index.htm');





	  

?>