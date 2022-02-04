<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    use HasFactory;
    protected $table="clientes";
    protected $guarded = [];

    public function endereco(){
        return $this->hasOne(Cliente::class, 'cliente_id','id');
    }

    public function venda(){
        return $this->belongsTo(Venda::class, 'cliente_id','id');
    }
}
