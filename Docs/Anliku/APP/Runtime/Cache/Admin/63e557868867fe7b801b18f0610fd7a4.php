<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="__PUBLIC__/css/public.css" />
	<script type="text/javascript" src="__PUBLIC__/js/jquery-2.1.4.min.js"></script>
	<script type="text/javascript" src="__ROOT__/Data/Ueditor/ueditor.config.js"></script>
	<script type="text/javascript" src="__ROOT__/Data/Ueditor/ueditor.all.js"></script>
	<script type="text/javascript">
		window.UEDITOR_HOME_URL='__ROOT__/Data/Ueditor/';
		window.onload=function(){
			// window.UEDITOR_CONFIG.initialFrameHeight=200;
			// window.UEDITOR_CONFIG.initialFrameWidth=900;
			// window.UEDITOR_CONFIG.savePath= ['upload'];
			// window.UEDITOR_CONFIG.imageUrl="<?php echo U(GROUP_NAME.'/Case/upload');?>";
			// window.UEDITOR_CONFIG.imagePath='__ROOT__/Uploads/';
			UE.getEditor('summary',{
				initialFrameHeight:200,
				initialFrameWidth:900,
				toolbars:[
				['fullscreen', 'source', '|', 'undo', 'redo', '|',
                'bold', 'italic', 'underline', 'fontborder', 'strikethrough', 'superscript', 'subscript', 'removeformat', 'formatmatch', 'autotypeset', 'blockquote', 'pasteplain', '|', 'forecolor', 'backcolor', 'insertorderedlist', 'insertunorderedlist', 'selectall', 'cleardoc', '|',
                'rowspacingtop', 'rowspacingbottom', 'lineheight', '|',
                'customstyle', 'paragraph', 'fontfamily', 'fontsize', '|',
                'directionalityltr', 'directionalityrtl', 'indent', '|',
                'justifyleft', 'justifycenter', 'justifyright', 'justifyjustify', '|', 'touppercase', 'tolowercase', '|',
                'link', 'unlink']
				]
			});
		}

		function checkCate()
		{
			if($('#cid').val()==0)
			{
				alert("请选择分类");
				return false;
			}
			return true;
		}
	</script>
	<title>Document</title>
</head>
<body>
	<form action="<?php echo U(GROUP_NAME.'/Case/addCase');?>" enctype="multipart/form-data" method="post" onsubmit="return checkCate(this)">
		<table class="table">
			<tr>
				<th colspan="2">案例发布</th>
			</tr>
			<tr>
				<td align="right">案例标题:</td>
				<td><input type="text" name="title"></td>
			</tr>
			<tr>
				<td align="right" width="10%">所属分类:</td>
				<td>
					<select name="cid" id="cid">
						<option value="0">===请选择分类===</option>
						<?php if(is_array($cate)): foreach($cate as $key=>$v): ?><option value="<?php echo ($v["id"]); ?>"><?php echo ($v["html"]); echo ($v["name"]); ?></option><?php endforeach; endif; ?>
					</select>
				</td>
			</tr>
			<!-- <tr>
				<td align="right">案例属性:</td>
				<td>
					<?php if(is_array($attr)): foreach($attr as $key=>$v): ?><label style="margin-right:10px;">
							<input type="checkbox" name="aid[]" value="<?php echo ($v["id"]); ?>">&nbsp;<?php echo ($v["name"]); ?>
						</label><?php endforeach; endif; ?>
				</td>
			</tr>
			<tr>
				<td align="right">点击次数:</td>
				<td><input type="text" name="click" value="0"></td>
			</tr> -->
			<tr>
				<td align="right">作者:</td>
				<td><input type="text" name="author"></td>
			</tr>
			<tr>
				<td align="right">单位:</td>
				<td><input type="text" name="department"></td>
			</tr>
			<tr>
				<td align="right">案例关键词:</td>
				<td><input type="text" name="key_words"></td>
			</tr>
			<tr>
				<td align="right">适用课程:</td>
				<td><input type="text" name="course"></td>
			</tr>
			<tr>
				<td align="right">案例摘要:</td>
				<td>
					<textarea name="summary" id="summary" cols="30" rows="10"></textarea>
				</td>
			</tr>
			<tr>
				<td align="right">正文文件:</td>
				<td><input type="file" name="content"></td>
			</tr>
			<tr>
				<td align="right">说明文件:</td>
				<td><input type="file" name="doc"></td>
			</tr>
			<tr>
				<td align="right">附件:</td>
				<td><input type="file" name="attachment"></td>
			</tr>
			<tr>
				<td align="right">图片:</td>
				<td><input type="file" name="pic"></td>
			</tr>
			<tr>
				<td align="center" colspan="2"><input type="submit" value="保存添加"></td>
			</tr>
		</table>
	</form>
</body>
</html>