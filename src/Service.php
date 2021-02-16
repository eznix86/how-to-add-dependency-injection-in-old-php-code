<?php


namespace App;


class Service extends GoodPracticeDecorator
{
    public function displayStuff()
    {
        echo $this->doStuffAsBadSingletonPractice();
    }
}