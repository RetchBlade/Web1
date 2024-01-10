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
		$db = 'realdb';
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
    
    public function read_products() {
        $products = [];
        $sql = "SELECT * FROM Product ORDER BY short_name";
		$products = $this->cursor->query($sql)->fetchAll(PDO::FETCH_CLASS, 'Product');

		return $products;
	}
	
	public function search_products($search_criteria){
        $products = [];
        $sql = "SELECT * FROM Product WHERE product_id LIKE ? OR short_name LIKE ? OR manufacturer LIKE ? OR unit_price LIKE ? OR vat_rate_percent LIKE ? ORDER BY short_name;";
        $statement = $this->cursor->prepare($sql);
        $search = '%' . $search_criteria . '%';
		$statement->execute([$search, $search, $search, $search, $search]);
        $products = $statement->fetchAll(PDO::FETCH_CLASS, 'Product');
        return $products;
	}
		
}



?>
