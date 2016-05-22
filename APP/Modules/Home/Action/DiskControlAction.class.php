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
    }