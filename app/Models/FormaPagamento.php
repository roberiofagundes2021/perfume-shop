<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FormaPagamento extends Model
{
    use HasFactory;
    protected $table="forma_pagamentos";
    protected $guarded = [];


    public function venda(){
        return $this->hasOne(Venda::class, 'venda_id','id');
    }
}
