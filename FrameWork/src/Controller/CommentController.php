<?php
    namespace src\Controller;
    use \src\Exceptions\NotFoundExeption;
    use \src\Viev\Viev;
    use \src\Servisec\db;
    use \src\models\Articles\Article;
    use \src\models\Users\UsersAuthService;
    use \src\models\Users\User;
    use \src\models\Comments\Comment;
    use \src\Controller\AbstractController;
    use \src\Exceptions\InvalidArgumentException;

    class CommentController extends AbstractController
    {
        public function store()
        {
            $comment = new Comment;
            // var_dump($user);
            $comment->setUserId($this->user);
            $comment->articleId = $_POST['getId'];
            $comment->text = $_POST['comment'];
            $comment->save();
            header("Location: http://localhost/Simakov/FrameWork/www/article/".$_POST['getId']);
        }

        public function delete(int $id)
        {
            $comment = Comment::getById($id);
            $comment->delete();
            // echo $comment->getArticleId();
            header("Location: http://localhost/Simakov/FrameWork/www/article/".$comment->getArticleId());
        }

        public function edit(int $id)
        {
            $comment = Comment::getById($id);

            if($comment === null)
                {
                    $this->viev->renderHtml('Errors/404.php', [], 404);
                    return;
                }
            return $this->viev->renderHtml('comments/update.php', ['comment'=>$comment]);
        }

        public function update(int $id)
        {
            $comment = Comment::getById($id);
            $comment->text = $_POST['text'];
            $comment->save();
            header("Location: http://localhost/Simakov/FrameWork/www/article/".$comment->getArticleId());
        }

    }
    
?>