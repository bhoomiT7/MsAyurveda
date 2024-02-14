<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class client_data extends Model
{
    use HasFactory;

    protected $table = 'client_analysis';

    protected $fillable=['firstname','lastname','city','gender','age','email','contactno','bodyframe','typeofhair','colorofhair','skin','complexion','bodyweight','nails','sizeandcoloroftheteeth','paceofperformingwork','mentalactivity','memory','sleeppattern','weatherconditions','reactionsunderadversesituation','mood','eatinghabit','hunger','bodytemperature','joints','nature','bodyenergy','qualityofvoice','dreams','socialrelations','wealth','bowelmovement','communicationskill'];
}
