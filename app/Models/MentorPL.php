<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MentorPL extends Model
{
    use HasFactory;
    protected $table = 'RKD_MentorPL';
    protected $fillable =['NoStaf', 'RKD01_Nomatrik', 'KodSesi_Sem'];        
    // protected $primaryKey = 'RKD01_Nomatrik';
    // public $incrementing = false;


}
