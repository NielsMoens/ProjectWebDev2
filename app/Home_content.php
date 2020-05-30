<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Home_content extends Model
{
    protected $table = 'home_content';
    protected $fillable = ['title_nl', 'title_en', 'maininfo_nl', 'maininfo_en'];
}
