<?php

namespace App\Models;
use App\Models\Brand;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    
    use HasFactory;
    protected $fillable = ['name','image','color','model','brand_id'];

    // public  function brand(){
    //         return $this->belongsTo(Brand::class,'brand_id');
    // }
}
