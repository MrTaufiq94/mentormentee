<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MentorPL extends Model
{
    use HasFactory;
    protected $table = 'RKD_MentorPL';
    protected $fillable =['NoStaf', 'RKD01_Nomatrik', 'KodSesi_Sem'];        
    protected $primaryKey = 'RKD01_Nomatrik';
    public $incrementing = false;

    public function mentor()
    {
        return $this->belongsTo('App\Models\Mentor', 'NoStaf','NoStaf');
        // note: we can also inlcude Mobile model like: 'App\Mobile'
    }

    // public function student()
    // {
    //     return $this->belongsTo(Student::class, 'RKD01_Nomatrik', 'RKD01_Nomatrik');
    //     // note: we can also inlcude Mobile model like: 'App\Mobile'
    // }

    public function student()
    {
        return $this->hasMany(Student::class, 'RKD01_Nomatrik', 'RKD01_Nomatrik');
        // note: we can also inlcude Mobile model like: 'App\Mobile'
    }


}
