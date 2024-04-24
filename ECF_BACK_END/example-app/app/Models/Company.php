<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'localisation',
    ];

    // Relation avec les opportunités de stage
    public function internshipOpportunities()
    {
        return $this->hasMany(InternshipOpportunity::class);
    }
}
