<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\ClassModel;

class Attendance extends Model
{
    protected $table = 'attendaces';

    protected $fillable = [
        'user_id',
        'class_id'
    ];

    /*Relaciones*/
    public function users(){
        return $this->belongsTo(User::class);
    }

    public function classes(){
        return $this->belongsTo(ClassModel::class);
    }
}