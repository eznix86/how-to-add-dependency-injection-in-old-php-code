<?php


namespace App;


class GoodPracticeDecorator implements WrapperInterface
{
    /**
     * @var OldCodeSingletonBadPractice
     */
    private $singletonWrapper;
    /**
     * @var ServiceToBeInjectedService
     */
    private $injectedService;

    public function __construct(OldCodeSingletonBadPractice $singletonWrapper, ServiceToBeInjectedService $injectedService)
    {
        $this->singletonWrapper = $singletonWrapper::getInstance();
        $this->injectedService = $injectedService;
    }

    public function doStuffAsBadSingletonPractice()
    {
        return $this->singletonWrapper->doingStuff() . $this->injectedService->getItem();
    }
}