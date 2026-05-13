<?php
    namespace src\Controller;
    use \src\Viev\Viev;
    use \src\Servisec\db;
    use src\models\Articles\Article;
    use src\models\Users\User;

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
            $article = $this->db->query($sql, ['id'=>$id], Article::class);
            if($article == [])
                {
                    $this->viev->renderHtml('Errors/404.php', [], 404);
                    return;
                }
                
            $sql = 'SELECT * FROM `users` WHERE id=:id;';
            $user = $this->db->query($sql, ['id'=>$article->getAuthorId()], User::class);
            $this->viev->renderHtml('Articles/show.php', ['article'=>$article,'author'=>$user]);
        }
    }
?>