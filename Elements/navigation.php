<?php
/**
 * navigate
 */
?>
<div class="navigation">
	<div class="fix_center">
		<div class="menu_left">
			<?php $this->BcBaser->element('global_menu') ?>
		</div>
		<div class="logo"><?php $this->BcBaser->logo() ?></div>
		<div class="menu_right">
			<ul><li><?php $this->BcBaser->link("お問い合わせ", "/contact/index") ?></li></ul>
			<div class="sidebox connection">
				<p class="company_name">
					office nadaken
				</p>
				<p class="tel">TEL <span class="number">092-000-5555</span></p>
				<p class="time">営業時間 平日9:30〜18:30</p>
				<p class="addrees">福岡県福岡市中央区中央0-00-00<br />ナダケンビルF1 <span class="map_link"><?php $this->BcBaser->link("MAP", "/company#map") ?></span></p>
			</div>
		</div>
	</div>
</div><!--sidemenu-->