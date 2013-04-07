<?php
//	ヘッダータイトル用の変数
$brand = array( 'title' => 'AngularJS tutorial', 'url' => '/',/*'img'=>'sun_light.png'*/);
// debug($this);die;
// $cookieUserName =

//	グローバルナビゲーション用のリンク先配列
$links = array(
	array( 'title' => 'ホーム', 'url' => '/'),
	'Toutorial'	=> array(
				array( 'title' => '0 - Bootstrapping', 'url' => '/toutorial0'),
				array( 'title' => '1 - Static Template', 'url' => '/toutorial1'),
			),
	array( 'title' => 'このサイトについて', 'url' => '/sites/about'),
);
echo $this->B99TwitterBootstrap->naviBar($brand, $links, null,false,null,null);
?>
