<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    use HasFactory;

    static public array $experience = ['entry', 'intermediate', 'senior'];
    static public array $categories = ['IT', 'HR', 'Finance', 'Sales', 'Marketing'];
}
