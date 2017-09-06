<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Mpociot\Firebase\SyncsWithFirebase;

class Produto extends Model
{

    protected $fillable = ['id', 'descricao', 'material', 'medidas', 'origem', 'peso', 'precaucao', 'valor'];
    protected $visible = ['id', 'descricao', 'material', 'medidas', 'origem'];
    use SyncsWithFirebase;
}
