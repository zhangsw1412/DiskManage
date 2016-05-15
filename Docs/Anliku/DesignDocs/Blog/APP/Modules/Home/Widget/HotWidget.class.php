<?php

class HotWidget extends Widget
{
	//widget被调用时此方法会自动调用
	public function render($data)
	{
		//热门博文
		$field=array('id','title','click');
		$data['blog']=M('blog')->order('click DESC')->field($field)->limit(5)->select();
		return $this->renderFile('',$data);
	}
}

?>