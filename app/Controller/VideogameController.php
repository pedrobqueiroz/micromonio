<?php

namespace Controller;

use \W\Controller\Controller;

class VideogameController extends Controller{

////////////HOME
	public function home(){

		$gameModel = new \Model\VideogameModel();
		$gameGenerate = $gameModel->getLimitedGames();
		shuffle($gameGenerate);

		$this->show('videogame/home', ['randomGames' => $gameGenerate]);
	}

//CONSOLES - Assoc. nbs to strings
	const CONSOLE_PC = 1;
    const CONSOLE_MEGADRIVE = 2;
    const CONSOLE_SNES = 3;

	protected static $consoleValues = array(
        1 => 'PC',
        2 => 'Megadrive',
        3 => 'Snes',
        4 => 'PS4',
        5 => 'GameCube',
        6 => 'Switch',
        7 => 'GBA',
        8 => '3DS',
    );

    public static function getConsoleNameFromValue($conVal) {
        if (array_key_exists($conVal, self::$consoleValues)) {
            return self::$consoleValues[$conVal];
        }
        return 'Console unrecognized';
    }

//GENRES - Assoc. nbs to strings
    const GENRE_ADVENTURE = 1;
    const GENRE_SIMULATION = 2;
    const GENRE_SPORTS = 3;
    const GENRE_TOPSHOOTER = 4;
	
	protected static $genreValues = array(
        1 => 'Adventure',
        2 => 'Simulation',
        3 => 'Sports',
        4 => 'Top-down shooter',
        5 => '',
        6 => '',
        7 => '',
        8 => '',
        9 => '',
        10 => '',
        11 => '',
        12 => '',
    );

    public static function getGenreNameFromValue($genreVal) {
        if (array_key_exists($genreVal, self::$genreValues)) {
            return self::$genreValues[$conVal];
        }
        return 'Genre unrecognized';
    }

///////////////CONSOLE
    public function console($conId){

    	$gameModel = new \Model\VideogameModel();
		$allGames = $gameModel->getGamesPerConsole($conId); 
		$this->show('videogame/console', ['allGames' => $allGames]);
    }
}