<?php

class MysqlDatabase {

    private $cursor = null;
    private static $instance = null;

    public static function get_instance(){
        if(self::$instance == null){
            self::$instance = new MysqlDatabase();
        }
        return self::$instance;
    }

	private function __construct(){
		$host = '127.0.0.1';
		$db = 'onlineshop';
		$user = 'wt1_prakt';
		$pw = 'abcd';
		
		$dsn = "mysql:host=$host;port=3306;dbname=$db";
		
		$options = [
			PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
			PDO::ATTR_CASE => PDO::CASE_NATURAL
		];

		try{
            $this->cursor = new PDO($dsn, $user, $pw, $options);
		} 
		catch(PDOException $e){
			echo "Verbindungsaufbau gescheitert: " . $e->getMessage();
		}
    }
    
	public function __destruct(){
		$this->cursor = NULL;	
    }
    
    public function read_customers() {
        $customers = [];
        $sql = "SELECT * FROM Customer ORDER BY last_name";
		$customers = $this->cursor->query($sql)->fetchAll(PDO::FETCH_CLASS, 'Customer');

		return $customers;
	}
	
	public function search_customers($search_criteria){
        $customers = [];
        $sql = "SELECT * FROM Customer WHERE customer_id LIKE ? OR first_name LIKE ? OR last_name LIKE ? OR gender LIKE ? OR birth_date LIKE ? OR email LIKE ? ORDER BY last_name;";
        $statement = $this->cursor->prepare($sql);
        $search = '%' . $search_criteria . '%';
		$statement->execute([$search, $search, $search, $search, $search, $search]);
        $customers = $statement->fetchAll(PDO::FETCH_CLASS, 'Customer');
        return $customers;
	}
		
}



?>
