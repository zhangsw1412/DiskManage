<?php

/**
 * 首页控制器
 */
Class AboutAction extends Action{
  /**
   * 首页视图
   * @return [type] [description]
   */
	public function index(){
		$this->parents=array(0=>array('name'=>'联系我们'));
		$this->display();
	}
}

?>