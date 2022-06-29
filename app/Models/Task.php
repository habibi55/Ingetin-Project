<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Task extends Model
{
    // use HasFactory;
    use SoftDeletes;

    public $table = 'task';

    protected $dates = [
        'updated_at',
        'created_at',
        'deleted_at',
    ];

    protected $fillable = [
        'users_id',
        'title',
        'status',
        'photo',
        'description',
        'updated_at',
        'created_at',
        'deleted_at',
    ];

    //Relations
    public function user()
    {
        return $this->belongsTo('App\Models\User', 'users_id', 'id');
    }

    public function category()
    {
        return $this->hasMany('App\Models\Category', 'task_id',);
    }
}
