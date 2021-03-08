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
        return Smoservice::getBalance(
            $this->user_id, 
            $this->api_key, 
            $this->balance
        );
    } 
    public function get_services(){
        return Smoservice::getService(
            $this->user_id, 
            $this->api_key, 
            $this->services 
        );
    }
    public function create_order(){
        return Smoservice::createOrder(
            $this->user_id, 
            $this->api_key, 
            $this->create_order, 
            $this->service_id, 
            $this->count, 
            $this->url
        );
    }
    public function check_order(){
        return Smoservice::checkOrder(
            $this->user_id, 
            $this->api_key,
            $this->check_order, 
            $this->order_id
        );
    }

}
