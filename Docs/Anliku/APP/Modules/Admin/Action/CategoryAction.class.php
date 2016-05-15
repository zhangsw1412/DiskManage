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

	//修改栏目分类视图
	public function updateCate()
	{
		$this->cate=M('cate')->find(I('id'));
		$this->display();
	}

	//修改栏目分类处理
	public function updateCateHandle()
	{
		if(M('cate')->save(I('post.')))
		{
			$this->success('修改成功',U(GROUP_NAME.'/Category/index'));
		}
		else
		{
			$this->error('修改失败');
		}
	}

	//删除分类
	public function delCate()
	{
		$id=I('id');
		$db=M('cate');
		$result=$db->find($id);
		$db->where(array('pid'=>$id))->setField('pid',$result['pid']);
		M('case')->where(array('cate_id'=>$id))->setField('cate_id',$result['pid']==0?1:$result['pid']);
		if($db->delete($id))
		{
			$this->success('删除成功',U(GROUP_NAME.'/Category/index'));
		}
		else
		{
			$this->error('删除失败');
		}
	}

	public function sortCate()
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