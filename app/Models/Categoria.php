<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    use HasFactory;

    protected $table="categorias";
    protected $guarded = [];

    public function produto(){
        return $this->benlogsTo(Produto::class, 'produto_id','id');
    }
}
