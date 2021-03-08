<?php
namespace Smoservice;

class Smoservice{
    public static function getBalance(int $user_id,string $api_key,string $action){
        $data = [
            "user_id" => $user_id,
            "api_key" => $api_key,
            "action" => $action,
        ];
        return view("smoservice::form",compact('data'));
    }
    public static function getService(int $user_id,string $api_key,float $action){
        $data = [
            "user_id" => $user_id,
            "api_key" => $api_key,
            "action" => $action,
        ];
        return view("Smoservice::form",compact('data'));
    }
    public static function createOrder(int $user_id,string $api_key,float $action, int $service_id,int $count,string $url){
        $data = [
            "user_id" => $user_id,
            "api_key" => $api_key,
            "action" => $services,
            "service_id" => $service_id,
            "count" => $count,
            "url" => $url,
        ];
        return view("Smoservice::form",compact('data'));
    }
    public static function checkOrder(int $user_id,string $api_key,float $action, int $service_id,int $count,string $url){
        $data = [
            "user_id" => $user_id,
            "api_key" => $api_key,
            "action" => $services,
            "order_id" => $order_id,
        ];
        return view("Smoservice::form",compact('data'));
    }
}