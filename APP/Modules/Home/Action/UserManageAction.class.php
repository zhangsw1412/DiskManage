<?php

class UserManageAction extends Action
{
	public function index()
	{
		
	}

	public function info()
	{
		if(is_null(session('uid')))
			$this->redirect(GROUP_NAME.'/Login/index');
		$result=M('user')->find(session('uid'));
		if($result===false)
			$this->error('数据库查询出错');
		$this->username=$result['username'];
		$this->login_time=$result['login_time'];
		$this->login_ip=$result['login_ip'];
		$this->valid=$result['valid'];
		layout('Layout/standard');
		$this->display();
	}
}