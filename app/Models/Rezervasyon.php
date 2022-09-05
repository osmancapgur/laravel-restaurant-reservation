<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rezervasyon extends Model
{
    use HasFactory;
    protected $table = "rezervasyons";
    protected $guarded = [];
    protected $fillable=["name","email","phone","date","time","visitors","message","created_at","updated_at"];
}
