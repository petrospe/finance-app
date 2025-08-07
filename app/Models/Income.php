<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Income extends Model
{
    protected $fillable = ['name', 'category', 'amount', 'date', 'notes'];
}
