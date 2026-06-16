<?php
    namespace src\Controller;
    use \src\models\Users\User;
    use \src\Viev\Viev;
    use \src\Exceptions\InvalidArgumentException;
    use \src\models\Users\UsersAuthService;
    use \src\Controller\AbstractController;

    
    class UsersController extends AbstractController
    {
        public function signUp()
        {
            if (!empty($_POST)) {
                try
                {
                    $user = User::signUp($_POST);
                }
                catch (InvalidArgumentException $e)
                {
                    $this->viev->renderHtml('users/signUp.php', ['error' => $e->getMessage()]);
                    return;
                }
                if ($user instanceof User)
                {
                    $this->viev->renderHtml('users/signUpSuccessful.php');
                    return;
                }
            }
            $this->viev->renderHtml('users/signUp.php');
        }
        public function login()
        {
            // var_dump($_COOKIE);
            
            if (!empty($_POST))
            {
                try
                {
                    $user = User::login($_POST);
                    UsersAuthService::createToken($user);
                    // print_r($user);
                    header('Location: http://localhost/Simakov/FrameWork/www');
                    exit();
                }
                catch (InvalidArgumentException $e)
                {
                    $this->viev->renderHtml('users/login.php', ['error' => $e->getMessage()]);
                    return;
                }
            }
            
            $this->viev->renderHtml('users/login.php');
        }

        public function logout()
        {
            // session_reset();
            setcookie("token", "", time() - 3600, '/', '', false, true);
            header('Location: /Simakov/FrameWork/www/users/login');
            exit();
        }
    }
?>