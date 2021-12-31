<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NavModel extends Model
{
    use HasFactory;
    protected $table = 'nav';
    protected $primaryKey = 'id';
    protected $fillable = [
        'fk_idparent',
        'es',
        'en',
        'url',
        'borrable'
    ];
}
