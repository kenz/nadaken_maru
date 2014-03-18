<?php
/**
 * ブログアーカイブ一覧
 */
$this->BcBaser->setDescription($this->Blog->getTitle() . '｜' . $this->BcBaser->getContentsTitle() . 'のアーカイブ一覧です。');
?>

<script type="text/javascript">
	$(function() {
		if ($("a[rel='colorbox']").colorbox)
			$("a[rel='colorbox']").colorbox({transition: "fade"});
	});
</script>
<nav>
<ul class="breadcrumb">
	<li><?php $this->BcBaser->link("home", "/") ?></li>
	<li><span class="current"><?php $this->BcBaser->contentsTitle() ?></span></li>		
</ul>
<div class ="blog_archives">
	<?php if (empty($posts)): ?>
	<?php else: ?>
		<div id="container" class="js-masonry" data-masonry-options='{ "columnWidth": 265, "itemSelector": ".article" }'>

			<?php foreach ($posts as $key => $post): ?>
				<div class="article">

					<?php
					/**
					 * 横は縮小 縦はトリミングで取り出し、記事へのリンクを貼るeyeCatch
					 */
					$this->BcBaser->element('eyeCatch2', array("post" => $post));

					// タグのテキストを取り出して配列に格納	
					$tags = split(",", (strip_tags(str_replace(" ", "", $this->Blog->getTag($post)))));
					$tagLinks = split(",", ($this->Blog->getTag($post)));

					if (count($tags) > 0) {
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
	<?php endif; ?>
<?php $this->BcBaser->pagination('simple'); ?>
</div>
</nav>