<?php


namespace App\handlers;


class HandlerBService implements HandlerInterface
{

    public function supports($string)
    {
        return $string === 'B';
    }

    public function handle()
    {
        return "\n I can do B\n";
    }
}