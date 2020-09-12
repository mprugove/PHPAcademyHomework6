<?php

namespace Classe;

class ClassOne
{
    private $private1;
    private $private2;


    public function __construct($private1 = '', $private2 = null)
    {
        $this->private1 = $private1;
        $this->private2 = $private2;
    }

    public function __set($set, $prop)
    {
        if (isset($this, $set) ?? null) {
            return $this->$set = $prop;
        }
    }

    public function __get($set)
    {
        return $this->$set;
    }

}