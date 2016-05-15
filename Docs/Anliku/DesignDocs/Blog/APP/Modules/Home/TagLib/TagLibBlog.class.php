<?php

// import('TagLib');
/**
 * 自定义标签库
 */
class TagLibBlog extends TagLib
{
	protected $tags=array(
		'nav'=>array(
			'attr'=>'limit,order',
			'close'=>1,//闭合标签
			),
		);

	public function _nav($attr,$content)
	{
		$attr=$this->parseXmlAttr($attr);
		$str=<<<str
<?php
	\$_nav_cate=M('cate')->order("{$attr['order']}")->select();
	import('Class.Category',APP_PATH);
	\$_nav_cate=Category::unlimited4Layer(\$_nav_cate);
	foreach(\$_nav_cate as \$_nav_cate_v):
		extract(\$_nav_cate_v);
		\$url=U('/c_'.\$id);
?>
str;
		$str.=$content;
		$str.='<?php endforeach;?>';
		return $str;
	}
}

?>