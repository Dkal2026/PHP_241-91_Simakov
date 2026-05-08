<?php

namespace src\models\Articles;
use \src\models\Users\User;

    class Article
    {
        private $author;

        public function __construct(private string $title, private string $text, User $author)
        {
            $this->author = $author;
        }
        
        public function setTitle(string $title)
        {
            $this->title = $title;
        }
        public function setText(string $text)
        {
            $this->text = $text;
        }
        public function setAuthor(User $author)
        {
            $this->author = $author;
        }

        public function getTitle() :string
        {
            return $this->title;
        }
        public function getText() :string
        {
            return $this->text;
        }
        public function getAuthor() :User
        {
            return $this->author;
        }

    }
?>