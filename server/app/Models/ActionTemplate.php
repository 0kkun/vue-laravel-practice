<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ActionTemplate extends Model
{
    protected $table = 'action_templates';

    protected $fillable = [
        'content',
        'updated_at',
    ];
}
