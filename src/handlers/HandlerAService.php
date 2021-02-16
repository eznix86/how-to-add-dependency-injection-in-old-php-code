<?php


namespace App\handlers;


class HandlerAService implements HandlerInterface
{
    public function supports($string)
    {
        return $string === 'A';
    }

    public function handle()
    {
        return "\n I can do A\n";
    }
}