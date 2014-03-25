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
				<?php
					$url = ((!empty($_SERVER['HTTPS'])) ? "https://" : "http://") . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];
					$title = urlencode($this->BcBaser->getTitle());
					echo " <a href=\"http://twitter.com/share?text={$title}&amp;url={$url}\">";
					$this->BcBaser->img("maru_icon_twitter.png",array("title"=>"ツイートする","alt"=>"(t)"));
					echo "</a>";
					echo " <a href=\"http://www.facebook.com/sharer.php?u={$url}&amp;t={$title}\">";
					$this->BcBaser->img("maru_icon_facebook.png",array("title"=>"Facebookでシェアする","alt"=>"(f)"));
					echo "</a>";
				?>
				<a title="Google+でシェア" href="https://plus.google.com/share?url=<?php echo $url; ?>" onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=600');return false;">
				<?php $this->BcBaser->img("maru_icon_google.png",array("title"=>"Google+でシェアする","alt"=>"+1")); ?>
				</a>
				<?php 
				$image = $this->BcBaser->getImg("maru_icon_mail.png",array("title"=>"お問い合わせ","alt"=>"Mail"));
				$this->BcBaser->link($image, "/contact/index")
				?>

			</div>
		</div>
	</div>
</header>