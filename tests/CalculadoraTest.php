<?php

use PHPUnit\Framework\TestCase;
use App\Calculadora;

class CalculadoraTest extends TestCase {
    public function testSumar() {
        $calculadora = new Calculadora();
        $resultado = $calculadora->sumar(5, 3);
        $this->assertEquals(8, $resultado);
    }

    public function testRestar() {
        $calculadora = new Calculadora();
        $resultado = $calculadora->restar(5, 3);
        $this->assertEquals(2, $resultado);
    }

    public function testMultiplicar() {
        $calculadora = new Calculadora();
        $resultado = $calculadora->multiplicar(5, 3);
        $this->assertEquals(15, $resultado);
    }

    public function testDividir() {
        $calculadora = new Calculadora();
        $resultado = $calculadora->dividir(6, 3);
        $this->assertEquals(2, $resultado);
    }

    public function testDividirPorCero() {
        $this->expectException(InvalidArgumentException::class);

        $calculadora = new Calculadora();
        $calculadora->dividir(6, 0);
    }
}
