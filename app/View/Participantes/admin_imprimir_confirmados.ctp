
<center>
	<table cellpadding="0" cellspacing="0" border='1px;'>
		<caption style="position: relative; left: -100px;">
			Confirmados
		</caption>
		<thead>
			<tr>
				<th>Nome</th>
				<th>Assinatura</th>
			</tr>
		</thead>
		<tbody>
		<?php $i = 0;?>
		<?php foreach ($inscricaos as $participante): ?>
			<?php $i++; ?>
			<tr>
				<td><?php echo h($participante['Participante']['nome']); ?>&nbsp;</td>			
				<td>______________________________________________</td>			
			</tr>
		<?php endforeach; ?>
		</tbody>
		<tfoot>
			<tr>
				<td>Total: </td>
				<td align="right"><?=$i?></td>
			</tr>
		</tfoot>
	</table>
</center>