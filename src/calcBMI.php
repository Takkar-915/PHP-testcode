<?php

namespace App;

class CalcBMI
{
    protected float $body_weight;
    protected float $body_height;

    public function __construct()
    {
    }

    public function setHealthInformation($weight, $height)
    {
        $this->body_weight = $weight;
        $this->body_height = $height;
    }

    public function getHealthInformation()
    {
        return $this->body_weight;
    }

    public function calcBMI($weight, $height)
    {
        $bmi = round(($weight / ($height ** 2)) * (10 ** 4), 2);
        return $bmi;
    }

    public function healthChecker($bmi)
    {
        if ($bmi < 18.5) {
            return "瘦せ型";
        } else if ($bmi >= 18.5 and $bmi < 25) {
            return "適性体重";
        } else {
            return "肥満";
        }
    }
}
