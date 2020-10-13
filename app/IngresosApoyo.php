<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class IngresosApoyo extends Model
{
    
    protected $fillable =['user_id','temperatura_ingreso','temperatura_salida','epp','sintomas'];
    public function user(){
    	return $this->belongsTo(User::class);
    }
}
