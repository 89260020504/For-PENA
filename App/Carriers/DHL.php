<?php
namespace Pena\App\Carriers;
/**
 * Created by IntelliJ IDEA.
 * User: paata
 * Date: 23.03.2022
 * Time: 18:54
 */

use Pena\App\CarrierInterface;

class DHL implements  CarrierInterface
{
    private $tariff = 100;
    private $weight;

    public function __construct($weight)
    {
        $this->weight = $weight;
    }

    public function getDeliveryCost()
    {
        return $this->tariff *  $this->weight ;
    }
}