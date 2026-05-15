<?php

namespace src\models\Articles;
use \src\models\Users\User;
use src\models\ActiveRecordEntity;

    class Article extends ActiveRecordEntity
    {
        protected $authorId;
        protected $name;
        protected $text;
        protected $createdAt;

        public function getName() :string
        {
            return $this->name;
        }
        public function getText() :string
        {
            return $this->text;
        }
        public function getAuthorId() :User
        {
            return User::getById($this->authorId);
        }

        protected static function getTableName()
        {
            return 'articles';
        }

        public function setAuthorId(User $user)
        {
            $this->authorId = $user->id;
        }
    }
?>