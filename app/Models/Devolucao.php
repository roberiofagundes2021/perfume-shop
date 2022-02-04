<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Devolucao extends Model
{
    use HasFactory;
    protected $table="devolucaos";
    protected $guarded = [];

    public function produto(){
        return $this->belonsTo(Produto::class, 'produto_id','id');
    }
}
