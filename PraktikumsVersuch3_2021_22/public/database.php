<?php
    // !!--
    include("product.php");
    // --!!

/*
    Class implementing Singleton pattern to get a cursor to the current database.
*/
class MysqlDatabase {

    /* cursor to DB connection */
    private $cursor = null;

    /* Singleton instance - not needed in class methods */
    private static $instance = null;

    /*
        Use this method to get access to the database connection.
    */
    public static function get_instance(){
        if(self::$instance == null){
            self::$instance = new MysqlDatabase();
        }
        return self::$instance;
    }

    /*
        Private constructor to implement Singleton. Do not use this method for instatiation!
    */
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
    
    /*
        Do not call this method directly.
    */
	public function __destruct(){
		$this->cursor = NULL;	
    }
    
    // !!--
    public function read_products() {
      $products = [];
      $sql = "SELECT product_id, product_name, unit_price FROM Product";
      $products = $this->cursor->query($sql)->fetchAll(PDO::FETCH_CLASS, 'Product');
  
      return $products;
    } 
    public function update_product($product_id, $unit_price) {

        /* if ($unit_price > 100 || $unit_price < 0) {
            echo "Bitte nur positive Werte unter 100 eingeben!";
            return;
        } */

        $sql = "UPDATE Product SET unit_price = ? WHERE product_id = ?";
        $statement = $this->cursor->prepare($sql);
        $result = $statement->execute([$unit_price, $product_id]);
    }
    // --!!
}



?>
