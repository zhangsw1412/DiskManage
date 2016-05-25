<?php

return array(
	//这里是只对前台生效的配置项
	
	//设置SESSION有效时间15分钟
	'SESSION_EXPIRE'=>900,

	//修改引用路径
	'TMPL_PARSE_STRING'=>array(
		'__PUBLIC__'=>__ROOT__.'/'.APP_NAME.'/Modules/'.GROUP_NAME.'/Tpl/Public',
		),

	'EMAIL'=>array(
			'SMTP_HOST'=>'smtp.163.com',
			'SMTP_PORT'=>'465',
			'SMTP_USER'=>'duduteddy@163.com',
			'SMTP_PASS'=>'dyx251314',
			'FROM_EMAIL'=>'duduteddy@163.com',
			'FROM_NAME'=>'Service Disk'
		)

	//开启页面静态缓存
	// 'HTML_CACHE_ON'=>true,

	//开启模板
	// 'LAYOUT_ON'=>true,
    // 'LAYOUT_NAME'=>'../Tpl/Layout/layout',

    //错误页和成功页的跳转模板
    // 'TMPL_ACTION_ERROR' => '../Tpl/Layout/dispatch_jump',
    // 'TMPL_ACTION_SUCCESS' => '../Tpl/Layout/dispatch_jump',

	//指定超级管理员名称
	// 'RBAC_SUPERADMIN'=>'admin',

	//超级管理员识别号(存在session中)
	// 'ADMIN_AUTH_KEY'=>'superadmin',

	//是否开启权限验证
	// 'USER_AUTH_ON'=>true,

	//验证类型  1代表登录验证  2代表实时验证
	// 'USER_AUTH_TYPE'=>2,

	//用户认证识别号(存在session中)
	// 'USER_AUTH_KEY'=>'uid',

	//无需验证的模块(控制器)
	// 'NOT_AUTH_MODULE'=>'Login,Index',

	//无需验证的动作方法
	// 'NOT_AUTH_ACTION'=>'',

	//角色表名称
	// 'RBAC_ROLE_TABLE'=>'tb_role',

	//角色与用户的中间表名称
	// 'RBAC_USER_TABLE'=>'tb_role_user',

	//权限表名称
	// 'RBAC_ACCESS_TABLE'=>'tb_access',

	//节点表名称
	// 'RBAC_NODE_TABLE'=>'tb_node',
	);