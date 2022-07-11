<?php

namespace Patterns\ChainOfResponsibility\Middleware;

class ThirdMiddleware extends BaseMiddleware
{

    /**
     * @param array $request
     * @return bool
     */

    protected function check(array $request): bool
    {
        if (isset($request['check3']) && $request['check3'] == 3){
            return true;
        }
        return false;
    }
}