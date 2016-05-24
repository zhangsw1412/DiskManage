<?php
return array(
	//'配置项'=>'配置值'
	//项目分组Home是前台，Admin是后台
	'APP_GROUP_LIST'=>'Home,Admin',

	//设置默认分组为前台项目
	'DEFAULT_GROUP'=>'Home',

	//开启独立分组
	'APP_GROUP_MODE'=>1,

	'APP_GROUP_PATH'=>'Modules',

	'URL_HTML_SUFFIX'=>'',

	//加载扩展的配置文件
	'LOAD_EXT_CONFIG'=>'verify,water',

	//设置默认过滤函数，在获取表单数据时会进行特殊字符过滤
	'DEFAULT_FILTER'=>'htmlspecialchars',

	//点语法(就是.)默认解析为数组
	'TMPL_VAR_IDENTIFY'=>'array',

	//改变模板的位置，让目录层次变浅一些
	//'TMPL_FILE_DEPR'=>'_',

	//显示页面调试工具
	'SHOW_PAGE_TRACE'=>true,

	//路由模式
	'URL_MODEL'=>2,

	//开启路由
	'URL_ROUTER_ON'=>true,

	//路由规则
	'URL_ROUTE_RULES'=>array(
		//'c/:id\d'=>'Home/List/index',
		'/^c_(\d+)$/'=>'Home/List/index?id=:1',
		':id\d'=>'Home/Show/index'
		),

	//数据库配置
	'DB_HOST'=>'localhost',
	'DB_TYPE'=>'mysql',
	'DB_NAME'=>'db_blog',
	'DB_USER'=>'root',//换成本地的数据库用户和密码
	'DB_PWD'=>'592307@zsw',
	'DB_PORT'=>3306,
	'DB_PREFIX'=>'tb_',
);
?>