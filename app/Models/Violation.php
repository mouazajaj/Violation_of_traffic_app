<?php

namespace App\Models;

use App\Models\Car;
use App\Enums\TypesEnum;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Violation extends Model
{
    use HasFactory;
   
    protected $fillable = ['User_id','Car_Number','type','price','location'];
    protected $casts = [
        'type' => TypesEnum::class,];
    
    public function Car()
    {
        return $this->belongsTo(Car::class);
    }

    public function User()
    {
        return $this->belongsTo(User::class);
    }
}
