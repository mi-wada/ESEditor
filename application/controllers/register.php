<?php

use Psr\Http\Message\ResponseInterface;
use Slim\Http\Request;
use Slim\Http\Response;

/**
 * Class Controllers_Register
 * 会員登録に用いるコントローラ
 */
class Controllers_Register extends Controllers_Base{
    /**
    * registerページを表示
    * @param Request $request
    * @param Response $response
    * @return ResponseInterface
    */
    public function register(Request $request, Response $response) : ResponseInterface
    {
        return $this->render($response, 'register');
    }
    /**
    * registerページを表示
    * @param Request $request
    * @param Response $response
    * @return ResponseInterface
    */
    public function signup(Request $request, Response $response) : ResponseInterface
    {

        $userId = $_POST['id'];
        $userPassword = password_hash($_POST['password'], PASSWORD_DEFAULT);
        //ActiveRecord_Users::create(['user_id' => $user_id, 'user_password' => $user_password]);
        $user = new ActiveRecord_Users();
        $user->user_id = $userId;
        $user->user_password = $userPassword;
        if(!$user->is_valid()){
            echo($user->errors);
        }else{
            if($_POST['passwordcheck'] == $_POST['password']){
                $user->save();
            }else{
                echo('パスワードが一致しません');
            }
        }
        return $this->render($response, 'index');
    }
}
