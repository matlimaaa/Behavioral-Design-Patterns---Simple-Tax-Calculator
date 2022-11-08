<?php

namespace Src\DesignPattern\Http;

class ReachPHPHttpAdapter implements HttpAdapter
{
    public function post(string $url, array $data = []): void
    {
        // instantiate the react
        // prepare the data
        // send request
        echo 'React PHP' . PHP_EOL;
    }
}