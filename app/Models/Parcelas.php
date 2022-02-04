<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Parcelas extends Model
{
    use HasFactory;
    protected $table="parcelas";
    protected $guarded = [];

    public function pagamento(){
        return $this->hasOne(pagamento::class, 'pagamento_id','id');
    }


}
