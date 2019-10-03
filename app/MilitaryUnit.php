<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MilitaryUnit extends Model
{
    protected $fillable = ['title', 'status', 'created_by', 'modified_by'];
}
