<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Compra extends Model
{
    //
    protected $fillable = ['*'];

    protected $tables = 'compras';

    public function produto(){
        return $this->belongsTo('App\Produto');
    }

    public function usuario(){
        return $this->belongTo('App\User');
    }
}
