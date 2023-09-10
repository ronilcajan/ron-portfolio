<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class ProjectImages extends Model
{
    use HasFactory;

    protected $table = 'project_images';

    protected $fillable = ['images','project_id'];


    public function project(): BelongsTo
    {
        return $this->belongsTo(Projects::class);
    }
}