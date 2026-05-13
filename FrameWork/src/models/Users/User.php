<?php

namespace src\models\Users;
    class User
    {
        private $id;
        private $nickname;
        private $email;
        private $isConfirmed;
        private $role;
        private $passwordHash;
        private $authToken;
        private $createdAt;


        public function __set($name, $value)
        {
            $newProperty = $this->upperToCamel($name);
            $this->$newProperty = $value;
        }

        private function upperToCamel(string $name)
        {
            return lcfirst(str_replace('_', '', ucwords($name, '_')));
        }

        public function getNickname() :string
        {
            return $this->nickname;
        } 
    }
?>