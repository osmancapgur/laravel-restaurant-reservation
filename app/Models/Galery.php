<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Galery extends Model
{
    use HasFactory;
    protected $table = "galeries";
    protected $guarded = [];
    protected $fillable=["galeri_image","created_at","updated_at"];
}
