<div class="instituicaos index">
	<h2><?php echo __('Instituicaos'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('nome'); ?></th>
			<th><?php echo $this->Paginator->sort('sigla'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($instituicaos as $instituicao): ?>
	<tr>
		<td><?php echo h($instituicao['Instituicao']['nome']); ?>&nbsp;</td>
		<td><?php echo h($instituicao['Instituicao']['sigla']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $instituicao['Instituicao']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $instituicao['Instituicao']['id'])); ?>
			
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
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Instituicao'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Participantes'), array('controller' => 'participantes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Participante'), array('controller' => 'participantes', 'action' => 'add')); ?> </li>
	</ul>
</div>
