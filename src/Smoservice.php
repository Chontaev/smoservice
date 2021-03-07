<?php
namespace Smoservice;

class SMO{
    public static function getBalance(int $user_id,string $api_key,float $balance){
        $data = [
            "user_id" => $user_id,
            "api_key" => $api_key,
            "action" => $balance,
        ];
        return view("smoservice::form",compact('data'));
    }
    public static function getService(int $user_id,string $api_key,float $balance){
        $data = [
            "user_id" => $user_id,
            "api_key" => $api_key,
            "action" => $services,
        ];
        return view("smoservice::form",compact('data'));
    }
    public static function createOrder(int $user_id,string $api_key,float $balance, int $service_id, $count){
        $data = [
            "user_id" => $user_id,
            "api_key" => $api_key,
            "action" => $services,
            "service_id" => $service_id,
        ];
        return view("smoservice::form",compact('data'));
    }
}