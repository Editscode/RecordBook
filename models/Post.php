<?php
  class Post {
    // DB stuff
    private $conn;
    private $table = '*';

    // Post Properties
  //  public $id_anime;
  //  public $img_link;

    // Constructor with DB
    public function __construct($db) {
      $this->conn = $db;
    }


    public function readt() {
      // Create query
      $query = 'SELECT * FROM ' . $this->table . '';
      // Prepare statement
      $stmt = $this->conn->prepare($query);
      // Execute query
      $stmt->execute();
      return $stmt;
    }

#    public function read_user() {
      // Create query
#      $query = 'SELECT * FROM ' . $this->tableuser . ' WHERE ID LIKE ?';
      // Prepare statement
#      $stm = $this->conn->prepare($query);
#      $stm->bindParam(1,$this->_id);
      // Execute query
#      $stm->execute();
#
#      return $stm;
#    }

}
?>
