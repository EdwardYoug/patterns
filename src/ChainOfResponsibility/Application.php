<?php

namespace Patterns\ChainOfResponsibility;

use Patterns\ChainOfResponsibility\Middleware\BaseMiddleware;

final class Application
{
    /**
     * @var array $request
     */
    private $request;

    private BaseMiddleware $middleware;

    /**
     * @param array $request
     */
    public function __construct(array $request = [])
    {
        $this->request = $request;
    }

    public function addMiddleware(...$middlewares): void
    {
        if (empty($middlewares)) {
            return;
        }

        foreach ($middlewares as $middleware) {
            if (!($middleware instanceof BaseMiddleware)) {
                throw new \Exception('Ошибка построения цепочки');
            }
        }
        $this->middleware = $middlewares[0];

        for ($i = 0; $i < count($middlewares); $i++) {
            if ($i == 0) {
                continue;
            }
            $middlewares[$i - 1]->link($middlewares[$i]);
        }
    }

    public function handle()
    {
        if (!empty($this->middleware) && !$this->middleware->work($this->request)){
            echo 'Цепочка не отработала'.PHP_EOL. 'Надо добавить : ?check1=1&check2=2&check3=3';
            exit;
        }
    }
}