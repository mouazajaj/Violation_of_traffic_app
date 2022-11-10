<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Violation_Type extends Model
{   use HasFactory;
    protected $table = 'types';
    protected $fillable = ['type','price'];
    public $timestamps = false;
}
