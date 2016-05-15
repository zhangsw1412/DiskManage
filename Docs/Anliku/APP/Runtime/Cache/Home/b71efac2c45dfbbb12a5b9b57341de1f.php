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
		
<!--大屏轮播效果-->
<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <div class="item active">
      <img class="center-block img-responsive" src="__PUBLIC__/images/bg-carousel/bg1.jpg" alt="1.jpg">
      <div class="carousel-caption" style="color:white;">
        <h1 class="case-big-fonter case-broad-fonter case-siyuan-fonter">大量成功的软件工程案例</h2>
      </div>
    </div>
    <div class="item">
      <img class="center-block img-responsive" src="__PUBLIC__/images/bg-carousel/bg2.jpg" alt="2">
      <div class="carousel-caption" style="color:white;">
        <h1 class="case-big-fonter case-broad-fonter case-siyuan-fonter">丰富而形象的样例类型</h2>
      </div>
    </div>
		<div class="item">
			<img class="center-block img-responsive" src="__PUBLIC__/images/bg-carousel/bg3.jpg" alt="2">
			<div class="carousel-caption" style="color:white">
				<h1 class="case-big-fonter case-broad-fonter case-siyuan-fonter">快快释放你的创造力</h2>
			</div>
		</div>
  </div>

  <!-- Controls -->
  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

</br></br>

<div class="container">
	<div class="row">
		<div class="col-md-4"></div>
		<div class="col-md-4">
			<div class="page-header" style="text-align:center">
				<h1 class="text-success case-mid-fonter">成功案例</h3>
			</div>
		</div>
		<div class="col-md-4"></div>
	</div>
</div>
<!--几个案例-->
<div class="container-fluid" style="background-color:rgb(241,245,247)">
	<div class="container">
    <div class="row">
      </br></br>
  		<!--案例1-->
  	  <div class="col-sm-6 col-md-4">
  	    <div class="thumbnail">
  	      <img src="__PUBLIC__/images/case/case1.jpg" alt="缩略图1">
  	      <div class="caption">
  	        <h3><?php echo ($popular[0]['title']); ?></h3>
  	        <p><?php echo ($popular[0]['summary']); ?></p>
  	        <p><a href=<?php echo U(GROUP_NAME."/Anli/index");?> class="btn btn-info btn-primary" role="button">更多案例</a></p>
  	      </div>
  	    </div>
  	  </div>
  		<!--案例2-->
  		<div class="col-sm-6 col-md-4">
  			<div class="thumbnail">
  				<img src="__PUBLIC__/images/case/case2.jpg" alt="缩略图2">
  				<div class="caption">
  					<h3><?php echo ($popular[1]['title']); ?></h3>
  					<p><?php echo ($popular[1]['summary']); ?></p>
  					<p><a href=<?php echo U(GROUP_NAME."/Anli/index");?> class="btn btn-info btn-primary" role="button">更多案例</a></p>
  				</div>
  			</div>
  		</div>
  		<!--案例3-->
  		<div class="col-sm-6 col-md-4">
  			<div class="thumbnail">
  				<img src="__PUBLIC__/images/case/case3.jpg" alt="缩略图3">
  				<div class="caption">
  					<h3><?php echo ($popular[2]['title']); ?></h3>
  					<p><?php echo ($popular[2]['summary']); ?></p>
  					<p><a href=<?php echo U(GROUP_NAME."/Anli/index");?> class="btn btn-info btn-primary" role="button">更多案例</a></p>
  				</div>
  			</div>
  		</div>
  	</div>
  </div>
  </br></br></br></br></br>
</div>


<div class="container">
	<div class="row">
		<div class="col-md-4"></div>
		<div class="col-md-4">
			<div class="page-header" style="text-align:center">
				<h1 class="text-info case-mid-fonter">合作伙伴</h3>
			</div>
		</div>
		<div class="col-md-4"></div>
	</div>
</div>

<div class="container-fluid">
	<div class="row">
	</br>
		<div class="col-md-1"></div>
		<div class="col-md-2">
			<img class="center-block" style="width:120px;height:120px;border-radius:50%" src="__PUBLIC__/images/北航.jpg"></img>
			<p style="text-align:center">北京航空航天大学</p>
		</div>
		<div class="col-md-2">
			<img class="center-block" style="width:120px;height:120px;border-radius:50%" src="__PUBLIC__/images/哈工大.jpg"></img>
			<p style="text-align:center">哈尔滨工业大学</p>
		</div>
		<div class="col-md-2">
			<img class="center-block" style="width:120px;height:120px;border-radius:50%" src="__PUBLIC__/images/上交大.jpg"></img>
			<p style="text-align:center">上海交通大学</p>
		</div>
		<div class="col-md-2">
			<img class="center-block" style="width:120px;height:120px;border-radius:50%" src="__PUBLIC__/images/浙大.jpg"></img>
			<p style="text-align:center">浙江大学</p>
		</div>
		<div class="col-md-2">
			<img class="center-block" style="width:120px;height:120px" src="__PUBLIC__/images/emc2.jpg"></img>
			<p style="text-align:center">EMC<sup>2</sup></p>
		</div>
		<div class="col-md-1"></div>
	</div>

</div>

</br></br></br></br></br>

<!--<div class="container-fluid" style="background-color:rgba(55, 60, 65, 0.8);text-align:center;color:white">
</br></br>
  <div class="row">
    <div class="col-xs-10 col-md-4">
      <h4 style="color:rgb(188, 189, 193)">关于案例库</h4></br>
      <div>
        <a class="case-link" href="javascript:void(0)">文档</a></br>
        <a class="case-link" href="javascript:void(0)">服务状态</a>
      </div>
    </div>
    <div class="col-xs-10 col-md-4">
      <h4 style="color:rgb(188, 189, 193)">社交媒体</h4></br>
      <div>
        <a class="case-link" href="javascript:void(0)">微信</a></br>
        <a class="case-link" href="javascript:void(0)">QQ</a>
      </div>
    </div>
    <div class="col-xs-10 col-md-4">
      <h4 style="color:rgb(188, 189, 193)">联系我们</h4></br>
      <address>
        <span>电话：0000-0000000</span></br>
        <span>邮箱：<a class="case-link" href="mail-to:lxx@buaa.edu.cn">lxx@buaa.edu.cn</a></span></br>
        <span>地址：北京航空航天大学软件学院 世宁大厦</span>
      </address>
    </div>
  </br></br></br></br></br></br></br></br>
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

</div>-->

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