<?php


namespace App;


use App\handlers\HandlerInterface;

class StrategyPattern
{
    /**
     * @var HandlerInterface[]
     */
    private $services = [];
    
    public function __construct($handlerServices)
    {
        foreach ($handlerServices as $handlerService) {
            $this->services[] = $handlerService;
        }
    }

    /**
     * @param $string
     * @return string|null
     */
    public function handle($string)
    {
        foreach ($this->services as $service) {
            if ($service->supports($string)) {
                return $service->handle();
            }
        }

        return null;
    }
}