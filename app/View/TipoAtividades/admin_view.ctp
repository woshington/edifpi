<div class="tipoAtividades view">
<h2><?php echo __('Tipo Atividade'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($tipoAtividade['TipoAtividade']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Descricao'); ?></dt>
		<dd>
			<?php echo h($tipoAtividade['TipoAtividade']['descricao']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Agrupar'); ?></dt>
		<dd>
			<?php echo h($tipoAtividade['TipoAtividade']['agrupar']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Tipo Atividade'), array('action' => 'edit', $tipoAtividade['TipoAtividade']['id'])); ?> </li>				
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Atividades'); ?></h3>
	<?php if (!empty($tipoAtividade['Atividade'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Titulo'); ?></th>
		<th><?php echo __('Descricao'); ?></th>
		<th><?php echo __('Tipo Atividade Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($tipoAtividade['Atividade'] as $atividade): ?>
		<tr>
			<td><?php echo $atividade['id']; ?></td>
			<td><?php echo $atividade['titulo']; ?></td>
			<td><?php echo $atividade['descricao']; ?></td>
			<td><?php echo $atividade['tipo_atividade_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'atividades', 'action' => 'view', $atividade['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'atividades', 'action' => 'edit', $atividade['id'])); ?>				
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		
	</div>
</div>
