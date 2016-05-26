<?php

    /**
     * 光盘库控制控制器
     */
    class DiskControlAction extends Action
    {
        public function index()
        {

        }

        /**
         * 光盘库状态显示
         *
         * @return [type] [description]
         */
        public function diskStatus()
        {
            $where=array();
            if(I('post.rackId')!=='') $where['rackId']=(int)I('post.rackId');
            if(I('post.layerNum')!=='') $where['layerNum']=(int)I('post.layerNum');
            if(I('post.columnNum')!=='') $where['columnNum']=(int)I('post.columnNum');
            if(I('post.rowNum')!=='') $where['rowNum']=(int)I('post.rowNum');
            if(I('post.cdNum')!=='') $where['cdNum']=(int)I('post.cdNum');

            import('Class.Page',APP_PATH);
            $count=M('cdmodel')->where($where)->count();
            $page=new Page($count,15);
            $limit=$page->firstRow.','.$page->listRows;
            $cds=M('cdmodel')->where($where)->field('id',true)->limit($limit)->order('rackId,layerNum,columnNum,rowNum,cdNum')->select();
            if($cds===false) $this->error('数据库查询失败');
            $this->cds=$cds;
            $this->page=$page->show();

            layout('Layout/standard');
            $this->display();
        }

        /**
         * 盘片详情信息
         * @return [type] [description]
         */
        public function diskDetail()
        {
            $rackId=(int)I('get.rackId');
            $layerNum=(int)I('get.layerNum');
            $columnNum=(int)I('get.columnNum');
            $rowNum=(int)I('get.rowNum');
            $cdNum=(int)I('get.cdNum');

            $where=array(
                    'tb_blockmodel.rackId'=>$rackId,
                    'tb_blockmodel.layerNum'=>$layerNum,
                    'tb_blockmodel.columnNum'=>$columnNum,
                    'tb_blockmodel.rowNum'=>$rowNum,
                    'tb_blockmodel.cdNum'=>$cdNum
                );

            import('Class.Page',APP_PATH);
            $count=M('blockmodel')->join('LEFT JOIN tb_filemodel ON tb_blockmodel.fileId=tb_filemodel.fileId')->where($where)->count();
            $page=new Page($count,15);
            $limit=$page->firstRow.','.$page->listRows;
            
            $blocks=M('blockmodel')->join('tb_filemodel ON tb_blockmodel.fileId=tb_filemodel.fileId')->where($where)->field('tb_blockmodel.fileId,blockOffset,fileName')->limit($limit)->select();
            if($blocks===false) $this->error('数据库查询失败');
            $this->blocks=$blocks;
            $this->page=$page->show();
            $this->rackId=$rackId;
            $this->layerNum=$layerNum;
            $this->columnNum=$columnNum;
            $this->rowNum=$rowNum;
            $this->cdNum=$cdNum;
            $this->step=$page->firstRow/$page->listRows+1;

            layout('Layout/standard');
            $this->display();
        }

        /**
         * 请求饼图数据
         * @return [type] [description]
         */
        public function usageData()
        {
            $box_cds=(int)C('box_cds');
            $rows=(int)C('rows');
            $layers=(int)C('layers');
            $columns=(int)C('columns');
            $total=$box_cds*$rows*$layers*$columns;
            $used=M('cdmodel')->count();
            $succ=(int)M('cdmodel')->where(array('isBurnSuccess'=>1))->count();
            $fail=$used-$succ;
            $unused=$total-$used;
            $this->ajaxReturn(['succ'=>$succ,'fail'=>$fail,'unused'=>$unused],'json');
        }

        /**
         * 服务控制
         * @return [type] [description]
         */
        public function service()
        {
			//TODO:complete the service control
            exec('ls -la',$result,$status);
            p($status);
            $to="zhangshanwen@mioji.com";
            $subject="Service Start";
            $message="The NFS service is started successfully at ".date('Y-m-d H:i:s',time());
			$result=sendMail($to,'zhangsw',$subject,$message);
			if($result!==true)
				var_dump($result);
            layout('Layout/standard');
            $this->display();
        }
    }
