<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Registro extends Model{
    public $timestamps = false;
    protected $rememberTokenName = false;
    protected $fillable = ['atleta_id', 'evento_id', 'data', 'pago'];

    protected $hidden = ['id'];

    public function atleta(){
        return $this->belongsTo('App\Usuario');
    }

    public function evento(){
        return $this->belongsTo('App\Evento');
    }

}
