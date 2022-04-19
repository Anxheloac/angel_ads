<?php

namespace Anxheloac\AngelAds\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sponsor extends Model
{
    use HasFactory;

    /**
     * 
     */
    protected $table = 'angel_sponsors';

    // Disable Laravel's mass assignment protection
    protected $guarded = [];
}