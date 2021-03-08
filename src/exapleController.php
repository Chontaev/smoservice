<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Smoservice\Smoservice;
class KasaController extends Controller
{
    public $data;
    public $user_id;
    public $api_key;
    public $action;
    public $service_id;
    public $order_id;
    public $count;
    public $url;

    public function __construct(){
        $this->user_id      =   248049;
        $this->api_key      =  '880044EDD804B499CFED3CF611E23904';
        $this->balance      =  'balance';
        $this->services     =  'services';
        $this->create_order =  'create_order';
        $this->service_id   =   807;
        $this->count        =   4000;
        $this->url          =  'https://www.youtube.com/user/smoserviceru';
        $this->check_order  =  'check_order';
        $this->order_id     =   17;
    } 
    public function get_balance(){
        $data = [
            "user_id" => $this->user_id,
            "api_key" => $this->api_key,
            "action"  => $this->balance,
        ];
        return Smoservice::getBalance($data);
    } 
    public function get_services(){
        $data = [
            "user_id" => $this->user_id,
            "api_key" => $this->api_key,
            "action"  => $this->services,
        ];
        return Smoservice::getService($data);
    }
    public function create_order(){
        $data = [
            "user_id"     => $this->user_id,
            "api_key"     => $this->api_key,
            "action"      => $this->create_order,
            "service_id"  => $this->service_id,
            "count"       => $this->count,
            "url"         => $this->url,
        ];
        return Smoservice::createOrder($data);
    }
    public function check_order(){
        $data = [
            "user_id"     => $this->user_id,
            "api_key"     => $this->api_key,
            "action"      => $this->create_order,
            "order_id"  => $this->order_id,
        ];
        return Smoservice::checkOrder($data);
    }

}
