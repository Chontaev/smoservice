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
        $this->user_id = 248049;
        $this->api_key = '880044EDD804B499CFED3CF611E23904';
    } 
    public function get_balance(){
        return Smoservice::getBalance(248049,'880044EDD804B499CFED3CF611E23904',"balance");
    } 
    public function get_services(){
        return Smoservice::getService(248049,'880044EDD804B499CFED3CF611E23904',"services");
    }
    public function create_order(){
        return Smoservice::createOrder(248049,'880044EDD804B499CFED3CF611E23904',"create_order",807,3500,'	https://www.youtube.com/user/smoserviceru');
    }
    public function check_order(){
        return Smoservice::checkOrder(248049,'880044EDD804B499CFED3CF611E23904',"check_order",17);
    }

}
