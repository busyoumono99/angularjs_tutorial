<?php
$siteTitle = Configure::read('Site.title');
?>
<!DOCTYPE html>
<html lang="ja">
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		<?php echo $siteTitle ?>:
		<?php echo $title_for_layout; ?>
	</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	 <?php
		echo $this->Html->meta('icon') . "\n";
		echo $this->Html->css(array('bootstrap.min','bootstrap-responsive')) . "\n";
		echo $this->fetch('meta') . "\n";
		echo $this->fetch('css') . "\n";
		echo $this->fetch('script') . "\n";
	?>
</head>
<body <?php echo $this->fetch('body_attr'); ?>>
	<?php echo $this->element('common_globalnav');?>
	<div class="container-fluid">
		<div class="row-fluid" <?php echo $this->fetch('mainrow_attr'); ?>>
			<div class="span12" >
				<?php echo $this->Session->flash('flash', array('class'=>'error')); ?>
			</div>
		</div><!--/row-->
<?php echo $this->fetch('content'); ?><!--/span content-->
		<hr>
		<footer>
			<div class="row">
				<div class="span12" style="text-align: center">copy right 入道雲工房 2013</div>
			</div>
		</footer>

	</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.1/jquery.min.js"></script>
<?php
echo $this->Html->script('bootstrap') . "\n";
echo $this->fetch('script2') . "\n";
?>
</body>
</html>
