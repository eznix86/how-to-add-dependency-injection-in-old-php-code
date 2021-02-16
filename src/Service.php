<?php


namespace App;


class Service extends GoodPracticeDecorator
{
    /**
     * @var StrategyPattern
     */
    private $strategyPattern;

    public function __construct(
        OldCodeSingletonBadPractice $singletonWrapper,
        ServiceToBeInjectedService $injectedService,
        StrategyPattern $strategyPattern
    ) {
        parent::__construct($singletonWrapper, $injectedService);
        $this->strategyPattern = $strategyPattern;
    }

    public function displayStuff()
    {
        echo $this->doStuffAsBadSingletonPractice();
        echo $this->strategyPattern->handle("A");
    }
}