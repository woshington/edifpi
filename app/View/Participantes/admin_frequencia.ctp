<div class="participantes index">
	<table cellpadding="0" cellspacing="0">
		<h2><?php echo __('Participantes'); ?></h2>		
		<tr>
			<th><?php echo 'nome'; ?></th>
		</tr>
		<?php foreach ($participantes as $participante): ?>
			<tr>
				<td><?php echo h($participante['Participante']['nome']); ?>&nbsp;</td>			
			</tr>
		<?php endforeach; ?>
	</table>		
</div>
<div class="actions">
	<ul>
		<?php 
			///pr($atividades);
			foreach ($atividades as $atividade) {
				if(!$atividade['TipoAtividade']['agrupar']){
					echo "<li>".
						$this->Html->link($atividade['Atividade']['titulo'], array(
							'controller'=>'participantes',
							'action'=>'frequencia',
							$atividade['Atividade']['id'],
							'admin'=>1
						)).
					"</li>";
				}
			}
			foreach ($tiposAgrupados as $id=>$tipo) {
				echo "<li>".
						$this->Html->link($tipo, array(
							'controller'=>'participantes',
							'action'=>'frequencia',
							$id,
							true,
							'admin'=>1
						)).
					"</li>";
			}
			
		?>
	</ul>
</div>
