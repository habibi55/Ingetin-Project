<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Category extends Model
{
    // use HasFactory;

    use SoftDeletes;

    public $table = 'category';

    protected $dates = [
        'updated_at',
        'created_at',
        'deleted_at',
    ];

    protected $fillable = [
        'task_id',
        'category',
        'updated_at',
        'created_at',
        'deleted_at',
    ];

    //Relations
    public function task()
    {
        return $this->belongsTo('App\Models\task', 'task_id', 'id');
    }
}
