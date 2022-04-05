<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrdersItens extends Model
{
    use HasFactory;

    public $table = 'orders_itens';
    public $fillable = ['id','order_id','product_id','qtd'];

    public function products(){
        return $this->hasMany(Products::class, 'id', 'product_id');
    }
}
