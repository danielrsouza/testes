<?php

require("Carro.php");


class montagemDoCarroTest extends PHPUnit\Framework\TestCase
{
    public function testeCV(){
        $carro = new Carro();
        $carro->setCV(200);
        $this->assertEquals(130, $carro->getCV());
    }
    public function testePainel(){
        $carro = new Carro();
        $carro->setPainel("Analógico");
        $this->assertEquals("Digital", $carro->getPainel());
    }
    public function testePecas(){
        $carro = new Carro();
        $carro->setPecas("Brasileiras");
        $this->assertEquals("Importadas", $carro->getPecas());
    }
    public function testeMylink(){
        $carro = new Carro();
        $carro->setMylink("não");
        $this->assertEquals("sim", $carro->getMylink());
    }
    
}