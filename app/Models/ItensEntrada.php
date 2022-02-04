<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ItensEntrada extends Model
{
    use HasFactory;
    protected $table="item_entradas";
    protected $guarded = [];

    public function entrada(){
        return $this->hasOne(Entrada::class, 'entrada_id','id');
    }

    public function produto(){
        return $this->belonsTo(Produto::class, 'produto_id','id');
    }
}
