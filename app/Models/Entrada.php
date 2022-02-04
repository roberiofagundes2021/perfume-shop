<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Entrada extends Model
{
    use HasFactory;
    protected $table="entradas";
    protected $guarded = [];

    public function fornecedor(){
        return $this->hasOne(fornecedor::class, 'fornecedor_id','id');
    }

}


