<?php
    namespace src\Controller;
    use \src\Viev\Viev;
    use \src\Servisec\db;
    use src\models\Articles\Article;
    
    class MainController
    {
        private $viev;
        private $db;

        public  function __construct()
        {
            $this->viev = new Viev(dirname(dirname(__DIR__)).'/Templates');
            $this->db = new db;
        }
        public function Main()
        {
            $articles = $this->db->query('SELECT * FROM `articles`', [], Article::class);
            $this->viev->renderHtml('Articles/article.php', ['articles'=>$articles]);
        }

        public function sayHello(string $name)
        {
            $this->viev->renderHtml('Main/hello.php', ['name'=>$name], 200, 'Страница приветствия');
        }

        public function sayBye(string $name)
        {
            $this->viev->renderHtml('Main/bye.php', ['name'=>$name], 200, 'Страница прощания');
        }
    }
?>