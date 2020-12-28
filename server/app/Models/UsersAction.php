<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UsersAction extends Model
{
    protected $table = 'users_action';

    public $timestamps = true;

    protected $guarded = array('id');

    protected $fillable = [
        'user_id',
        'action_template_id',
        'updated_at',
    ];
}
