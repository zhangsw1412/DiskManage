<?php

return array(
	//这里是只对后台生效的配置项
	
	//设置SESSION有效时间15分钟
	'SESSION_EXPIRE'=>900,

	//修改引用路径
	'TMPL_PARSE_STRING'=>array(
		'__PUBLIC__'=>__ROOT__.'/'.APP_NAME.'/Modules/'.GROUP_NAME.'/Tpl/Public',
		),

	);

?>