<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StoryModel extends Model
{
    use HasFactory;
    protected $table = 'story';
    protected $primaryKey = 'id';
    protected $fillable = [
        'name',
        'fname',
        'img',
        'rating',
        'descripcion',
        'language',
        'fk_idtype',
        'fk_iduser',
        'fk_category'
    ];
}
