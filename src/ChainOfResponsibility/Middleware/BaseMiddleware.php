<?php

namespace Patterns\ChainOfResponsibility\Middleware;

abstract class BaseMiddleware
{
    /**
     * @var BaseMiddleware $next
     */
    private BaseMiddleware $next;

    /**
     * @param BaseMiddleware $middleware
     */
    public function link(BaseMiddleware $middleware)
    {
        $this->next = $middleware;
    }

    /**
     * @param array $request
     * @return bool
     */
    public function work(array $request): bool
    {
        if (!$this->check($request)){
            echo static::class. ' Отвалился<br>';
            return false;
        }
        if (!empty($this->next)){
            $this->next->work($request);
        }
        echo static::class. ' Гут<br>';
        return true;
    }

    abstract protected function check(array $request): bool;
}