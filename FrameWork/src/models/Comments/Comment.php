<?php
    namespace src\Models\Comments;
    use \src\models\Users\User;
    use \src\models\ActiveRecordEntity;

    class Comment extends ActiveRecordEntity
    {
        protected $text;
        protected $userId;
        protected $articleId;
        protected $createdAt;

        public static function getTableName()
        {
            return 'comments';
        }

        public function setUserId(User $user)
        {
            $this->userId = $user->id;
        }
        public function getText() :string
        {
            return $this->text;
        }

        public function getArticleId()
        {
            return $this->articleId;
        }
        
    }
?>