<?php
namespace App;

use Illuminate\Database\Eloquent\Model;

class About_content extends Model
{
    protected $table = 'about_content';
    protected $fillable = ['title_nl', 'title_en', 'abouttitle_nl', 'abouttitle_en', 'aboutcontent_nl', 'aboutcontent_en'];
}
