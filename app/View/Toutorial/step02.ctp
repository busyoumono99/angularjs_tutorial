<?php
$this->set('title_for_layout',Configure::read('Toutorial02.title'));

// AngularJS用の設定、コード。
$this->start('script');
// スクリプトを読み込む。
echo $this->Html->script('https://ajax.googleapis.com/ajax/libs/angularjs/1.0.5/angular.min.js') . "\n";
echo $this->Html->script('step2/controllers.js') . "\n";
$this->end();
?>
<div class="ng-app">
	<div ng-controller="PhoneListCtrl">
		<h4>ビューとテンプレート</h4>
		<ul>
			<li ng-repeat="phone in phones">
				{{phone.name}}
				<p>{{phone.snippet}}</p>
			</li>
		</ul>

		<h4>以下実験</h4>
		<p>phones 合計: {{phones.length}}</p>
		<p>ハローって言わせる。{{hello}}</p>
		<p>テーブルで繰り返し。
		<table class="table">
			<tr>
				<th>行数</th>
			</tr>
			<tr ng-repeat="i in [0, 1, 2, 3, 4, 5, 6, 7]">
				<td>{{i}}</td>
			</tr>
		</table></p>
		<br>
		<p>もう一回、テーブルで繰り返し。+1してる
		<table class="table">
			<tr>
				<th>行数</th>
			</tr>
			<tr ng-repeat="i in [0, 1, 2, 3, 4, 5, 6, 7]">
				<td>{{i+1}}</td>
			</tr>
		</table></p>
	</div>




</div>