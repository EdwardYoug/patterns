<?php

namespace Patterns\ChainOfResponsibility\Middleware;

class FirstMiddleware extends BaseMiddleware
{
    /**
     * @param array $request
     * @return bool
     */
    protected function check(array $request): bool
    {
        if (isset($request['check3']) && $request['check1'] == 1){
            return true;
        }
        return false;
    }
}