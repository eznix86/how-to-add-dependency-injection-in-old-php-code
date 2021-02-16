<?php


namespace App;


class ServiceToBeInjectedService
{
    public function getItem()
    {
        return "\n\n FROM ServiceToBeInjectedService: \n hello world from nice service\n";
    }
}