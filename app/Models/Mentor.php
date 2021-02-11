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
    protected $primaryKey = 'NoStaf';
    public $incrementing = false;

    public function staff()
    {
        return $this->belongsTo('App\Models\Staff', 'NoStaf');
        // note: we can also inlcude Mobile model like: 'App\Mobile'
    }
// relation with table mentee
    public function getStudent()
    {
        
        return $this->hasMany('App\Models\MentorPL', 'NoStaf');
        // note: we can also inlcude Mobile model like: 'App\Mobile'
    }


}
