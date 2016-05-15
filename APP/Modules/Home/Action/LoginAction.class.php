<?php

/**
 * 登陆控制器
 */
class LoginAction extends Action
{
	public function index()
	{
		layout(false);
		$this->display();
	}
}