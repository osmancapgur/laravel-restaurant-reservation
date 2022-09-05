<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Turler extends Model
{
      use HasFactory;
      protected $table = "turlers";
      protected $guarded = [];
      protected $fillable=["title","created_at","updated_at"];

}
