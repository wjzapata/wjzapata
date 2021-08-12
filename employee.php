<?php
require_once('User.php');

class Employee extends User {

  public function __construct(int $id) {
    $this->id = $id;
    $this->password = random_int(1000, 100000);
  }

  public function getUserId() {
    return $this->id;
  }

  public function getPassword() {
    return $this->password;
  }
}

?>
