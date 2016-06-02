<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="__PUBLIC__/css/login.css" />
	<script type="text/javascript" src="__PUBLIC__/js/jquery-2.1.4.min.js"></script>
	<script type="text/javascript">
		var verifyURL='<?php echo U(GROUP_NAME."/Login/verify",'','');?>';
	</script>
	<script type="text/javascript" src="__PUBLIC__/js/Login_index.js"></script>
	<title>案例库后台登录</title>
</head>
<body>
	<div id="top">

	</div>
	<div class="login">	
		<form action="<?php echo U(GROUP_NAME.'/Login/login');?>" method="post" id="login">
		<div class="title">
			案例库 | 登录后台
		</div>
		<table border="1" width="100%">
			<tr>
				<th>管理员帐号:</th>
				<td>
					<input type="username" name="username" class="len250"/>
				</td>
			</tr>
			<tr>
				<th>密码:</th>
				<td>
					<input type="password" class="len250" name="password"/>
				</td>
			</tr>
			<tr>
				<th>验证码:</th>
				<td>
					<input type="code" class="len250" name="code"/> <img src="<?php echo U(GROUP_NAME.'/Login/verify','','');?>" id="code"/> <a href="javascript:void(0);" id="changeCode">看不清</a>
				</td>
			</tr>
			<tr>
				<td colspan="2" style="padding-left:160px;"> <input type="submit" class="submit" value="登录"/></td>
			</tr>
		</table>
	</form>
</div>
</body>
</html>