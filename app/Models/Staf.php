<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Staf extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = 'SMP_Staf';
    protected $fillable =['NoStaf','Nama','NoKP', 'Jawatan', 'Jabatan', 'Email', 'Status', 'CawKod'];
}
