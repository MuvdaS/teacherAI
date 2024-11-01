<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Subject extends Model
{
    use SoftDeletes;

    protected $table = 'subject';
    protected $fillable = ['name','created_at','updated_at','deleted_at'];

    public function tasks()
    {
        return $this->hasMany(Task::class, 'subject_id');
    }

    public function classes()
    {
        return $this->belongsTo(Classes::class);
    }
}
