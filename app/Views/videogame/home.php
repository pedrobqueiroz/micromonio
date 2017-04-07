<?php $this->layout('layout', ['title' => 'Home', 'currentPage' => 'home']) ?>

<?php $this->start('main_content') ?>
	<div class="flex">			
		<?php foreach($randomGames as $game): ?>
			<figure>
				<a href="#"><img src="<?= $game['vid_image'] ?>"></a>
				<figcaption><a href="#"><?= $game['vid_name'] ?></a></figcaption>
				<p><a href="<?= $this->url('videogame_console', array('conId'=>$game['vid_id'], 'conName'=>\Controller\VideogameController::getConsoleNameFromValue($game['vid_console']))) ?>"><?= \Controller\VideogameController::getConsoleNameFromValue($game['vid_console']) ?></a></p>
			</figure>
		<?php endforeach; ?>
	</div>
	<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<?php $this->stop('main_content') ?>