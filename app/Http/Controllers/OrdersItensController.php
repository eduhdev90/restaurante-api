<?php

namespace App\Http\Controllers;

use App\Models\OrdersItens;
use Exception;
use Illuminate\Http\Request;

class OrdersItensController extends Controller
{

    public function create(Request $request, OrdersItens $ordersItens)
    {
        return $ordersItens::create($request->all());
    }

    public function createLot(Request $request, OrdersItens $ordersItens)
    {
        $itens = $request->all();
        foreach($itens as $i){
            try{
                $it = $i;
                $ordersItens::create($i);
            }catch(Exception $e){
                return  2;
            }
        }
        return  1;
    }
}
