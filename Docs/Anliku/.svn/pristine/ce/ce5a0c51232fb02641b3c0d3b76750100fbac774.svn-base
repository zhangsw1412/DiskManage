<?php

/**
 * 首页控制器
 */
Class IndexAction extends Action{
  /**
   * 首页视图
   * @return [type] [description]
   */
	public function index(){
		if(!$popular=S('index_popular'))
		{
			$popular=M('case')->order('click DESC')->field('title,summary')->limit(3)->select();
			for($i=0;$i<sizeof($popular);$i++)
			{
				$popular[$i]['title']=$this->format(htmlspecialchars_decode($popular[$i]['title']));
				$popular[$i]['summary']=htmlspecialchars_decode($popular[$i]['summary']);
				$popular[$i]['summary']=$this->format($popular[$i]['summary']);
				if(strlen($popular[$i]['summary'])>45){
					$popular[$i]['summary']=mb_substr($popular[$i]['summary'],0,45);
					$popular[$i]['summary']=$popular[$i]['summary']."……";
				}
			}
			S('index_popular',$popular);
		}
		$this->popular=$popular;


		$anli=D('case');
		
		$goodAnli=$anli->order("click DESC")->where("del=0")->limit(8)->select();
		$newAnli=$anli->order("add_time DESC")->where("del=0")->limit(8)->select();
		$this->assign('goodAnli',$goodAnli);
		$this->assign('newAnli',$newAnli);
		$this->assign('menuName1','');
		$this->assign('menuUrl1','#');
		//p($anli);die;
		$this->display();
	}

	//获取分类
	public function getCates()
	{
		if(!$cates=S('menubar_cates'))
		{
			$cates=M('cate')->order('sort')->select();
			import('Class.Category',APP_PATH);
			$cates=Category::unlimited4Layer($cates);
			S('menubar_cates',$cates,600);
		}
		
		$this->ajaxReturn($cates,'JSON');
	}

	public function format($str){
		$res=preg_replace('/<.*?>/','',$str);
		return $res;
	}
}

?>