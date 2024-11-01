<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Teacher extends Model
{
    use SoftDeletes;

    protected $table = 'teachers';
    protected $fillable = ['name','institution','email','password','created_at','updated_at','deleted_at'];

    public function classes()
    {
        return $this->hasMany(Classes::class, 'teacher_id');
    }
}
