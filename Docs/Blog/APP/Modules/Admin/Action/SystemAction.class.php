<?php

class SystemAction extends CommonAction
{
	public function verify()
	{
		$this->display();
	}

	public function updateVerify()
	{
		if(F('verify',I('post.'),CONF_PATH))
		{
			$this->success('修改成功',U(GROUP_NAME.'/System/verify'));
		}
		else
		{
			$this->error('修改失败，请修改'.CONF_PATH.'verify.php的权限');
		}
	}
}

?>