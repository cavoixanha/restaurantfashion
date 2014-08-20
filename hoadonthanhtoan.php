<?php
if(isset($_POST['submit'])){

$name = $_POST['name'] ;
$email = $_POST['email'] ;
$phone = $_POST['phone'] ;
$address = $_POST['address'] ;
$message = $_POST['message'] ;

$message=
'Name: '.$_POST['name'].'<br />
Email:  '.$_POST['email'].'<br />
Phone:  '.$_POST['phone'].'<br />
Address:  '.$_POST['address'].'<br />
Message: '.$_POST['message'].'
';

require'phpmail/class.phpmailer.php';
require'phpmail/class.smtp.php';

$mail = new PHPMailer();

$mail->IsSMTP();

$mail->Host = "smtp.gmail.com";  
$mail->SMTPSecure = 'ssl';
$mail->SMTPAuth = true;    
$mail->Port = 465;  

$mail->Username = "vietmail12593@gmail.com"; 
$mail->Password = "sweetdream";

$mail->AddAddress("vietmail12593@gmail.com", "Khach Hang");


$mail->WordWrap = 50;

$mail->IsHTML(true);

$mail->Subject = "Thanh Toan Don Hang";
$mail->SetFrom($_POST['email'], $_POST['name']);
$mail->AddReplyTo($_POST['email'], $_POST['name']);

$mail->Body    = $message;
$mail->AltBody = $message;

if(!$mail->Send())
{
   echo "Thuc hien thanh toan khong thanh cong. Moi kiem tra lai. Xin cam on!!!. <p>";
   echo "Mailer Error: " . $mail->ErrorInfo;
   exit;
}

echo "Thuc hien thanh toan thanh cong. Xin cam on!!!.";
echo "Wellcome to, ".$name;

}
?>