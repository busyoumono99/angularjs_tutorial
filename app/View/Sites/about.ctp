<?php
//サイドバーを設定。変更履歴、を表示
$this->start('sidebar');
// echo $this->element('change_log');
$this->end();
?>


	<div>
		<h5>個人的なサイトです。</h5>
		<p>AngularJSの公式とは全く関係無いです。<br/>
		管理人が勉強がてらに勝手に作ったサイトです。<br/>
		また、このサイトの内容は正しいかは各自で判断して下さい。管理人は責任もてません。
		</p>
	</div>

	<div>
		<div>
			<h5>使用している技術について</h5>
			<p>Twitter Bootstrapを利用しています。超感謝！</p>
		</div>
	</div>
	<div>
		<h5>ツイッターアカウント</h5>
		もしよろしければ、管理人のツイッターアカウントをフォローして下さい。<br/>
		<?php echo $this->element('twitter_btn'); ?>
	</div>

