<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContatoCliente extends Model
{
    use HasFactory;

    protected $table="contato_clientes";
    protected $guarded = [];

    public function cliente(){
        return $this->hasOne(Venda::class, 'cliente_id','id');
    }
}
