<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mentor extends Model
{
    use HasFactory;

    public $timestamps = false;
    protected $table = 'RKD_Mentor';
    protected $fillable =['NoStaf','Keaktifan','Kuota'];
}
