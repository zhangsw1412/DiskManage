<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="__PUBLIC__/css/public.css" />
	<title>Document</title>
</head>
<body>
	<form action="<?php echo U(GROUP_NAME.'/Attribute/runAddAttr');?>" method="post">
		<table class="table">
			<tr>
				<th colspan="2">添加博文属性</th>
			</tr>
			<tr>
				<td align="right">属性名称:</td>
				<td><input type="text" name="name"></td>
			</tr>
			<tr>
				<td align="right">标题颜色:</td>
				<td><input type="text" name="color"></td>
			</tr>
			<tr>
				<td colspan="2" align="center"><input type="submit" value="保存添加"></td>
			</tr>
		</table>
	</form>
</body>
</html>