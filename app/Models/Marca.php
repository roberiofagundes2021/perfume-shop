<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Marca extends Model
{
    use HasFactory;
    protected $table="marcas";
    protected $guarded = [];

    public function produto(){
        return $this->belonsTo(Produto::class, 'produto_id','id');
    }
}
