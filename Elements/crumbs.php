<?php
$crumbs = $this->BcBaser->getCrumbs();
if (!empty($crumbs)) {
	foreach ($crumbs as $key => $crumb) {
		print_r ($crumb);
		if ($this->BcArray->last($crumbs, $key + 1)) {
			if ($crumbs[$key + 1]['name'] == $crumb['name']) {
				continue;
			}
		}
		if ($this->BcArray->last($crumbs, $key)) {
			if ($this->viewPath != 'home' && $crumb['name']) {
				$this->BcBaser->addCrumb($crumb['name']);
			} elseif ($this->name == 'CakeError') {
				$this->BcBaser->addCrumb('<strong>404 NOT FOUND</strong>');
			}
		} else {
			$this->BcBaser->addCrumb($crumb['name'], $crumb['url']);
		}
	}
}
$this->BcBaser->crumbs(' &gt; ', 'ホーム');
