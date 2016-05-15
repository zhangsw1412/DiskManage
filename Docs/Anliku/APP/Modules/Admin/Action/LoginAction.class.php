<?php

/**
 * 后台登录控制器
 */
Class LoginAction extends Action{
  	/**
  	 * 登录页面视图
  	 * @return [type] [description]
  	 */
  	public function index()
  	{
     $this->display();
 	}

 	//登录表单操作
 	public function login()
 	{
 		if(IS_POST)
 		{
 			if(I('code','','strtolower')!=session('verify'))
 			{
 				$this->error('验证码错误');
 			}
 			$user=M('user');
 			$result=$user->where(array('username'=>I('username')))->find();
 			if(!$result||$result['password']!=I('password','','md5'))
 			{
 				$this->error('帐号或密码错误');
 			}
 			//更新最后一次登陆时间与ip
 			$data=array(
 				'id'=>$result['id'],
 				'login_time'=>time(),
 				'login_ip'=>get_client_ip()
 				);
 			$user->save($data);

 			session(C('USER_AUTH_KEY'),$result['id']);
			session('username',$result['username']);

			//超级管理员识别
			if($result['username']==C('RBAC_SUPERADMIN'))
			{
				session(C('ADMIN_AUTH_KEY'),true);
			}

			//读取用户权限
			import('ORG.Util.RBAC');
			RBAC::saveAccessList();

 			redirect(__GROUP__);
 		}
 		else
 		{
 			$this->error('不要做伤天害理的事情');
 		}
 	}

 	public function verify()
 	{
 		import('Class.Image',APP_PATH);
 		Image::verify();
 	}
}

?>