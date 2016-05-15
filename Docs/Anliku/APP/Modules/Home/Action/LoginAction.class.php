<?php

class LoginAction extends Action
{
	public function index()
	{
		layout(false);
		$this->display();
	}

	public function login()
	{
		if(IS_POST)
		{
			$user=M('user');
 			$result=$user->where(array('username'=>I('post.username')))->find();
 			if(!$result||$result['password']!=I('post.p','','md5'))
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
			
			$role=M('role_user')->where(array('user_id'=>$result['id']))->field('role_id')->find();
			if($role['role_id']!=3)
				$this->redirect('Admin/Index/index');
			else
 				$this->redirect(GROUP_NAME."/Index/index");
		}
		else
		{
			$this->error('出错啦~');
		}
	}
	
	public function logout()
 	{
 		session(null);
 		session('[destroy]');
 		$this->redirect(GROUP_NAME.'/Index/index');
 	}

	public function regist()
	{
		if(IS_POST)
		{
			$username=I('post.user');
			$password=I('post.passwd','','md5');
			$logintime=time();
			$loginip=get_client_ip();

			$user=M('user');
			$query='insert into tb_user (username,password,login_time,login_ip) values (\''.$username.'\',\''.$password.'\','.$logintime.',\''.$loginip.'\')';
			if($user->execute($query))
			{
				$uid=$user->where(array('username'=>$username))->getField('id');
				$role['role_id']=M('role')->where(array('name'=>'Common_user'))->getField('id');
				$role['user_id']=$uid;
				if(M('role_user')->add($role))
				{
					$this->success('注册成功',U(GROUP_NAME.'/Index/index'));
					session('uid',$result['id']);
					//session(C('USER_AUTH_KEY'),$uid);
					session('username',$username);
				}
				else
				{
					$this->error('注册失败');
				}
			}
			else
			{
				$this->error('注册失败');
			}
		}
		else
		{
			$this->error('出错啦~');
		}
	}
}

?>