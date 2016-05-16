<?php

/**
 * 登陆控制器
 */
class LoginAction extends Action
{
	/**
	 * 登陆首页
	 * @return [type] [description]
	 */
	public function index()
	{
		layout(false);
		$this->display();
	}

	/**
	 * 登陆
	 * @return [type] [description]
	 */
	public function login()
	{
		if(IS_POST)
		{
			$user=M('user');
 			$result=$user->where(array('username'=>I('post.username')))->find();
 			if(!$result||$result['password']!=I('post.password','','sha1'))
 			{
 				$this->error('帐号或密码错误');
 			}else if($result['valid']==0){
				$this->error('帐号已注销');
			}
 			//更新最后一次登陆时间与ip
 			$data=array(
 				'id'=>$result['id'],
 				'login_time'=>time(),
 				'login_ip'=>get_client_ip()
 				);
 			$user->save($data);

 			session('uid',$result['id']);
			session('username',$result['username']);

			//超级管理员识别
			// if($result['username']==C('RBAC_SUPERADMIN'))
			// {
			// 	session(C('ADMIN_AUTH_KEY'),true);
			// }

			// //读取用户权限
			// import('ORG.Util.RBAC');
			// RBAC::saveAccessList();
			
			// $role=M('role_user')->where(array('user_id'=>$result['id']))->field('role_id')->find();
			// if($role['role_id']!=3)
			// 	$this->redirect('Admin/Index/index');
			// else
 		// 		$this->redirect(GROUP_NAME."/Index/index");
 			Log::write($result['username'].'登陆', Log::INFO);
 			$this->redirect(GROUP_NAME.'/Index/index');
		}
		else
		{
			$this->error('出错啦~');
		}
	}

	/**
	 * 登出
	 * @return [type] [description]
	 */
	public function logout()
	{
		$username=session('username');
 		Log::write($username.'登出', Log::INFO);
		session(null);
 		session('[destroy]');
 		$this->redirect(GROUP_NAME.'/Login/index');
	}
}