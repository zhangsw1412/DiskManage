<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<script type="text/javascript" src="__PUBLIC__/js/jquery-2.1.4.min.js"></script>
	<script type="text/javascript" src="__PUBLIC__/js/Index_index.js"></script>
	<link rel="stylesheet" href="__PUBLIC__/css/public.css" />
	<link rel="stylesheet" href="__PUBLIC__/css/index.css" />
	<title>后台首页</title>
</head>
<body>
	<div id="top">
		<div class="menu">
			<h2>案例库 | 后台首页</h2>
			<a href="#">选择按钮</a>
			<a href="#">选择按钮</a>
			<a href="#">选择按钮</a>
			<a href="#">选择按钮</a>
			<a href="#">选择按钮</a>
		</div>
		<div class="exit">
			<a href="<?php echo U(GROUP_NAME.'/Index/logout');?>" target="_self">退出</a>
			<a href="www.baidu.com" target="_blank">获得帮助</a>
		</div>
	</div>
	<div id="left">
		<dl>
			<dt>博文管理</dt>
			<dd><a href="<?php echo U(GROUP_NAME.'/Blog/index');?>" target='iframe' style="text-decoration:none;">博文列表</a></dd>
			<dd><a href="<?php echo U(GROUP_NAME.'/Blog/blog');?>" target='iframe' style="text-decoration:none;">添加博文</a></dd>
			<dd><a href="<?php echo U(GROUP_NAME.'/Blog/trash');?>" target='iframe' style="text-decoration:none;">回收站</a></dd>
		</dl>
		<dl>
			<dt>属性管理</dt>
			<dd><a href="<?php echo U(GROUP_NAME.'/Attribute/index');?>" target='iframe' style="text-decoration:none;">属性列表</a></dd>
			<dd><a href="<?php echo U(GROUP_NAME.'/Attribute/addAttr');?>" target='iframe' style="text-decoration:none;">添加属性</a></dd>
		</dl>
		<dl>
			<dt>分类管理</dt>
			<dd><a href="<?php echo U(GROUP_NAME.'/Category/index');?>" target='iframe' style="text-decoration:none;">分类列表</a></dd>
			<dd><a href="<?php echo U(GROUP_NAME.'/Category/addCate');?>" target='iframe' style="text-decoration:none;">添加分类</a></dd>
		</dl>
		<dl>
			<dt>系统设置</dt>
			<dd><a href="<?php echo U(GROUP_NAME.'/System/verify');?>" target='iframe' style="text-decoration:none;">验证码设置</a></dd>
		</dl>
		<!-- <dl>
			<dt>RBAC</dt>
			<dd><a href="<?php echo U('Admin/Rbac/index');?>" target='iframe' style="text-decoration:none;">用户列表</a></dd>
			<dd><a href="<?php echo U('Admin/Rbac/role');?>" target='iframe' style="text-decoration:none;">角色列表</a></dd>
			<dd><a href="<?php echo U('Admin/Rbac/node');?>" target='iframe' style="text-decoration:none;">节点列表</a></dd>
			<dd><a href="<?php echo U('Admin/Rbac/addUser');?>" target='iframe' style="text-decoration:none;">添加用户</a></dd>
			<dd><a href="<?php echo U('Admin/Rbac/addRole');?>" target='iframe' style="text-decoration:none;">添加角色</a></dd>
			<dd><a href="<?php echo U('Admin/Rbac/addNode');?>" target='iframe' style="text-decoration:none;">添加节点</a></dd>
		</dl> -->
	</div>
	<div id="right">
			<iframe name="iframe" src=""></iframe>
	</div>
</body>
</html>