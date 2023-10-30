<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Project extends Model
{
    use HasFactory;

    public function project_type(): BelongsTo
    {
        return $this->belongsTo(ProjectType::class)->withDefault([
            'name' => 'Anonymous',
            'slug' => 'anonymous',
        ]);
    }

    public function country(): BelongsTo
    {
        return $this->belongsTo(Country::class)->withDefault([
            'name' => 'Anonymous',
            'slug' => 'anonymous',
        ]);
    }

    public function location(): BelongsTo
    {
        return $this->belongsTo(Location::class)->withDefault([
            'name' => 'Anonymous',
            'slug' => 'anonymous',
        ]);
    }

    public function area(): BelongsTo
    {
        return $this->belongsTo(Area::class)->withDefault([
            'name' => 'Anonymous',
            'slug' => 'anonymous',
        ]);
    }

    public function galleries(): HasMany
    {
        return $this->hasMany(Gallery::class);
    }

    public function creator(): BelongsTo
    {
        return $this->belongsTo(User::class, 'created_by');
    }

    public function updator(): BelongsTo
    {
        return $this->belongsTo(User::class, 'updated_by');
    }
}
