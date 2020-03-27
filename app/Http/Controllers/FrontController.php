<?php

namespace App\Http\Controllers;

use App\Api;
use App\Car;
use DaveJamesMiller\Breadcrumbs\Facades\Breadcrumbs;
use Illuminate\Http\Request;

class FrontController extends Controller
{

    public function index()
    {
        if($e_id = request()->cookie('engine_id')){
            $s_car = new Car($e_id);
        }

        $data = [
            'page_title' => 'Каталог автозапчастей',
            'breadcrumbs' => Breadcrumbs::render(),
            's_car' => $s_car ?? null,
            //'items' => (new ApiController())->getData(new Request(['method'=>'getmakes'])),
        ];
        return view('index', $data);
    }



}
