<?php
/**
* 記事本文にリンクが貼られDIVタグで囲まれたeyecatchを出力します。
* 引数:$post 記事
*/
$eyeCatch = $this->Blog->getEyeCatch($post, array('link'=>false,"alt"=>$this->Blog->getPostTitle($post,false),"title"=>$this->Blog->getPostTitle($post,false)));

echo "<div class=\"eyeCatch\">";
if($eyeCatch){
	$this->Blog->postLink($post,$eyeCatch);
}else{
	$dummy = $this->BcBaser->getImg("please_click.jpg",array("alt"=>$this->Blog->getPostTitle($post,false),"title"=>$this->Blog->getPostTitle($post,false)));
	$this->Blog->postLink($post,$dummy);
}
echo "</div>";
