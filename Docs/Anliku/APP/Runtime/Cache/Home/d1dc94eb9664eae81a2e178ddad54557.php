<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-cn">
	<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=Edge"><!--IE兼容模式 ref:http://www.runoob.com/bootstrap/bootstrap-html-codeguide.html-->
	<link href='http://api.youziku.com/webfont/CSS/56ea7346f629d80fe885355f' rel='stylesheet' type='text/css' />
	<script type="text/javascript" src="__PUBLIC__/js/jquery-2.1.4.min.js"></script>
	<script type="text/javascript" src="__PUBLIC__/js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="__PUBLIC__/css/bootstrap.min.css" />
	<link rel="stylesheet" type="text/css" href="__PUBLIC__/css/bootstrap-theme.min.css" />
	<link rel="stylesheet" type="text/css" href="__PUBLIC__/css/case-base.css" />
	<title>案例库浏览系统</title>
	<link rel="shortcut icon" href="__PUBLIC__/images/favicon.ico" />
</head>

<body>
	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12"
style="filter:progid:DXImageTransform.Microsoft.Shadow(color=#909090,direction=120,strength=3);/*ie*/
-moz-box-shadow: 2px 2px 10px #909090;/*firefox*/
-webkit-box-shadow: 2px 2px 10px #909090;/*safari或chrome*/
box-shadow:2px 2px 10px #909090;/*opera或ie9*/
background-color:#336699;"
	>
	<!--<div class="col-xs-12"  >
		<br><br><br>
		<div class="col-sm-8 col-md-10 visible-sm visible-md visible-lg">
			<h2 style="margin:20px auto 10px auto;text-align:center;color:#fff;font-size:35px;font-weight: bold;text-shadow: 0px 1px 1px #555;">
				<img src="__PUBLIC__/images/logo.png" style="width:100px;height:100px;" ></img>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				软件工程实践教学案例库
			</h2>
		</div>
	</div>
	<div class="col-xs-12">
	-->

<!--nav bar-->
	<nav class="navbar navbar-fixed-top" id="case-navbar" style="background-color:rgb(240,240,240)" role="navigation">
	   <div class="navbar-header">
		  <button type="button" class="navbar-toggle" data-toggle="collapse"
			 data-target="#example-navbar-collapse">
			 <span class="sr-only">切换导航</span>
			 <span class="icon-bar"></span>
			 <span class="icon-bar"></span>
			 <span class="icon-bar"></span>
		  </button>

			<a class="navbar-brand navbar-left" href=<?php echo U(GROUP_NAME."/Index/index");?>>
				<img src="__PUBLIC__/images/logo.png" alt="logo" style="width:25px;height:25px;float:left"/>
				<!--<a href=<?php echo U(GROUP_NAME."/Index/index");?>>软件工程实践教学案例库</a>-->
				<span style="margin-left:10px;">软件工程实践教学案例库</span>
			</a>
	   </div>

	   <div class="collapse navbar-collapse" id="example-navbar-collapse">
			<ul class="nav navbar-nav" style="margin-left:60px">
				<li>
						<form class="form-inline bs-example bs-example-form navbar-form" role="form"
						id="selectForm" method="post" action=<?php echo U(GROUP_NAME."/Anli/search");?> >
								<select class="form-control" id="selectType" name="type">
									 <option value="title">案例名</option>
									 <option value="author">作者</option>
									 <option value="cate">分类</option>
									 <option value="department">单位</option>
									 <option value="key_words">关键词</option>
								</select>
								<input type="text" name="keyword" class="form-control"
								placeholder="请输入要查询的关键词" onkeydown="if(event.keyCode==13){submitSearch();}">
								<input type="button" value="查询案例" class="btn btn-primary" onclick="submitSearch()">

						</form>
				</li>
			</ul>

			<ul class="nav navbar-nav navbar-right" style="font-size:16px">
				<li <?php if($menuName1 == ''): ?>class="active"<?php endif; ?>><a href=<?php echo U(GROUP_NAME."/Index/index");?>>首页</a></li>
				<li class="dropdown">
					<a href=<?php echo U(GROUP_NAME."/Anli/index");?> class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
						案例库
						<span class="caret"></span>
					</a>
					<ul class="dropdown-menu" role="menu">
					</ul>
				</li>
				<li <?php if($menuName1 == '个人中心'): ?>class="active"<?php endif; ?>><a href=<?php echo U(GROUP_NAME."/Userinfo/index");?>>个人中心</a></li>
				<li <?php if($menuName1 == '联系我们'): ?>class="active"<?php endif; ?>><a href=<?php echo U(GROUP_NAME."/About/index");?>>联系我们</a></li>
				<?php if(empty($_SESSION['username'])): ?><li><a href=<?php echo U(GROUP_NAME."/Login/index");?>>登录&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a></li>
				<?php else: ?>
					<li><a href=<?php echo U(GROUP_NAME."/Userinfo/index");?>>欢迎您，<?php echo (session('username')); ?></a></li>
					<li><a href=<?php echo U(GROUP_NAME."/Login/logout");?>>登出&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a></li><?php endif; ?>
			</ul>
	   </div>
