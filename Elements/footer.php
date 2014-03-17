<?php
/**
 * フッター
 */
?>
<footer>
<div class="footer">
	<hr />
	<?php $this->BcBaser->widgetArea() ?>
	
		<!--FB-->
	<div class="fb-root"></div>
	<script>(function(d, s, id) {
			var js, fjs = d.getElementsByTagName(s)[0];
			if (d.getElementById(id))
				return;
			js = d.createElement(s);
			js.id = id;
			js.src = "//connect.facebook.net/ja_JP/all.js#xfbml=1";
			fjs.parentNode.insertBefore(js, fjs);
		}(document, 'script', 'facebook-jssdk'));
	</script>
	<div class="fb-like-box fix_center" style="height:250px;display:block;" data-href="http://www.facebook.com/basercms" data-height="250" data-width="900" data-show-faces="true" data-show-border="false" data-stream="false" data-border-color="#fff" data-header="false"></div>
	<!--FB_END-->
	<div class="footer_navi">
		<?php $this->BcBaser->element('global_menu') ?>
	</div>
	<div class="footer_background" id="border_bottom">
		<p class="copyright">©Copyright 
			<?php $this->BcBaser->copyYear(2014) ?>
			nadaken All rights Reserved.
		</p>
	</div>
</div>
</footer>