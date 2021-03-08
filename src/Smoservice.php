<?php
namespace Smoservice;

class Smoservice{

    public static function getBalance(array $params){

        return view("smoservice::form",compact('params'));

    }

    public static function getService(array $params){

        return view("smoservice::form",compact('params'));

    }

    public static function createOrder(array $params){
       
        return view("smoservice::form",compact('params'));
    }
    
    public static function checkOrder(array $params){
        
        return view("smoservice::form",compact('params'));

    }
}