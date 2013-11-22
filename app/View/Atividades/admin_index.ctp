<div class="atividades index">
	<h2><?php echo __('Atividades'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('titulo'); ?></th>
			<th><?php echo $this->Paginator->sort('descricao'); ?></th>
			<th><?php echo $this->Paginator->sort('tipo_atividade_id'); ?></th>
			<th><?php echo $this->Paginator->sort('turno'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($atividades as $atividade): ?>
	<tr>
		<td><?php echo h($atividade['Atividade']['id']); ?>&nbsp;</td>
		<td><?php echo h($atividade['Atividade']['titulo']); ?>&nbsp;</td>
		<td><?php echo h($atividade['Atividade']['descricao']); ?>&nbsp;</td>		
		<td>
			<?php echo $this->Html->link($atividade['TipoAtividade']['descricao'], array('controller' => 'tipo_atividades', 'action' => 'view', $atividade['TipoAtividade']['id'])); ?>
		</td>
		<td><?php echo h($atividade['Atividade']['turno']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $atividade['Atividade']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $atividade['Atividade']['id'])); ?>			
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>
	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">

</div>
