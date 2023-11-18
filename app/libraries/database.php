<?php

class Database
{
	private $host = DB_host;
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
        $this->query("SELECT SCHEMA_NAME FROM INFORMATION_SCHEMA.SCHEMATA WHERE SCHEMA_NAME = :databaseName");
        $this->bind(':databaseName', $this->dbname);
        $result = $this->single();
        
	
			// If the database doesn't exist, create it
			if (empty($result)) {
                $this->query("CREATE DATABASE $this->dbname");
				$this->execute();
			}
            
			// Reconnect to the specific database
			$this->dbh = new PDO("mysql:host=" . $this->host . ";dbname=" . $this->dbname, $this->user, $this->pass);
            echo'Data';
		
    }

 

    public function query($query)
    {
        $this->stmt = $this->dbh->prepare($query);
    }

    public function bind($param, $value, $type = null)
    {
        if (is_null($type)) {
            switch (true) {
                case is_int($value):
                    $type = PDO::PARAM_INT;
                    break;
                case is_bool($value):
                    $type = PDO::PARAM_BOOL;
                    break;
                case is_null($value):
                    $type = PDO::PARAM_NULL;
                    break;
                default:
                    $type = PDO::PARAM_STR;
            }
        }
        $this->stmt->bindValue($param, $value, $type);
    }

    public function execute()
    {
        return $this->stmt->execute();
    }

    public function single()
    {
        $this->execute();
        return $this->stmt->fetch(PDO::FETCH_OBJ);
    }

    public function rowCount()
    {
        return $this->stmt->rowCount();
    }

    public function lastInsertId()
    {
        return $this->dbh->lastInsertId();
    }
}
$test = new Database;
?>
