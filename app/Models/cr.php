<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class cr extends Model
{
    use HasFactory;
   protected $fillable=['id','ISNB','author',];
}
