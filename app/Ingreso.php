<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ingreso extends Model
{
    protected $fillable = [
        'temperatura_ingreso','user_id','persona_id', 'respuesta_1' ,'respuesta_2' ,'respuesta_3' ,'respuesta_4' ,'respuesta_5' ,'respuesta_6' ,'respuesta_7' ,'respuesta_8' ,'respuesta_9' ,'respuesta_10' ,'respuesta_11' ,'respuesta_12' ,
    ];
    public function user(){
    	return $this->belongsTo(User::class);
    }
    public function persona(){
    	return $this->belongsTo(Persona::class);
    }
}
