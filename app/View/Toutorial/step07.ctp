<?php
$this->set('title_for_layout',Configure::read('Toutorial06.title'));

// bodyの属性にng-appを設定する。
$this->start('body_attr');
echo 'ng-app="phonecat"';
$this->end();

// AngularJS用の設定、コード。
$this->start('script');
// スクリプトを読み込む。
$files = array('https://ajax.googleapis.com/ajax/libs/angularjs/1.0.5/angular.min.js','step7/vars.js','step7/app.js','step7/controllers.js');
echo $this->Html->script($files) . "\n";
// echo $this->Html->script('https://ajax.googleapis.com/ajax/libs/angularjs/1.0.5/angular.min.js') . "\n";
// echo $this->Html->script('step7/app.js') . "\n";
// echo $this->Html->script('step7/controllers.js') . "\n";

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
<div class="row-fluid" >
    <div class="span12" >
        <div ng-view></div>
    </div>
</div>

