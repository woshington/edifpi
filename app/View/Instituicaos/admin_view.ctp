<div class="instituicaos view">
<h2><?php echo __('Instituicao'); ?></h2>
	<dl>
		<dt><?php echo __('Nome'); ?></dt>
		<dd>
			<?php echo h($instituicao['Instituicao']['nome']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Sigla'); ?></dt>
		<dd>
			<?php echo h($instituicao['Instituicao']['sigla']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Instituicao'), array('action' => 'edit', $instituicao['Instituicao']['id'])); ?> </li>
		
		<li><?php echo $this->Html->link(__('List Instituicaos'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Instituicao'), array('action' => 'add')); ?> </li>		
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Participantes'); ?></h3>
	<?php if (!empty($instituicao['Participante'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Nome'); ?></th>
		<th><?php echo __('Cpf'); ?></th>
		<th><?php echo __('Nascimento'); ?></th>
		<th><?php echo __('Instituicao Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($instituicao['Participante'] as $participante): ?>
		<tr>
			<td><?php echo $participante['id']; ?></td>
			<td><?php echo $participante['nome']; ?></td>
			<td><?php echo $participante['cpf']; ?></td>
			<td><?php echo $participante['nascimento']; ?></td>
			<td><?php echo $participante['instituicao_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'participantes', 'action' => 'view', $participante['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'participantes', 'action' => 'edit', $participante['id'])); ?>				
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		
	</div>
</div>
