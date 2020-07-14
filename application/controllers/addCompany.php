<?php

use Psr\Http\Message\ResponseInterface;
use Slim\Http\Request;
use Slim\Http\Response;

/**
 * Class Controllers_AddCompany
 * サンプルコントローラ
 */
class Controllers_AddCompany extends Controllers_Base{
    /**
    * addcompanyページを表示
    * @param Request $request
    * @param Response $response
    * @return ResponseInterface
    */
    public function addCompany(Request $request, Response $response) : ResponseInterface
    {
        return $this->render($response, 'addcompany');
    }

    /**
    * addcompanyページにおいて，入力された企業情報をデータベースに保存
    * @param Request $request
    * @param Response $response
    */
    public function saveCompany(Request $request, Response $response)
    {
        session_start();
        $companyName = $_POST['company_name'];
        if(strlen($companyName) > 0 && strlen($companyName) <= 20){
            ActiveRecord_Companies::create(['company_name' => $companyName, 'created_by' => $_SESSION['user_id']]);
            header('Location: /home');
            exit;
        }else{
            header('Location: /home');
            //ToDo エラーメッセージ
            exit;
        }
    }
}
