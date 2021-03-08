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
    public static function getService(string $user_id,string $api_key,string $action){
        $data = [
            "user_id" => $user_id,
            "api_key" => $api_key,
            "action" => $action,
        ];
        return view("smoservice::form",compact('data'));
    }
    public static function createOrder(string $user_id,string $api_key,string $action, string $service_id,string $count,string $url){
        $data = [
            "user_id" => $user_id,
            "api_key" => $api_key,
            "action" => $action,
            "service_id" => $service_id,
            "count" => $count,
            "url" => $url,
        ];
        return view("smoservice::form",compact('data'));
    }
    public static function checkOrder(int $user_id,string $api_key,string $action, int $order_id){
        $data = [
            "user_id" => $user_id,
            "api_key" => $api_key,
            "action" => $action,
            "order_id" => $order_id,
        ];
        return view("smoservice::form",compact('data'));
    }
}