<?php

class BlogAction extends CommonAction
{
	//博文列表
	public function index()
	{
		$this->blog=D('BlogRelation')->getBlogs();
		$this->display();
	}

	//添加博文
	public function blog()
	{
		//博文所属分类
		$cate=M('cate')->order('sort')->select();
		import('Class.Category',APP_PATH);
		$this->cate=Category::unlimited4Level($cate);

		//博文属性
		$this->attr=M('attr')->select();

		$this->display();
	}

	//删除到回收站或从回收站还原
	public function toTrash()
	{
		$msg=I('type')?'删除':'还原';
		$update=array(
			'id'=>I('id'),
			'del'=>I('type')
			);
		if(M('blog')->save($update))
		{
			$this->success($msg.'成功',U(GROUP_NAME.'/Blog/index'));
		}
		else
		{
			$this->error($msg.'失败');
		}
	}

	//回收站
	public function trash()
	{
		$this->blog=D('BlogRelation')->getBlogs(1);
		$this->display('index');
	}

	//彻底删除博文
	public function delete()
	{
		$id=I('id');
		if(M('blog')->delete($id))
		{
			M('blog_attr')->where(array('bid'=>$id))->delete();
			$this->success('删除成功',U(GROUP_NAME.'/Blog/trash'));
		}
		else
		{
			$this->error('删除失败');
		}
	}

	//添加博文表单处理
	public function addBlog()
	{
		$data=array(
			'title'=>I('post.title'),
			'content'=>I('post.content'),
			'summary'=>I('post.summary'),
			'time'=>time(),
			'click'=>(int)I('post.click'),
			'cid'=>(int)I('post.cid')
			);
		if($bid=M('blog')->add($data))
		{
			if(isset($_POST['aid']))
			{
				$sql='insert into '.C('DB_PREFIX').'blog_attr (bid,aid) values ';
				foreach($_POST['aid'] as $v)
				{
					$sql .= '('.$bid.','.$v.'),';
				}
				$sql=rtrim($sql,',');
				M('blog_attr')->query($sql);
			}
			$this->success('添加成功',U(GROUP_NAME.'/Blog/index'));
		}
		else
		{
			$this->error('添加失败');
		}
	}

	//编辑器图片上传处理
	public function upload()
	{
		import('ORG.Net.UploadFile');
		$upload=new UploadFile();
		$upload->autoSub=true;
		$upload->subType='date';

		if($upload->upload('./Uploads/'))
		{
			$info=$upload->getUploadFileInfo();
			import('Class.Image',APP_PATH);
			Image::water('./Uploads/'.$info[0]['savename']);
			echo json_encode(array(
				'url'=>$info[0]['savename'],
				'title'=>htmlspecialchars($_POST['pictitle'],ENT_QUOTES),
				'original'=>$info[0]['name'],
				'state'=>'SUCCESS'
				));
		}
		else
		{
			echo json_encode(array(
				'state'=>$upload->getErrorMsg()
				));
		}
	}
}

?>