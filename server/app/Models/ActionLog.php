<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ActionLog extends Model
{
    protected $table = 'action_logs';

    public $timestamps = true;

    protected $guarded = array('id');

    protected $fillable = [
        'user_id',
        'action_template_id',
        'acted_ymd',
        'updated_at',
    ];
}
