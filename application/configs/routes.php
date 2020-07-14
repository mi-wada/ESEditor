<?php
use Slim\App;

/**
 * ルーティングの設定を行う
 * @param App $app
 */
function routing(App $app)
{
    $app->get('/', Controllers_Index::class . ':index');
    $app->post('/signin', Controllers_Index::class . ':signin');
    $app->get('/register', Controllers_Register::class . ':register');
    $app->post('/signup', Controllers_Register::class . ':signup');
    $app->get('/home', Controllers_Home::class . ':home');
    $app->post('/signout', Controllers_Home::class . ':signout');
    $app->get('/addCompany', Controllers_AddCompany::class . ':addCompany');
    $app->post('/saveCompany', Controllers_AddCompany::class . ':saveCompany');
    $app->get('/company/{company_name}', Controllers_Company::class . ':company');
    $app->get('/addTitle', Controllers_AddTitle::class . ':addTitle');
    $app->post('/saveTitle', Controllers_AddTitle::class . ':saveTitle');
    $app->get('/edit/{title}', Controllers_Edit::class . ':edit');
    $app->post('/saveText', Controllers_Edit::class . ':saveText');

    // エラーハンドリング
    $c = $app->getContainer();
    $c['notFoundHandler'] = function ($c) {
        return new Controllers_Error_404($c);
    };
    $c['notAllowedHandler'] = function ($c) {
        return new Controllers_Error_405($c);
    };
    $c['errorHandler'] = function ($c) {
        return new Controllers_Error_500($c);
    };
    $c['phpErrorHandler'] = function ($c) {
        return new Controllers_Error_500($c);
    };
}
