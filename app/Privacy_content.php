<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Privacy_content extends Model
{
    protected $table = 'privacy_content';
    protected $fillable = ['title_nl', 'title_en', 'subtitle_nl', 'subtitle_en', 'content_nl', 'content_en'];
}
