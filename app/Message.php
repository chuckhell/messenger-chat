<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    protected $fillable = ['from_id', 'to_id', 'content'];
    protected $casts = ['written_by_me' => 'Boolean'];
}
