<?php

use TSIHosting\Pangeo\Pangeo;

class PangeoTest extends PHPUnit_Framework_TestCase 
{
    public function testModuleSetup()  
    {  
        $pangeo = new Pangeo;  
        $this->assertTrue($pangeo->ready());  
    }
}  