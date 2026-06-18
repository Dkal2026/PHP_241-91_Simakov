<?php
    namespace src\Controller;

    use \src\models\Users\User;
    use \src\models\Users\UsersAuthService;
    use \src\Viev\Viev;

    abstract class AbstractController
    {
        protected $viev;
        protected $user;
        
        public function __construct()
        {
            $this->user = UsersAuthService::getUserByToken();
            // var_dump($this->user);
            $this->viev = new Viev(dirname(dirname(__DIR__)).'/Templates');
            $this->viev->setVar('user', $this->user);
        }
    }
?>