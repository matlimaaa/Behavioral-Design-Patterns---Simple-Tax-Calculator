<?php

namespace Src\DesignPattern\Http;

interface HttpAdapter
{
    public function post(string $url, array $data = []): void;
}