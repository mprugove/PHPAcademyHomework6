<?php

namespace Classe;

class ClassTwo
{

        public $data = [
            'Planet' => 'Earth',
            'Volume' => 259876 * 10,
            'Mass' => 597237 * 10,
            'Speed' => '29.78 km/s'
        ];

//        public function __get($val)
//        {
//
//            if(isset($this->$data[$val]) ?? null) {
//                return $this->data[$val];
//            }
//        }
//
//        public function __set($val, $arg)
//        {
//                return $this->data[$val] = $arg;
//        }
//
//        public function __unset($val)
//        {
//            unset($this->data[$val]);
//        }
//
//        public function __has($val)
//        {
//            return isset($this->data[$val]);
//        }

        public function __call($val, $arg)
        {
        $getSetEtc = strtolower(substr($val,0, 3));
        $ifProperty = ucwords(substr($val,3));
        $arguments = implode(',', $arg);
        if($getSetEtc === 'get'){
            return $this->data[$ifProperty];
            } else if($getSetEtc === 'set') {
            return $this->data[$ifProperty] = $arguments ?? null;
        } else if ($getSetEtc === 'has') {
            if(isset ($this->data[$ifProperty])){
                return $this->data[$ifProperty] ? 'true' : 'false';
            }
        } else if ($getSetEtc === 'uns') {
            unset($this->data[$ifProperty]);
        } else {
            throw new \Exception("You need to use get, set, has or uns");
        }
        }


}