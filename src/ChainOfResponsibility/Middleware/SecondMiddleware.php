<?php

namespace Patterns\ChainOfResponsibility\Middleware;

class SecondMiddleware extends BaseMiddleware
{
    /**
     * @param array $request
     * @return bool
     */
    protected function check(array $request): bool
    {
        if (isset($request['check2']) && $request['check2'] == 2){
            return true;
        }
        return false;
    }
}