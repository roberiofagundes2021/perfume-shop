<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ItensVendas extends Model
{
    use HasFactory;
    protected $table="item_vendas";
    protected $guarded = [];

    public function venda(){
        return $this->hasOne(Venda::class, 'venda_id','id');
    }

    public function produto(){
        return $this->hasOne(Produto::class, 'produto_id','id');
    }
}
