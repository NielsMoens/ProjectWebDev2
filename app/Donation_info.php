<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Donation_info extends Model
{
    protected $table = 'donation_info';
    protected $fillable = [ 'donatorname', 'donatoremail', 'donatoramount', 'donatormessage'];

}
