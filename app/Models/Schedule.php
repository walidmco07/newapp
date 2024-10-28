<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Schedule extends Model
{
    protected $table = 'schedule_list'; // Optional if table name follows Laravel's conventions
    protected $fillable = ['start_datetime', 'end_datetime']; // Add other fields as needed
}
