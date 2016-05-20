<?php

/**
 * 系统配制控制器
 */
class SystemConfigAction extends Action
{
	public function index()
	{

	}


	public function initParams()
	{
		layout("Layout/standard");
		$this->display();
	}

	/**
	 * 机架参数配置页
	 * @return [type] [description]
	 */
	public function rackParams()
	{
		layout("Layout/standard");
		$this->display();
	}

	public function writeRackParams()
	{
		if(IS_POST)
		{
			$rackParams=M('rack_params');
			$result=$rackParams->find(1);
			if(!$result)
				$this->error('数据库查询出错');
			$data=array(
				'id' => 1,
				'box_cds' => I('post.box_cds'),
				'rows' => I('post.rows'),
				'layers' => I('post.layers'),
				'columns' => I('post.columns'),
				'eachBlockSize' => I('post.eachBlockSize'),
				'eachCdSize' => I('post.eachCdSize')
				);
			if($rackParams->save($data)===false)
				$this->error('写入数据库失败');
			$this->success('配置成功');
		}
		else
		{
			$this->error('出错啦');
		}
	}
}