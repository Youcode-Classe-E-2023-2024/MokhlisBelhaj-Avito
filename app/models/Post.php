<?php
class Post{
 private $db;
 private $tableName=__CLASS__;
public function __construct(){
    $this->db = new Database;
    $this->db->query("SHOW TABLES LIKE :table");
        $this->db->bind(':table', $this->tableName);
        $result = $this->db->single();

        
    
        if (empty($result)) {
            $this->createTable();
        }
    }

    private function createTable() {
        // Define your table creation SQL here
        $createTableSQL = "
            CREATE TABLE $this->tableName (
                id INT PRIMARY KEY AUTO_INCREMENT,
                name VARCHAR(255) NOT NULL,
                image VARCHAR(255) NOT NULL,
                prix DECIMAL(10, 2) NOT NULL
            );
        ";
        
        // Execute the table creation query
        $this->db->query($createTableSQL);
        $this->db->execute();
    }
    

   public function getpost(){
    $this->db->query("SELECT * FROM post");
    $result = $this->db->resultSet();
    return $result;

   }
}

?>