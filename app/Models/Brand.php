<?php

namespace App\Models;

use App\Models\Car;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    use HasFactory;
        protected $fillable = ['name','image','description'];

     public function cars(){

        return $this->hasMany(Car::class);
    }
}
