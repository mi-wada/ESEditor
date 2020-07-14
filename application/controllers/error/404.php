<?php
use \Psr\Http\Message\ServerRequestInterface;
use \Psr\Http\Message\ResponseInterface;

/**
 * Class Controllers_Error_404
 * 404エラー
 */
class Controllers_Error_404 extends Controllers_Base
{

    /**
     * @param ServerRequestInterface $request
     * @param ResponseInterface $response
     * @return ResponseInterface
     */
    public function __invoke(ServerRequestInterface $request, ResponseInterface $response) : ResponseInterface
    {
        $response = $response->withStatus(404);
        return $this->render($response, 'error/404', null);
    }
}
