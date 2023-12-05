<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model 
{

    protected $table = 'articles';
    public $timestamps = true;

    use HasFactory;
    protected $fillable = [
        'Name',
        'Summary',
        'Type',
        'Note',
        // to be continued if there are more fields
    ];
}