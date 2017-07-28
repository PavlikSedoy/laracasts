<html>
	<head>
		<title>1</title>
	</head>
	<body>
		<ul>
			<?php foreach ($tasks as $task): ?>
				<?php if ($task->completed == 1): ?>
					<li><strike><?= $task->description ?></strike></li>
				<?php else: ?>
					<li><?= $task->description ?></li>
				<?php endif; ?>
			<?php endforeach; ?>
		</ul>
	</body>
</html>