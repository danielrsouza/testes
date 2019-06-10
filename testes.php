<?php

require("Carro.php");


class montagemDoCarroTest extends PHPUnit\Framework\TestCase
{
    public function testeCor(){
        $carro = new Carro();
        $carro->setCor("Azul");
        $this->assertEquals("Azul", $carro->getCor());
    }
    public function testePneus(){
        $carro = new Carro();
        $carro->setPneus(5);
        $this->assertEquals(5, $carro->getPneus());
    }
    public function testeMotor(){
        $carro = new Carro();
        $carro->setMotor("AP");
        $this->assertEquals("AP", $carro->getMotor());
    }
    public function testeValor(){
        $carro = new Carro();
        $carro->setValor(50000);
        $this->assertEquals(50000, $carro->getValor());
    }
    
}