<?php
use PHPUnit\Framework\TestCase;
use MGsistemas\Lib\MGLibrary;


class MGLibraryTest extends TestCase
{
    public function testEstadosBrasileiros()
    {
        $estados = new MGLibrary();
        $result = $estados->estadosBrasileiros();
        var_dump($result);
        $this->assertEquals(0,0);
    }

}