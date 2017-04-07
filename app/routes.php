<?php
	
	$w_routes = array(
		['GET', '/', 'Videogame#home', 'videogame_home'],
		['GET', '/consoles/[:conId]/[:conName]/', 'Videogame#console', 'videogame_console'],
	);