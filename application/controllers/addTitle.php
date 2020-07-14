<?php

use Psr\Http\Message\ResponseInterface;
use Slim\Http\Request;
use Slim\Http\Response;

/**
 * Class Controllers_AddTitle
 * addTitleページ(ある企業のエントリーシートのタイトルを追加するページ)のコントローラ
 */
class Controllers_AddTitle extends Controllers_Base{
    /**
    * addTitleページを表示,またユーザがタイトルを追加しようとしている企業名を表示
    * @param Request $request
    * @param Response $response
    * @return ResponseInterface
    */
    public function addTitle(Request $request, Response $response) : ResponseInterface
    {
        session_start();
        $viewData = new ViewData_Company($_SESSION['company_name'], []);
        return $this->render($response, 'addtitle', $viewData);
    }

    /**
    * addTitleページにおいて，入力された情報をデータベースに保存
    * @param Request $request
    * @param Response $response
    */
    public function saveTitle(Request $request, Response $response)
    {
        session_start();
        ActiveRecord_Entrysheets::create(['title' => $_POST['title'],'company_name' => $_SESSION['company_name'], 'created_by' => $_SESSION['user_id'], 'character_limit' => $_POST['character_limit']]);
        header('Location: /company/'.$_SESSION['company_name']);
        exit;
    }
}
