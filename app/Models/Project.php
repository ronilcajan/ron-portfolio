<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Project extends Model
{
    use HasFactory;

    protected $table = 'projects';

    protected $fillable = [
        'title',
        'description',
        'skills',
        'cover_photo',
        'working',
        'date_started',
        'date_ended',
    ];


    public function project_images(): HasMany
    {
        return $this->hasMany(ProjectImages::class);
    }
}