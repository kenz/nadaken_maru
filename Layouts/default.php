<?php
/**
 * ページ全体の処理を行っています
 */
/**
 * トップページに表示する記事の数を設定します
 */
$top_count = 9;
/**
 * BLOGページ内で表示する記事の数を設定します
 */
$blog_count = 9;
?>
<!DOCTYPE html>
<html lang="ja" xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta name="viewport" content="width=900" />

		<?php $this->BcBaser->charset() ?>
		<?php $this->BcBaser->title() ?>
		<?php $this->BcBaser->metaDescription() ?>
		<?php $this->BcBaser->metaKeywords() ?>
		<?php $this->BcBaser->icon() ?>
		<?php $this->BcBaser->rss('ニュースリリース RSS 2.0', '/news/index.rss') ?>
		<?php $this->BcBaser->css('style') ?>
		<?php $this->BcBaser->css('admin/colorbox/colorbox'); ?>
		<?php
		$this->BcBaser->js(array(
		    'admin/jquery-1.7.2.min',
		    'admin/jquery.colorbox-min-1.4.5',
		    'admin/functions',
		    'startup',
		))
		?>
		<?php $this->BcBaser->scripts() ?>
		<?php $this->BcBaser->element('google_analytics') ?>
	</head>
	<body id="<?php $this->BcBaser->contentsName() ?>">
		<?php $this->BcBaser->header() ?>
		<div class="page">
			<div class="main_content">
				<section>
					<?php
					if ($this->BcBaser->isHome()) {
						echo "<nav>";
						$this->BcBaser->blogPosts("data", $top_count, array("tag" => "TOP"));
						echo "</nav>";
					} else {
						echo "<div class=\"subpage fix_center\">";
						if ($this->BcBaser->isPage()) {
							$this->BcBaser->element('breadcrumb1');
							echo "<div class=\"static\">";
							echo "<h1>";
							$this->BcBaser->contentsTitle();
							echo "</h1>";
						}
						$this->BcBaser->content();
						if ($this->BcBaser->isPage()) {
							echo "</div>"; //static
							$this->BcBaser->element('totop');
							$this->BcBaser->blogPosts("data", $blog_count);
							$this->BcBaser->element('totop');
						}
						flush();
						$this->BcBaser->flash();
						$this->BcBaser->element('contents_navi');
						echo "</div>";
					}
					?>
				</section>
				<nav><?php $this->BcBaser->element('navigation') ?></nav>
			</div>

			<?php $this->BcBaser->footer() ?>
			<?php $this->BcBaser->func() ?>
			
		</div><!--Page-->	
		<div id="border_left"></div>
		<div id="border_right"</div>
		
		<script>
			$(function() {
				<?php 
				// 画像ファイルを左右の縮尺を合わせて上下をトリミングするための処理
				?>
				$(".img-eye-catch").on("load", function() {
					var ch = 165;
					var ih = ($(this).width() - ch) / 2;
					$(this).css("left", "-" + ih + "px");
				});
				<?php 
				// スマートURLを使用していない時にeye-catchが使用できないバグを回避するロジック
				?>				
				$('.img-eye-catch').error(function() {
					imageUrl = $(this).attr('src');
					i = location.href.lastIndexOf("index.php/");
					if(i===-1){
						imageUrl = "app/webroot"+imageUrl;
					}else{
						imageUrl = "../app/webroot"+imageUrl;
					}
					$(this).attr({
						src: imageUrl
					});
				});
			});
		</script>
	</body>
</html>
