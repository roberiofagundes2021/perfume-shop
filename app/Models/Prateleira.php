<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Prateleira extends Model
{
    use HasFactory;
    protected $table="prateleiras";
    protected $guarded = [];

    public function produto(){
        return $this->belongsTo(Produto::class, 'produto_id','id');
    }
}
