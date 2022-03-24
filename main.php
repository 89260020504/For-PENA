<?php
namespace Pena;

use Pena\App\CarrierInterface;
use Pena\App\Carriers\DHL;
use Pena\App\Carriers\RussianPost;

require __DIR__ .'/vendor/autoload.php';

function getPrice(CarrierInterface $carrier){
  return  get_class($carrier) . " Цена: " . $carrier->getDeliveryCost();
}

//Проверка
echo getPrice(new DHL(20));
echo "\n";
echo getPrice(new RussianPost(8));
echo "\n";