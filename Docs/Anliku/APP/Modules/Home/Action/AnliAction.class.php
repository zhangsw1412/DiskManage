<?php

/**
 * 首页控制器
 */
Class AnliAction extends Action{
  /**
   * 首页视图
   * @return [type] [description]
   */
	public function index(){

		$anli=D('CaseRelation');
		// $type=I('get.type','');
		// $keyword=I('get.keyword','');
		// if($type!=''){
		// 	//查询
		// 	$count=$anli->where("del=0")->where($type." like '".$keyword."%'")->count();
		// }else{
		// 	$count=$anli->count();
		// }
		//
		$cate_id=I('cate_id');
		import('Class.Category',APP_PATH);
		$cate=M('cate')->order('sort')->select();

		$this->parents=Category::getParents($cate,$cate_id);

		$cids=Category::getChildrenId($cate,$cate_id);
		$cids[]=$cate_id;
		if(!empty($cate_id))
			$where=array('cate_id'=>array('IN',$cids),'del'=>0);
		else
			$where=array('del'=>0);
		$count=$anli->where($where)->count();

		$pagecount = 5;

		import("ORG.Util.Page2");
		$page = new Page2($count , $pagecount);

		//$addNum=empty($_GET['_URL_'][6])?1:$_GET['_URL_'][6];
		//if(I('get.first','')!='')$addNum=1;
		//$page->nowPage=$addNum;
		//$addNum=($addNum-1)*$pagecount;

		$page->setConfig('first','首页');
		$page->setConfig('prev','上一页');
		$page->setConfig('next','下一页');
		$page->setConfig('last','尾页');
		$page->setConfig('theme', '<li><a>%totalRow% %header%</a></li> %upPage% %first% %prePage%  %linkPage% %downPage% %nextPage% %end% ');
		//$page->setConfig('theme','%FIRST% %UP_PAGE% %LINK_PAGE% %DOWN_PAGE% %END% 第 '.I('p',1).' 页/共 %TOTAL_PAGE% 页 ( '.$pagecount.' 条/页 共 %TOTAL_ROW% 条)');

		$show = $page->show();


		$list = $anli->where($where)->limit($page->firstRow.','.$page->listRows)->relation(true)->select();
		for($i=0;$i<sizeof($list);$i++){
			$list[$i]['summary'] = $this->format(htmlspecialchars_decode($list[$i]['summary']));
			if(strlen($list[$i]['summary'])>60){
				$list[$i]['summary']=mb_substr($list[$i]['summary'],0,60);
				$list[$i]['summary']=$list[$i]['summary']."……";
			}
		}
		$this->assign('list',$list);
		//p($_GET);die();
		$this->assign('page',$show);
		
		if(!$new=S('anli_new'))
		{
			$new=M('case')->order('add_time DESC')->field('id,title')->limit(5)->select();
			for($i=0;$i<sizeof($new);$i++)
			{
				$new[$i]['title']=$this->format(htmlspecialchars_decode($new[$i]['title']));
			}
			S('anli_new',$new);
		}
		$this->new=$new;

		$this->display();
	}

	public function info(){
		$anli=D('CaseRelation');

		//设置点击量
		$anli->where(array('id'=>I('anliid')))->setInc('click',1);

		$result=$anli->relation(true)->find(I('anliid'));

		$cid=$result['cate_id'];
		import('Class.Category',APP_PATH);
		$cate=M('cate')->order('sort')->select();
		$this->parents=Category::getParents($cate,$cid);
		$this->assign('anliInfo',$result);
		// $this->assign('menuName1','案例列表');
		// $this->assign('menuUrl1','/Anli/index');
		$this->display();
	}

	public function format($str){
		$res=preg_replace('/<.*?>/','',$str);
		//p($res);die;
		return $res;
	}

	//查询案例的表单处理
	public function search()
	{
		$type=I('type');
		$keyword=I('keyword');

		$db=M('');
		$condition=$type=='cate'?'tb_cate.name':$type;
		$query="select count(*) as c from tb_case left join tb_cate on tb_case.cate_id= tb_cate.id where del=0 and $condition like '$keyword%'";
		$result=$db->query($query);
		$count=$result[0]['c'];
		$pagecount=20;

		import("ORG.Util.Page2");
		$page = new Page2($count , $pagecount);
		$page->setConfig('first','首页');
		$page->setConfig('prev','上一页');
		$page->setConfig('next','下一页');
		$page->setConfig('last','尾页');
		$page->setConfig('theme', '<li><a>%totalRow% %header%</a></li> %upPage% %first% %prePage%  %linkPage% %downPage% %nextPage% %end% ');
		$show = $page->show();
		$this->page=$show;

		$query="select tb_case.*,tb_cate.name as cate from tb_case left join tb_cate on tb_case.cate_id= tb_cate.id where del=0 and $condition like '$keyword%' limit ".$page->firstRow.",".$page->listRows;
		$list=$db->query($query);
		for($i=0;$i<sizeof($list);$i++){
			$list[$i]['summary'] = $this->format(htmlspecialchars_decode($list[$i]['summary']));
			if(strlen($list[$i]['summary'])>60){
				$list[$i]['summary']=mb_substr($list[$i]['summary'],0,60);
				$list[$i]['summary']=$list[$i]['summary']."……";
			}
		}
		$this->list=$list;
		$this->parents=array(0=>array('name'=>'搜索结果'));
		if(!$new=S('anli_new'))
		{
			$new=M('case')->order('add_time DESC')->field('id,title')->limit(5)->select();
			for($i=0;$i<sizeof($new);$i++)
			{
				$new[$i]['title']=$this->format(htmlspecialchars_decode($new[$i]['title']));
			}
			S('anli_new',$new);
		}
		$this->new=$new;
		$this->display("index");
	}
}

?>
