<?php
    class Post
    {
        protected $title;
        protected $text;

        public function __construct($title, $text)
        {
            $this->title = $title;
            $this->text = $text;
        }
    }

    class Lesson extends Post//?<- метод наследования `extends,
    {
        protected $homeWork;
        public function __construct($title, $text, $homeWork)
        {
            parent::__construct($title, $text);
            $this->homeWork = $homeWork;
        }
        public function getInfo()
        {
            echo $this->title;
        }
    }

    class PaidLesson extends Lesson
    {
        private $price;

        public function __construct($title, $text, $homeWork, $price)
        {
            parent::__construct($title, $text, $homeWork);
            $this->price = $price;
        }
        public function setPrice($price)
        {
            $this->price = $price;
        }

        public function getWeight()
        {
            echo $price;
        }
    }


    // $post = new Post("as", "sas");
    // $lesson = new Lesson("New Lesson", "OOP", "OOP");
    // // var_dump($post);
    // var_dump($lesson);
    // $lesson->getInfo();
    $paid = new PaidLesson("as", "sas", "New Lesson",112);
    var_dump($paid);
?>