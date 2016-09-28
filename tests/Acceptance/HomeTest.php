<?php

class HomeTest extends \PHPUnit_Extensions_Selenium2TestCase
{
    // list of browsers with per-browser config
    public static $browsers = array(
        array(
            'browserName' => 'chrome',
            'host' => 'localhost',
            'port' => 4444
        )
    );

    public function setUp()
    {
        $this->setBrowserUrl('http://homestead.app/');
    }

    public function testTitle()
    {
        $this->url('/');
        $this->assertEquals('Laravel', $this->title());
    }
}
