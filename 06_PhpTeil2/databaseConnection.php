<?php


class DatabaseConnection {

	private $connection;
		
	public function __construct(){
		$host = '127.0.0.1';
		$db = 'wt1uebung';
		$user = 'wt1_ueb';
		$pw = 'abcd';
		
		$dsn = "mysql:host=$host;port=3306;dbname=$db";
		
		$options = [
			PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
			PDO::ATTR_CASE => PDO::CASE_NATURAL
		];

		try{
			$this->connection = new PDO($dsn, $user, $pw, $options);
		} 
		catch(PDOException $e){
			echo "Verbindungsaufbau gescheitert: " . $e->getMessage();
		}
	}
	
	public function __destruct(){
		$this->connection = NULL;	
	}
	
	public function get_highscores() {
		$highscores = [];
		$sql = "SELECT username, points FROM Score ORDER BY points DESC;";
		$highscores = $this->connection->query($sql)->fetchAll(PDO::FETCH_CLASS, 'Score');

		return $highscores;
	}
	
	public function add_highscore($username, $points){
		
		if ($username == NULL || empty($username)){
			return false;
		}
		
		if ($points == NULL || empty($points) || intval($points) <= 0){
			return false;
		}
		
		$sql = "INSERT INTO Score (id, username, points) VALUES (NULL, ?, ?);";		
		$statement = $this->connection->prepare($sql);
		$result = $statement->execute([$username, $points]);
		return $result;
	}
	
}



?>
