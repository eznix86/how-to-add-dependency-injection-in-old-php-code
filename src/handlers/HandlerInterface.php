<?php


namespace App\handlers;


interface HandlerInterface
{
    /**
     * @param string $string
     * @return bool
     */
    public function supports($string);

    /**
     * @return string
     */
    public function handle();

}