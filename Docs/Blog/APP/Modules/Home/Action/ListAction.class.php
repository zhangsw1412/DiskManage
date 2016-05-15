<?php
/**
 * 列表页控制器
 */
class ListAction extends Action
{
	public function index()
	{
		import('Class.Category',APP_PATH);
		import('ORG.Util.Page');
		$id=I('id');
		$cate=M('cate')->order('sort')->select();
		
		$cids=Category::getChildrenId($cate,$id);
		$cids[]=$id;
		$where=array('cid'=>array('IN',$cids));
		$count=M('blog')->where($where)->count();
		$page=new Page($count,15);
		$limit=$page->firstRow.','.$page->listRows;

		$this->blog=D('BlogView')->getAll($where,$limit);
		$this->page=$page->show();
		$this->display();
	}
}

?>