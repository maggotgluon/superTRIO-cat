<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class stock extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'total_stock',
        'stock_adj',
    ];

    public function vet()
    {
        return $this->hasMany(Vet::class);
    }
}