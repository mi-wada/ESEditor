<?php

use Psr\Http\Message\ResponseInterface;
use Slim\Http\Request;
use Slim\Http\Response;

/**
 * Class Controllers_Index
 * indexページのコントローラ
 */
class Controllers_Index extends Controllers_Base
{
    /**
     * index.tplを表示
     * @param Request $request
     * @param Response $response
     * @return ResponseInterface
     */
    public function index(Request $request, Response $response) : ResponseInterface
    {
        return $this->render($response, 'index');
    }

    /**
    * signin処理
    * @param Request $request
    * @param Response $response
    * @return ResponseInterface or Void
    */
    public function signin(Request $request, Response $response) : ResponseInterface
    {
        session_start();
        $userId = $_POST['id'];
        $userPassword = $_POST['password'];
        $user = ActiveRecord_Users::find_by_user_id($userId);
        if(password_verify($userPassword, $user->user_password)){
            $_SESSION['user_id'] = $user->user_id;
            header('Location: /home');
            exit;
        }else{
            echo 'Fail to sign in';
            return $this->render($response, 'index');
        }
    }
}
