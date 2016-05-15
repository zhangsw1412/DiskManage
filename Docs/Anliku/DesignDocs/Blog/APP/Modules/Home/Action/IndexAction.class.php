<?php
/**
 * 前台首页控制器
 */
class IndexAction extends Action
{
	public function index()
	{
		if(!$list=S('index_list'))
		{
			$list=M('cate')->where(array('pid'=>0))->order('sort')->select();
			import('Class.Category',APP_PATH);
			$cate=M('cate')->order('sort')->select();
			$blog=M('blog');
			foreach($list as $k=>$v)
			{
				$cids=Category::getChildrenId($cate,$v['id']);
				$cids[]=$v['id'];
				$list[$k]['blog']=$blog->field(array('id','title','time'))->where(array('cid'=>array('IN',$cids)))->order('time DESC')->select();
			}
			S('index_list',$list,3600);//生成缓存,第一个参数是缓存名字,第二个参数是缓存的内容,第三个参数是缓存时间
		}
		$this->cate=$list;
		$this->display();
	}
}

?>