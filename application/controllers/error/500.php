<?php
use \Psr\Http\Message\ServerRequestInterface;
use \Psr\Http\Message\ResponseInterface;

/**
 * Class Controllers_Error_500
 * 500エラー
 */
class Controllers_Error_500 extends Controllers_Base
{

    /**
     * @param ServerRequestInterface $request
     * @param ResponseInterface $response
     * @param Throwable $exception
     * @return ResponseInterface
     */
    public function __invoke(ServerRequestInterface $request, ResponseInterface $response, Throwable $exception) : ResponseInterface
    {
        $response = $response->withStatus(500);
        $data = new ViewData_Error_500($exception->getMessage(), $exception->getTraceAsString(), ENV_DEV);
        return $this->render($response, 'error/500', $data);
    }
}
