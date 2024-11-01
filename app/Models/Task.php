<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Task extends Model
{
    use SoftDeletes;

    protected $table = 'task';
    protected $fillable = ['response','created_at','updated_at','deleted_at'];

    public function subjects()
    {
        return $this->belongsTo(Subject::class);
    }
}
