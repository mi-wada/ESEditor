<?php

use Psr\Http\Message\ResponseInterface;
use Slim\Http\Request;
use Slim\Http\Response;

/**
 * Class Controllers_Edit
 * Editページ(エントリーシートの編集を行うページ)のコントローラ
 */
class Controllers_Edit extends Controllers_Base{
    public function edit(Request $request, Response $response, array $args) : ResponseInterface
    {
        session_start();
        $entrySheet = ActiveRecord_Entrysheets::find(['created_by' => $_SESSION['user_id'], 'company_name' => $_SESSION['company_name'], 'title' => $args['title']]);
        $_SESSION['title'] = $entrySheet->title;
        $viewData = new ViewData_Edit($_SESSION['company_name'], $args['title'], ($entrySheet->text == null ? '' : $entrySheet->text), $entrySheet->character_limit);
        return $this->render($response, 'edit', $viewData);
    }
    public function saveText(Request $request, Response $response) : ResponseInterface
    {
        session_start();
        $entrySheet = ActiveRecord_Entrysheets::find_by_title_and_company_name_and_created_by($_SESSION['title'], $_SESSION['company_name'], $_SESSION['user_id']);
        $entrySheet->text = $_POST['text'];
        $entrySheet->save();
        header('Location: /company/'.$_SESSION['company_name']);
        exit;
    }
}
