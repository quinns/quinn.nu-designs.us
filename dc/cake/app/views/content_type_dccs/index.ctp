<div class="contentTypeDccs index">
<h2><?php __('ContentTypeDccs');?></h2>
<p>
<?php
echo $paginator->counter(array(
'format' => __('Page %page% of %pages%, showing %current% records out of %count% total, starting on record %start%, ending on %end%', true)
));
?></p>
<table cellpadding="0" cellspacing="0">
<tr>
	<th><?php echo $paginator->sort('nid');?></th>
	<th><?php echo 'Title'; ?></th>
	<th><?php echo 'Legacy URL'; ?></th>
	<th><?php echo $paginator->sort('field_legacy_company_id_value');?></th>
	<th class="actions"><?php __('Actions');?></th>
</tr>
<?php
$i = 0;
foreach ($contentTypeDccs as $contentTypeDcc):
	$class = null;
	if ($i++ % 2 == 0) {
		$class = ' class="altrow"';
	}
?>
	<tr<?php echo $class;?>>
		<td>
			<?php echo $contentTypeDcc['ContentTypeDcc']['nid']; ?>
		</td>
		<td>
			<?php echo $html->link($contentTypeDcc['Node']['title'], 'http://diamond.nu-designs.us/node/'.$contentTypeDcc['ContentTypeDcc']['nid']); ?>
		</td>
			<td>
			<?php echo $html->link($contentTypeDcc['CompaniesRegion']['legacy_url'], 'http://diamondcertified.org/'.$contentTypeDcc['CompaniesRegion']['legacy_url']); ?>
		</td>
				<td>
			<?php echo $contentTypeDcc['ContentTypeDcc']['field_legacy_company_id_value']; ?>
		</td>
		<td class="actions">
			<?php echo $html->link(__('View', true), array('action' => 'view', $contentTypeDcc['ContentTypeDcc']['nid'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
</table>
</div>
<div class="paging">
	<?php echo $paginator->prev('<< '.__('previous', true), array(), null, array('class'=>'disabled'));?>
 | 	<?php echo $paginator->numbers();?>
	<?php echo $paginator->next(__('next', true).' >>', array(), null, array('class' => 'disabled'));?>
</div>

