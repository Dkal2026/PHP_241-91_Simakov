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
            parent::__construct($title, $text);// :: <- обращение (к класу, к функции и т. д.)
            $this->homeWork = $homeWork;
        }
        public function getInfo()
        {
            echo $this->title;
        }
    }


    $post = new Post("as", "sas");
    $lesson = new Lesson("New Lesson", "OOP", "OOP");
    // var_dump($post);
    var_dump($lesson);
    $lesson->getInfo();
?>