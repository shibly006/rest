<?php 
  class Products {
    // DB stuff
    private $conn;
    private $table = 'Products';

    // Post Properties
    public $id;
    public $category_id;
    public $category_name;
    public $title;
    public $body; 
    public $author;
    public $created_at;

    // Constructor with DB
    public function __construct($db) {
      $this->conn = $db;
    }

    // Get Posts
    public function read() {
      // Create query
      
      $query = 'SELECT id, Name, Price, Time from ' . $this->table . ' ORDER BY Price DESC';
      // $query = 'SELECT id, Name, Price, Time from ' . $this->table . ;

      // Prepare statement
      $stmt = $this->conn->prepare($query);

      // Execute query
      $stmt->execute();

      return $stmt;
    }
}