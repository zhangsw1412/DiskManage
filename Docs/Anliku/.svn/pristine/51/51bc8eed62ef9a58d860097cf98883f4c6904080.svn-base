<?php

class CaseRelationModel extends RelationModel
{
	protected $tableName='case';

	protected $_link=array(
		'attr'=>array(
			'mapping_type'=>MANY_TO_MANY,
			'mapping_name'=>'attr',
			'foreign_key'=>'bid',
			'relation_foreign_key'=>'aid',
			'relation_table'=>'tb_case_attr',
			),
		'cate'=>array(
			'mapping_type'=>BELONGS_TO,
			'foreign_key'=>'cate_id',
			'mapping_fields'=>'name',
			'as_fields'=>'name:cate',//这里可以把数组里的内容往上放一级，减少数组的维数
			)
		);

	public function getCases($limit='',$delete=0)
	{
		$field=array('del');
		$where=array('del'=>$delete);
		return $this->relation('cate')->field($field,true)->where($where)->limit($limit)->select();
	}
}

?>