<?php

class User
{
  private $id;
  private $login;
  private $email;
  private $balance;

  public function __construct($id, $login, $email, $balance)
  {
    $this->id      = rand(1, 1000);
    $this->login   = $login;
    $this->email   = $email;
    $this->balance = $balance;
  }

  public function getUserId()
  {
    return $this->id;
  }

  public function getUserLogin()
  {
    return $this->login;
  }

  public function getUserEmail()
  {
    return $this->email;
  }

  public function getUserBalance()
  {
    return $this->balance;
  }



}