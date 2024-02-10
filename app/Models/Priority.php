<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Task;

class priority extends Model
{
    use HasFactory;
    protected $fillable = ['priority_name'];

    public function tasks()
    {
        return $this->hasMany(Task::class);
    }
}
