<?php
require_once 'Calc.php';
class CalcTest extends PHPUnit_Framework_TestCase
{
    protected $calcProp;

    protected function setUp()
    {
        $this->calcProp = new Calc();
    }

    protected function tearDown()
    {
        $this->calcProp = NULL;
    }


    public function testPropertyCalc()
    {
        $this->assertClassHasAttribute('num1', 'Calc');
        $this->assertClassHasAttribute('num2', 'Calc');
        $this->assertClassHasAttribute('ms', 'Calc');
    }

    /**
     * @dataProvider providerPlus
     */
    public function testPlus($a, $b, $c)
    {
        $this->calcProp->setNum1($a);
        $this->calcProp->setNum2($b);
        $this->assertEquals($c, $this->calcProp->plus());
    }

    public function providerPlus()
    {
        return [
            [3, 27, 30],
            [5, 5, 10],
            [6, 7, 13]
        ];
    }

    /**
     * @dataProvider providerMinus
     */
    public function testMinus($a, $b, $c)
    {
        $this->calcProp->setNum1($a);
        $this->calcProp->setNum2($b);
        $this->assertEquals($c, $this->calcProp->minus());
    }

    public function providerMinus()
    {
        return [
            [4, 2, 2],
            [7, 5, 2],
            [10, 5, 5]
        ];
    }

    /**
     * @dataProvider providerMultipl
     */
    public function testMultipl($a,$b,$c)
    {
        $this->calcProp->setNum1($a);
        $this->calcProp->setNum2($b);
        $this->assertEquals($c, $this->calcProp->multipl());
    }

    public function providerMultipl()
    {
        return [
            [5,5,25],
            [5,8,40]
        ];
    }

    /**
     * @dataProvider providerDevide
     */
    public function testDevide($a,$b,$c)
    {
        $this->calcProp->setNum1($a);
        $this->calcProp->setNum2($b);
        $this->assertEquals($c, $this->calcProp->devide());
    }

    public function providerDevide()
    {
        return [
            [8, 4, 2],
            [4, 2, 2]
        ];
    }

    /**
     * @dataProvider providerSqrt
     */
    public function testSqrt($a,$b)
    {
        $this->assertEquals($b, $this->calcProp->sqrt($a));
    }

    public function providerSqrt()
    {
        return [
            [4,2],
            [16,4]
        ];

    }

    /**
     * @dataProvider providerPercent
     */
    public function testPercent($a, $b, $c)
    {
        $this->calcProp->setNum1($a);
        $this->calcProp->setNum2($b);
        $this->assertEquals($c, $this->calcProp->percent());
    }

    public function providerPercent()
    {
        return [
            [10, 80, 800],
            [90, 10, 11.11111111111111]
        ];
    }
}