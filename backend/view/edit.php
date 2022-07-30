<?php require(ROOT . '/backend/view/header.php'); ?>

<?php if($tables): ?>
	<div class="container list-group">
		<?php foreach($tables as $table): ?>
			<a href="/admin/edit/<?php echo $table; ?>" class="list-group-item list-group-item-action"><?php echo $table; ?></a>
		<?php endforeach; ?>
	</div>
<?php endif; ?>	
<div class="container-fluid">
<?php if($rows): ?>
	<?php foreach ($fields as $field): ?>
		<?php if($field!=='id'){echo '<p class="field">'.$field.'</p>';} ?>
	<?php endforeach; ?>	
	
		<?php foreach($rows as $row): ?>
			<form action="" method="post">
				<?php foreach($fields as $field): ?>

							<input <? if($field=='id'){echo 'style="display:none"';} ?>type="text" name="<?php echo $field ?>" class="field" value="<?php echo $row[$field] ?>">	

				<?php endforeach; ?>
				<input type="submit" name="update" class="b-blue" value="сохранить">
				<input type="submit" name="delete" class="b-red" value="удалить" onclick="return confirm('Удалить?')">
			</form>
		<?php endforeach; ?>	
	</div>
<?php endif; ?>
