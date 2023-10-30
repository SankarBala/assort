<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Gallery extends Model
{
    use HasFactory;

    protected $fillable = ['project_id', 'image', 'title', 'link', 'type'];

    public function project(): BelongsTo
    {
        return $this->belongsTo(Project::class);
    }
}
