<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    use HasFactory;

    public $timestamps = false;
    protected $table = 'ARM_Lokasi';
    protected $fillable =['Kod','NamaLokasi','CawKod'];
}