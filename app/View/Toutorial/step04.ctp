<?php
$this->set('title_for_layout',Configure::read('Toutorial04.title'));

// bodyの属性にng-appを設定する。
$this->start('body_attr');
echo 'ng-app';
$this->end();

// sidebarにinnput要素を追加
$this->start('sidebar');
?>
Search: <input ng-model="query"><br>
<br>
Sort by:
<select ng-model="orderProp">
	<option value="" selected>unknown</option>
	<option value="name">アルファベット順</option>
	<option value="age">新作順</option>
</select>
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
			<li ng-repeat="phone in phones | filter:query | orderBy:orderProp">
				{{phone.name}}
				<p>{{phone.snippet}}</p>
			</li>
		</ul>

		<h4>以下実験</h4>
		<p>  <div id="status-filter">現在のフィルター: {{query}}</div></p>
		<p>  <div id="status-order">現在のソート順: {{orderProp}}</div></p>
	</div>
</div>
