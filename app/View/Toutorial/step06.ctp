<?php
$this->set('title_for_layout',Configure::read('Toutorial06.title'));

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
	<!-- <option value="" selected>unknown</option> -->
	<option value="name">アルファベット順</option>
	<option value="age" selected>新作順</option>
</select>

<p>
	orderProp is [{{orderProp}}]
</p>
<?php
$this->end();

// AngularJS用の設定、コード。
$this->start('script');
// スクリプトを読み込む。
echo $this->Html->script('https://ajax.googleapis.com/ajax/libs/angularjs/1.0.5/angular.min.js') . "\n";
echo $this->Html->script('step6/controllers.js') . "\n";
$this->end();

$this->start('css');
?>
<style type="text/css">
/* app css stylesheet */

body {
  /*padding-top: 20px;*/
}

.phones {
  list-style: none;
}

.thumb {
  float: left;
  margin: -1em 1em 1.5em 0em;
  padding-bottom: 1em;
  height: 100px;
  width: 100px;
}

.phones li {
  clear: both;
  height: 100px;
  padding-top: 15px;
}
</style>
<?php
$this->end();
?>
<div>
	<div ng-controller="PhoneListCtrl">
		<h4>ビューとテンプレート</h4>
		<ul class="phones">
			<li ng-repeat="phone in phones | filter:query | orderBy:orderProp" class="thumbnail">
				<a href="#/phones/{{phone.id}}" class="thumb"><img ng-src="/angularjs_tutorial/{{phone.imageUrl}}"></a>
				<a href="#/phones/{{phone.id}}">{{phone.name}}</a>
				<p>{{phone.snippet}}</p>
			</li>
		</ul>

		<!-- <h4>以下実験</h4>
		<p>  <div id="status-filter">JSON形式で表示: </div></p> -->
	</div>
</div>
