<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;

class Note extends Model
{
    use HasFactory;

    protected $fillable = [
        'date',     // auto-filled current date
        'title',    // user input
        'note',     // user input (optional)
    ];

    // Optional: If you want to disable timestamps
    // public $timestamps = false;
}
