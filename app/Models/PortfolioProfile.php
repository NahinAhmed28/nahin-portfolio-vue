<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PortfolioProfile extends Model
{
    use HasFactory;

    protected $fillable = [
        'full_name',
        'email',
        'phone',
        'address',
        'hero_title',
        'hero_roles',
        'about_summary',
        'services',
    ];

    protected $casts = [
        'hero_roles' => 'array',
        'services' => 'array',
    ];
}
