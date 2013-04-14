<?php
$this->set('title_for_layout',Configure::read('Toutorial03.title'));

// bodyの属性にng-appを設定する。
$this->start('body_attr');
echo 'ng-app';
$this->end();

// sidebarにinnput要素を追加
$this->start('sidebar');
?>
Search: <input ng-model="query">
<?php
$this->end();

// AngularJS用の設定、コード。
$this->start('script');
// スクリプトを読み込む。
echo $this->Html->script('https://ajax.googleapis.com/ajax/libs/angularjs/1.0.5/angular.min.js') . "\n";
echo $this->Html->script('step3/controllers.js') . "\n";
$this->end();
?>
<div>
	<div ng-controller="PhoneListCtrl">
		<h4>ビューとテンプレート</h4>
		<ul>
			<li ng-repeat="phone in phones | filter:query">
				{{phone.name}}
				<p>{{phone.snippet}}</p>
			</li>
		</ul>

		<h4>以下実験</h4>
		<p>  <div id="status">現在のフィルター: {{query}}</div></p>
	</div>
</div>
