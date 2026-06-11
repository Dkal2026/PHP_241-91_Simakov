<?php
    namespace src\Controller;
    use \src\models\Users\User;
    use src\Viev\Viev;
    use src\Exceptions\InvalidArgumentException;

    
    class UsersController
    {
        private $view;
        public function __construct()
        {
            $this->view = new Viev('../Templates');
        }
        public function signUp()
        {
            if (!empty($_POST))
            {
                try
                {
                    $user = User::signUp($_POST);
                }
                catch (InvalidArgumentException $e)
                {
                    $this->view->renderHtml('users/signUp.php', ['error' => $e->getMessage()]);
                    return;
                }
                
            }
            $this->view->renderHtml('users/signUp.php');
        }
    }
?>