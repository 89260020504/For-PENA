<?php
namespace Pena\App\Carriers;
/**
 * Created by IntelliJ IDEA.
 * User: paata
 * Date: 23.03.2022
 * Time: 18:54
 */
use  \Pena\App\CarrierInterface;

class RussianPost implements  CarrierInterface
{
    private $tariffs = array(
        11 => 1000, 10 => 100
    );

    private $weight;

    public function __construct($weight)
    {
        $this->weight = $weight;
    }

    public function getDeliveryCost()
    {
        If(count($this->tariffs)>1) {
            ksort($this->tariffs);
            foreach ($this->tariffs as $tariffWeight => $tariff) {
                if ($this->weight <= $tariffWeight) {
                    return $tariff * $this->weight;
                } else {
                    return end($this->tariffs) * $this->weight;
                }
            }
        } else {
            return $this->tariffs[0] * $this->weight;
        }
    }
}