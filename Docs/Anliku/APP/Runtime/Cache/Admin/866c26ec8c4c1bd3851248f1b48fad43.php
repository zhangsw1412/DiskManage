<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="__PUBLIC__/css/public.css" />
	<link rel="stylesheet" href="__PUBLIC__/css/node.css" />
	<title>节点列表</title>
</head>
<body>
	<div id="wrap">
		<a href="<?php echo U(GROUP_NAME.'/Rbac/addNode');?>" class="add-app">添加应用</a>
		<?php if(is_array($node)): foreach($node as $key=>$app): ?><div class="app">
				<p>
					<strong><?php echo ($app["title"]); ?></strong>
					[<a href="<?php echo U(GROUP_NAME.'/Rbac/addNode',array('pid'=>$app['id'],'level'=>2));?>">添加控制器</a>]
					<!-- [<a href="">修改</a>] -->
					[<a href="<?php echo U(GROUP_NAME.'/Rbac/delNode',array('id'=>$app['id']));?>">删除应用</a>]
				</p>
				<?php if(is_array($app["child"])): foreach($app["child"] as $key=>$action): ?><dl>
						<dt><strong><?php echo ($action["title"]); ?></strong>[<a href="<?php echo U(GROUP_NAME.'/Rbac/addNode',array('pid'=>$action['id'],'level'=>3));?>">添加方法</a>][<a href="<?php echo U(GROUP_NAME.'/Rbac/delNode',array('id'=>$action['id']));?>">删除控制器</a>]</dt>
						<?php if(is_array($action["child"])): foreach($action["child"] as $key=>$method): ?><dd>
								<span><?php echo ($method["title"]); ?></span>
								<!-- [<a href="">修改</a>] -->
								[<a href="<?php echo U(GROUP_NAME.'/Rbac/delNode',array('id'=>$method['id']));?>">删除方法</a>]
							</dd><?php endforeach; endif; ?>
					</dl><?php endforeach; endif; ?>
			</div><?php endforeach; endif; ?>
	</div>
</body>
</html>