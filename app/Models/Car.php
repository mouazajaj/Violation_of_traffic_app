<?php

namespace App\Models;

use App\Models\Violation;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Car extends Model
{
    use HasFactory;
    protected $primaryKey = 'Car_Number';
    public $incrementing = false;
    protected $keyType = 'string';
    protected $table = 'cars';
    protected $fillable = [
        'Model',
        'Car_Number',
        'Financial_fees',
        'User_id'
    ];
    protected $dates = ['Financial_fees'];
    public function Violations()
    {
        return $this->hasMany(Violation::class);
    }


    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
