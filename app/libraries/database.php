<?php
	/* 
   *  PDO DATABASE CLASS
   *  Connects Database Using PDO
	 *  Creates Prepeared Statements
	 * 	Binds params to values
	 *  Returns rows and results
   */
class Database {
	private $host = DB_HOST;
    private $user = DB_USER;
    private $pass = DB_PASS;
    private $dbname = SITENAME;

    private $dbh;
    private $error;
    private $stmt;
	
	public function __construct()
    {
      
        $dsn = 'mysql:host=' . $this->host;
        $options = [
            PDO::ATTR_PERSISTENT => true,
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        ];

        try {
            $this->dbh = new PDO($dsn, $this->user, $this->pass, $options);
        } catch (PDOException $e) {
            $this->error = $e->getMessage();
           

        }
        

        // Check if the database exists
        if (!$this->databaseExists()) {
            // If the database doesn't exist, create it
            
            $this->createDatabaseAndTables();
            

            // Reconnect to the specific database
        }
        try {
            $this->dbh = new PDO("mysql:host=" . $this->host . ";dbname=" . $this->dbname, $this->user, $this->pass);
        } catch (PDOException $e) {
            echo'hello <br>';
            die('Reconnection failed: ' . $e->getMessage());
        }
      
    }
	    // Check if the database exists
		private function databaseExists()
		{
			$this->query("SELECT SCHEMA_NAME FROM INFORMATION_SCHEMA.SCHEMATA WHERE SCHEMA_NAME = :databaseName");
			$this->bind(':databaseName', $this->dbname);
			$result = $this->single();
	
			return !empty($result);
		}

		 // Create the database
		 private function createDatabaseAndTables()
		 {
			 // Create the database
			 $this->query("CREATE DATABASE IF NOT EXISTS $this->dbname");
			 $this->execute();
		 
			 // Switch to the created database
			 $this->query("USE $this->dbname");
			 $this->execute();
		 
			 // Create the 'users' table
			 $this->query('CREATE TABLE IF NOT EXISTS `users` (
				 `id` int(11) NOT NULL AUTO_INCREMENT,
				 `name` varchar(255) NOT NULL,
				 `email` varchar(255) NOT NULL,
				 `password` varchar(255) NOT NULL,
				 PRIMARY KEY (`id`)
			   ) 
			 ');
			 $this->execute();
		 
			 // Create the 'posts' table with a foreign key relationship to the 'users' table
			 $this->query('CREATE TABLE IF NOT EXISTS `posts` (
				 `id` int(11) NOT NULL AUTO_INCREMENT,
				 `user_id` int(11) NOT NULL,
				 `title` varchar(255) NOT NULL,
				 `body` text NOT NULL,
				 `created_at` datetime NOT NULL DEFAULT current_timestamp(),
				 PRIMARY KEY (`id`),
				 CONSTRAINT `fk_user_id` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`)
			   ) 
			 ');
			 $this->execute();
		 }
		 
	
	// Prepare statement with query
	public function query($query) {
		$this->stmt = $this->dbh->prepare($query);
	}
	
	// Bind values
	public function bind($param, $value, $type = null) {
		if (is_null ($type)) {
			switch (true) {
				case is_int ($value) :
					$type = PDO::PARAM_INT;
					break;
				case is_bool ($value) :
					$type = PDO::PARAM_BOOL;
					break;
				case is_null ($value) :
					$type = PDO::PARAM_NULL;
					break;
				default :
					$type = PDO::PARAM_STR;
			}
		}
		$this->stmt->bindValue($param, $value, $type);
	}
	
	// Execute the prepared statement
	public function execute(){
		return $this->stmt->execute();
	}
	
	// Get result set as array of objects
	public function resultset(){
		$this->execute();
		return $this->stmt->fetchAll(PDO::FETCH_OBJ);
	}
	
	// Get single record as object
	public function single(){
		$this->execute();
		return $this->stmt->fetch(PDO::FETCH_OBJ);
	}
	
	// Get record row count
	public function rowCount(){
		return $this->stmt->rowCount();
	}
	
	// Returns the last inserted ID
	public function lastInsertId(){
		return $this->dbh->lastInsertId();
	}
}