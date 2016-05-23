<?php

/**
 * 文件管理控制器
 */
class FileManageAction extends Action
{
	public function index()
	{
		
	}

	/**
	 * 浏览目录视图
	 * @return [type] [description]
	 */
	public function browseDir()
	{
		layout('Layout/standard');
		$this->display();
	}
}