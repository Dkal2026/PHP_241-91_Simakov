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
        }

        public function show(int $id)
        {
            $article = Article::getById($id);

            if($article === null)
                {
                    $this->viev->renderHtml('Errors/404.php', [], 404);
                    return;
                }
            return $this->viev->renderHtml('Articles/show.php', ['article'=>$article]);
        }

        public function create()
        {
            return $this->viev->renderHtml('Articles/create.php');
        }
        public function edit(int $id)
        {
            $article = Article::getById($id);

            if($article === null)
                {
                    $this->viev->renderHtml('Errors/404.php', [], 404);
                    return;
                }
            return $this->viev->renderHtml('Articles/update.php', ['article'=>$article]);
        }
        public function store()
        {
            $user = User::getById(1);
            $article = new Article;
            $article->setAuthorId($user);
            $article->name = $_POST['name'];
            $article->text = $_POST['text'];
            $article->save();
            header("Location: http://localhost/Simakov/FrameWork/www/index.php");
        }

        public function update(int $id)
        {
            $article = Article::getById($id);
            $article->name = $_POST['name'];
            $article->text = $_POST['text'];
            $article->save();
            header("Location: http://localhost/Simakov/FrameWork/www/article/$id");
        }

        public function delete(int $id)
        {
            $article = Article::getById($id);
            $article->delete();
            header("Location: http://localhost/Simakov/FrameWork/www");
        }
    }
?>