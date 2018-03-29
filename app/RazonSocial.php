<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RazonSocial extends Model
{

	protected $fillable = ['numero_ruc', 'empresa_id', 'razon_social'];

}