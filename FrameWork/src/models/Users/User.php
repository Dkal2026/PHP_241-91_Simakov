<?php

namespace src\models\Users;
    class User
    {
        public function __construct(private string $name){}
        public function setName(string $name)
        {
            $this->name = $name;
        }
        public function getName() :string
        {
            return $this->name;
        } 
    }
?>