<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class patients extends Model
{
    use HasFactory;
    protected $table = 'patient';
    protected $fillable=['firstname','lastname','city','gender','age','email','contactno'];
}
