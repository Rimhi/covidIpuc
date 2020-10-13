<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Persona extends Model
{
    protected $fillable = [
        'name', 'lastname' ,'email', 'password','number_phone','number_id','tipo_documento','edad','direccion','cargo','eps','arl','nombre_contacto','numero_contacto'
    ];
    public function ingresos(){
        return $this->hasMany(Ingreso::class);
    }
}
