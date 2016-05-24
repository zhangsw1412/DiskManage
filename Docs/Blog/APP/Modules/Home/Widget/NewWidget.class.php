<?php

class NewWidget extends Widget
{
	//widget被调用时此方法会自动调用
	public function render($data)
	{
		//最新发布
		$limit=$data['limit'];
		$field=array('id','title','click');
		$data['new']=M('blog')->order('time DESC')->field($field)->limit($limit)->select();
		return $this->renderFile('',$data);
	}
}

?>