<?php

class CategoryAction extends CommonAction
{
	//分类列表
	public function index()
	{
		import('Class.Category',APP_PATH);
		$cate=M('cate')->order('sort ASC')->select();
		$this->cate=Category::unlimited4Level($cate,'&nbsp;&nbsp;--');
		$this->display();
	}

	//添加分类视图
	public function addCate()
	{
		$this->pid=I('pid',0,'intval');
		$this->display();
	}

	//添加分类表单处理
	public function runAddCate()
	{
		if(M('cate')->add(I('post.')))
		{
			$this->success('添加成功',U(GROUP_NAME.'/Category/index'));
		}
		else
		{
			$this->error('添加失败');
		}
	}

	public function soryCate()
	{
		$cate=M('cate');
		foreach (I('post.') as $id => $sort)
		{
			$cate->where(array('id'=>$id))->setField('sort',$sort);
		}
		$this->redirect(GROUP_NAME.'/Category/index');
	}
}

?>