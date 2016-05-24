<?php

//这个控制器是前台和后台都能继承的
Class CommonAction extends Action{

	public function _initialize()
	{
		
		if(is_null(session('uid')))
		{
			$this->redirect(GROUP_NAME.'/Login/index');
		}

		// if(is_null(session(C('USER_AUTH_KEY'))))
		// {
		// 	$this->redirect('Admin/Login/index');
		// }
		// $notAuth=in_array(MODULE_NAME, explode(',', C('NOT_AUTH_MODULE')))||in_array(ACTION_NAME, explode(',', C('NOT_AUTH_ACTION')));
		// if(C('USER_AUTH_ON')&&!$notAuth)
		// {
		// 	import('ORG.Util.RBAC');
		// 	RBAC::AccessDecision(GROUP_NAME)||$this->error('对不起,您没有进行此操作的权限');
		// }
	}
}

?>