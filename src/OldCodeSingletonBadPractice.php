<?php


namespace App;


class OldCodeSingletonBadPractice
{
    /**
     * @var self
     */
    private static $instance = null;

    /**
     * @return OldCodeSingletonBadPractice
     */
    public static function getInstance()
    {
        if (static::$instance === null) {
            static::$instance = new static();
        }

        echo "\n\n FROM OldCodeSingletonBadPractice construct: \n doing bad stuff here idk why";

        return static::$instance;
    }

    public function doingStuff()
    {
        return "\n\n FROM OldCodeSingletonBadPractice: \n i do bad stuff in here from single. meh !\n";
    }

}