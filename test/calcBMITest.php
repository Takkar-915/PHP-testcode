<?php

use PHPUnit\Framework\TestCase;
use App\CalcBMI;

class CalcBMITest extends TestCase
{
    protected $patient;
    protected function setUp(): void
    {
        $this->patient = new CalcBMI();
    }

    public function testInstanceOf()
    {
        $this->assertInstanceOf(CalcBMI::class, $this->patient);
    }

    // BMIの算出
    public function testCalcBMI()
    {
        $this->assertEquals(19.47, $this->patient->calcBMI(53, 165));
    }


    // BMIから健康状態を判定する郡

    // 痩せ型判定のテスト
    public function testSkinneyJudge()
    {
        $this->assertEquals("瘦せ型", $this->patient->healthChecker(15));
    }

    // 適性体重判定のテスト
    public function testAptitudeJudge()
    {
        $this->assertEquals("適性体重", $this->patient->healthChecker(20));
    }

    // 肥満判定のテスト
    public function testFatJudge()
    {
        $this->assertEquals("肥満", $this->patient->healthChecker(30));
    }
}
