<?php

class BlogRelationModel extends RelationModel
{
	protected $tableName='blog';

	protected $_link=array(
		'attr'=>array(
			'mapping_type'=>MANY_TO_MANY,
			'mapping_name'=>'attr',
			'foreign_key'=>'bid',
			'relation_foreign_key'=>'aid',
			'relation_table'=>'tb_blog_attr',
			),
		'cate'=>array(
			'mapping_type'=>BELONGS_TO,
			'foreign_key'=>'cid',
			'mapping_fields'=>'name',
			'as_fields'=>'name:cate',//这里可以把数组里的内容往上放一级，减少数组的维数
			)
		);

	public function getBlogs($delete=0)
	{
		$field=array('del');
		$where=array('del'=>$delete);
		return $this->relation(true)->field($field,true)->where($where)->select();
	}
}

?>