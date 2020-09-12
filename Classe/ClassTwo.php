<?php

namespace Classe;

class ClassTwo
{

    protected $prefix = [
        'get',
        'set',
        'uns',
        'has'
    ];
    public $data = [
        'planet' => 'Earth',
        'volume' => 259876 * 10,
        'mass' => 597237 * 10,
        'speed' => '29.78 km/s'
    ];

//        public function get($val)
//        {
//
//            if(isset($this->$data[$val]) ?? null) {
//                return $this->data[$val];
//            }
//        }
//
//        public function set($val, $arg)
//        {
//                return $this->data[$val] = $arg;
//        }
//
//        public function unset($val)
//        {
//            unset($this->data[$val]);
//        }
//
//        public function has($val)
//        {
//            return isset($this->data[$val]);
//        }

    public function __call($val, $arg)
    {
        $prefix = substr($val, 0, 3);
        $val = substr($val, 0, 3);
        $argument = implode(',', $arg);

        if ($prefix === 'set') {
            $this->data[$val] = $argument;
        } else if ($prefix === 'get') {
            return $this->data[$val];
        } else if ($prefix === 'has') {
            return array_key_exists($val, $this->data) ? 'true' : 'false';
        } else if ($prefix === 'uns') {
            unset($this->data[$val]);
        } else {
            throw new \Exception('Not exists');
        }
    }


}