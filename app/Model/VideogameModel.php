<?php
namespace Model;

class VideogameModel extends \W\Model\Model {

	public function __construct(){
		parent::__construct();
	}

	public function getLimitedGames(){
		$sql = '
			SELECT *
			FROM videogame
			ORDER BY RAND()
			LIMIT 4
		';

		$sth = $this->dbh->prepare($sql);
		$sth->execute();
		return $sth->fetchAll();
	}

	public function getGamesPerConsole($consoleId){
		$sql = '
			SELECT *
			FROM videogame
			WHERE vid_console = :console
		';

		$sth = $this->dbh->prepare($sql);
		$sth->bindValue(':console', $consoleId, \PDO::PARAM_INT);
		$sth->execute();
		return $sth->fetchAll();
	}
}