</nav>
	  </div>
</div>

</br></br>
<!--
<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
</br>
<ol class="breadcrumb">
  <li><a href=<?php echo U(GROUP_NAME."/Index/index");?> >首页</a></li>
  <?php if(is_array($parents)): foreach($parents as $key=>$v): ?>&nbsp;>&nbsp; <a <?php if($v['id'] == null): else: ?>href="<?php echo U(GROUP_NAME.'/Anli/index',array('cate_id'=>$v['id']));?>"<?php endif; ?>><?php echo ($v["name"]); ?></a><?php endforeach; endif; ?>
</ol>
-->
<script>
	function submitSearch(){
		// var type=$("#selectType").val();
		// $("#selectTypeValue").val(type);
		$("#selectForm").submit();
	};

	$(function(){
		$.ajax({
			type:'post',
			url:"<?php echo U(GROUP_NAME.'/Index/getCates');?>",
			async:false,
			dataType:'json',
			success:function(data){
				var html='';
				for(var i=0;i<data.length;++i)
				{
					html+="<li><a href='/Anliku/Home/Anli/index/cate_id/"+data[i].id+"'>"+data[i].name+"</a></li>";
				}
				$('.dropdown-menu').html(html);
			},
			error:function(data){
				console.log(data);
			}
		});
	});
</script>

