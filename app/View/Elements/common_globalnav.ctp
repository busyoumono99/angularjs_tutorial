<?php
//	ヘッダータイトル用の変数
$brand = array( 'title' => Configure::read('Site.title'), 'url' => '/',/*'img'=>'sun_light.png'*/);
//	グローバルナビゲーション用のリンク先配列
$links = array(
	array( 'title' => 'ホーム', 'url' => '/'),
	'Toutorial'	=> array(
				array( 'title' => Configure::read('Toutorial00.title'), 'url' => '/toutorial/step00/'),
				array( 'title' => Configure::read('Toutorial01.title'), 'url' => '/toutorial/step01/'),
				array( 'title' => Configure::read('Toutorial02.title'), 'url' => '/toutorial/step02/'),
				array( 'title' => Configure::read('Toutorial03.title'), 'url' => '/toutorial/step03/'),
				array( 'title' => Configure::read('Toutorial04.title'), 'url' => '/toutorial/step04/'),
				array( 'title' => Configure::read('Toutorial05.title'), 'url' => '/toutorial/step05/'),
				array( 'title' => Configure::read('Toutorial06.title'), 'url' => '/toutorial/step06/'),
				array( 'title' => Configure::read('Toutorial07.title'), 'url' => '/toutorial/step07/'),
				array( 'title' => Configure::read('Toutorial08.title'), 'url' => '/toutorial/step08/'),
				array( 'title' => Configure::read('Toutorial09.title'), 'url' => '/toutorial/step09/'),
				array( 'title' => Configure::read('Toutorial10.title'), 'url' => '/toutorial/step10/'),
				array( 'title' => Configure::read('Toutorial11.title'), 'url' => '/toutorial/step11/'),
				array( 'title' => Configure::read('Toutorial12.title'), 'url' => '/toutorial/step12/'),
			),
	'JSON' => array(
				array( 'title' => 'JSON Phones', 'url' => '/json/api_get2/phones'),
		),
	array( 'title' => 'このサイトについて', 'url' => '/sites/about'),
);
echo $this->B99TwitterBootstrap->naviBar($brand, $links, null,false,null,null);
?>
