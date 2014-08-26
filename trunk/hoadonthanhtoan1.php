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
     echo "Thực hiện thanh toán không thành công. Vui lòng kiểm tra lại. Xin cám ơn!!!. <p>";
     echo "Mailer Error: " . $mail->ErrorInfo;
     exit;
  }
  echo "Thực hiện thanh toán thành công. Xin cám ơn!!!.";
  echo "Cám ơn, ".$name;
  exit();

}
?>
<!DOCTYPE html>
<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
  <meta name="description"content="Expand, contract, animate forms with jQuery wihtout leaving the page" />
  <meta name="keywords"content="expand, form, css3, jquery, animate, width, height, adapt, unobtrusive javascript" />
  <link rel="shortcut icon" href="../favicon.ico" type="image/x-icon" />
  <title>Hoá đơn thanh toán</title>
  <link href="css/social.css" rel="stylesheet" type="text/css" media="all"/>
  <link rel="stylesheet" type="text/css" href="css/style_allhdft.css" />

<style> 
  #wraper{ 
    float: left; 
    margin: 30px auto;
    width:250px; 
    height:380px; 
    padding:20px; 
    -moz-box-shadow:1px 1px 7px #ccc;
    -webkit-box-shadow:1px 1px 7px #ccc;
    box-shadow:1px 1px 7px #ccc;
    font-family:Calibri, Arial, Helvetica; 
    font-size:16px; 
    border:1px solid #ddd;
    background-color: #fff;
  } 
  #wrapper form{
    display:none;
    background:#fff;

  }
  #wraper input{ 
    font-family:Calibri, Arial, Helvetica; 

  } 
  #wraper h1{ 
    padding: 15px 15px;
    background-color:#444;
    color:#fff;
    font-size:23px;
    border-bottom:1px solid #ddd;
  } 
  #wraper label{ 
    width:100%; 
    float:left; 
    margin-bottom:5px; 
    margin-top: 2px;
  } 
  #wraper input[type=text],
  #wraper input[type=email],
  #wraper input[type=url],#wraper input[type=password], 
  #wraper textarea{ 
    width:240px; 
    height:20px; 
    float:left; 
    padding:4px; 
    border:1px solid #d5d5d5; 
    outline:none; 
    margin-bottom:15px; 
    box-shadow: 5px 5px 2px #f1f1f1; 
    -webkit-box-shadow: 5px 5px 2px #f1f1f1; 
    -moz-box-shadow: 5px 5px 2px #f1f1f1; 
    clear:both; 
  } 
  #wraper textarea{ 
    resize:none; 
    height:50px;
  } 
  #wraper input[type=submit], #wraper input[type=reset]{ 
    margin: 5px 4px;
    background: #bd1c1c;
    border: 1px solid #bd1c1c;
    color: white;
    font-family:arial,sans-serif;
    font-size: 14px;
    font-weight: bold;
    padding: 8px 25px;
    cursor:pointer;

  } 
</style> 
</head>
<body>  
  <div class="wrap">
    <?php include 'modules/header_top.php'; ?>     
    <div id="wraper" > 
            <form action="" id="contactForm" name="contactForm" method="post" enctype="multipart/form-data" > 
              <h1>Thanh Toán Đơn Hàng</h1> 
              <label for="name">Họ và Tên:</label> 
                <input type="text" name="name" value="" required="required" /> 
              <label for="email">Email:</label> 
                <input type="email" name="email" value="" required="required"  /> 
              <label for="phone">Số điện thoại:</label> 
                <input type="text" name="phone" id="phone" value="" pattern="^[0-9]\d{2}\d{3}\d{5}$" required /> 
              <label for="address">Địa chỉ:</label> 
                <input type="text" name="address" value="" required="required" /> 
              <!-- <label for="message">Ghi chú về đơn hàng:</label> 
                <textarea name="message" value="" required="required"></textarea>  -->
              <input type="submit" id="frm_submit" value="Xác nhận " name="submit" class="submit"  /> 
              <input type='reset' id='reset' value='Nhập lại' />
            </form> 
    </div> 
     
    <div class="clear"></div>
        <ul id="social_side_links">
          <li class="social-popout"><a href="http://facebook.com" target="_blank"><img src="images/social/facebook.png" alt="" /></a></li>
          <li class="social-popout"><a href="http://skype.com" target="_blank"><img src="images/social/skype.png" alt="" /></a></li>
          <li class="social-popout"><a href="http://yahoo.com" target="_blank"><img src="images/social/yahoo.png" alt="" /></a></li>
        </ul>
    
    
      <script type="text/javascript">
      $(document).ready(function() {      
        $().UItoTop({ easingType: 'easeOutQuart' });
        
      });
  </script>
  </div>
    <a href="#" id="toTop"><span id="toTopHover"> </span></a>
  <script> 
    $("#contactForm").submit(function(event) 
      event.preventDefault();
      $('#frm_submit').disabled=true; 
      $('#frm_submit').val('loading...'); 
      var $form = $( this ), 
      name = $form.find( 'input[name="name"]' ).val(), 
      email = $form.find( 'input[name="email"]' ).val(), 
      phone = $form.find( 'input[name="phone"]' ).val(), 
      website = $form.find( 'input[name="website"]' ).val(), 
      message = $form.find( 'textarea[name="message"]' ).val(), 
      url = $form.attr( 'action' ); 
      var posting = $.post( url, { name: name,email: email,phone: phone,website: website,message: message, } );
      posting.done(function( data ) {
      alert(data); $('#frm_submit').disabled=false; 
      $('#frm_submit').val('Submit Message'); }); });
}
//   </script>
</script>
</body>
</html>
