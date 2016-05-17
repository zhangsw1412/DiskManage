<?php

/**
 * 首页控制器
 */
Class IndexAction extends CommonAction
{
	/**
	 * 首页视图
	 * @return [type] [description]
	 */
	public function index()
	{
		layout("Layout/layout");
		$this->display();
	}

	public function test()
	{
		layout("Layout/standard");
		$this->display();
	}
}