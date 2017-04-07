<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
	<title><?= $this->e($title) ?></title>

	<!-- ADD NORMALIZE AND RESET HERE -->
	
	<!-- CSS -->
	<link rel="stylesheet" href="<?= $this->assetUrl('css/style.css') ?>">

	<!--  Google fonts -->
	<link href="https://fonts.googleapis.com/css?family=Press+Start+2P" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Hind" rel="stylesheet">

</head>
<body>	
	<header>
		<div id="title">
			<h1>ALL YOUR BASE ARE BELONG TO US | <span><?= $this->e($title) ?></span></h1>
		</div>
			
		<nav class="flex" id="navbar">
	    	<ul class="nav navbar-nav">
	            <li <?php if($currentPage == 'home'):?>  class="active" <?php endif; ?>><a href="<?= $this->url('videogame_home') ?>">Home</a>
	            </li>	          
	      	</ul>
		</nav>
	</header>

	<div class="container">
		<section>
			<?= $this->section('main_content') ?>
		</section>

	</div>
	<footer>
	</footer>

	<!-- jQuery -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</body>
</html>