<?php if (!defined('THINK_PATH')) exit();?><dl>
	<dt>热门博文</dt>
	<?php if(is_array($blog)): foreach($blog as $key=>$v): ?><dd>
			<a href="<?php echo U('/'.$v['id']);?>"><?php echo ($v["title"]); ?></a>
			<span>(<script type="text/javascript" src="<?php echo U(GROUP_NAME.'/Show/clickNum',array('id'=>$v['id']));?>"></script>)</span>
		</dd><?php endforeach; endif; ?>
</dl>