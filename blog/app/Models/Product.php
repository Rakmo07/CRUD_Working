<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table='Product';
    protected $guarded =['id'];
    protected $fillable = ['id', 'name', 'status', 'cost'];
    public $timestamps = false;
}
