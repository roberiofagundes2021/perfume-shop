<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    use HasFactory;
    protected $table="produtos";
    protected $guarded = [];

    public function marca(){
        return $this->belongsTo(Marca::class, 'marca_id','id');
    }

    public function categoria(){
        return $this->belongsTo(Categoria::class, 'categoria_id','id');
    }

    public function prateleira(){
        return $this->belongsTo(Prateleira::class, 'prateleira_id','id');
    }
}
