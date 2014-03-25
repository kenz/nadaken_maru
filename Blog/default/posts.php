<?php
/**
 * [TOP] トップページタイトル一覧
 */
?>

<?php if(empty($posts)): ?>
<?php else: ?>
	<div class="container fix_center non_text">

	<?php foreach($posts as $key => $post): ?>
		<div class="article">
		<?php 
		/**
		 * 横は縮小 縦はトリミングで取り出し、記事へのリンクを貼るeyeCatch
		 */
		$this->BcBaser->element('eyeCatch2',array("post"=>$post));
		
		// タグのテキストをただ取り出しているだけ・・・		
		$tags = split(",",(strip_tags(str_replace(" ","",$this->Blog->getTag($post)))));
		if(count($tags)>1){
			echo "<div class=\"tags\">";
			foreach($tags as $tagKey => $tag){
				if($tag==="NEW"){
					echo "<div class=\"new\">New</div>";
					break;
				}
			}
			echo "</div>";
		}
		?>
		</div>

	<?php endforeach; ?>
	</div>
	<?php $this->BcBaser->element('totop'); ?>
<?php endif; 

