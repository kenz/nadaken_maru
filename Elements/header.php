<?php
/**
 * ヘッダー
 */
?>
<header>
	<div class="header_back" id="border_top">
		<div class="header fix_center">

			<div class="search">
				<?php $this->BcBaser->element('search') ?>
			</div>
			<div class="sns">
				<a href="https://twitter.com/share" class="twitter-share-button" data-lang="ja" data-count="none" data-dnt="true">ツイート</a>
				<script>!function(d, s, id) {
				var js, fjs = d.getElementsByTagName(s)[0], p = /^http:/.test(d.location) ? 'http' : 'https';
				if (!d.getElementById(id)) {
					js = d.createElement(s);
					js.id = id;
					js.src = p + '://platform.twitter.com/widgets.js';
					fjs.parentNode.insertBefore(js, fjs);
				}
			}(document, 'script', 'twitter-wjs');</script>	
				<div class="fb-like" data-layout="button" data-action="like" data-show-faces="false" data-share="false"></div>
			</div>
		</div>
	</div>
</header>