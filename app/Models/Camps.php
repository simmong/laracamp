<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Softdeletes;

class Camps extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = ['title', 'price'];
}
