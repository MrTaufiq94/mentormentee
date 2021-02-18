<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;
    protected $table = 'RKD01_Peribadi';
    protected $fillable =['RKD01_ID', 'RKD01_Nama', 'RKD01_Nomatrik', 'RKD01_Caw', 'RKD01_Program', 'RKD01_Jantina', 'RKD01_TelBimbit', 'RKD01_EmailKptm', 'StatusPL_Kod', 'RKD01_Status'];        
    protected $primaryKey = 'RKD01_Nomatrik';
    public $incrementing = false;
    
    
    // public function semester()
    // {
    //     return $this->hasMany(StudentSemester::class, 'RKD01_Nomatrik','RKD01_Nomatrik');
    // }
    // relationship with table mentor - 1 mentor belongs to many mentee
    public function mentor()
    {
        return $this->belongsTo('App\Models\Mentor');
        // note: we can also inlcude Mobile model like: 'App\Mobile'
    }

    // public function mentorPL()
    // {
    //     return $this->hasOne(MentorPL::class, 'RKD01_Nomatrik', 'RKD01_Nomatrik');
    //     // note: we can also inlcude Mobile model like: 'App\Mobile'
    // }

    public function mentorPL()
    {
        return $this->belongsTo(MentorPL::class, 'RKD01_Nomatrik','RKD01_Nomatrik');
        // note: we can also inlcude Mobile model like: 'App\Mobile'
    }

}
