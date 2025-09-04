<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Attendance;

class ClassModel extends Model
{
    protected $table = 'classes';

    protected $fillable = [
        'name',
        'description',
        'class_day',
        'start_time',
        'end_time',
    ];

    /*Relaciones*/
    public function attendances(){
        return $this->hasMany(Attendance::class);
    }
}
