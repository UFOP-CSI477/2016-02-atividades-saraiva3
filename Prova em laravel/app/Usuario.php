<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Usuario extends Authenticatable
{
    use Notifiable;
    public $timestamps = false;
    protected $rememberTokenName = false;
    protected $table = 'atletas';

    public function registro(){
        return $this->hasMany('App\Registro');
    }
}
