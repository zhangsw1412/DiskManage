<?php

return array(
	//这里是只对前台生效的配置项

	//修改引用路径
	'TMPL_PARSE_STRING'=>array(
		'__PUBLIC__'=>__ROOT__.'/'.APP_NAME.'/Modules/'.GROUP_NAME.'/Tpl/Public',
		),

	//自动载入路径
	'APP_AUTOLOAD_PATH'=>'@.TagLib',//独立应用分组时可以写@.TagLib
	
	//载入的标签库名称
	'TAGLIB_BUILD_IN'=>'Cx,Blog',//Cx是Thinkphp的核心标签库

	//开启页面静态缓存
	'HTML_CACHE_ON'=>true,

	//静态缓存规则
	'HTML_CACHE_RULES'=>array(
		'Show:index'=>array('{:module}_{:action}_{id}',10),
		),

	//动态缓存方式
	//'DATA_CACHE_TYPE'=>'Memcache',//要用这个得安memcached
	//'MEMCACHE_HOST'=>'127.0.0.1',
	//'MEMCACHE_PORT'=>XXX,

	);

?>