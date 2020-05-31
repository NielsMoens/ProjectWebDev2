<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Donate_content extends Model
{
    protected $table = 'donate_content';
    protected $fillable = ['title_nl', 'title_en', 'subtitle_nl', 'subtitle_en', 'content_nl', 'content_en', 'featuredtitle_nl', 'featuredtitle_en', 'donatorname', 'donationamount'];
}
