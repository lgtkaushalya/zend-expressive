<?php
namespace Application;

class BaseEntity {

  protected $servername = "localhost";
  protected $username = "root";
  protected $password = "root";
  protected $dbname = "zend_expressive";
  protected $conn;

  public function createMysqlConnection() {
    $this->conn = new \mysqli($this->servername, $this->username, $this->password, $this->dbname);
    if ($this->conn->connect_error) {
      die("Connection failed: " . $this->conn->connect_error);
    } 
  }

  public function executeQuery($query) {
    return $this->conn->query($query);
  }

  public function closeConnection() {
    $this->conn->close();
  }

  public function getData($result) {
    $resultArray = array();
    if ($result->num_rows > 0) {
      while($row = $result->fetch_assoc()) {
        $resultArray[] = $row;
      }
    }
    return $resultArray;
  }
}
