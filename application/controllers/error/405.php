<?php
use \Psr\Http\Message\ServerRequestInterface;
use \Psr\Http\Message\ResponseInterface;

/**
 * Class Controllers_Error_405
 * 405エラー
 */
class Controllers_Error_405 extends Controllers_Base
{

    /**
     * @param ServerRequestInterface $request
     * @param ResponseInterface $response
     * @return ResponseInterface
     */
    public function __invoke(ServerRequestInterface $request, ResponseInterface $response) : ResponseInterface
    {
        $response = $response->withStatus(405);
        return $this->render($response, 'error/405', null);
    }
}
