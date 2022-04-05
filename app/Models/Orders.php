<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Orders extends Model
{
    use HasFactory;

    public $table = 'orders';
    public $fillable = ['id','client_name','total','received','change','status'];

    public function itens(){
        return $this->hasMany(OrdersItens::class, 'order_id', 'id');
    }
}