<!--<div class="col-md-12 col-lg-12 col-sm-12 col-xs-12" style="min-height:420px">-->
	<div style="min-height:420px">
	<div>
		<div class="container">
  <ol class="breadcrumb">
    <li><a href=<?php echo U(GROUP_NAME."/Index/index");?> >首页</a></li>
    <?php if(is_array($parents)): foreach($parents as $key=>$v): ?>&nbsp;>&nbsp; <a <?php if($v['id'] == null): else: ?>href="<?php echo U(GROUP_NAME.'/Anli/index',array('cate_id'=>$v['id']));?>"<?php endif; ?>><?php echo ($v["name"]); ?></a><?php endforeach; endif; ?>
  </ol>
  <div class="container">
  	<div class="page-header">
  		<h4 class="text-info">案例信息</h4>
  	</div>
    <div class="col-md-10">
    	<div class="col-md-12">
    		发布时间：<?php echo ($anliInfo["add_time"]); ?> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;阅读量：<?php echo ($anliInfo["click"]); ?>
    		<br>
    		<br>
    	</div>
    	<div class="col-md-8">
    		<dl class="dl-horizontal">
    		  <dt>案例名：</dt><dd style="word-break:break-all;"><?php echo (htmlspecialchars_decode($anliInfo["title"])); ?></dd>
    		  <dt>案例号：</dt><dd style="word-break:break-all;"><?php echo ($anliInfo["case_no"]); ?></dd>
    		  <dt>类型：</dt><dd style="word-break:break-all;"><?php echo ($anliInfo["cate"]); ?></dd>
    		  <dt>作者：</dt><dd style="word-break:break-all;"><?php echo (htmlspecialchars_decode($anliInfo["author"])); ?></dd>
    		  <dt>作者单位：</dt><dd style="word-break:break-all;"><?php echo (htmlspecialchars_decode($anliInfo["department"])); ?></dd>
    		  <dt>适合课程：</dt><dd style="word-break:break-all;"><?php echo (htmlspecialchars_decode($anliInfo["course"])); ?></dd>
    		  <dt>摘要：</dt><dd style="word-break:break-all;"><?php echo (htmlspecialchars_decode($anliInfo["summary"])); ?></dd>
    		  <dt>关键词：</dt><dd style="word-break:break-all;"><?php echo (htmlspecialchars_decode($anliInfo["key_words"])); ?></dd>
    		  <?php if(empty($_SESSION['username'])): ?><dt>案例文档：</dt><dd>请 <a href=<?php echo U(GROUP_NAME."/Login/index");?>>登录</a> 后下载。</dd>
    		  <?php else: ?>
    			<dt>案例正文：</dt><dd><a href="__ROOT__/Uploads/<?php echo ($anliInfo["content_url"]); ?>">下载</a></dd>
    			<dt>案例说明书：</dt><dd><a href="__ROOT__/Uploads/<?php echo ($anliInfo["doc_url"]); ?>">下载</a></dd>
    			<dt>案例附件：</dt><dd><a href="__ROOT__/Uploads/<?php echo ($anliInfo["attachment_url"]); ?>">下载</a></dd><?php endif; ?>
    		</dl>
    	</div>
  	   <div class="col-md-4">
    		<?php if(strlen($anliInfo['pic_url']) < 1): ?><img style="width:200px;height:200px;" src="__PUBLIC__/images/default.png")}></img>
    		<?php else: ?>
    			<img style="width:200px;height:200px;" src="__ROOT__/Uploads/<?php echo ($anliInfo['pic_url']); ?>"></img><?php endif; ?>
  	   </div>
     </div>
  </div>
</div>

	</div>
	</div>
	<footer class="footer container-fluid" style="background-color:rgba(55, 60, 65, 0.8);text-align:center;color:white">
  </br></br>
    <div class="row">
      <div class="col-xs-10 col-md-4">
        <h4 style="color:rgb(188, 189, 193)">关于案例库</h4></br>
        <ul class="list-unstyled">
          <li class="case-list"><a class="case-link" href="javascript:void(0)">文档</a></li>
          <li class="case-list"><a class="case-link" href="javascript:void(0)">服务状态</a></li>
        </ul>
      </div>
      <div class="col-xs-10 col-md-4">
        <h4 style="color:rgb(188, 189, 193)">社交媒体</h4></br>
        <ul class="list-unstyled">
          <li class="case-list"><a class="case-link" href="javascript:void(0)">微信</a></li>
          <li class="case-list"><a class="case-link" href="javascript:void(0)">QQ</a></li>
        </ul>
      </div>
      <div class="col-xs-10 col-md-4">
        <h4 style="color:rgb(188, 189, 193)">联系我们</h4></br>
        <ul class="list-unstyled">
          <li class="case-list">电话：0000-0000000</li>
          <li class="case-list">邮箱：<a class="case-link" href="mail-to:lxx@buaa.edu.cn">lxx@buaa.edu.cn</a></li>
          <li class="case-list">地址：北京航空航天大学软件学院 世宁大厦</li>
        </ul>
      </div>
    </br></br></br></br></br></br></br></br>
    <div class="container" style="display:center">
    <hr>
    <p style="text-align:center">Copyright &copy; 2016 北京航空航天大学软件学院信息化办公室. All rights reserved.</p>
    <p style="text-align:center;color:#cccccc">推荐使用 ie8或以上版本ie浏览器 或 Chrome内核浏览器 访问</p>
    </div>
  </div>


</footer>

</body>
</html>