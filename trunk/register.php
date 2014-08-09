<!DOCTYPE html>
<html>
<head>
<title>Đăng Ký</title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta name="description"
	content="Expand, contract, animate forms with jQuery wihtout leaving the page" />
<meta name="keywords"
	content="expand, form, css3, jquery, animate, width, height, adapt, unobtrusive javascript" />
<link rel="shortcut icon" href="../favicon.ico" type="image/x-icon" />
<link rel="stylesheet" type="text/css" href="css/style_login.css" />
</head>
<body>
	<div class="wrapper">
		<div class="logo_lg">
			<a href="index.html"><img src="images/logo1.png" alt="" /></a>
		</div>
		<div class="content">
			<div id="form_wrapper" class="form_wrapper">
				<form class="register active" action="xuly.php?ac=register">
					<h3>Đăng ký</h3>
					<div class="column">
						<div>
							<label>Họ:</label> 
							<input type="text" />
							<span class="error">This is an error</span>
						</div>
						<div>
							<label>Tên:</label> <input type="text" /> <span class="error">This
								is an error</span>
						</div>
					</div>
					<div class="column">
						<div>
							<label>Tên đăng nhập:</label> <input type="text" /> <span
								class="error">This is an error</span>
						</div>
						<div>
							<label>Email:</label> <input type="text" /> <span class="error">This
								is an error</span>
						</div>
						<div>
							<label>Mật khẩu:</label> <input type="password" /> <span
								class="error">This is an error</span>
						</div>
					</div>
					<div class="bottom">
						<input type="submit" value="Đăng ký" /> <a href="login.html"
							rel="login" class="linkform">Bạn đã có tài khoản? Đăng nhập tại
							đây</a>
						<div class="clear"></div>
					</div>
				</form>
				<form class="login" action="xuly.php?ac=login">
					<h3>Đăng nhập</h3>
					<div>
						<label>Tên đăng nhập:</label> <input type="text" /> <span
							class="error">This is an error</span>
					</div>
					<div>
						<label>Mật khẩu: <a href="forgot_password.html"
							rel="forgot_password" class="forgot linkform">Bận quên mật khẩu?</a></label>
						<input type="password" /> <span class="error">This is an error</span>
					</div>
					<div class="bottom">
						<div class="remember">
							<input type="checkbox" /><span>Duy trì đăng nhập</span>
						</div>
						<input type="submit" value="Login"></input> <a
							href="register.html" rel="register" class="linkform">Bạn chưa có
							tài khoản? Đăng ký tại đây</a>
						<div class="clear"></div>
					</div>
				</form>
				<form class="forgot_password" action="xuly.php?ac=forgot_pass">
					<h3>Bạn quên mật khẩu?</h3>
					<div>
						<label>Tên đăng nhập hoặc Email:</label> <input type="text" /> <span
							class="error">This is an error</span>
					</div>
					<div class="bottom">
						<input type="submit" value="Gửi yêu cầu"></input> <a
							href="login.html" rel="login" class="linkform">Bạn đã là thành
							viên? Đăng nhập tại đây</a> <a href="register.html"
							rel="register" class="linkform">Bạn chưa đăng ký tài khoản? Đăng
							ký</a>
						<div class="clear"></div>
					</div>
				</form>
			</div>
			<div class="clear"></div>
		</div>


		<!-- The JavaScript -->
		<script type="text/javascript"
			src="https://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
		<script type="text/javascript">
			$(function() {
					//the form wrapper (includes all forms)
				var $form_wrapper	= $('#form_wrapper'),
					//the current form is the one with class active
					$currentForm	= $form_wrapper.children('form.active'),
					//the change form links
					$linkform		= $form_wrapper.find('.linkform');
						
										
				$form_wrapper.children('form').each(function(i){
					var $theForm	= $(this);
					if(!$theForm.hasClass('active'))
						$theForm.hide();
					$theForm.data({
						width	: $theForm.width(),
						height	: $theForm.height()
					});
				});
				
				
				setWrapperWidth();
				
				$linkform.bind('click',function(e){
					var $link	= $(this);
					var target	= $link.attr('rel');
					$currentForm.fadeOut(400,function(){
						//remove class active from current form
						$currentForm.removeClass('active');
						//new current form
						$currentForm= $form_wrapper.children('form.'+target);
						//animate the wrapper
						$form_wrapper.stop()
									 .animate({
										width	: $currentForm.data('width') + 'px',
										height	: $currentForm.data('height') + 'px'
									 },500,function(){
										//new form gets class active
										$currentForm.addClass('active');
										//show the new form
										$currentForm.fadeIn(400);
									 });
					});
					e.preventDefault();
				});
				
				function setWrapperWidth(){
					$form_wrapper.css({
						width	: $currentForm.data('width') + 'px',
						height	: $currentForm.data('height') + 'px'
					});
				}
				
				
				$form_wrapper.find('input[type="submit"]')
							 .click(function(e){
								e.preventDefault();
							 });	
			});
        </script>
</div>
</body>
</html>