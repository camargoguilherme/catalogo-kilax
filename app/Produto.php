<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Mpociot\Firebase\SyncsWithFirebase;

class Produto extends Model
{
    //use SyncsWithFirebase;
    protected $fillable = ['id', 'descricao', 'codbarra', 'material', 'medidas', 'origem', 'peso', 'precaucao', 'valor'];
    protected $visible = ['descricao', 'codbarra', 'material', 'medidas', 'origem'];

}
