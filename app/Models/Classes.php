<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Classes extends Model
{
    use SoftDeletes;

    protected $table = 'class';
    protected $fillable = ['name','created_at','updated_at','deleted_at'];

    public function subjects()
    {
        return $this->hasMany(Subject::class, 'class_id');
    }

    public function teachers()
    {
        return $this->belongsTo(Teacher::class);
    }
}
