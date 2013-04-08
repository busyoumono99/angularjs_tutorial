<?php
$this->set('title_for_layout',Configure::read('Toutorial00.title'));

// AngularJS用の設定、コード。
$this->start('script');
// スクリプトを読み込む。
echo $this->Html->script('https://ajax.googleapis.com/ajax/libs/angularjs/1.0.5/angular.min.js') . "\n";
$this->end();
?>
<div class="ng-app">
	<p>まだここには、何も{{'ありません' + '!'}}</p>
	<P> 1 + 2 = {{1 + 2}} </ P>
</div>