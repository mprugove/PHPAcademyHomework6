<?php

namespace Classe;

class ClassOne
{
    private $city;
    private $postal;


  public function __construct( string $city = '', int $postal = null)
  {
      $this->city = $city;
      $this->postal = $postal;
  }

  public function __set($set, $prop)
  {
      if(isset($this, $set) ?? null) {
        return  $this->$set = $prop;
      }
  }

  public function __get($set) {
      return $this->$set;
  }
}