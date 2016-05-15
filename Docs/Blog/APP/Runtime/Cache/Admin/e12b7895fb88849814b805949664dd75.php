<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<script type="text/javascript" src="__PUBLIC__/js/jquery-2.1.4.min.js"></script>
	<script type="text/javascript" src="__PUBLIC__/js/jquery.validate.min.js"></script>
	<script type="text/javascript">
		var verifyURL='<?php echo U(GROUP_NAME."/Login/verify",'','');?>';
		var user_exist_url='<?php echo U(GROUP_NAME."/Login/userExist",'','');?>';
		var password_check_url='<?php echo U(GROUP_NAME."/Login/passwordCheck",'','');?>';
		var verify_check_url='<?php echo U(GROUP_NAME."/Login/verifyCheck",'','');?>';
	</script>
	<script type="text/javascript" src="__PUBLIC__/js/Login_index.js"></script>
	<title>案例库后台登录</title>
</head>
<body>
	<div align="center" id="main" >
		<form action="<?php echo U(GROUP_NAME."/Login/login");?>" id="login" method="post">
			<div><h2>案例库 | 后台登录</h2></div>
			<table border="0" cellpadding="5" width="650">
				<tr>
					<th>管理员帐号:</th>
					<td><input type="text" name="username" id="username"></td>
				</tr>
				<tr>
					<th>密码:</th>
					<td><input type="password" name="password" id="password"></td>
				</tr>
				<tr>
					<th>验证码:</th>
					<td>
						<input type="text" name="code">
						<img src="<?php echo U(GROUP_NAME.'/Login/verify');?>" alt="验证码" id="code">
						<a href="javascript:void(0)" style="text-decoration:none;" id="changeVerify">看不清,换一张</a>
					</td>
				</tr>
				<tr>
					<td colspan="2" style="padding-left:160px;"><input type="submit" id="btn_login" value="登录"></td>
				</tr>
			</table>
		</form>
	</div>
</body>
</html>