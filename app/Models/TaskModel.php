<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TaskModel extends Model
{
    //
    protected $table = 'tasks';
    protected $fillable = [
        'id_task' => 'integer',
        'name' => 'string',
        'description' => 'string',
        'priority' => 'integer',
        'status' => 'integer',
        'created_at',
        'updated_at'
    ];
    protected $casts = [
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
    ];
    public $timestamps = true;
}
