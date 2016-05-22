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
            import('Class.Page',APP_PATH);
            $count=M('cdmodel')->count();
            $page=new Page($count,15);
            $limit=$page->firstRow.','.$page->listRows;
            $cds=M('cdmodel')->field('id',true)->limit($limit)->order('rackId,layerNum,columnNum,rowNum,cdNum')->select();
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
    }