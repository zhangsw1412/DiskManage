<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
	<title>Document</title>
	<script type="text/JavaScript" src='__PUBLIC__/js/jquery-2.1.4.min.js'></script>
	<script type="text/JavaScript" src='__PUBLIC__/js/common.js'></script>
	<link rel="stylesheet" href="__PUBLIC__/css/common.css" />
	<link rel="stylesheet" href="__PUBLIC__/css/show.css" />
	<link rel="stylesheet" href="__ROOT__/Data/Ueditor/third-party/SyntaxHighlighter/shCoreDefault.css" />
	<script type="text/javascript" src="__ROOT__/Data/Ueditor/third-party/SyntaxHighlighter/shCore.js"></script>
	<script type="text/javascript">
		SyntaxHighlighter.all();
	</script>
</head>
<body>
<!--头部-->
	<div class='top-list-wrap'>
		<div class='top-list'>
			<ul class='l-list'>
				<li><a href="http://www.houdunwang.com" target='_blank'>后盾网</a></li>
				<li><a href="http://bbs.houdunwang.com" target='_blank'>后盾网论坛</a></li>
				<li><a href="http://study.houdunwang.com" target='_blank'>后盾学习社区</a></li>
			</ul>
			<ul class='r-list'>
				<li><a href="http://www.hdphp.com" target='_blank'>HDPHP框架</a></li>
				<li><a href="http://bbs.houdunwang.com" target='_blank'>免费视频教程</a></li>
			</ul>
		</div>
	</div>


	<div class='top-search-wrap'>
		<div class='top-search'>
			<a href="http://bbs.houdunwang.com" target='_blank' class='logo'>
				<img src="__PUBLIC__/Images/logo.png"/>
			</a>
			<div class='search-wrap'>
				<form action="" method='get'>
					<input type="text" name='keyword' class='search-content'/>
					<input type="submit" name='search' value='搜索'/>
				</form>
			</div>
		</div>
	</div>
	<div class='top-nav-wrap'>
		<ul class='nav-lv1'>
			<li class='nav-lv1-li'>
				<a href="__GROUP__" class='top-cate'>博客首页</a>
			</li>
			<?php
 $_nav_cate=M('cate')->order("sort")->select(); import('Class.Category',APP_PATH); $_nav_cate=Category::unlimited4Layer($_nav_cate); foreach($_nav_cate as $_nav_cate_v): extract($_nav_cate_v); $url=U('/c_'.$id); ?><li class="nav-lv1-li">
					<a href="<?php echo ($url); ?>" class='top-cate'><?php echo ($name); ?></a>
					<ul>
						<?php if(is_array($child)): foreach($child as $key=>$v): ?><li><a href="<?php echo U('/c_'.$v['id']);?>"><?php echo ($v["name"]); ?></a></li><?php endforeach; endif; ?>
					</ul>
				</li><?php endforeach;?>
		</ul>
	</div>
<!--主体-->
	<div class='main'>
		<div class='main-left'>
			<div class='location'>
				<a href="__APP__">首页</a>
				<?php if(is_array($parent)): foreach($parent as $key=>$v): ?><a href="<?php echo U('/c_'.$v['id']);?>">><?php echo ($v["name"]); ?></a><?php endforeach; endif; ?>
			</div>
			<div class="title">
				<p><?php echo ($blog["title"]); ?></p>
				<div>
					<span class='fl'>发布于：<?php echo (date('Y-m-d',$blog["time"])); ?></span>
					<span class='fr'>已被阅读<script type="text/javascript" src="<?php echo U(GROUP_NAME.'/Show/clickNum',array('id'=>$blog['id']));?>"></script>次</span>
				</div>
			</div>
			<div class='content' style="word-break:break-all"><?php echo (htmlspecialchars_decode($blog["content"])); ?></div>
		</div>
	<!--主体右侧-->
<div class='main-right'>
	<?php echo W('Hot');?>
	<?php echo W('New',array('limit'=>5));?>
	<dl>
		<dt>友情连接</dt>
		<dd>
			<a href="">后盾网</a>
		</dd>
		<dd>
			<a href="">后盾网论坛</a>
		</dd>
		<dd>
			<a href="">后盾网学习社区</a>
		</dd>
	</dl>
</div>
	</div>
<!--底部-->
	<div class='bottom'>
		<div></div>
	</div>
</body>
</html>