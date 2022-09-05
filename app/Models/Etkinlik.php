<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Etkinlik extends Model
{
    use HasFactory;
    protected $table = "etkinliks";
    protected $guarded = [];
    protected $fillable=["title","content","price","etkinlik_image","created_at","updated_at"];
}
