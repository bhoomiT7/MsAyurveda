<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class patient_analysis extends Model
{
    use HasFactory;

    protected $fillable=['bodyframe','typeofhair','colorofhair','skin','complexion','bodyweight','nails','sizeandcoloroftheteeth','paceofperformingwork','mentalactivity','memory','sleeppattern','weatherconditions','reactionsunderadversesituation','mood','eatinghabit','hunger','bodytemperature','joints','nature','bodyenergy','qualityofvoice','dreams','socialrelations','wealth','bowelmovement','communicationskill'];

    protected $table = 'patient_analysis';
}
