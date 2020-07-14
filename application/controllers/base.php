<?php

use Psr\Http\Message\ResponseInterface;
use Slim\Container;

/**
 * Class Controllers_Base
 * 基底のコントローラクラス
 */
abstract class Controllers_Base
{

    /** @var Container アプリケーションコンテナ */
    protected $container;

    /**
     * Controllers_Base constructor.
     * @param Container $container
     */
    public function __construct(Container $container)
    {
        $this->container = $container;
        $this->before();
    }

    /**
     * 前処理
     */
    protected function before()
    {
        // nothing to do
        // overwride if needs
    }

    /**
     * レスポンスを描画する
     * @param ResponseInterface $response
     * @param string $filename
     * @param ViewData_Interface $data
     * @return ResponseInterface
     */
    protected function render(ResponseInterface $response, string $filename, ViewData_Interface $data = null) : ResponseInterface
    {
        /** @var Slim\Views\Smarty $view */
        $view = $this->container->view;
        return $view->render($response, $filename . '.tpl', $data != null ? $data->toViewArray() : []);
    }
}
