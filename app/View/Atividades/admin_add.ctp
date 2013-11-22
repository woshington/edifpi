<div class="atividades form">
<?php echo $this->Form->create('Atividade'); ?>
	<fieldset>
		<legend><?php echo __('Admin Add Atividade'); ?></legend>
	<?php
		echo $this->Form->input('titulo');
		echo $this->Form->input('descricao');
		echo $this->Form->input('tipo_atividade_id');		
		echo $this->Form->input('turno', array(
			'type'=>'select',
			'options'=>array(
				'manha'=>'Manhã',
				'tarde'=>'Tarde',
				'noite'=>'Noite',
			)
		));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	
</div>
