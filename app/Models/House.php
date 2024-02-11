<?php

namespace App\Models; 

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Task;

class house extends Model
{
    use HasFactory;

    protected $fillable = ['house_name','description'];
 
    public function tasks()
    { 
        return $this->hasMany(Task::class);
    }
}
