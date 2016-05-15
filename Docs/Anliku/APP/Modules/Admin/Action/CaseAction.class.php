<?php

class CaseAction extends CommonAction
{
	//案例列表
	public function index()
	{
		import('ORG.Util.Page');
		$count=M('case')->where(array('del'=>0))->count();
		$page=new Page($count,20);
		$limit=$page->firstRow.','.$page->listRows;
		$this->case=D('CaseRelation')->getCases($limit);
		$this->page=$page->show();
		$this->display();
	}

	//添加案例
	public function addCaseIndex()
	{
		//案例所属分类
		$cate=M('cate')->order('sort')->select();
		import('Class.Category',APP_PATH);
		$this->cate=Category::unlimited4Level($cate);

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
		if(M('case')->save($update))
		{
			$this->success($msg.'成功',U(GROUP_NAME.'/Case/index'));
		}
		else
		{
			$this->error($msg.'失败');
		}
	}

	//回收站
	public function trash()
	{
		import('ORG.Util.Page');
		$count=M('case')->where(array('del'=>1))->count();
		$page=new Page($count,20);
		$limit=$page->firstRow.','.$page->listRows;
		$this->case=D('CaseRelation')->getCases($limit,1);
		$this->page=$page->show();
		$this->display('index');
	}

	//彻底删除案例
	public function delete()
	{
		$id=I('id');
		$result=M('case')->field('content_url,doc_url,attachment_url,pic_url')->find($id);//p(empty($result['content_url'])?:);die();
		if(!empty($result['content_url']))unlink('./Uploads/'.$result['content_url']);
		if(!empty($result['doc_url']))unlink('./Uploads/'.$result['doc_url']);
		if(!empty($result['attachment_url']))unlink('./Uploads/'.$result['attachment_url']);
		if(!empty($result['pic_url']))unlink('./Uploads/'.$result['pic_url']);
		if(M('case')->delete($id))
		{
			// M('case_attr')->where(array('bid'=>$id))->delete();
			$this->success('删除成功',U(GROUP_NAME.'/Case/trash'));
		}
		else
		{
			$this->error('删除失败');
		}
	}

	//添加案例表单处理
	public function addCase()
	{
		$data=array(
			'case_no'=>date('YmdHis',time()),
			'title'=>I('post.title'),
			'cate_id'=>(int)I('post.cid'),
			'author'=>I('post.author'),
			'department'=>I('post.department'),
			'key_words'=>I('post.key_words'),
			'course'=>I('post.course'),
			'summary'=>I('post.summary')
			);

		import('ORG.Net.UploadFile');
		$upload=new UploadFile();
		foreach ($_FILES as $key => $value) 
		{
			if(!empty($value['name']))
			{
				$upload->savePath='./Uploads/';
				$upload->autoSub=true;
				$upload->subType='date';
				$upload->uploadReplace=true;
				$upload->saveRule=$this->reName($data['case_no'],$key);
				$info=$upload->uploadOne($value);
				if(is_array($info))
				{
					$data[$key.'_url']=$info[0]['savename'];
				}
				else
				{
					$this->error($upload->getErrorMsg().$key);
				}
			}
		}

		if($bid=M('case')->add($data))
		{
			// if(isset($_POST['aid']))
			// {
			// 	$sql='insert into '.C('DB_PREFIX').'case_attr (bid,aid) values ';
			// 	foreach($_POST['aid'] as $v)
			// 	{
			// 		$sql .= '('.$bid.','.$v.'),';
			// 	}
			// 	$sql=rtrim($sql,',');
			// 	M('case_attr')->query($sql);
			// }
			$this->success('添加成功',U(GROUP_NAME.'/Case/index'));
		}
		else
		{
			$this->error(M('case')->getDbError());
		}

	}

	protected function reName($no,$type)
	{
		return $no.$type;
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