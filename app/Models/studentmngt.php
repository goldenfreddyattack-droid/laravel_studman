<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class studentmngt extends Model
{
    Use HasFactory;
    protected $table = '3A_tbl';
    protected $primaryKey = 'id';

    protected $fillable = [
        'fname',
        'lname',
        'mname',
        'add',
        'dob'
    ];
}
