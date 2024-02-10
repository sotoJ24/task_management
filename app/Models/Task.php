<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Priority;
use App\Models\House;

class task extends Model
{
    use HasFactory;
    protected $fillable = ['task_name','priority_id','house_id','date_task'];

    public function priority()
    {
        return $this->belongsTo(Priority::class);
    }

    public function house()
    {
        return $this->belongsTo(House::class);
    }
}

