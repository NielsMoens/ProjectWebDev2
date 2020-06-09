<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Newsletter_data extends Model
{
    protected $table = 'newsletter_content';
    protected $fillable = ['email'];
}
