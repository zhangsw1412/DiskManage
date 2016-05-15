<?php

/**
 * 后台首页控制器
 */
Class IndexAction extends CommonAction{
  /**
   * 首页视图
   * @return [type] [description]
   */
  public function index(){
     $this->display();
 }

 	public function logout()
 	{
 		session(null);
 		session('[destroy]');
 		$this->redirect(GROUP_NAME.'/Login/index');
 	}
}

?>