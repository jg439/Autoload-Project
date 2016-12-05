<?php
  class registrationModel extends model {
    private $username;
    private $password;
    private $email;
    private $address;

    public function setUsername($username) {
      $this->username = $username;
    }
    public function getUsername() {
      return $this->username;
    }
    public function setPassword($password) {
      $this->password = $password;
    }
    public function getPassword() {
      return $this->password;
    }

    public function setEmail($email) {
      $this->email = $email;
    }
    public function getEmail() {
      return $this->email;
    }
    public function setAddress($address) {
      $this->address= $address;
    }
    public function getAddress() {
      return $this->address;
    }

    public function save(){

      $array = array($username->getUsername,$password->getPassword,$email->getEmail,$address->getAddress);

      print_r $array;
    }


  }

?>
