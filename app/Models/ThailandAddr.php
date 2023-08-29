<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ThailandAddr extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'Tambon',
        'District',
        'Province'
    ];
}
