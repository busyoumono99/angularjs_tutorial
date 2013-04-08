<?php
$this->set('title_for_layout',Configure::read('Toutorial01.title'));

// AngularJS用の設定、コード。
$this->start('script');
// スクリプトを読み込む。
echo $this->Html->script('https://ajax.googleapis.com/ajax/libs/angularjs/1.0.5/angular.min.js') . "\n";
$this->end();
?>
<div class="ng-app">
	<ul>
		<li>
			<span>Nexus S</span>
			<p>
				Fast just got faster with Nexus S.
			</p>
		</li>
		<li>
			<span>Motorola XOOM™ with Wi-Fi</span>
			<p>
				The Next, Next Generation tablet.
			</p>
		</li>
	</ul>

	<p>Total number of phones: 2</p>
</div>