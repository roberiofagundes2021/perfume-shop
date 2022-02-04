<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EnderecoCliente extends Model
{
    use HasFactory;
    protected $table="endereco_cliente";
    protected $guarded = [];

    public function cliente(){
        return $this->hasOne(Cliente::class, 'cliente_id','id');
    }
}
