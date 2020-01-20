<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Chapters extends Model
{
    protected $fillable = [
        'chapter_name','chapter_address','chapter_phone','chapter_email','chapter_abbreviation','president_name','president_email','president_phone'
    ];
    protected $table_name='Chapters';
}
