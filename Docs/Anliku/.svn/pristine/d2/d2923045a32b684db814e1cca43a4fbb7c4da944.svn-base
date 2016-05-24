<?php

/**
 * 首页控制器
 */
Class UserinfoAction extends Action{
	public function index(){
		if(is_null(session('uid')))
		{
			//让用户登录
			$this->redirect(GROUP_NAME.'/Login/index');
		}else
		{
			$user=M("user");
			$result=$user->where("id=".session('uid'))->select();
			//p($result);die;
			$this->assign('userinfo',$result[0]);
			$this->parents=array(0=>array('name'=>'个人中心'));
			$this->display();
		}
	}
	
	public function changePassword(){
		if(IS_POST){
			$user=M("user");
			$newPassword=I("post.newpw",'',md5);
			if($newPassword==''){
				$this->error("新密码不能为空");
			}else{
				$oldPassword=I("post.oldpw",'',md5);
				var_dump($oldPassword);
				$res=$user->where("id=".session('uid'))->find();
				//var_dump($res['password']);die;
				if($oldPassword == $res['password']){
					$user->where("id=".session('uid'))->setField('password',$newPassword);
					session(null);
					session('[destroy]');
					$this->success('密码修改成功！请重新登录', GROUP_NAME.'/Login/index');
				}else{
					$this->error("旧密码错误");
				}
			}
		}else{
			$this->error("出错啦");
		}
	}
	
	public function logoff(){
		$user=M("user");
		$user->where("id=".session('uid'))->setField("valid",0);
		session(null);
		session('[destroy]');
		$this->success('您的当前账号已成功注销！', GROUP_NAME.'/Index/index');
	}
}

?>