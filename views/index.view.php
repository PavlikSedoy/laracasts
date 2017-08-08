<?php require ('partials/head.php'); ?>

<ul>
	<?php foreach ($tasks as $task): ?>
		<?php if ($task->completed == 1): ?>
			<li><strike><?= $task->description ?></strike></li>
		<?php else: ?>
			<li><?= $task->description ?></li>
		<?php endif; ?>
	<?php endforeach; ?>
</ul>

<?php require ('partials/footer.php'); ?>