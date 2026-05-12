<?php
    namespace src\Controller;
    use \src\Viev\Viev;
    use \src\Servisec\db;

    class ArticleController
    {
        private $viev;
        private $db;

        public  function __construct()
        {
            $this->viev = new Viev(dirname(dirname(__DIR__)).'/Templates');
            $this->db = new db;
        }

        public function show(int $id)
        {
            $sql = 'SELECT * FROM `articles` WHERE id=:id;';
            $article = $this->db->query($sql, ['id'=>$id]);
            if($article == [])
                {
                    $this->viev->renderHtml('Errors/404.php', [], 404);
                    return;
                }
                
            $sql = 'SELECT * FROM `users` WHERE id=:id;';
            $user = $this->db->query($sql, ['id'=>$article[0]['author_id']]);
            // var_dump($article);
            // 
            $this->viev->renderHtml('Articles/show.php', ['article'=>$article[0],'author'=>$user[0]]);
        }
        // public function Main()
        // {
        //     $articles = $this->db->query('SELECT * FROM `articles`');
        //     $this->viev->renderHtml('Articles/article.php', ['articles'=>$articles]);
        // }

        // public function sayHello(string $name)
        // {
        //     $this->viev->renderHtml('Main/hello.php', ['name'=>$name]);
        // }
    }
?>