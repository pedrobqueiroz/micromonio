<?php $this->layout('layout', ['title' => 'Console', 'currentPage' => 'home']) ?>

<?php $this->start('main_content') ?>
			
	<?php foreach($allGames as $game): ?>
		<figure>
			<a href="#"><img src="<?= $game['vid_image'] ?>"></a>
			<figcaption><a href="#"><?= $game['vid_name'] ?></a></figcaption>
			<p><a href="#"><?= \Controller\VideogameController::getConsoleNameFromValue($game['vid_console']) ?></a></p>
		</figure>
	<?php endforeach; ?>

	<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<?php $this->stop('main_content') ?>