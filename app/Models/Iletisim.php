<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Iletisim extends Model
{
    use HasFactory;
    protected $table = "iletisims";
    protected $guarded = [];
    protected $fillable=["name","email","subject","message","created_at","updated_at"];
}
