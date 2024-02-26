<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Http\Controllers\Caminhoscontroller;

class Postes extends Model
{
    use HasFactory;

    protected  $casts=(['oferta'=>'array']);

    protected $guarded=[];

}
