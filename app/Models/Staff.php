<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Staff extends Model
{
    use HasFactory;

    public $timestamps = false;
    protected $table = 'SMP_Staf';
    protected $fillable =['NoStaf','Nama','NoKP', 'Jawatan', 'Jabatan', 'Email', 'Status', 'CawKod'];
    protected $primaryKey = 'NoStaf';
    public $incrementing = false;

    public function mentor()
    {
        return $this->hasOne('App\Models\Mentor', 'NoStaf');
        // note: we can also inlcude Mobile model like: 'App\Mobile'
    }
}
