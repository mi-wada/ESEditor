<?php

use Psr\Http\Message\ResponseInterface;
use Slim\Http\Request;
use Slim\Http\Response;

/**
 * Class Controllers_Home
 * Homeページのコントローラ
 */
class Controllers_Home extends Controllers_Base{
    /**
    * homeページを表示，またそのユーザが登録している企業名の一覧を表示
    * @param Request $request
    * @param Response $response
    * @return ResponseInterface
    */
    public function home(Request $request, Response $response) : ResponseInterface
    {
        session_start();
        $companyList = ActiveRecord_Companies::all(['created_by' => $_SESSION['user_id']]);
        $companyNames = [];
        foreach ($companyList as $value) {
            array_push($companyNames, $value->company_name);
        }
        $viewData = new ViewData_Home($companyNames);
        return $this->render($response, 'home', $viewData);
    }

    /**
    * signout処理
    * @param Request $request
    * @param Response $response
    * @return ResponseInterface
    */
    public function signout(Request $request, Response $response) : ResponseInterface
    {
        session_start();
        $_SESSION = array();
        if (isset($_COOKIE["PHPSESSID"])) {
            setcookie("PHPSESSID", '', time() - 1800, '/');
        }
        session_destroy();
        return $this->render($response, 'index');
    }
}
