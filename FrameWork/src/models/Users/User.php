<?php

namespace src\models\Users;
use src\models\ActiveRecordEntity;

    class User extends ActiveRecordEntity
    {
        
        protected $nickname;
        protected $email;
        protected $isConfirmed;
        protected $role;
        protected $passwordHash;
        protected $authToken;
        protected $createdAt;

        public function getNickname() :string
        {
            return $this->nickname;
        } 

        protected static function getTableName()
        {
            return 'users';
        }
    }
?>