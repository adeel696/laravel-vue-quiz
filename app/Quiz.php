<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Quiz extends Model
{
    protected $fillable = ['Question', 'Option1', 'Option2', 'Option3', 'Option4', 'Answer'];  
}
