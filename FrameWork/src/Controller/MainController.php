<?php
    namespace src\Controller;
    use \src\Viev\Viev;
    use \src\Servisec\db;
    use \src\models\Users\UsersAuthService;
    use \src\models\Articles\Article;
    use \src\Controller\AbstractController;
    
    class MainController extends AbstractController
    {
        private $db;
        public function main()
        {
            $articles = Article::findAll();
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