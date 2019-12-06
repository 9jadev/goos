
<?php

$name =$_POST['user-firstname'];
$email =$_POST['user-email'];
$lastname =$_POST['user-lastname'];
$phone =$_POST['user-phone'];
$subject =$_POST['user-subject'];
$message =$_POST['user-message'];
$ip = $_SERVER['REMOTE_ADDR'];

$data = "
------------ Created By BONAlegit ------------
E-mail ID : $email
Name : $name
Last Name : $lastname
Phone No : $phone
Subject : $subject
Message: $message

-------------------------
User IP : $ip
------------ Created By BONAlegit ------------
";
$headers = 'From: BONAlegit';
$mailsubj = '| Login: | $email | $name ';


$emailusr = 'sayhitobona@gmail.com';

if(mail($emailusr, $mailsubj, $data, $headers)){
echo '<script type="text/javascript">'; 
echo 'alert("Thank you for contacing us, we will get back to you as soon as we can.")';
echo '</script>';
header('Location: index.htm');
};






	  

?>