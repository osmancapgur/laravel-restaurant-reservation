<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Firma extends Model
{
      use HasFactory;
      protected $table = "firmas";
      /*public function getAdiAttribute($value){
        return 'deneme '.$value;
     } */
      protected $fillable=["adi","slogani","konumu","saatleri","maili","telefonu","key","restorant_image","kapak_image","created_at","updated_at"];
}
