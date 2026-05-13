<?php

namespace src\models\Articles;
use \src\models\Users\User;

    class Article
    {
        
        private $id;
        private $authorId;
        private $name;
        private $text;
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

        public function getName() :string
        {
            return $this->name;
        }
        public function getId() :string
        {
            return $this->id;
        }
        public function getText() :string
        {
            return $this->text;
        }
        public function getAuthorId()
        {
            return $this->authorId;
        }

    }
?>