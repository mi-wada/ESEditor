<?php

use Psr\Http\Message\ResponseInterface;
use Slim\Http\Request;
use Slim\Http\Response;

/**
 * Class Controllers_Company
 * Companyページ(ある企業に追加されたエントリーシートのタイトルを一覧表示するページ)のコントローラ
 */
class Controllers_Company extends Controllers_Base{
    /**
    * companyページを表示,またユーザが登録したタイトルを一覧表示
    * @param Request $request
    * @param Response $response
    * @param array $args 企業名
    * @return ResponseInterface
    */
    public function company(Request $request, Response $response, array $args) : ResponseInterface
    {
        session_start();
        $_SESSION['company_name'] = $args['company_name'];
        $entrySheets = ActiveRecord_Entrysheets::all(['created_by' => $_SESSION['user_id'], 'company_name' => $args['company_name']]);
        $titlesAndLimits = [];
        foreach ($entrySheets as $value) {
            //array_push($titlesAndLimits, $value -> title);
            array_push($titlesAndLimits, array('title'=> $value->title, 'limit'=>$value->character_limit, 'textLen' => mb_strlen($value->text)));
        }
        var_dump($titlesAndLimits);
        $viewData = new ViewData_Company($args['company_name'] ,$titlesAndLimits);
        return $this->render($response, 'company', $viewData);
    }
}
