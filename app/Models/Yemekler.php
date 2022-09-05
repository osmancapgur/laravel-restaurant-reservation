<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Yemekler extends Model
{
    use HasFactory;
    protected $table = "yemeklers";
    protected $guarded = [];
    protected $fillable=["adi","turu","icerik","fiyati","yemek_image","created_at","updated_at"];
  
}
