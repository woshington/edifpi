<div class="atividades view">
<h2><?php echo __('Atividade'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($atividade['Atividade']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Titulo'); ?></dt>
		<dd>
			<?php echo h($atividade['Atividade']['titulo']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Descricao'); ?></dt>
		<dd>
			<?php echo h($atividade['Atividade']['descricao']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Tipo Atividade'); ?></dt>
		<dd>
			<?php echo $this->Html->link($atividade['TipoAtividade']['descricao'], array('controller' => 'tipo_atividades', 'action' => 'view', $atividade['TipoAtividade']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Atividade'), array('action' => 'edit', $atividade['Atividade']['id'])); ?> </li>		
	</ul>
</div>
<div class="related">
	
</div>
