<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML>
<html>
<head>
<title>Login Page</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Novus Admin Panel Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
SmartPhone Compatible web template, free WebDesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Bootstrap Core CSS -->
<link href="/filemanage/assets/css/bootstrap.css" rel='stylesheet' type='text/css' />
<!-- Custom CSS -->
<link href="/filemanage/assets/css/style.css" rel='stylesheet' type='text/css' />
<!-- font CSS -->
<!-- font-awesome icons -->
<link href="/filemanage/assets/css/font-awesome.css" rel="stylesheet"> 
<!-- //font-awesome icons -->
 <!-- js-->
<script src="/filemanage/assets/js/jquery-1.11.1.min.js"></script>
<script src="/filemanage/assets/js/modernizr.custom.js"></script>
<!--webfonts-->

<!--//webfonts--> 
<!--animate-->
<link href="/filemanage/assets/css/animate.css" rel="stylesheet" type="text/css" media="all">
<script src="/filemanage/assets/js/wow.min.js"></script>
	<script>
		 new WOW().init();
	</script>
<!--//end-animate-->
<!-- Metis Menu -->
<script src="/filemanage/assets/js/metisMenu.min.js"></script>
<script src="/filemanage/assets/js/custom.js"></script>
<link href="/filemanage/assets/css/custom.css" rel="stylesheet">

<!--//Metis Menu -->
</head> 
<body class="cbp-spmenu-push">
<div class="main-page login-page ">
	
				<div class="widget-shadow" style="margin-top: 100px;">
					<div class="login-top">
						<h4>网络工程专业建设档案管理系统登入</h4>
					</div>
					<div class="login-body">
						<form action="/filemanage/index.php/Home/Login/checkLogin">
							<input required="required"  type="text" class="user" name="account" placeholder="账号、学号、工号" >
							<input required="required" type="password" name="password" class="lock" placeholder="密码">
							
			
								<select name='type' required="required">
									<option value="1">管理员</option>
									<option value="2">教师</option>
									<option value="3">学生</option>
								</select>
					

							
							<input type="submit"  value=" 登入">
				
						</form>
					</div>
				</div>
				

			</div>
</body>

<script src="/filemanage/Public/js/select2/select2.js"></script>
<script type="text/javascript">
	$(function(){

	});
</script>

</html>