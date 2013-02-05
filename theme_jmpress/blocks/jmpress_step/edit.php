<?php  defined('C5_EXECUTE') or die("Access Denied.");
Loader::element('editor_config');
?>
<div class="ccm-block-field-group">
	<div class="control-group">
		<?php  Loader::element('editor_controls'); ?>
		<textarea id="content" name="content" class="ccm-advanced-editor"><?php  echo $content; ?></textarea>
	</div>
</div>
<div class="ccm-block-field-group">
	<h2><?php echo t('Step Attributes')?></h2>
	<table>
		<tbody>
			<tr>
				<th>data_x</th>
				<th>data_y</th>
				<th>data_z</th>
			</tr>
			<tr>
				<td><?php  echo $form->text('dataX', $dataX); ?></td>
				<td><?php  echo $form->text('dataY', $dataY); ?></td>
				<td><?php  echo $form->text('dataZ', $dataZ); ?></td>
			</tr>
			<tr>
				<th>data_scale</th>
				<th>data_rotate</th>
				<th></th>
			</tr>
			<tr>
				<td><?php  echo $form->text('dataScale', $dataScale); ?></td>
				<td><?php  echo $form->text('dataRotate', $dataRotate); ?></td>
				<td></td>
			</tr>
		</tbody>
	</table>
	<p><?php echo t('<a href="%s">Attributes documentation</a>', 'http://jmpressjs.github.com/docs/inline.html')?></p>
</div>
<div class="ccm-block-field-group">
	<h2><?php echo t('Box Style')?></h2>
	<?php  echo $form->radio('boxStyle', 0, $boxStyle); ?><?php echo t('default')?>
	<?php  echo $form->radio('boxStyle', 1, $boxStyle); ?><?php echo t('No border')?>
</div>
