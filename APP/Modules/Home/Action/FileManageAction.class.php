<?php

/**
 * 文件管理控制器
 */
class FileManageAction extends Action
{
	public function index()
	{
		
	}

	/**
	 * 浏览目录视图
	 * @return [type] [description]
	 */
	public function browseDir($path='')
	{
		$path=empty($path)?C('ROOT_DIR'):$path;
		$filesInDir=scandir($path);
		$files=array();
		foreach($filesInDir as $file)
		{
			if($file=='.'||$file=='..') continue;
			$temp=array();
			$stat=stat($path.'/'.$file);
			if($file{0}==='.')
			{
				$temp['name']=substr_replace($file, "(", 0,1);
			}
			else
			{
				$temp['name']=$file;
			}
			$temp['isDir']=is_dir($path.'/'.$file)?1:0;
			$temp['size']=$stat['size'];
			$temp['atime']=$stat['atime'];
			$temp['mtime']=$stat['mtime'];
			$temp['ctime']=$stat['ctime'];

			$files[]=$temp;
		}
		clearstatcache();

		$this->path=str_replace('/', ')', $path);
		$this->files=$files;
		layout('Layout/standard');
		$this->display('browseDir');
	}

	/**
	 * 进入子目录
	 * @return [type] [description]
	 */
	public function enterDir()
	{
		$base=I('get.base');
		$sub=I('get.sub');
		$base=str_replace(')', '/', $base);
		if($sub{0}==='(')
			$sub=substr_replace($sub, ".", 0, 1);
		$this->browseDir($base.'/'.$sub);
	}

	/**
	 * 回到上级目录
	 * @return [type] [description]
	 */
	public function goBack()
	{
		$path=I('get.path');
		$path=explode(')', $path);
		array_pop($path);
		$path=join('/',$path);
		$path=strlen($path)<=strlen(C('ROOT_DIR'))?C('ROOT_DIR'):$path;
		$this->browseDir($path);
	}

	/**
	 * 创建目录
	 * @return [type] [description]
	 */
	public function createDir()
	{
		if(IS_POST)
		{
			$path=I('post.path');
			$path=explode(')', $path);
			$path=join('/',$path);
			$folderName=I('post.folderName');
			if(empty($folderName)||strpos($folderName, "/"))
				$this->error('文件夹名不合法');
			$pathFolder=$path.'/'.$folderName;
			if(is_dir($pathFolder))
				$this->error('文件夹已经存在');
			if(mkdir($pathFolder,0755,true))
				$this->success('创建成功');
			else
				$this->error('创建失败，请确认权限');
		}
		else
		{
			$this->error('出错啦');
		}
	}

	/**
	 * 文件上传	
	 * @return [type] [description]
	 */
	public function uploadFile()
	{
		if(IS_POST)
		{
			$path=I('post.path');
			$path=explode(')', $path);
			$path=join('/',$path);
			$path.='/';

			import('ORG.Net.UploadFile');
			$upload=new UploadFile();
			$upload->savePath=$path;
			$upload->autoSub=false;
			$upload->uploadReplace=true;
			$upload->saveRule=null;
			if($upload->upload())
			{
				$data['status']=0;
				$data['info']="";
				$this->ajaxReturn($data,'JSON');
			}
			else
			{
				$data['status']=1;
				$data['info']=$upload->getErrorMsg();
				$this->ajaxReturn($data,'JSON');
			}
		}
		else
		{
			$this->error('出错啦');
		}
	}

	/**
	 * 文件下载
	 * @return [type] [description]
	 */
	public function downloadFile()
	{
		$base=I('get.base');
		$sub=I('get.sub');
		$base=str_replace(')', '/', $base);
		if($sub{0}==='(')
			$sub=substr_replace($sub, ".", 0, 1);

        Log::write('下载文件'.$base.'/'.$sub,Log::INFO);
		import('ORG.Net.Http');
		$download=new Http();
		$download->download($base.'/'.$sub,$sub);
	}
}
