<?php

/**
 * 系统配制控制器
 */
class SystemConfigAction extends Action
{
	public function index()
	{

	}

	/**
	 * 初始化参数配置页
	 * @return [type] [description]
	 */
	public function initParams()
	{
		layout("Layout/standard");
		$this->display();
	}

	/**
	 * 将初始化参数写入数据库
	 * @return [type] [description]
	 */
	public function writeInitParams()
	{
		if(IS_POST)
		{
			$rackParams=M('init_params');
			$result=$rackParams->find(1);
			if(!$result)
				$this->error('数据库查询出错');
			$data=array(
				'id' => 1,
				'write_channel_timeout' => I('post.write_channel_timeout'),
				'readCacheSize' => I('post.readCacheSize'),
				'NFS_read_size' => I('post.NFS_read_size'),
				'NFS_write_size' => I('post.NFS_write_size'),
				'readCachePre' => I('post.readCachePre'),
				'writeCachePre' => I('post.writeCachePre'),
				'isoPre' => I('post.isoPre'),
				'linkPre' => I('post.linkPre'),
				'dirPre' => I('post.dirPre')
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

	/**
	 * 机架参数配置页
	 * @return [type] [description]
	 */
	public function rackParams()
	{
		layout("Layout/standard");
		$this->display();
	}

	/**
	 * 将机架参数写入数据库
	 * @return [type] [description]
	 */
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
			F('sysparam',I('post.'),CONF_PATH);
			$this->success('配置成功');
		}
		else
		{
			$this->error('出错啦');
		}
	}
}