<?php

use PHPUnit\Framework\TestCase;

include './src/Calculadora.php';
final class CalculadoraTest extends TestCase
{
    public function testSuma()
    {
        $calc = new Calculadora(5, 4);
        $this->assertEquals(9, $calc->suma());
    }
    public function testResta()
    {
        $calc = new Calculadora(7, 2);
        $this->assertEquals(5, $calc->resta());
    }

    public function testMultiplicacion()
    {
        $calc = new Calculadora(5, 2);
        $this->assertEquals(10, $calc->multiplicacion());
    }

    public function testDivision()
    {
        $calc = new Calculadora(4, 2);
        $this->assertEquals(2, $calc->division());
    }
}
