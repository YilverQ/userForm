<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Attendance;

class User extends Model
{
    protected $table = 'users';

    protected $fillable = [
        'identification_card',
        'first_name', 'second_name',
        'first_lastname', 'second_lastname',
        'gender', 'birthdate',
        'organization', 'job_title',
        'email', 'phone',
    ];


    /*Relaciones*/
    public function attendances(){
        return $this->hasMany(Attendance::class);
    }
}
