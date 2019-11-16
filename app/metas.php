<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class metas extends Model
{
    protected $table = "produtos";


    
    protected $fillable=['produto',
    'data',
    'marca',
    'quantidade',
    'valor',
    'datatempo',
    'peso',
    'codigo'
   ];
}
