<!DOCTYPE html>
<html>
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		
		<?php echo $title_for_layout; ?>
	</title>
	<?php
		echo $this->Html->meta('icon');

		echo $this->Html->css('cake.generic');
		echo $this->Html->script(array('jquery-2.0.3.min', 'maskedinput'));
		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
	?>

</head>
<body>
	<div id="container">
		<div id="header">
			<h1>EDIFPI 2013</h1>
			<span style="position: absolute; right: 15px; top: 7px; ">
			<?php 
				if(isset($logado)):
					echo $logado['nome'] . " - ". $this->Html->link('logout', array('controller'=>'participantes','action'=>'logout','admin'=>0));
				else:
					echo $this->Html->link('login', array('controller'=>'participantes','action'=>'login','admin'=>0));
				endif;
			?>
			</span>
		</div>
		<div id="content">			
			<?php echo $this->Session->flash(); ?>

			<?php echo $this->fetch('content'); ?>
		</div>
		<div id="footer">
			<center><h2>EDIFPI 2013 - Campus Picos</h2></center>
		</div>
	</div>
	<?php //echo $this->element('sql_dump'); ?>
</body>
</html>
