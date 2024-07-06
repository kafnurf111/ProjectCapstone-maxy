<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Discussions extends Model
{
    use HasFactory;

    protected $fillable = [
        'topic_name', 'description', 'group_id'
    ];
}
