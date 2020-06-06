<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Newsblog_content extends Model
{
    protected $table = 'newsblog_content';
    protected $fillable = ['posttitle_nl', 'posttitle_en', 'postcontent_nl', 'postcontent_en', 'postdate'];
}
    