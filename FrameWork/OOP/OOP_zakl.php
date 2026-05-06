<?php

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

    $user = new User('Ivan');
    $article = new Article("Тест", "Тестовый текст", $user);
    var_dump($article);
    echo $article->getAuthor()->getName();

?>