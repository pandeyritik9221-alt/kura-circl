<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Test extends Model
{
    use HasFactory;

    // Table name (optional if it follows Laravel convention 'tests')
    protected $table = 'tests';

    // Fields that can be mass-assigned
    protected $fillable = ['input_text'];
}