<?php
/**
 * Created by IntelliJ IDEA.
 * User: paata
 * Date: 23.03.2022
 * Time: 18:43
 */
namespace Pena\App;
interface CarrierInterface
{
    //сюда можно прописать стандартные условия для службы доставки
    public function getDeliveryCost();

}