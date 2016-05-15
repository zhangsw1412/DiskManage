<?php

Class RbacAction extends CommonAction
{
	//用户列表
	public function index()
	{
		import('ORG.Util.Page');
		$count=M('user')->where(array('del'=>0))->count();
		$page=new Page($count,20);
		$limit=$page->firstRow.','.$page->listRows;
		$this->user=D('UserRelation')->field(array('id','username','login_time','login_ip','valid'))->relation('role')->limit($limit)->select();
		$this->page=$page->show();
		$this->display();
	}

	//角色列表
	public function role()
	{
		$this->role=M('role')->select();
		$this->display();
	}

	//节点列表
	public function node()
	{
		$field=array('id','name','title','pid');
		$node=M('node')->field($field)->order('sort')->select();
		$this->node=node_merge($node);
		$this->display();
	}

	//添加用户
	public function addUser()
	{
		$this->role=M('role')->select();
		$this->display();
	}

	//添加用户表单处理
	public function addUserHandle()
	{
		if(IS_POST)
		{
			//用户信息
			$username=I('username');
			$password=I('password','','md5');
			$logintime=time();
			$loginip=get_client_ip();

			$user=M('user');

			$role=array();//所属角色
			$query='insert into tb_user (username,password,login_time,login_ip) values (\''.$username.'\',\''.$password.'\','.$logintime.',\''.$loginip.'\')';
			if($user->execute($query))
			{
				$uid=$user->where(array('username'=>$username))->getField('id');
				foreach (I('post.role_id') as $v)
				{
					$role[]=array(
						'role_id'=>$v,
						'user_id'=>$uid
						);
				}
				//添加用户角色
				if(M('role_user')->addAll($role))
				{
					$this->success('添加成功',U(GROUP_NAME.'/Rbac/index'));
				}
				else
				{
					$this->error('添加失败');
				}
			}
			else
			{
				$this->error('添加失败');
			}
		}
		else
		{
			$this->error('不要做伤天害理的事情');
		}
	}

	//添加角色
	public function addRole()
	{
		$this->display();
	}

	//添加角色表单处理
	public function addRoleHandle()
	{
		if(IS_POST)
		{
			if(M('role')->add($_POST))
			{
				$this->success('添加成功',U(GROUP_NAME.'/Rbac/role'));
			}
			else
			{
				$this->error('添加失败');
			}
		}
		else
		{
			$this->error('不要做伤天害理的事情');
		}
	}

	//添加节点
	public function addNode()
	{
		$this->pid=I('pid',0,'intval');
		$this->level=I('level',1,'intval');
		switch ($this->level) {
			case 1:
				$this->type='应用';
				break;
			case 2:
				$this->type='控制器';
				break;
			case 3:
				$this->type='动作方法';
				break;
		}
		$this->display();
	}

	//添加节点表单处理
	public function addNodeHandle()
	{
		if(IS_POST)
		{
			if(M('node')->add($_POST))
			{
				$this->success('添加成功',U(GROUP_NAME.'/Rbac/node'));
			}
			else
			{
				$this->error('添加失败');
			}
		}
		else
		{
			$this->error('不要做伤天害理的事情');
		}
	}

	public function delNode()
	{
		$db=M('node');
		$nodes=$db->field('id')->select();
		import('Class.Category',APP_PATH);
		$nodes=Category::getChildrenId($nodes,I('id'));
		$nodes[]=I('id');
		if($db->where(array('id'=>array('IN',$nodes)))->delete())
		{
			$this->success('删除成功',U(GROUP_NAME.'/Rbac/node'));
		}
		else
		{
			$this->error('删除失败');
		}
	}

	//配置权限
	public function access()
	{
		$rid=I('rid',0,'intval');
		$node=M('node')->order('sort')->field(array('id','name','title','pid'))->select();

		//读取原有权限
		$access=M('access')->where(array('role_id'=>$rid))->getField('node_id',true);

		$this->node=node_merge($node,$access);
		$this->rid=$rid;
		$this->display();
	}

	//修改权限
	public function setAccess()
	{
		if(IS_POST)
		{
			$rid=I('rid',0,'intval');
			$data=array();
			foreach (I('post.access') as $v)
			{
				//组合新权限
				$tmp=explode('_', $v);
				$data[]=array(
						'role_id'=>$rid,
						'node_id'=>$tmp[0],
						'level'=>$tmp[1]
					);
			}
			$db=M('access');

			//先删除原有权限
			$db->where(array('role_id'=>$rid))->delete();

			//插入多个值
			if(count($data))
			{
				if($db->addAll($data))
				{
					$this->success('修改成功',U(GROUP_NAME.'/Rbac/role'));
				}
				else
				{
					$this->error('修改失败');
				}
			}
			else
			{
				$this->success('修改成功',U(GROUP_NAME.'/Rbac/role'));
			}
		}
		else
		{
			$this->error('不要做伤天害理的事情');
		}
	}

	//注销或恢复用户
	public function cancelUser()
	{
		$uid=I('uid');
		$valid=I('valid');
		$msg=$valid?'恢复':'注销';
		if(M('user')->where(array('id'=>$uid))->setField('valid',$valid))
		{
			$this->success($msg.'成功',U(GROUP_NAME.'/Rbac/index'));
		}
		else
		{
			$this->error($msg.'失败');
		}
	}
}

?>